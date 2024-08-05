@extends('layouts.admin-main')
@section('main-container')
    </aside><!-- End Sidebar-->

    <main id="main" class="main">


        <div class="container mt-4 mb-3 " id="blog-div">
            <div class="row align-items-center">
                <div class="col">
                    <h3 class="mt-2 ms-3">Manage Services</h3>
                </div>
                <div class="col text-right">
                    <a href="{{ route('add-services') }}">
                        <button type="button" class="btn btn-primary add-blog">Add</button>
                    </a>
                    <button type="button" class="btn btn-danger">Delete</button>
                </div>
            </div>
        </div>

        <section class="section">
            <div class="row">
                <div class="col-lg-12">

                    <div class="card">
                        <div class="card-body">
                            <form action="">
                                <!-- Table with stripped rows -->
                                <table class="table datatable">
                                    <thead>
                                        <tr>
                                            <th scope="col"></th>
                                            <th scope="col">Icon</th>
                                            <th scope="col">Title</th>
                                            <th scope="col">Description</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        @foreach ($manageServices as $service)
                                            <tr>
                                                <th scope="row"><input type="checkbox"></th>
                                                <td><img id="blog-image" src="{{ asset('storage/'.$service->icon) }}"
                                                        alt="Service Icon"></td>
                                                <td>{{ $service->title }}</td>
                                                <td>{{ $service->description }}</td>
                                                <td>
                                                  <div class="blog-btn">
                                                    <div>
                                                    <a href="{{ route('edit-services', ['id' => $service->id]) }}">
                                                        <button type="button" class="btn btn-primary mb-3 mt-1">Edit</button>
                                                    </a>
                                                  </div>
                                                  <div>
                                                    <form method="POST"
                                                        action="{{ route('delete-services', ['id' => $service->id]) }}">
                                                        @csrf
                                                        @method('delete')
                                                        <button type="delete" class="btn btn-danger">Delete</button>
                                                    </form>
                                                  </div>
                                                  </div>
                                                </td>
                                            </tr>
                                        @endforeach

                                    </tbody>
                                </table>
                                <!-- End Table with stripped rows -->
                            </form>

                        </div>
                    </div>

                </div>
            </div>
        </section>

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
@endsection()
