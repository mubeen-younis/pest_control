@extends('layouts.admin-main')
@section('main-container')
    <main id="main" class="main">
        <div class="container mt-4 mb-3 " id="blog-div">
            <div class="row align-items-center">
                <h1 class="general-settings-heading ms-5">Add Service</h1>

                <form id="form1" class="row g-3 ms-5" method="POST" action=""
                    enctype="multipart/form-data">

                    @csrf


                    <div class="col-8">
                        <label for="inputNanme4" class="form-label">
                            <h4>Service Title</h4>
                        </label>
                        <input type="text" name="title" class="form-control" id="inputNanme4" value="">
                    </div>


                    <div class="col-8">
                        <label for="inputPassword4" class="form-label">
                            <h4>Link</h4>
                        </label>
                        <input type="text" name="link" class="form-control" id="inputPassword4" value="">
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
                        <button type="submit" class="btn btn-primary mt-2">Add</button>
                    </div>
                    <br>
                </form>

                {{--  ----  --}}



            </div>
        </div>
        
    </main>


    <!-- Bootstrap JS and jQuery CDN -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    </body>

    </html>
