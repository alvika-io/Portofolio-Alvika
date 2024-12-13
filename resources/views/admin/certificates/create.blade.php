<h1>Add Certificate</h1>
<form action="{{ route('certificates.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div>
        <label for="name">Name:</label>
        <input type="text" name="name" id="name" required>
    </div>

    <div>
        <label for="issued_at">Issued At:</label>
        <input type="date" name="issued_at" id="issued_at" required>
    </div>

    <div>
        <label for="issued_by">Issued By:</label>
        <input type="text" name="issued_by" id="issued_by" required>
    </div>

    <div>
        <label for="file">File:</label>
        <input type="file" name="file" id="file" required>
    </div>

    <div>
        <label for="thumbnail">Thumbnail:</label>
        <input type="file" name="thumbnail" id="thumbnail">
    </div>

    <div>
        <button type="submit" class="btn btn-primary">Save</button>
    </div>
</form>
