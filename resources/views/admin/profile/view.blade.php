@extends('admin.admin_master')

@section('title')
Admin Panel || My Profile
@endsection

@section('content')


<div class="col-12 mb-4">
    <div class="card border-light shadow-sm">
        <div class="card-header">
            <div class="row align-items-center">
                <div class="col">
                    <h2 class="h5">Admin Profile View</h2>
                </div>
                <div class="col text-right">
                    <a href="{{ route('profile.edit',$profile->id) }}" class="btn btn-sm btn-primary"><i class="fas fa-user-edit"></i> Edit Profile</a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-12 mb-4">
                    <div class="card border-light text-center p-0">
                        <div class="profile-cover rounded-top" data-background="{{ asset('default/admin/profile-cover.jpg') }}" style="background: url({{ asset('default/admin/profile-cover.jpg') }});"></div>
                        <div class="card-body pb-5">
                            <img src="{{ $profile->profile_image != NULL ? asset($profile->profile_image) : asset('default/admin/admin_default_bg.png') }}" class="user-avatar large-avatar rounded-circle mx-auto mt-n7 mb-4" alt="Neil Portrait">
                            <h4 class="h3">{{ $profile->name }}</h4>
                            <h5 class="font-weight-normal">{{ $profile->profession }}</h5>
                            <p class="text-gray mb-4">{{ $profile->address }}</p>
                            <a class="btn btn-sm btn-primary mr-2" href="#"><span class="fas fa-user-plus mr-1"></span> Connect</a>
                            <a class="btn btn-sm btn-secondary" href="#">Send Message</a>
                        </div>
                     </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
