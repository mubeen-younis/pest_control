@extends('layouts.admin-main')
@section('main-container')
    <main id="main" class="main">
        <div class="container mt-4 mb-3 " id="blog-div">
            <div class="row align-items-center">
                <h1 class="general-settings-heading">Manage Services</h1>

                <form class="row g-3 ms-5" method="POST" action="{{ route('update-services', ['id' => $service->id]) }}"
                    enctype="multipart/form-data">
                    @method('put')
                    @csrf




                    <div class="col-8">
                        <label for="inputNanme4" class="form-label">
                            <h4>Service Title</h4>
                        </label>
                        <input type="text" name="title" class="form-control" id="inputNanme4"
                            value="{{ $service->title }}">
                    </div>


                    <div class="col-8">
                        <label for="inputPassword4" class="form-label">
                            <h4>Service Description</h4>
                        </label>
                        <input type="text" name="description" class="form-control" id="inputPassword4"
                            value="{{ $service->description }}">
                    </div>



                    <div class="col-8" class="general-setting-images">
                        <label for="inputNanme4" class="form-label">
                            <h4>Service Icon</h4>
                        </label>

                        <div>
                            <input type="file" name="icon" class="form-control" id="inputNanme4">
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
                <button type="submit" class="btn btn-primary ms-5 mt-2">Update Services</button>
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
