<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Home</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 600px;
            margin: 40px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
        }
        h1 {
            color: #333;
            text-align: center;
            margin-bottom: 15px;
        }
        p {
            font-size: 15px;
            line-height: 1.6;
            color: #555;
            text-align: center; /* Teks deskripsi dirapikan ke tengah */
        }
        img {
            display: block;
            margin: 15px auto;
            border-radius: 8px;
            max-width: 100%;
            height: auto;
            width: 250px; /* Ukuran gambar diperkecil */
        }
        .back-link {
            display: inline-block;
            margin-top: 20px;
            padding: 10px 20px;
            background-color: #007BFF;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            text-align: center;
            transition: background-color 0.3s;
        }
        .back-link:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>{{ $home->title }}</h1>
        <p>{{ $home->description }}</p>
        <img src="{{ asset('storage/' . $home->image) }}" alt="{{ $home->title }}">
        <a href="{{ route('homes.index') }}" class="back-link">Back to List</a>
    </div>
</body>
</html>
