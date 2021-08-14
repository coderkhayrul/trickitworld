@extends('admin.admin_master')

@section('title')
Admin Panel || Custrom Ads
@endsection

@section('content')

<div class="col-12 mb-4 ml-4">
    <div class="card border-light shadow-sm">
        <div class="card-header">
            <div class="row align-items-center">
                <div class="col">
                    <h2 class="h5">Custrom Ads Code Here</h2>
                </div>
            </div>
        </div>
        <div class="card-body bg-white border-light shadow-sm mb-4">

            <form action="{{ route('ads.update',$ads->id) }}" method="post">
                @csrf
                @method('put')
                <div class="row">
                    <div class="form-group col-6">
                        <!-- Form -->
                        <label for="textarea">Header Ads <span class="text-danger">(734 * 90)</span></label>
                            <textarea name="header_ads" class="form-control" placeholder="Enter your message..." id="textarea" rows="4">{{ $ads->header_ads }}</textarea>
                        @error('header_ads')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                        <!-- End of Form -->
                    </div>
                    <div class="form-group col-6">
                        <!-- Form -->
                        <label for="textarea">Sider Bar Top Ads <span class="text-danger">(399 * 294)</span></label>
                        <textarea name="top_sidebar_ads" class="form-control" placeholder="Enter your message..." id="textarea" rows="4">{{ $ads->top_sidebar_ads }}</textarea>
                        @error('top_sidebar_ads')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                        <!-- End of Form -->
                    </div>
                    <div class="form-group col-6">
                        <!-- Form -->
                        <label for="textarea">Sidebar Mid Ads <span class="text-danger">(370 * 451)</label>
                        <textarea name="mid_sidebar_ads" class="form-control" placeholder="Enter your message..." id="textarea" rows="4">{{ $ads->mid_sidebar_ads }}</textarea>
                        @error('mid_sidebar_ads')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                        <!-- End of Form -->
                    </div>
                    <div class="form-group col-6">
                        <!-- Form -->
                        <label for="textarea">Sidebar Sami Ads <span class="text-danger">(370 * 272)</span></label>
                        <textarea name="sami_sidebar_ads" class="form-control" placeholder="Enter your message..." id="textarea" rows="4">{{ $ads->sami_sidebar_ads }}</textarea>

                        @error('sami_sidebar_ads')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                        <!-- End of Form -->
                    </div>
                    <div class="form-group col-12">
                        <!-- Form -->
                        <label for="textarea">Big Footer Ads <span class="text-danger">(1173 * 282)</span></label>
                        <textarea name="footer_ads" class="form-control" placeholder="Enter your message..." id="textarea" rows="4">{{ $ads->footer_ads }}</textarea>

                        @error('footer_ads')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                        <!-- End of Form -->
                    </div>
                </div>

                <div class="mt-3 form-group">
                    <button type="submit" class="btn btn-danger"><i class="fas fa-save"></i> Update Custrom Setting </button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
