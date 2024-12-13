<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit About</title>
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
        label {
            display: block;
            margin-top: 15px;
            font-weight: bold;
            color: #555;
        }
        input[type="text"],
        textarea {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }
        textarea {
            resize: vertical;
            height: 150px;
        }
        .button-group {
            display: flex;
            justify-content: space-between;
            gap: 10px;
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
        <h1>Edit About</h1>
        <form action="{{ route('abouts.update', $about->id) }}" method="POST">
            @csrf
            @method('PUT')
            <label for="title">Title:</label>
            <input type="text" id="title" name="title" value="{{ $about->title }}" required>
            
            <label for="description">Description:</label>
            <textarea id="description" name="description" required>{{ $about->description }}</textarea>
            
            <div class="button-group">
                <a href="{{ route('abouts.index') }}" class="back-link">Back to List</a>
                <button type="submit">Update</button>
            </div>
        </form>
    </div>
</body>
</html>
