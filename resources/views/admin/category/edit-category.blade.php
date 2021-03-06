@extends('admin.master')

@section('body')
    <div class="row">
        <div class="col-lg-12">
            <br/>
            {{ Session::get('message') }}
            <hr/>
            <form class="form-horizontal" action="{{ url('/category/update') }}" method="POST" enctype="multipart/form-data">
                {{csrf_field()}}
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-3 control-label">Category Name</label>
                    <div class="col-sm-9">
                        <input type="text" value="{{ $categoryById->category_name }}" name="category_name" class="form-control" id="inputEmail3" placeholder="Category Here">
                        <input type="hidden" value="{{ $categoryById->id }}" name="category_id" class="form-control" id="inputEmail3" placeholder="Category Here">

                    </div>
                </div>
                <div class="form-group">
                    <label for="inputPassword3" class="col-sm-3 control-label">Category Description</label>
                    <div class="col-sm-9">
                        <textarea class="form-control"  name="category_description" placeholder="category Description Here">{{ $categoryById->category_description }}</textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputPassword3" class="col-sm-3 control-label">Publication Status</label>
                    <div class="col-sm-9">
                        <select class="form-control"  name="publication_status">
                            <option value="1">Published</option>
                            <option value="0">Unpublished</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-3 col-sm-10">
                        <button type="submit" class="btn btn-primary">Update Category</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection