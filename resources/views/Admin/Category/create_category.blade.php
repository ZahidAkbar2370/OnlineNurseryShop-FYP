@extends('Admin.admin_layout')
@section('content')
    <div class="page-wrapper">
        <div class="content">
            <div class="row">
                <div class="col-lg-12">
                    <h4 class="page-title">Create category</h4>
                </div>
            </div>
            <form action="{{ URL::to('admin/save-category') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">

                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Category Name <span class="text-danger">*</span></label>
                            <input class="form-control" type="text" name="category_name" value="{{ old('category_name') }}" placeholder="Enter Category Name" required>
                        </div>

                        @error('category_name')
                            <span class="text-danger">{{ $errors->first('category_name') }}</span>
                        @enderror
                    </div>

                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Image</label>
                            <input class="form-control" type="file" name="image" value="{{ old('image') }}">

                            @error('image')
                                <span class="text-danger">{{ $errors->first('image') }}</span>
                            @enderror
                        </div>
                    </div>

                </div>
                <div class="m-t-20 text-center">
                    <button class="btn btn-primary submit-btn" onclick="return confirm('Are you Sure to Add Category')">Save Category</button>
                </div>
        </div>
        </form>
    </div>
@endsection
