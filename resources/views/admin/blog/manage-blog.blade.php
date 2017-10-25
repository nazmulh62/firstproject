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
                            <thead>
                            <tr>
                                <th>SL NO</th>
                                <th>Blog Title</th>
                                <th>Category Name</th>
                                <th>Author Name</th>
                                <th>Publication Status</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php $i=1; ?>
                            @foreach($blogs as $blog)
                            <tr>
                                <td>{{ $i }}</td>
                                <td>{{ $blog->blog_title }}</td>
                                <td>{{ $blog->category_name }}</td>
                                <td>{{ $blog->author_name }}</td>
                                <td>{{ $blog->publication_status == 1 ? 'Published' : 'Unpublished' }}</td>
                                <td class="center">
                                    <a href="{{ url('/blog/details/'.$blog->id) }}" class="btn btn-info btn-xs" title="View Blog Details">
                                        <i class="fa fa-search-plus" aria-hidden="true"></i>
                                    </a>
                                    @if($blog->publication_status == 1)
                                    <a href="{{ url('/blog/unpublished/'.$blog->id) }}" class="btn btn-success btn-xs" title="Published Blog">
                                        <i class="fa fa-arrow-up" aria-hidden="true"></i>
                                    </a>
                                    @else
                                    <a href="{{ url('/blog/published/'.$blog->id) }}" class="btn btn-warning btn-xs" title="Unpublished Blog">
                                        <i class="fa fa-arrow-up" aria-hidden="true"></i>
                                        </a>
                                    @endif
                                    <a href="{{ url('/blog/edit/'.$blog->id) }}" class="btn btn-primary btn-xs" title="Edit Blog">
                                        <i class="fa fa-edit" aria-hidden="true"></i>
                                    </a>
                                    <a href="{{ url('/blog/delete/'.$blog->id) }}" onclick="confirm('Are You Sure You Want To Delete This !!')" class="btn btn-danger btn-xs" title="Delete Blog">
                                        <i class="fa fa-trash" aria-hidden="true"></i>
                                    </a>
                                </td>
                            </tr>
                                <?php $i++; ?>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection