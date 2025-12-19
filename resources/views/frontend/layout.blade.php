<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Catering Makanan</title>

    <style>
        body {
            margin: 0;
            font-family: Arial, Helvetica, sans-serif;
            background-color: #FAF3E0; /* cream */
            color: #4E342E; /* coklat tua */
        }

        header {
            background-color: #6F4E37;
            padding: 15px 30px;
        }

        header h1 {
            margin: 0;
            color: #FFF;
        }

        nav {
            margin-top: 8px;
        }

        nav a {
            color: #FFF;
            text-decoration: none;
            margin-right: 15px;
            font-weight: bold;
        }

        nav a:hover {
            text-decoration: underline;
        }

        .container {
            padding: 30px;
            min-height: 70vh;
        }

        .card {
            background-color: #FFF8ED;
            border-radius: 8px;
            padding: 20px;
            margin-bottom: 15px;
            box-shadow: 0 2px 6px rgba(0,0,0,0.1);
        }

        footer {
            background-color: #D2B48C;
            color: #4E342E;
            text-align: center;
            padding: 15px;
        }
    </style>
</head>
<body>

<header>
    <h1>Catering Makanan Lezat</h1>
    <nav>
        <a href="/">Beranda</a>
        <a href="/menu">Daftar Menu</a>
        <a href="/kontak">Kontak</a>
    </nav>
</header>

<div class="container">
    @yield('content')
</div>

<footer>
    © 2025 Catering Makanan — All Rights Reserved
</footer>

</body>
</html>
