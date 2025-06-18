<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <style>
        body {
            margin: 0;
            font-family: 'Segoe UI', sans-serif;
            display: flex;
            height: 100vh;
        }

        .sidebar {
            width: 220px;
            background: #4A00E0;  /* Ungu gradasi */
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 20px;
        }

        .sidebar h2 {
            font-size: 1.5rem;
            margin-bottom: 2rem;
        }

        .sidebar a {
            display: block;
            color: white;
            text-decoration: none;
            padding: 10px 0;
            margin: 10px 0;
            transition: background 0.2s;
        }

        .sidebar a:hover {
            background: rgba(255, 255, 255, 0.2);
            padding-left: 10px;
            border-radius: 4px;
        }

      .main-content {
        flex: 1;
        padding: 30px;
        background-image: url('/images/pnc.jpg');
        background-size: cover;
        background-position: center;
        position: relative;
        z-index: 1;
        color: white; /* supaya teksnya tetap kelihatan di atas background gelap */
    }

    .main-content::before {
        content: "";
        position: absolute;
        top: 0; left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.5); /* Bayangan overlay hitam transparan */
        z-index: -1;
    }

    .card {
        background: rgba(255, 255, 255, 0.1); /* transparan biar nyatu sama background */
        color: white;
        padding: 2rem;
        border-radius: 10px;
        box-shadow: 0 4px 15px rgba(0,0,0,0.2);
        position: relative;
        z-index: 2;
    }

  

        .card {
            background: white;
            padding: 2rem;
            border-radius: 10px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.05);
        }
    </style>
</head>
<body>
    <div class="sidebar">
        <h2>Dashboard</h2>
        <a href="{{ route('buku.index') }}"> Buku</a>
        <a href="{{ route('peminjaman.index') }}"> Peminjaman</a>
    </div>
    <div class="main-content">
            <h1>Selamat Datang</h1>
            <p>Silakan pilih menu di sidebar untuk melihat data Buku atau Peminjaman.</p>
        </div>
    </div>
</body>
</html>
