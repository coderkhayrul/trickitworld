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
                    <h2 class="h5">Contact Information </h2>

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
            <form action="{{ route('setting.contact.update',$setting->id) }}" method="post">
                @csrf
                <div class="row mb-4">
                    <div class="col-lg-6 col-sm-6">
                        <!-- Form -->
                        <label for="name">Address English <i class="fas fa-home"></i></label>
                        <input type="text" name="address_en" class="form-control  @error('address_en') is-invalid @enderror"
                            value="{{ $setting->address_en }}" placeholder="House No 08, Ro ad No 08 Araihazar">
                        @error('address_en')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                        <!-- End of Form -->
                    </div>
                    <div class="col-lg-6 col-sm-6">
                        <!-- Form -->
                        <label for="name">Address Bangla <i class="fas fa-home"></i></label>
                        <input type="text" name="address_ban" class="form-control  @error('address_ban') is-invalid @enderror"
                            value="{{ $setting->address_ban }}" placeholder="বাড়ি নম্বর 08, রোড নং 08 আড়াইহাজার">
                        @error('address_ban')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                        <!-- End of Form -->
                    </div>
                    <div class="col-lg-6 col-sm-6">
                        <!-- Form -->
                        <label for="name">Email <i class="fas fa-at"></i></label>
                        <input type="text" name="email" class="form-control  @error('email') is-invalid @enderror"
                            value="{{ $setting->email }}" placeholder="username@gmail.com">
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                        <!-- End of Form -->
                    </div>

                    <div class="col-lg-6 col-sm-6">
                        <!-- Form -->
                        <label for="name">Phone English <i class="fas fa-mobile-alt"></i></label>
                        <input type="text" name="phone_en" class="form-control  @error('phone_en') is-invalid @enderror"
                            value="{{ $setting->phone_en }}" placeholder="+8801835061968">
                        @error('phone_en')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                        <!-- End of Form -->
                    </div>
                    <div class="col-lg-6 col-sm-6">
                        <!-- Form -->
                        <label for="name">Phone Bangla <i class="fas fa-mobile-alt"></i></label>
                        <input type="text" name="phone_ban" class="form-control  @error('phone_ban') is-invalid @enderror"
                            value="{{ $setting->phone_ban }}" placeholder="+৮৮০১৮৩৫০৬১৯৬৮">
                        @error('phone_ban')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                        <!-- End of Form -->
                    </div>
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
