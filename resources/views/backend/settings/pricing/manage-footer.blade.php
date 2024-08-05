@extends('layouts.admin-main')
@section('main-container')
    </aside><!-- End Sidebar-->

    <main id="main" class="main">


        <div class="price-area bg-price py-5">
            <div class="container">

                <div class="row mb-4">
                    <div class="col text-center">
                        <h2 class="h1">Manage Footer</h2>
                    </div>
                </div>



                <form method="POST" action="{{ route('footer-logo') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="col-8" class="general-setting-images">
                        <label for="inputNanme4" class="form-label">
                            <h4>Logo</h4>
                        </label>
                        <div>
                            <img class="mb-2" id="blog-image" src="{{ asset('storage/'.$footerMain->logo) }}" alt="logo">
                        </div>


                        <div>
                            <input type="file" name="logo" class="form-control">
                        </div>
                    </div>

                    <div class="col-8">
                        <label for="inputNanme4" class="form-label">
                            <h4>Title</h4>
                        </label>
                        <input type="text" name="title" class="form-control" id="inputNanme4" value="{{ $footerMain->title }}">
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
                
                    <button type="submit" name="{{ route('footer-logo') }}" class="btn btn-primary">Submit</button>
                  
                </form>


                <br><br><br>




                <div class="row">
                    <div class="col-md-4">

                        <div class="card-body text-center card">
                            <h5 class="card-title">Services</h5>
                            <ul class="list-unstyled">
                                @foreach ($footerService as $service)
                                    <li>
                                        <a class="text-dark" href="{{ $service->link }}">{{ $service->title }}</a>
                                        <form action="{{ route('delete-footer-services', ['id' => $service->id]) }}"
                                            method="POST" style="display: inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn link-danger">Remove</button>
                                        </form>
                                    </li>
                                @endforeach

                            </ul>
                            <a href="{{ route('footer-services') }}">
                                <button type="submit" class="btn btn-primary btn-block">Edit</button>
                            </a>
                        </div>


                    </div>
                    <div class="col-md-4">


                        <div class="card-body text-center card">
                            <h5 class="card-title">Quick Links</h5>
                            <ul class="list-unstyled">

                                @foreach ($footerQuickLink as $link)
                                    <li>
                                        <a class="text-dark" href="{{ $link->link }}">{{ $link->title }}</a>
                                        <form action="{{ route('delete-footer-quick-link', ['id' => $link->id]) }}"
                                            method="POST" style="display: inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn link-danger">Remove</button>
                                        </form>
                                    </li>
                                @endforeach


                            </ul>
                            <a href="{{ route('footer-quick-links') }}">
                                <button type="submit" class="btn btn-primary btn-block">Edit</button>
                            </a>
                        </div>


                    </div>
                    <div class="col-md-4">


                        <div class="card-body text-center card">
                            <h5 class="card-title">Contact Us</h5>
                            <ul class="list-unstyled">

                                @foreach ($footerContact as $contact)
                                    <li>
                                        <a class="text-dark" href="{{ $contact->link }}">{{ $contact->title }}</a>
                                        <form action="{{ route('delete-footer-contact', ['id' => $contact->id]) }}"
                                            method="POST" style="display: inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn link-danger">Remove</button>
                                        </form>
                                    </li>
                                @endforeach

                            </ul>
                            <a href="{{ route('footer-contact') }}">
                                <button type="submit" class="btn btn-primary btn-block">Edit</button>
                            </a>
                        </div>


                    </div>
                </div>
            </div>






        </div>


    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
@endsection()
