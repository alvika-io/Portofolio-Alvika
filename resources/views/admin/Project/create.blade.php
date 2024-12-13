<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Membuat data project</title>
    <!-- CSS Styling langsung di dalam tag <style> -->
    <style>
        /* CSS dari sebelumnya */
        form {
            max-width: 500px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            background-color: #f9f9f9;
        }
        form .form-label {
            font-size: 1.1rem;
            color: #333;
            font-weight: bold;
            margin-bottom: 5px;
            display: block;
        }
        form .form-control {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
            font-size: 1rem;
            margin-bottom: 15px;
            transition: border-color 0.3s;
        }
        form textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
            font-size: 1rem;
            resize: vertical;
            min-height: 120px;
            transition: border-color 0.3s;
        }
        form .form-control:focus,
        form textarea:focus {
            border-color: #007bff;
            outline: none;
        }
        form .btn-primary {
            background-color: #007bff;
            color: #fff;
            padding: 10px 20px;
            font-size: 1rem;
            font-weight: bold;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        form .btn-primary:hover {
            background-color: #0056b3;
        }
        form .mb-3 {
            margin-bottom: 15px;
        }
    </style>
</head>
<body>
    <!-- Form HTML -->
    <form action="{{ route('project.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div>
        <label for="name">Project Name:</label>
        <input type="text" name="name" id="name" required>
    </div>

    <div>
        <label for="description">Description:</label>
        <textarea name="description" id="description" required></textarea>
    </div>

    <div>
        <label for="link">Project Link:</label>
        <input type="url" name="link" id="link" required>
    </div>

    <div>
        <label for="date">Date:</label>
        <input type="date" name="date" id="date" required>
    </div>

    <div>
        <button type="submit">Create Project</button>
    </div>
</form>

</body>
</html>