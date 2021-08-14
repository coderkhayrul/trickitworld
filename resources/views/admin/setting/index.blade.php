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
                    <h2 class="h5">WEBSITE SETTING <i class="fas fa-wrench"></i></h2>
                </div>
                <div class="col text-right">
                    <a href="{{ url('/admin') }}" class="btn btn-sm btn-primary"><i
                            class="fas fa-angle-double-left"></i> Back</a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <form action="{{ route('admin.setting.update',$setting->id) }}" method="post" enctype="multipart/form-data">
                <input type="hidden" name="old_fav_icon" value="{{ $setting->fav_icon}}">
                <input type="hidden" name="old_title_image" value="{{ $setting->title_image}}">
                @csrf
                <div class="row mb-4">
                    <div class="col-lg-6 col-sm-6">
                        <!-- Form -->
                        <label for="name">Website Titel English <i class="fas fa-signature"></i></label>
                        <input type="text" name="website_title_en" class="form-control  @error('website_title_en') is-invalid @enderror"
                            value="{{ $setting->website_title_en }}" placeholder="Enter Your Website Name">
                        @error('website_title_en')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                        <!-- End of Form -->
                    </div>
                    <div class="col-lg-6 col-sm-6">
                        <!-- Form -->
                        <label for="name">Website Titel Bangle <i class="fas fa-signature"></i></label>
                        <input type="text" name="website_title_ban" class="form-control  @error('website_title_ban') is-invalid @enderror"
                            value="{{ $setting->website_title_ban }}" placeholder="আপনার ওয়েবসাইটের নাম লিখুন">
                        @error('website_title_ban')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                        <!-- End of Form -->
                    </div>
                    <div class="col-lg-6 col-sm-6">
                        <!-- Form -->
                        <label for="name">Copyright English <i class="fas fa-copyright"></i> </label>
                        <input type="text" name="copyright_text_en" class="form-control  @error('copyright_text_en') is-invalid @enderror"
                            value="{{ $setting->copyright_text_en }}" placeholder="Enter Your Copyright Name">
                        @error('copyright_text_en')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                        <!-- End of Form -->
                    </div>
                    <div class="col-lg-6 col-sm-6">
                        <!-- Form -->
                        <label for="name">Copyright Bangla <i class="fas fa-copyright"></i> </label>
                        <input type="text" name="copyright_text_ban" class="form-control  @error('copyright_text_ban') is-invalid @enderror"
                            value="{{ $setting->copyright_text_ban }}" placeholder="আপনার কপিরাইট নাম লিখুন">
                        @error('copyright_text_ban')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                        <!-- End of Form -->
                    </div>
                    <div class="col-lg-6 col-sm-6 mt-2">
                        <!-- Form -->
                        <div class="mb-3">
                            <label for="formFile" class="form-label">Website Favicon <span class="text-danger">(32 * 32)</span> px</label>
                            <input name="fav_icon" onChange="mainThamUrl(this)"
                                class="form-control @error('fav_icon') is-invalid @enderror" type="file"
                                id="formFile">
                        </div>
                        @error('fav_icon')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                        <img src="{{ asset($setting->fav_icon) }}" id="mainThmb" alt="">
                        <!-- End of Form -->
                    </div>
                    <div class="col-lg-6 col-sm-6 mt-2">
                        <!-- Form -->
                        <div class="mb-3">
                            <label for="formFile" class="form-label">Website Logo <span class="text-danger">(192 * 45)</span> px</label>
                            <input name="title_image" onChange="mainBannerUrl(this)"
                                class="form-control @error('title_image') is-invalid @enderror" type="file"
                                id="formFile">
                        </div>
                        @error('title_image')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                        <img src="{{ asset($setting->title_image) }}" id="mainBanner" alt="">
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
@endsection
