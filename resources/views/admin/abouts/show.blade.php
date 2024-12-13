<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View About</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 20px;
        }
        .container {
            max-width: 800px;
            margin: 40px auto;
            background-color: #fff;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
        }
        h1 {
            text-align: center;
            color: #333;
            margin-bottom: 20px;
        }
        p {
            color: #555;
            line-height: 1.6;
            font-size: 1.1rem;
            margin-top: 15px;
            text-align: center;  /* Deskripsi di tengah */
        }
        .back-link {
            display: inline-block;
            margin-top: 30px;
            padding: 10px 20px;
            background-color: #007BFF;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            font-size: 16px;
            text-align: center;
            display: block;
            width: max-content;
            margin-left: auto;
            margin-right: auto;
        }
        .back-link:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>{{ $about->title }}</h1>
        <p>{{ $about->description }}</p>
        <a href="{{ route('abouts.index') }}" class="back-link">Back to List</a>
    </div>
</body>
</html>
