<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cat Review ᓚᘏᗢ</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background-color: #fdf6ec; 
            color: #4b2e05; 
            font-family: "Poppins", sans-serif;
        }

        nav.navbar {
            background-color: #a67b5b !important; 
        }

        nav.navbar a.nav-link,
        nav.navbar .navbar-brand {
            color: #fff !important;
        }

        .card {
            background-color: #fffaf3;
            border: 1px solid #e3c9a8;
        }

        .btn-success {
            background-color: #c49a6c;
            border-color: #b3875b;
        }

        .btn-success:hover {
            background-color: #a67b5b;
            border-color: #916646;
        }

        .form-control {
            background-color: #fffaf3;
            border: 1px solid #e3c9a8;
        }

        footer {
            background-color: #a67b5b;
            color: #fff;
            padding: 10px 0;
            text-align: center;
            margin-top: 30px;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand fw-bold" href="{{ route('cats.index') }}">Cat Reviews ᓚᘏᗢ</a>
        </div>
    </nav>

    <div class="container py-4">
        @yield('content')
    </div>


</body>
</html>
