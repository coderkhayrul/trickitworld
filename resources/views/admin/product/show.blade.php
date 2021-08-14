@extends('admin.admin_master')

@section('title')
Admin Panel || Product Show
@endsection

@section('content')

<div class="col-12 mb-4">
    <div class="card border-light shadow-sm">
        <div class="card-header">
            <div class="row align-items-center">
                <div class="col">
                    <h2 class="h5">Product Create</h2>
                </div>
                <div class="col text-right">
                    <a href="{{ route('product.index') }}" class="btn btn-sm btn-primary"><i
                            class="fas fa-angle-double-left"></i> Back</a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="row mb-4">
                <div class="col-lg-12 col-sm-12">
                    <!-- Form -->
                    <div class="mb-4">
                        <label class="my-1 mr-2" for="country">Category Name</label>
                        <select disabled class="form-select" id="category_id" name="category_id"
                            aria-label="Default select example">
                            <option selected disabled>{{ $product->category->name_en }}</option>
                        </select>

                    </div>
                    <!-- End of Form -->
                </div>
                <div class="col-lg-6 col-sm-6">
                    <!-- Form -->
                    <label for="name">Name English</label>
                    <input disabled type="text" name="name_en" class="form-control" value="{{ $product->name_en }}"
                        placeholder="Enter The Product Name">

                    <!-- End of Form -->
                </div>
                <div class="col-lg-6 col-sm-6">
                    <!-- Form -->
                    <label for="name">Name Bangla</label>
                    <input disabled type="text" name="name_ban" class="form-control" value="{{ $product->name_ban }}"
                        placeholder="পণ্যের নাম লিখুন">

                    <!-- End of Form -->
                </div>

                <div class="col-lg-6 col-sm-6 mt-2">
                    <!-- Form -->
                    <div class="mb-3">
                        <label for="formFile" class="form-label">Thambnail Image</label>
                        <br>
                        <img style=" width:120px; height: 70px;" src="{{ asset($product->thambnail_image) }}" alt="">
                    </div>
                    <!-- End of Form -->
                </div>
                <div class="col-lg-6 col-sm-6 mt-2">
                    <!-- Form -->
                    <div class="mb-3">
                        <label for="formFile" class="form-label">Banner Image</label>
                        <br>
                        <img style=" width:120px; height: 70px;" src="{{ asset($product->banner_image) }}" alt="">
                    </div>
                    <!-- End of Form -->
                </div>

                <div class="col-lg-6 col-sm-6">
                    <!-- Form -->
                    <label for="textarea">Short Description English</label>
                    <textarea disabled name="short_description_en"
                        class="form-control"
                        placeholder="Enter your message..." id="textarea" rows="5">{{ $product->short_description_en }}</textarea>
                    <!-- End of Form -->
                </div>
                <div class="col-lg-6 col-sm-6">
                    <!-- Form -->
                    <label for="textarea">Short Description Bangla</label>
                    <textarea disabled name="short_description_en"
                        class="form-control"
                        placeholder="Enter your message..." id="textarea" rows="5">{{ $product->short_description_ban }}</textarea>
                    <!-- End of Form -->
                </div>

                <div class="col-lg-12 col-sm-6 mt-2">
                    <!-- Form -->
                    <label for="textarea">Long Description English</label>
                    <textarea disabled id="editor1" class="form-control" name="long_description_ban" rows="10" cols="80">{!! $product->long_description_en !!}</textarea>

                    <!-- End of Form -->
                </div>

                <div class="col-lg-12 col-sm-6 mt-2">
                    <!-- Form -->
                    <label for="textarea">Long Description Bangla</label>
                    <textarea disabled id="editor2" class="form-control" name="long_description_ban" rows="10" cols="80">{!! $product->long_description_ban !!}</textarea>
                    <!-- End of Form -->
                </div>
            </div>
        </div>
    </div>
</div>
@section('custrom_script')
<!-- CK EDITOR -->
<script src="{{ asset('backend') }}/assets/custrom_editor/ckeditor/ckeditor.js"></script>
<script src="{{ asset('backend') }}/assets/custrom_editor/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.js"></script>
<script src="{{ asset('backend') }}/assets/custrom_editor/editor.js"></script>
@endsection

@endsection
