<x-sidebar></x-sidebar>
<body>
    <div class="container">
        <h1>About List</h1>
        <a href="{{ route('abouts.create') }}" class="create-link">Create New About</a>
        <ul>
            @foreach($abouts as $about)
                <li>
                    <h3>{{ $about->title }}</h3>
                    <p>{{ $about->description }}</p>
                    <div class="action-links">
                        <a href="{{ route('abouts.show', $about->id) }}">View</a>
                        <a href="{{ route('abouts.edit', $about->id) }}">Edit</a>
                        <form action="{{ route('abouts.destroy', $about->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Delete</button>
                        </form>
                    </div>
                </li>
            @endforeach
        </ul>
    </div>
</body>
</html>
