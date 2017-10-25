@extends('admin.master')

@section('body')

    <div class="content">
        <div class="page-title">
            <div>
                <h1><i class="fa fa-th-list"></i> Data Table</h1>
                <p>Table to display analytical data effectively</p>
            </div>
            <div>
                <ul class="breadcrumb side">
                    <li><i class="fa fa-home fa-lg"></i></li>
                    <li>Tables</li>
                    <li class="active"><a href="#">Data Table</a></li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <table class="table table-hover table-bordered" id="sampleTable">
                            <tr>
                                <th>Blog Id</th>
                                <td>{{ $blogById->id }}</td>
                            </tr>
                            <tr>
                                <th>Blog Title</th>
                                <td>{{ $blogById->blog_title }}</td>
                            </tr>
                            <tr>
                                <th>Category Name</th>
                                <td>{{ $blogById->category_name }}</td>
                            </tr>
                            <tr>
                                <th>Author Name</th>
                                <td>{{ $blogById->author_name }}</td>
                            </tr>
                            <tr>
                                <th>Blog Short Description</th>
                                <td>{{ $blogById->blog_short_description }}</td>
                            </tr>
                            <tr>
                                <th>Blog Long Description</th>
                                <td>{{ $blogById->blog_long_description }}</td>
                            </tr>
                            <tr>
                                <th>Blog Image</th>
                                <td><img src="{{ asset($blogById->blog_image) }}" alt=""></td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection