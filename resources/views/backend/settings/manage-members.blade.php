@extends('layouts.admin-main')
@section('main-container')
    </aside><!-- End Sidebar-->

    <main id="main" class="main">


        <div class="container mt-4 mb-3 " id="blog-div">
            <div class="row align-items-center">
                <div class="col">
                    <h3 class="mt-2 ms-3">Manage Members</h3>
                </div>
                <div class="col text-right">
                    <a href="{{ route('create-members') }}">
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
                                            <th scope="col">Image</th>
                                            <th scope="col">Name</th>
                                            <th scope="col">Designation</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        @foreach ($manageMembers as $member)
                                            <tr>
                                                <th scope="row"><input type="checkbox"></th>
                                                <td><img id="blog-image" src="{{ asset('storage/'.$member->image) }}"
                                                        alt="Member Image"></td>
                                                <td>{{ $member->name }}</td>
                                                <td>{{ $member->designation }}</td>
                                                <td>
                                                  <div class="blog-btn">
                                                    <div>
                                                    <a href="{{ route('edit-members', ['id' => $member->id]) }}">
                                                        <button type="button" class="btn btn-primary mb-3 mt-1">Edit</button>
                                                    </a>
                                                  </div>
                                                  <div>
                                                    <form method="POST"
                                                        action="{{ route('delete-members', ['id' => $member->id]) }}">
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
