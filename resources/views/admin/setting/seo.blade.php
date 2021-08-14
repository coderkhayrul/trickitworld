@extends('admin.admin_master')

@section('title')
Admin Panel || Setting
@endsection

@section('content')

<div class="col-12 mb-4">
    <div class="card border-light shadow-sm">
        <div class="card-header">
            <div class="row align-items-center">
                <div class="col">
                    <h2 class="h5">SEO SETTING <i class="fas fa-leaf"></i> </h2>
                </div>
                <div class="col text-right">
                    <div class="col text-right">
                        <a href="{{ url('/admin') }}" class="btn btn-sm btn-primary"><i
                                class="fas fa-angle-double-left"></i> Back</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-body">
            <form action="{{ route('setting.seo.update',$setting->id) }}" method="post">
                @csrf
                <div class="row mb-4">
                    <div class="col-lg-6 col-sm-6">
                        <!-- Form -->
                        <label for="name">Meta Title English</label>
                        <input type="text" name="meta_title_en" class="form-control  @error('meta_title_en') is-invalid @enderror"
                            value="{{ $setting->meta_title_en }}" placeholder="Meta Title English">
                        @error('meta_title_en')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                        <!-- End of Form -->
                    </div>
                    <div class="col-lg-6 col-sm-6">
                        <!-- Form -->
                        <label for="name">Meta Title Bangla</label>
                        <input type="text" name="meta_title_ban" class="form-control  @error('meta_title_ban') is-invalid @enderror"
                            value="{{ $setting->meta_title_ban }}" placeholder="মেটা টাইটেল বাংলা">
                        @error('meta_title_ban')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                        <!-- End of Form -->
                    </div>
                    <div class="col-lg-6 col-sm-6">
                        <!-- Form -->
                        <label for="name">Meta Description English</label>
                        <textarea type="text" name="meta_description_en" class="form-control  @error('meta_description_en') is-invalid @enderror"
                             placeholder="Meta Description English">{{ $setting->meta_description_en }}</textarea>
                        @error('meta_description_en')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                        <!-- End of Form -->
                    </div>
                    <div class="col-lg-6 col-sm-6">
                        <!-- Form -->
                        <label for="name">Meta Description Bangla</label>
                        <textarea type="text" name="meta_description_ban" class="form-control  @error('meta_description_ban') is-invalid @enderror"
                            placeholder="মেটা ডেসক্রিপশন বাংলা">{{ $setting->meta_description_ban }}</textarea>
                        @error('meta_description_ban')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                        <!-- End of Form -->
                    </div>

                    <div class="col-lg-6 col-sm-6">
                        <!-- Form -->
                        <label for="name">Meta Keywords English</label>
                        <input type="text" name="meta_keyword_en" class="form-control  @error('meta_keyword_en') is-invalid @enderror"
                            value="{{ $setting->meta_keyword_en }}" placeholder="Meta Keywords English">
                        @error('meta_keyword_en')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                        <!-- End of Form -->
                    </div>
                    <div class="col-lg-6 col-sm-6">
                        <!-- Form -->
                        <label for="name">Meta Keywords Bangla</label>
                        <input type="text" name="meta_keyword_ban" class="form-control  @error('meta_keyword_ban') is-invalid @enderror"
                            value="{{ $setting->meta_keyword_ban }}" placeholder="মেটা কিওয়ার্ডস বাংলা">
                        @error('meta_keyword_ban')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                        <!-- End of Form -->
                    </div>
                    <div class="col-lg-6 col-sm-6">
                        <!-- Form -->
                        <label for="name">Meta Author English</label>
                        <input type="text" name="meta_author_en" class="form-control  @error('meta_author_en') is-invalid @enderror"
                            value="{{ $setting->meta_author_en }}" placeholder="Meta Author English">
                        @error('meta_author_en')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                        <!-- End of Form -->
                    </div>
                    <div class="col-lg-6 col-sm-6">
                        <!-- Form -->
                        <label for="name">Meta Author Bangla</label>
                        <input type="text" name="meta_author_ban" class="form-control  @error('meta_author_ban') is-invalid @enderror"
                            value="{{ $setting->meta_author_ban }}" placeholder="মেটা লেখক ইংলিশ">
                        @error('meta_author_ban')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                        <!-- End of Form -->
                    </div>
                    <div class="col-lg-6 col-sm-6">
                        <!-- Form -->
                        <label for="name">Meta Theme Color</label>
                        <input type="text" name="theme_color" class="form-control  @error('theme_color') is-invalid @enderror"
                            value="{{ $setting->theme_color }}" placeholder="Color Code">
                        @error('theme_color')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                        <!-- End of Form -->
                    </div>
                    <!-- Form -->
                    <div class="col-lg-12 col-sm-6 mt-2">
                        <button class="btn btn-success" type="submit"><i class="fas fa-sync"></i> Update Setting</button>
                    </div>
                    <!-- End of Form -->
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
