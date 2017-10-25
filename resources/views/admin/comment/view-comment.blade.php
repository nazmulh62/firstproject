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
                                <th>Comment ID</th>
                                <td>{{ $commentById->id }}</td>
                            </tr>
                            <tr>
                                <th>Customer ID</th>
                                <td>{{ $commentById->customer_id }}</td>
                            </tr>
                            <tr>
                                <th>Customer Name</th>
                                <td>{{ $commentById->fullName }}</td>
                            </tr>
                            <tr>
                                <th>Customer Comment</th>
                                <td>{{ $commentById->customer_comment }}</td>
                            </tr>

                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection