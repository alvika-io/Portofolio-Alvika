<h1>Manage Certificates</h1>
<a href="{{ route('certificates.create') }}" class="btn btn-primary">Add New Certificate</a>

<table class="table table-bordered mt-3">
    <thead>
        <tr>
            <th>Name</th>
            <th>Issued At</th>
            <th>Issued By</th>
            <th>File</th>
            <th>Thumbnail</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($certificates as $certificate)
            <tr>
                <td>{{ $certificate->name }}</td>
                <td>{{ $certificate->issued_at }}</td>
                <td>{{ $certificate->issued_by }}</td>
                <td>
                    <a href="{{ asset('storage/' . $certificate->file) }}" target="_blank" class="btn btn-info btn-sm">View File</a>
                </td>
                <td>
                        <img src="{{ asset('storage/' . $certificate->thumbnail) }}" width="100" alt="Thumbnail" class="img-thumbnail">
                </td>
                <td>
                    <a href="{{ route('certificates.edit', $certificate) }}" class="btn btn-warning btn-sm">Edit</a>

                    <form action="{{ route('certificates.destroy', $certificate) }}" method="POST" style="display:inline;" onsubmit="return confirm('Are you sure you want to delete this certificate?');">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
