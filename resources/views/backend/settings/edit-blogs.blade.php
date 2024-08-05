@extends('layouts.admin-main')
@section('main-container')
    <main id="main" class="main">
        <div class="container mt-4 mb-3 " id="blog-div">
            <div class="row align-items-center">
                <!-- Vertical Form -->
                <form class="row g-3 ms-5" method="POST" action="{{ route('update-blog', ['id' => $blog->id]) }}">
@csrf
                  @method('PUT')

                    <div class="col-8">
                        <label for="inputNanme4" class="form-label">Your Name</label>
                        <input type="file" name="photo" class="form-control" id="inputNanme4"">
                    </div>
                    <div class="col-8">
                        <label for="inputEmail4" class="form-label">Category</label>
                        <input type="text" class="form-control" id="inputEmail4" name="category" value="{{old('category', $blog->category)}}">
                    </div>
                    <div class="col-8">
                        <label for="inputPassword4" class="form-label">Title</label>
                        <input type="text" name="title" class="form-control" id="inputPasswor" value="{{old('title', $blog->title)}}" >
                    </div>

                    <label for="inputAddress" class="form-label">Blog</label>
                    
                    <div class="col-8">
                    <textarea name="blog" class="form-control" value="">
                      {{old('blog', $blog->blog)}}
                    </textarea>
                    </div>


                    <div class="text-center">
                        <button type="submit" class="btn btn-primary" >Update</button>
                    </div>
                </form><!-- Vertical Form -->
            </div>
        </div>
        </div>
        </div>
    </main>
