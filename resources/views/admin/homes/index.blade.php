<x-sidebar></x-sidebar>
<body>
    <div class="container">
        <h1 class="header">Home List</h1>
        <a href="{{ route('homes.create') }}" class="create-button">Create New Home</a>
        <ul class="homes-list">
            @foreach($homes as $home)
                <li class="home-item">
                    <div class="home-card">
                        <div class="home-image-container">
                            <img src="{{ asset('storage/' . $home->image) }}" alt="{{ $home->title }}" class="home-image">
                        </div>
                        <div class="home-details">
                            <h3 class="home-title">{{ $home->title }}</h3>
                            <p class="home-description">{{ $home->description }}</p>
                        </div>
                        <div class="buttons">
                            <form action="{{ route('homes.show', $home->id) }}" method="GET" style="display:inline;">
                                <button type="submit" class="button view-button">View</button>
                            </form>
                            <form action="{{ route('homes.edit', $home->id) }}" method="GET" style="display:inline;">
                                <button type="submit" class="button edit-button">Edit</button>
                            </form>
                            <form action="{{ route('homes.destroy', $home->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="button delete-button">Delete</button>
                            </form>
                        </div>
                    </div>
                </li>
            @endforeach
        </ul>
    </div>

    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #f0f2f5;
            margin: 0;
            padding: 20px;
        }

        .container {
            max-width: 800px;
            margin: auto;
            background: #ffffff;
            border-radius: 8px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.05);
            padding: 20px;
        }

        .header {
            color: #333;
            text-align: center;
            margin-bottom: 20px;
            font-weight: 600;
        }

        .create-button {
            display: block;
            width: fit-content;
            margin: 10px auto 20px;
            background-color: #4CAF50;
            color: #fff;
            padding: 8px 16px;
            text-decoration: none;
            border-radius: 5px;
            font-size: 0.95em;
            transition: background 0.3s;
        }

        .create-button:hover {
            background-color: #45a049;
        }

        .homes-list {
            list-style-type: none;
            padding: 0;
        }

        .home-item {
            margin-bottom: 20px;
        }

        .home-card {
            display: flex;
            flex-direction: row;
            background: #f9f9f9;
            border: 1px solid #ddd;
            border-radius: 8px;
            overflow: hidden;
            transition: box-shadow 0.3s;
            padding: 10px;
        }

        .home-card:hover {
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .home-image-container {
            flex: 0 0 100px;
            margin-right: 15px;
        }

        .home-image {
            width: 100%;
            height: auto;
            border-radius: 4px;
            object-fit: cover;
        }

        .home-details {
            flex: 1;
        }

        .home-title {
            margin: 0;
            color: #444;
            font-size: 1.1em;
        }

        .home-description {
            color: #666;
            font-size: 0.9em;
            margin: 5px 0;
        }

        .buttons {
            display: flex;
            gap: 10px;
            margin-top: 10px;
        }

        .button {
            text-decoration: none;
            color: #fff;
            padding: 6px 12px;
            border-radius: 5px;
            font-size: 0.85em;
            border: none;
            cursor: pointer;
            transition: background 0.3s;
        }

        .view-button {
            background-color: #2196F3;
        }

        .view-button:hover {
            background-color: #1976D2;
        }

        .edit-button {
            background-color: #FF9800;
        }

        .edit-button:hover {
            background-color: #FB8C00;
        }

        .delete-button {
            background-color: #f44336;
        }

        .delete-button:hover {
            background-color: #d32f2f;
        }
    </style>

    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
</body>
</html>
