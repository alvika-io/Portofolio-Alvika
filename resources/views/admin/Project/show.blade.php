<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Project</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #f0f4f8;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            max-width: 700px;
            padding: 30px;
            background-color: #ffffff;
            border-radius: 12px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        h1 {
            color: #007bff;
            margin-bottom: 20px;
        }
        p {
            color: #555;
            margin-bottom: 15px;
            font-size: 16px;
        }
        .btn-primary {
            display: inline-block;
            padding: 12px 24px;
            background-color: #007bff;
            color: #fff;
            text-decoration: none;
            border-radius: 8px;
            border: none;
            font-size: 16px;
            transition: background-color 0.3s ease;
        }
        .btn-primary:hover {
            background-color: #0056b3;
        }
        .icon {
            width: 120px; /* Menyesuaikan ukuran ikon */
            height: auto;
            margin-bottom: 20px;
            border-radius: 50%; /* Tambahkan efek bulat jika perlu */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .project-details {
            text-align: left;
            margin: 0 auto 20px;
            max-width: 500px;
        }
        .project-details p strong {
            color: #333;
        }
    </style>
</head>
<body>
    <div class="container">
         <h1>Data Project</h1>
        <div class="project-details">
            <p><strong>Name:</strong> {{ $project->name }}</p>
            <p><strong>Description:</strong> {{ $project->description }}</p>
            <p><strong>Link:</strong> <a href="{{ $project->link }}" target="_blank" style="color: #007bff; text-decoration: none;">{{ $project->link }}</a></p>
            <p><strong>Date:</strong> {{ \Carbon\Carbon::parse($project->date)->format('d M Y') }}</p> <!-- Format tanggal -->
        </div>
        <a class="btn btn-primary" href="{{ route('project.index') }}">Back</a>
    </div>
</body>
</html>
