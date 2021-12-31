@extends('layout.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-12 pt-2">
                <a href="/blog" class="btn btn-outline-primary btn-sm">Go back</a>
                <div class="border rounded mt-5 p-4">
                    <h1 class="display-4">Edit Blog</h1>
                    <p>Edit and submit this form to update a blog</p>

                    <hr>

                    <form action="" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="control-group col-12">
                                <label for="blogname">Blog Name</label>
                                <input type="blogname" id="blogname" class="form-control" name="blogname"
                                       placeholder="Enter Blog Name" value="{{ $post->blogname }}" required>
                            </div>
                            <div class="control-group col-12 mt-2">
                                <label for="blogdescription">Blog Description</label>
                                <textarea id="blogdescription" class="form-control" name="blogdescription" placeholder="Enter Blog Description"
                                          rows="5" required>{{ $post->blogdescription }}</textarea>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="control-group col-12 text-center">
                                <button id="btn-submit" class="btn btn-primary">
                                    Update Blog
                                </button>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>

@endsection