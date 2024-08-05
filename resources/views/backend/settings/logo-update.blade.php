<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS CDN - Replace 'X.X.X' with the version you are using -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>File Upload Form</title>
</head>
<body>

<div class="container mt-5" {{ route('logo.create') }}>
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="bg-purple p-4 rounded text-white text-center">
                <h2>File Upload Form</h2>
            </div>
            <form action="{{ route('logo.store') }}" method="post" enctype="multipart/form-data" class="p-4 bg-light rounded mt-4">
                @csrf
                <div class="mb-3">
                    <label for="fileInput" class="form-label">Choose file</label>
                    <input class="form-control" type="file" id="fileInput" name="image">
                </div>
                <button type="submit" class="btn btn-primary">Upload</button>
            </form>
        </div>
    </div>
</div>

<!-- Bootstrap JS, Popper.js, and jQuery CDNs (required for certain Bootstrap features) -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

