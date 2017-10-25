@extends('admin.master')

@section('body')
    <div class="row">
        <div class="col-lg-12">
            <br/>
            {{ Session::get('message') }}

            <form class="form-horizontal" action="{{ url('/blog/new') }}" method="POST" enctype="multipart/form-data">
                {{csrf_field()}}
                <div class="form-group">
                    <label for="inputPassword3" class="col-sm-3 control-label">Category Name</label>
                    <div class="col-sm-9">
                        <select class="form-control" name="category_id">
                            @foreach($publushedCategories as $publushedCategory)
                            <option value="{{ $publushedCategory->id }}">{{ $publushedCategory->category_name }}</option>
                                @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-3 control-label">Blog Title</label>
                    <div class="col-sm-9">
                        <input type="text" name="blog_title" class="form-control" id="inputEmail3" placeholder="blog Title Here">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-3 control-label">Author Name</label>
                    <div class="col-sm-9">
                        <input type="text" name="author_name" class="form-control" id="inputEmail3" placeholder="Auther name Here">
                    </div>
                </div>

                <div class="form-group">
                    <label for="inputPassword3" class="col-sm-3 control-label">Blog Short Description</label>
                    <div class="col-sm-9">
                        <textarea class="form-control" name="blog_short_description" rows="5" placeholder="blog Short Description Here"></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputPassword3" class="col-sm-3 control-label">Blog Long Description</label>
                    <div class="col-sm-9">
                        <textarea class="form-control" name="blog_long_description" rows="10" placeholder="blog Long Description Here"></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputPassword3" class="col-sm-3 control-label">Blog Image</label>
                    <div class="col-sm-9">
                        <input type="file" name="blog_image" accept="image/*">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputPassword3" class="col-sm-3 control-label">Publication Status</label>
                    <div class="col-sm-9">
                        <select class="form-control" name="publication_status">
                            <option value="1">Published</option>
                            <option value="0">Unpublished</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-3 col-sm-10">
                        <button type="submit" class="btn btn-primary">Save Blog Info</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection