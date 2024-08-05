@extends('layouts.admin-main')
@section('main-container')
    <main id="main" class="main">
        <div class="container mt-4 mb-3 " id="blog-div">
            <div class="row align-items-center">
                <h1 class="general-settings-heading">Add Client Feedback</h1>

            {{--  ----  --}}


                    <form id="form2" class="row g-3 ms-5" method="POST" action="{{ route('store-client-feedback') }}"
                        enctype="multipart/form-data">

                        @csrf

                        <div class="col-8">
                            <label for="inputNanme4" class="form-label">
                                <h4>Name</h4>
                            </label>
                            <input type="text" name="name" class="form-control" id="inputNanme4" value="">
                        </div>

                        <div class="col-8">
                            <label for="inputNanme4" class="form-label">
                                <h4>Feedback</h4>
                            </label>
                            <input type="text" name="feedback" class="form-control" id="inputNanme4" value="">
                        </div>


                        <div class="col-8" class="general-setting-images">
                            <label for="inputNanme4" class="form-label">
                                <h4>Client Image</h4>
                            </label>

                            <div>
                                <input type="file" name="image" class="form-control" id="inputNanme4">
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
                            <button type="submit" class="btn btn-primary ms-5 mt-2">Add Feedback</button>
                        </div>
                        <br>
                    </form>
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
