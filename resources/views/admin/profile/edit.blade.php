@extends('admin.admin_master')

@section('title')
Admin Panel || Profile Edit
@endsection

@section('content')


<div class="col-12 mb-4">
    <div class="card border-light shadow-sm">
        <div class="card-header">
            <div class="row align-items-center">
                <div class="col">
                    <h2 class="h5">Admin Profile Edit</h2>
                </div>
                <div class="col text-right">
                    <a href="{{ route('profile.index') }}" class="btn btn-sm btn-primary"><i class="fas fa-angle-left"></i> Back Profile</a>
                </div>
            </div>
        </div>
        <div class="card-body bg-white border-light shadow-sm mb-4">
            <h2 class="h5 mb-4">General information</h2>
            <form action="{{ route('profile.update', $profile->id) }}" method="post">
                <input type="hidden" name="id" value="{{ $profile->id }}">
                @csrf
                @method('put')
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <div>
                            <label for="first_name">Name</label>
                            <input class="form-control" name="name" value="{{ $profile->name }}" id="name" type="text" placeholder="Enter your name" required="">
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input class="form-control" name="email" value="{{ $profile->email }}" id="email" type="email" placeholder="name@company.com" required="">
                        </div>
                    </div>
                </div>
                <div class="row align-items-center">
                    <div class="col-md-6 mb-3">
                        <div class="form-group">
                            <label for="email">Profession</label>
                            <input class="form-control" name="profession" value="{{ $profile->profession }}" id="email" type="text" placeholder="Enter Your Profession" required="">
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="gender">Gender</label>
                        <select class="form-select mb-0" name="gender" id="gender" aria-label="Gender select example">
                            <option selected="" disabled>Gender</option>
                            <option value="male" {{ $profile->gender == 'male' ? 'selected' : ''}}>Male</option>
                            <option value="female" {{ $profile->gender == 'female' ? 'selected' : ''}}>Female</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <div class="form-group">
                            <label for="phone">Phone</label>
                            <input class="form-control" id="phone" value="{{ $profile->phone }}" name="phone" type="number" placeholder="+88***********" required="">
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <div class="form-group">
                            <label for="address">Address</label>
                            <input class="form-control" id="address"  name="address" value="{{ $profile->address }}" type="text" placeholder="Enter your home address" required="">
                        </div>
                    </div>
                </div>
                <div class="mt-3">
                    <button type="submit" class="btn btn-primary"><i class="fas fa-sync"></i> Update All</button>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="col-12 mb-4 ml-4">
    <div class="card border-light shadow-sm">
        <div class="card-header">
            <div class="row align-items-center">
                <div class="col">
                    <h2 class="h5">Admin Profile Image</h2>
                </div>
            </div>
        </div>
        <div class="card-body bg-white border-light shadow-sm mb-4">
            <!-- Avatar -->
            <div class="user-avatar xl-avatar mb-3">
                <img class="rounded" id="mainThmb" src="{{ $profile->profile_image != NULL ? asset($profile->profile_image) : asset('default/admin/admin_default.png') }}" alt="change avatar">
            </div>
            <form action="{{ route('admin.profile.image.update') }}" method="post" enctype="multipart/form-data">
                <input type="hidden" name="old_image">
                <input type="hidden" name="id" value="{{ $profile->id }}">
                @csrf
                <div class="form-group">
                    <input name="profile_image" onChange="mainThamUrl(this)"
                        class="form-control @error('thambnail_image') is-invalid @enderror" type="file"
                        id="formFile">
                    @error('profile_image')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="mt-3 form-group">
                    <button type="submit" class="btn btn-primary btn-sm"><i class="fas fa-sync"></i> Update Image</button>
                </div>
            </form>
        </div>
    </div>
</div>

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
</script>
@endsection
