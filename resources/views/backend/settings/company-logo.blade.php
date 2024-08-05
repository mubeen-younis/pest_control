<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Company Logo</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <h1 class="mt-5 mb-4 text-center">Update Company Logo</h1>
        <form method="POST" action="{{ route('store-company-logo') }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="bannerTitle">First Logo</label>
                <input type="file" name="image" class="form-control"
                    placeholder="Choose File">
            </div>
            
            <br>
            @if ($errors->any())
            <div>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li color="red">{{ $error }}</li>
                    @endforeach
                </ul>
            </div>

        @endif
        <br>
            <button type="submit" class="btn btn-primary">Submit</button>
          
        </form>
        <br>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
