{{--  <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        /* Custom CSS for styling */
        .form-container {
            max-width: 400px;
            margin: auto;
            margin-top: 50px;
            border: 1px solid #ddd;
            padding: 20px;
            border-radius: 5px;
        }
        .form-container h2 {
            text-align: center;
            margin-bottom: 20px;
        }
        .form-container input[type="text"], 
        .form-container textarea, 
        .form-container input[type="file"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }
        .form-container textarea {
            height: 150px;
        }
        .form-container input[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .form-container input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
    <title>Blog Form</title>
</head>
<body>

<div class="container">
    <div class="form-container">
        <h2>Add Blog</h2>
        <form action="{{ route('store-blog') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="imageInput">Choose Image</label>
                <input type="file" class="form-control" name="photo">
            </div>
            <div class="form-group">
                <label for="title">Category</label>
                <input type="text" class="form-control" name="category">
            </div>
            <div class="form-group">
                <label for="author">Title</label>
                <input type="text" class="form-control" name="title">
            </div>
            <div class="form-group">
                <label for="blogContent">Blog Content</label>
                <textarea class="form-control" name="blog"></textarea>
            </div>
            <input type="submit" value="Submit" class="btn btn-primary">
        </form>
    </div>
</div>  --}}


@extends('layouts.admin-main')
@section('main-container')
    <main id="main" class="main">
        <div class="container mt-4 mb-3 " id="blog-div">
            <div class="row align-items-center">
                <!-- Vertical Form -->
                <form class="row g-3 ms-5" method="POST" action="{{ route('store-blog') }}" enctype="multipart/form-data">
@csrf
                  

                    <div class="col-8">
                        <label for="inputNanme4" class="form-label">Blog Image</label>
                        <input type="file" name="photo" class="form-control" id="inputNanme4"">
                    </div>
                    <div class="col-8">
                        <label for="inputEmail4" class="form-label">Category</label>
                        <input type="text" class="form-control" id="inputEmail4" name="category" >
                    </div>
                    <div class="col-8">
                        <label for="inputPassword4" class="form-label">Title</label>
                        <input type="text" name="title" class="form-control" id="inputPassword4" >
                    </div>

                    <label for="inputAddress" class="form-label">Blog</label>
                    
                    <div class="col-8">
                    <textarea name="blog" class="form-control" value="">
                      
                    </textarea>
                    </div>


                    <div class="text-center">
                        <button type="submit" class="btn btn-primary" >Create Blog</button>
                    </div>
                </form><!-- Vertical Form -->
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
