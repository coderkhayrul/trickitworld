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
                    <h2 class="h5">Social Link </h2>
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
            <form action="{{ route('setting.social.update',$setting->id) }}" method="post">
                @csrf
                <input type="hidden" name="id" value="{{$setting->id}}"/>
                <div class="row mb-4">
                    <div class="col-lg-6 col-sm-6">
                        <!-- Form -->
                        <label for="name">Facebook Url <i class="fas fa-link"></i></label>
                        <input type="text" name="facebook_url" class="form-control  @error('facebook_url') is-invalid @enderror"
                            value="{{ $setting->facebook_url }}" placeholder="https://www.facebook.com">
                        @error('facebook_url')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                        <!-- End of Form -->
                    </div>
                    <div class="col-lg-6 col-sm-6">
                        <!-- Form -->
                        <label for="name">Youtube Url <i class="fas fa-link"></i></label>
                        <input type="text" name="youtube_url" class="form-control  @error('youtube_url') is-invalid @enderror"
                            value="{{ $setting->youtube_url }}" placeholder="https://www.youtube.com">
                        @error('youtube_url')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                        <!-- End of Form -->
                    </div>

                    <div class="col-lg-6 col-sm-6">
                        <!-- Form -->
                        <label for="name">Twitter Url <i class="fas fa-link"></i></label>
                        <input type="text" name="twitter_url" class="form-control  @error('twitter_url') is-invalid @enderror"
                            value="{{ $setting->twitter_url }}" placeholder="https://www.twitter.com">
                        @error('twitter_url')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                        <!-- End of Form -->
                    </div>
                    <div class="col-lg-6 col-sm-6">
                        <!-- Form -->
                        <label for="name">Pinterest Url <i class="fas fa-link"></i></label>
                        <input type="text" name="pinterest_url" class="form-control  @error('pinterest_url') is-invalid @enderror"
                            value="{{ $setting->pinterest_url }}" placeholder="https://www.pinterest.com">
                        @error('pinterest_url')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                        <!-- End of Form -->
                    </div>
                    <!-- Form -->
                    <div class="col-lg-12 col-sm-6 mt-2">
                        <button class="btn btn-success" type="submit"><i class="fas fa-sync"></i> Update Settings</button>
                    </div>
                    <!-- End of Form -->
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
