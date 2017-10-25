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
                                <th>Customer Id</th>
                                <th>Customer Name</th>
                                <th>Customer Comment</th>
                                <th>Publication Status</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php $i=1; ?>
                            @foreach($comments as $comment)
                                <tr>
                                    <td>{{ $i }}</td>
                                    <td>{{ $comment->customer_id }}</td>
                                    <td>{{ $comment->fullName }}</td>
                                    <td>{{ $comment->customer_comment }}</td>
                                    <td>{{ $comment->publication_status == 1 ? 'Published' : 'Unpublished' }}</td>
                                    <td class="center">
                                            <a href="{{ url('/comment/details/'.$comment->id) }}" class="btn btn-info btn-xs" title="View Comment">
                                                <i class="fa fa-search-plus" aria-hidden="true"></i>
                                            </a>
                                        @if($comment->publication_status == 1)

                                        <a href="{{ url('/comment/unpublished/'.$comment->id) }}" class="btn btn-success btn-xs" title="Published Comment">
                                                <i class="fa fa-arrow-up" aria-hidden="true"></i>
                                            </a>
                                            @else
                                            <a href="{{ url('/comment/published/'.$comment->id) }}" class="btn btn-warning btn-xs" title="Unpublished Comment">
                                                <i class="fa fa-arrow-up" aria-hidden="true"></i>
                                            </a>
                                        @endif

                                        <a href="{{ url('/comment/delete/'.$comment->id) }}" onclick="confirm('Are you Sure you Want To delete this!!')" class="btn btn-danger btn-xs" title="Delete Comment">
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