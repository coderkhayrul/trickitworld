@extends('admin.admin_master')

@section('title')
Admin Panel || Product Create
@endsection
@section('custrom_style')
<script src="https://cdn.ckeditor.com/ckeditor5/29.0.0/classic/ckeditor.js"></script>
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


            <form action="{{ route('product.store') }}" method="post" enctype="multipart/form-data">
                <div class="row mb-4">
                    @csrf
                    <div class="col-lg-12 col-sm-12">
                        <!-- Form -->
                        <div class="mb-4">
                            <label class="my-1 mr-2" for="country">Select Category</label>
                            <select class="form-select @error('category_id') is-invalid @enderror" id="category_id"
                                name="category_id" aria-label="Default select example">
                                <option selected disabled>Select Category</option>
                                @foreach ($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name_en }}</option>
                                @endforeach
                            </select>
                            @error('category_id')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <!-- End of Form -->
                    </div>
                    <div class="col-lg-6 col-sm-6">
                        <!-- Form -->
                        <label for="name">Name English</label>
                        <input type="text" name="name_en" class="form-control  @error('name_en') is-invalid @enderror"
                            value="{{ old('name_en') }}" placeholder="Enter The Product Name">
                        @error('name_en')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                        <!-- End of Form -->
                    </div>
                    <div class="col-lg-6 col-sm-6">
                        <!-- Form -->
                        <label for="name">Name Bangla</label>
                        <input type="text" name="name_ban" class="form-control  @error('name_ban') is-invalid @enderror"
                            value="{{ old('name_ban') }}" placeholder="পণ্যের নাম লিখুন">
                        @error('name_en')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                        <!-- End of Form -->
                    </div>

                    <div class="col-lg-6 col-sm-6 mt-2">
                        <!-- Form -->
                        <div class="mb-3">
                            <label for="formFile" class="form-label">Thambnail Image <span class="text-danger">(371 * 221)</span>px</label>
                            <input name="thambnail_image" onChange="mainThamUrl(this)"
                                class="form-control @error('thambnail_image') is-invalid @enderror" type="file"
                                id="formFile">
                        </div>
                        @error('thambnail_image')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                        <img src="" id="mainThmb" alt="">
                        <!-- End of Form -->
                    </div>
                    <div class="col-lg-6 col-sm-6 mt-2">
                        <!-- Form -->
                        <div class="mb-3">
                            <label for="formFile" class="form-label">Banner Image <span class="text-danger">(770 * 294)</span>px</label>
                            <input name="banner_image" onChange="mainBannerUrl(this)"
                                class="form-control @error('banner_image') is-invalid @enderror" type="file"
                                id="formFile">
                        </div>
                        @error('banner_image')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                        <img src="" id="mainBanner" alt="">
                        <!-- End of Form -->
                    </div>

                    <div class="col-lg-6 col-sm-6">
                        <!-- Form -->
                        <label for="textarea">Short Description English</label>
                        <textarea name="short_description_en"
                            class="form-control @error('short_description_en') is-invalid @enderror"
                            placeholder="Enter your message..." id="textarea" rows="4"></textarea>
                        @error('short_description_en')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                        <!-- End of Form -->
                    </div>
                    <div class="col-lg-6 col-sm-6">
                        <!-- Form -->
                        <label for="textarea">Short Description Bangla</label>
                        <textarea name="short_description_ban"
                            class="form-control @error('short_description_ban') is-invalid @enderror"
                            placeholder="Enter your message..." id="textarea" rows="4"></textarea>
                        @error('short_description_ban')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                        <!-- End of Form -->
                    </div>

                    <div class="col-lg-12 col-sm-6 mt-2">
                        <!-- Form -->
                        <label for="textarea">Long Description English</label>
                        <textarea id="editor" class="form-control @error('long_description_en') is-invalid @enderror"
                            name="long_description_en" rows="10" cols="80"></textarea>

                            @error('long_description_en')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                        <!-- End of Form -->
                    </div>

                    <div class="col-lg-12 col-sm-6 mt-2">
                        <!-- Form -->
                        <label for="textarea">Long Description Bangla</label>
                        <textarea id="editor1" class="form-control @error('long_description_ban') is-invalid @enderror"
                            name="long_description_ban" rows="10" cols="80"></textarea>

                            @error('long_description_ban')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                        <!-- End of Form -->
                    </div>
                    <!-- Form -->
                    <div class="col-lg-12 col-sm-6 mt-2">
                        <button class="btn btn-success" type="submit"><i class="fas fa-save"></i> Add Product</button>
                    </div>
                    <!-- End of Form -->
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Live Thumbnail Image Show -->
<script type="text/javascript">
    function mainThamUrl(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $('#mainThmb').attr('src', e.target.result).width(80).height(80);
            };
            reader.readAsDataURL(input.files[0]);
        }
    }

    function mainBannerUrl(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $('#mainBanner').attr('src', e.target.result).width(80).height(80);
            };
            reader.readAsDataURL(input.files[0]);
        }
    }

</script>

@section('custrom_script')
<!-- CK EDITOR -->
{{-- <script src="{{ asset('backend') }}/assets/custrom_editor/ckeditor/ckeditor.js"></script>
<script src="{{ asset('backend') }}/assets/custrom_editor/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.js"></script>
<script src="{{ asset('backend') }}/assets/custrom_editor/editor_product.js"></script> --}}
@endsection

<script>
    ClassicEditor
            .create( document.querySelector( '#editor' ) )
            .then( editor => {
                    console.log( editor );
            } )
            .catch( error => {
                    console.error( error );
            } );

    ClassicEditor
                        .create( document.querySelector( '#editor1' ) )
                        .then( editor => {
                                console.log( editor );
                        } )
                        .catch( error => {
                                console.error( error );
                        } );
</script>

@endsection
