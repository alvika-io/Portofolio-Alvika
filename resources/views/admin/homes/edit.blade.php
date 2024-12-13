<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Home</title>
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
            text-align: center;
            color: #333;
            margin-bottom: 20px;
        }
        label {
            display: block;
            margin-top: 15px;
            color: #555;
            font-weight: bold;
        }
        input[type="text"],
        textarea,
        input[type="file"] {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }
        textarea {
            resize: vertical;
            height: 100px;
        }
        img {
            display: block;
            margin: 15px 0;
            border-radius: 8px;
            max-width: 100%;
            width: 150px; /* Ukuran gambar diperkecil */
        }
        .button-group {
            display: flex;
            justify-content: space-between;
            margin-top: 20px;
        }
        button, .back-link {
            display: inline-block;
            padding: 10px 20px;
            text-align: center;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            text-decoration: none;
        }
        button {
            background-color: #28a745;
        }
        button:hover {
            background-color: #218838;
        }
        .back-link {
            background-color: #007BFF;
        }
        .back-link:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Edit Home</h1>
        <form action="{{ route('homes.update', $home->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <label for="title">Title:</label>
            <input type="text" id="title" name="title" value="{{ $home->title }}" required>
            
            <label for="description">Description:</label>
            <textarea id="description" name="description" required>{{ $home->description }}</textarea>
            
            <label for="image">Image:</label>
            <input type="file" id="image" name="image">
            
            <img src="{{ asset('storage/' . $home->image) }}" alt="{{ $home->title }}">
            
            <div class="button-group">
                <a href="{{ route('homes.index') }}" class="back-link">Back to List</a>
                <button type="submit">Update</button>
            </div>
        </form>
    </div>
</body>
</html>
