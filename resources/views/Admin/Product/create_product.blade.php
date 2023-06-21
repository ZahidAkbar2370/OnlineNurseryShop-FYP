@extends('Admin.admin_layout')
@section('content')
    <div class="page-wrapper">
        <div class="content">
            <div class="row">
                <div class="col-lg-12">
                    <h4 class="page-title">Create Product</h4>
                </div>
            </div>
            <form action="{{ URL::to('admin/save-product') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">

                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Item Name <span class="text-danger">*</span></label>
                            <input class="form-control" type="text" name="product_name" value="{{ old('product_name') }}" placeholder="Enter Item Name" required>
                        </div>

                        @error('product_name')
                            <span class="text-danger">{{ $errors->first('product_name') }}</span>
                        @enderror
                    </div>

                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Category Name <span class="text-danger">*</span></label>
                            <select name="category_id" id="" class="form-control" required>
                                <option value="">Select Category</option>
                                @if(!empty($categories))
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                                    @endforeach
                                @endif
                            </select>
                        </div>

                        @error('category_id')
                            <span class="text-danger">{{ $errors->first('category_id') }}</span>
                        @enderror
                    </div>

                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Sale Price <span class="text-danger">*</span></label>
                            <input class="form-control" type="number" name="sale_price" value="{{ old('sale_price') }}" placeholder="Enter Sale Price" required>
                        </div>

                        @error('sale_price')
                            <span class="text-danger">{{ $errors->first('sale_price') }}</span>
                        @enderror
                    </div>

                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Discount Price <span class="text-danger">*</span></label>
                            <input class="form-control" type="number" name="discount_price" value="{{ old('discount_price') }}" placeholder="Enter Sale Price" required>
                        </div>

                        @error('discount_price')
                            <span class="text-danger">{{ $errors->first('discount_price') }}</span>
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

                    {{-- <div class="col-sm-6">
                        <div class="form-group">
                            <label>Discount Price <span class="text-danger">*</span></label>
                            <input class="form-control" type="number" name="discount_price" value="{{ old('discount_price') }}" placeholder="Enter Sale Price" required>
                        </div>

                        @error('discount_price')
                            <span class="text-danger">{{ $errors->first('discount_price') }}</span>
                        @enderror
                    </div> --}}

                    <div class="col-sm-12">
                        <div class="form-group">
                            <label>Description <span class="text-danger">*</span></label>
                            <textarea class="form-control" name="description" id="" cols="30" rows="10" value="{{ old('description') }}" placeholder="Enter Description"></textarea>
                        </div>

                        @error('description')
                            <span class="text-danger">{{ $errors->first('description') }}</span>
                        @enderror
                    </div>

                </div>
                <div class="m-t-20 text-center">
                    <button class="btn btn-primary submit-btn" onclick="return confirm('Are you Sure to Add Product')">Save Product</button>
                </div>
        </div>
        </form>
    </div>
@endsection
