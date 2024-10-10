<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Unauthorized Access</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
        }

        .container {
            text-align: center;
            background-color: white;
            padding: 20px;
            border: 1px solid #dee2e6;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        h1 {
            font-size: 24px;
            color: #dc3545;
        }

        p {
            font-size: 18px;
            color: #343a40;
        }

        a {
            text-decoration: none;
            color: #007bff;
        }

        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Maaf, Hanya Admin yang Bisa Login</h1>
        <p>Anda tidak memiliki akses ke halaman ini.</p>
        <a href="{{ route('welcome') }}">Kembali</a>
    </div>
</body>
</html>
