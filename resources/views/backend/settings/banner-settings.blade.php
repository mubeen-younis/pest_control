<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Banner Settings</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <h1 class="mt-5 mb-4 text-center">Banner Settings</h1>
        <form method="POST" action="{{ route('store_banner_settings') }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="bannerTitle">Banner Title</label>
                <input type="text" name="title" class="form-control" id="bannerTitle"
                    placeholder="Enter Banner Title">
            </div>
            <div class="form-group">
                <label for="bannerSubtitle">Banner Subtitle</label>
                <input type="text" name="subtitle" class="form-control" id="bannerSubtitle"
                    placeholder="Enter Banner Subtitle">
            </div>
            <div class="form-group">
                <label for="bannerImage">Banner Paragraph</label>
                <input type="text" name="paragraph" class="form-control" id="bannerImage"
                    placeholder="Enter Banner Paragraph">
            </div>
            <div class="form-group">
                <label for="bannerLink">First Button</label>
                <input type="text" name="firstbtn" class="form-control" id="bannerLink"
                    placeholder="Enter Button Name">
            </div>
            <div class="form-group">
                <label for="bannerColor">Second Button</label>
                <input type="text" name="secondbtn" class="form-control" id="bannerColor"
                    placeholder="Enter Button Name">
            </div>
            <div class="form-group">
                <label for="bannerSize">Banner Image</label>
                <input type="file" name="image" class="form-control" id="bannerSize"
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

        {{-- <form method="POST" action="{{ url('backend/settings/banner-settings-image') }}">
            @csrf
            <div class="form-group">
                <label for="bannerTitle">Banner Title</label>
                <input type="text" name="title" class="form-control" id="bannerTitle"
                    placeholder="Enter Banner Title">
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

        </form> --}}

        <br>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
