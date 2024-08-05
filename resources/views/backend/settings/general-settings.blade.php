@extends('layouts.admin-main')
@section('main-container')
    <main id="main" class="main">
        <div class="container mt-4 mb-3 " id="blog-div">
            <div class="row align-items-center">
                <h1 class="general-settings-heading">General Settings</h1>

                <form class="row g-3 ms-5" method="POST" action="{{ route('general-settings-store') }}"
                    enctype="multipart/form-data">

                    @csrf

                    <div class="col-8">
                        <label class="form-label">
                            <h4>Website Name</h4>
                        </label>
                        <input type="text" name="website_name" class="form-control" id="inputNanme4" value="{{$generalSetting->website_name}}">
                    </div>

                    <div class="col-8" class="general-setting-images">
                        <label class="form-label">
                            <h4>Favicon</h4>
                        </label>
                        <div>
                            <img class="mb-2" id="blog-image" src="{{ asset('storage/'.\App\Models\GeneralSetting::first()->favicon) }}" alt="Favicon">
                        </div>
                        <div>
                            <input type="file" name="favicon" class="form-control">
                        </div>

                    </div>

                  

                    <div class="col-8" class="general-setting-images">
                        <label for="inputNanme4" class="form-label">
                            <h4>Logo</h4>
                        </label>
                        <div>
                            <img class="mb-2" id="blog-image" src="{{ asset('storage/'.\App\Models\GeneralSetting::first()->logo) }}" alt="logo">
                        </div>
                        <div>
                            <input type="file" name="logo" class="form-control">
                        </div>

                    </div>



                    <div class="col-8">
                        <label for="inputNanme4" class="form-label">
                            <h4>Homepage Title</h4>
                        </label>
                        <input type="text" name="title" class="form-control" id="inputNanme4" value="{{$generalSetting->title}}">
                    </div>

                    <div class="col-8">
                        <label for="inputEmail4" class="form-label">
                            <h4>Homepage Sub-Title</h4>
                        </label>
                        <input type="text" class="form-control" id="inputEmail4" name="subtitle" value="{{$generalSetting->subtitle}}">
                    </div>
                    <div class="col-8">
                        <label for="inputPassword4" class="form-label">
                            <h4>Homepage Paragraph</h4>
                        </label>
                        <input type="text" name="paragraph" class="form-control" id="inputPassword4" value="{{$generalSetting->paragraph}}">
                    </div>

                    <div class="col-8">
                        <label for="inputPassword4" class="form-label">
                            <h4>Homepage Button-1</h4>
                        </label>
                        <input type="text" name="button_left" class="form-control" id="inputPassword4" value="{{$generalSetting->button_left}}">
                    </div>

                    <div class="col-8">
                        <label for="inputPassword4" class="form-label">
                            <h4>Homepage Button-2</h4>
                        </label>
                        <input type="text" name="button_right" class="form-control" id="inputPassword4" value="{{$generalSetting->button_right}}">
                    </div>

                    <div class="col-8" class="general-setting-images">
                        <label for="inputNanme4" class="form-label">
                            <h4>Homepage Banner Image</h4>
                        </label>
                        <div>
                            <img class="mb-2" id="blog-image" src="{{ asset('storage/'.\App\Models\GeneralSetting::first()->banner_image) }}" alt="Favicon">
                        </div>
                        <div>
                            <input type="file" name="banner_image" class="form-control" id="inputNanme4">
                        </div>

                    </div>

            </div>

            @if ($errors->any())
                <div>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li color="red">{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>

            @endif


            <div class="">
                <button type="submit" class="btn btn-primary">Update Settings</button>
            </div>
            <br>
        </div>
        </div>
        </div>
        </div>
    </main>


    <!-- Bootstrap JS and jQuery CDN -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    </body>

    </html>
