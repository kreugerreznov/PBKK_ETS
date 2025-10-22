<?php

namespace App\Http\Controllers;

use App\Models\Cat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;


class CatController extends Controller
{
    public function index()
    {
        $cats = Cat::latest()->paginate(6);
        return view('cats.index', compact('cats'));
    }

    public function create()
    {
        return view('cats.create');
    }

   public function store(Request $request)
{
    $validated = $request->validate([
        'name' => 'nullable|string|max:255',
        'description' => 'required',
        'rating' => 'required|integer|min:1|max:5',
        'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
    ]);

    if ($request->hasFile('image')) {
        $path = $request->file('image')->store('cats', 'public');
        $validated['image'] = $path;
        Log::info('Image stored at: '.$path);
    }

    Cat::create($validated);

    return redirect()->route('cats.index')->with('success', 'Cat review added successfully!');
}


    public function show(Cat $cat)
    {
        return view('cats.show', compact('cat'));
    }

    public function edit(Cat $cat)
    {
        return view('cats.edit', compact('cat'));
    }

    public function update(Request $request, Cat $cat)
    {
        $validated = $request->validate([
            'name' => 'nullable|string|max:255',
            'description' => 'required',
            'rating' => 'required|integer|min:1|max:5',
            'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        if ($request->hasFile('image')) {
            $validated['image'] = $request->file('image')->store('cats', 'public');
        }

        $cat->update($validated);

        return redirect()->route('cats.index')->with('success', 'Cat review updated!');
    }

    public function destroy(Cat $cat)
    {
        $cat->delete();
        return redirect()->route('cats.index')->with('success', 'Cat review deleted!');
    }
}
