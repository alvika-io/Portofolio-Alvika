<x-sidebar></x-sidebar>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project List</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f0f4f8;
        }
        header {
            background-color: #007bff;
            color: #fff;
            padding: 15px;
            text-align: center;
        }
        .container {
            padding: 20px;
            background-color: #ffffff;
            margin: 30px auto;
            max-width: 1000px;
            border-radius: 10px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
        }
        .create-button {
            display: inline-block;
            margin-bottom: 20px;
            padding: 10px 20px;
            background-color: #28a745;
            color: #fff;
            text-decoration: none;
            border-radius: 8px;
            transition: background-color 0.3s ease;
        }
        .create-button:hover {
            background-color: #218838;
        }
        .table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        .table th, .table td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        .table th {
            background-color: #f8f9fa;
            color: #333;
        }
        .action-links a, .delete-btn {
            margin-right: 10px;
            padding: 5px 10px;
            background-color: #17a2b8;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            border: none;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        .action-links a:hover {
            background-color: #138496;
        }
        .delete-btn {
            background-color: #dc3545;
        }
        .delete-btn:hover {
            background-color: #c82333;
        }
        footer {
            background-color: #f1f1f1;
            text-align: center;
            padding: 15px;
            margin-top: 30px;
        }
    </style>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const deleteButtons = document.querySelectorAll('.delete-btn');
            deleteButtons.forEach(button => {
                button.addEventListener('click', function () {
                    const id = this.getAttribute('data-id');
                    if (confirm('Are you sure you want to delete this project?')) {
                        document.getElementById(`delete-form-${id}`).submit();
                    }
                });
            });
        });
    </script>
</head>
<body>
    <header>
        <h1>Project Dashboard</h1>
    </header>

    <div class="container">
        <h2>Project List</h2>
        <a href="{{ route('project.create') }}" class="create-button">Create New Project</a>
        <table class="table">
    <thead>
        <tr>
            <th scope="col">Name</th>
            <th scope="col">Description</th>
            <th scope="col">Link</th>
            <th scope="col">Date</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($project as $row)
        <tr>
            <td>{{ $row->name }}</td>
            <td>{{ Str::limit($row->description, 50) }}</td>
            <td><a href="{{ $row->link }}" target="_blank">{{ Str::limit($row->link, 30) }}</a></td>

            <td>{{ \Carbon\Carbon::parse($row->date)->format('d M Y') }}</td>
            <td class="action-links">
                <a href="{{ route('project.show', $row) }}" style="background-color: #007bff;">Detail</a>
                <a href="{{ route('project.edit', $row) }}" style="background-color: #ffc107;">Edit</a>
                <button type="button" class="delete-btn" data-id="{{ $row->id }}">Delete</button>
                <form id="delete-form-{{ $row->id }}" action="{{ route('project.destroy', $row->id) }}" method="POST" style="display: none;">
                    @csrf
                    @method('DELETE')
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

    </div>

    <footer>
        <p>&copy; {{ date('Y') }} Project Dashboard. All Rights Reserved.</p>
    </footer>
</body>
</html>
