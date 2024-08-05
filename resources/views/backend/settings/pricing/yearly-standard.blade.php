@extends('layouts.admin-main')
@section('main-container')
    <main id="main" class="main">
        <div class="container mt-4 mb-3 " id="blog-div">
            <div class="row align-items-center">
                <h1 class="general-settings-heading ms-5">Yearly Standard Plan</h1>

                <form id="form1" class="row g-3 ms-5" method="POST" action="{{ route('store-yearly-standard') }}"
                    enctype="multipart/form-data">

                    @csrf


                    <div class="col-8">
                        <label for="inputNanme4" class="form-label">
                            <h4>Price</h4>
                        </label>
                        <input type="text" name="price" class="form-control" id="inputNanme4" value="{{ $standardPrice->price }}">
                    </div>


                    <div class="col-8">
                        <label for="inputPassword4" class="form-label">
                            <h4>Service</h4>
                        </label>
                        <input type="text" name="service" class="form-control" id="inputPassword4" value="">
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
                        <button type="submit" class="btn btn-primary mt-2">Update Plan</button>
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
