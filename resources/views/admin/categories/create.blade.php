@extends('admin.admin_master')

@section('title')
Admin Panel || Category Create
@endsection

@section('content')

<div class="col-12 mb-4">
    <div class="card border-light shadow-sm">
        <div class="card-header">
            <div class="row align-items-center">
                <div class="col">
                    <h2 class="h5">Category Create</h2>
                </div>
                <div class="col text-right">
                    <a href="{{ route('category.index') }}" class="btn btn-sm btn-primary"><i
                            class="fas fa-angle-double-left"></i> Back</a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <form action="{{ route('category.store') }}" method="post" enctype="multipart/form-data">
                <div class="row">
                    @csrf
                    <div class="col-lg-6 col-sm-6">
                        <!-- Form -->
                        <div class="mb-4">
                            <label for="name">Name English</label>
                            <input type="text" name="name_en"
                                class="form-control  @error('name_en') is-invalid @enderror"
                                value="{{ old('name_en') }}" id="name_en" aria-describedby="nameHelp"
                                placeholder="Enter the category name">
                            @error('name_en')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <!-- End of Form -->
                    </div>
                    <div class="col-lg-6 col-sm-6">
                        <!-- Form -->
                        <div class="mb-4">
                            <label for="name">Name Bangla</label>
                            <input type="text" name="name_ban" class="form-control  @error('name_ban') is-invalid @enderror"
                                value="{{ old('name_ban') }}" id="name_en" aria-describedby="nameHelp"
                                placeholder="ক্যাটাগরি নাম লিখুন">
                            @error('name_ban')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <!-- End of Form -->
                    </div>
                    <div class="col-lg-6 col-sm-6">
                        <div class="mb-4">
                            <!-- Form -->
                            <label for="textarea">Description English</label>
                            <textarea name="description_en"
                                class="form-control @error('description_en') is-invalid @enderror"
                                placeholder="Enter your message..." id="textarea" rows="4"></textarea>
                            @error('description_en')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                            <!-- End of Form -->
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-6">
                        <div class="mb-4">
                            <!-- Form -->
                            <label for="textarea">Description Bangla</label>
                            <textarea name="description_ban"
                                class="form-control @error('description_ban') is-invalid @enderror"
                                placeholder="আপনার বার্তা লিখুন..." id="textarea" rows="4"></textarea>
                            @error('description_ban')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                            <!-- End of Form -->
                        </div>
                    </div>

                    <!-- Form -->
                    <div class="mb-4">
                        <button class="btn btn-success" type="submit"><i class="fas fa-save"></i> Save</button>
                    </div>
                    <!-- End of Form -->
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
