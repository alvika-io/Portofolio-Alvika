<x-sidebar></x-sidebar>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact List</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            margin: 0;
            padding: 20px;
            background-color: #f0f4f8;
        }
        .container {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 12px;
            max-width: 1200px;
            margin: auto;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
        }
        h1 {
            color: #007bff;
            margin-bottom: 20px;
            text-align: center;
        }
        .create-button {
            display: block;
            margin-bottom: 20px;
            padding: 12px 20px;
            background-color: #28a745;
            color: #fff;
            text-decoration: none;
            text-align: center;
            border-radius: 8px;
            font-size: 16px;
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
            padding: 6px 12px;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            display: inline-block;
            transition: background-color 0.3s;
        }
        .action-links a {
            background-color: #007bff;
            margin-right: 5px;
        }
        .action-links a:hover {
            background-color: #0056b3;
        }
        .delete-btn {
            background-color: #dc3545;
            border: none;
            cursor: pointer;
        }
        .delete-btn:hover {
            background-color: #c82333;
        }
        .social-media-icon {
            display: inline-block;
            margin-right: 5px;
        }
    </style>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const deleteButtons = document.querySelectorAll('.delete-btn');
            deleteButtons.forEach(button => {
                button.addEventListener('click', function () {
                    const id = this.getAttribute('data-id');
                    if (confirm('Are you sure you want to delete this contact?')) {
                        document.getElementById(`delete-form-${id}`).submit();
                    }
                });
            });
        });
    </script>
</head>
<body>
    <div class="container">
        <h1>Contact List</h1>
        <a href="{{ route('contact.create') }}" class="create-button">Create New Contact</a>
        <table class="table" id="myTable">
            <thead>
                <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Social Media</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($contact as $row)
                <tr>
                    <td>{{ $row->name }}</td>
                    <td>{{ $row->email }}</td>
                    <td>{{ $row->phone }}</td>
                    <td>
                        @foreach (explode(',', $row->socialmedia) as $social)
                            <span class="social-media-icon">{{ $social }}</span>
                        @endforeach
                    </td>
                    <td class="action-links">
                        <a href="{{ route('contact.show', $row) }}" style="background-color: #17a2b8;">Detail</a>
                        <a href="{{ route('contact.edit', $row) }}" style="background-color: #ffc107;">Edit</a>
                        <button type="button" class="delete-btn" data-id="{{ $row->id }}">Delete</button>
                        <form id="delete-form-{{ $row->id }}" action="{{ route('contact.destroy', $row->id) }}" method="POST" style="display: none;">
                            @csrf
                            @method('DELETE')
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
