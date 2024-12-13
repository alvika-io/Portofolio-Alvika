<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Membuat data Contact</title>
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
    <form action="{{ route('contact.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Name</label>
            <input type="text" class="form-control" name="name" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Email</label>
            <input type="email" class="form-control" name="email" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Phone</label>
            <input type="text" class="form-control" name="phone" aria-describedby="emailHelp">
        </div>
                <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Social Media</label>
            <input type="text" class="form-control" name="socialmedia" aria-describedby="emailHelp">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</body>
</html>