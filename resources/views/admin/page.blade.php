@extends('admin.admin_master')

@section('title')
Admin Panel || Profile Edit
@endsection

@section('content')

<div class="col-12 mb-4 ml-4">
    <div class="card border-light shadow-sm">
        <div class="card-header">
            <div class="row align-items-center">
                <div class="col">
                    <h2 class="h5">Custrom All Page</h2>
                </div>
            </div>
        </div>
        <div class="card-body bg-white border-light shadow-sm mb-4">

            <form action="{{ route('page.update',$custom_page->id) }}" method="post">
                @csrf
                @method('put')
                <div class="row">
                    <div class="form-group col-6">
                        <!-- Form -->
                        <label for="textarea">About Us Page</label>
                            <textarea id="editor1" name="tiw_about" class="form-control" placeholder="Enter your message..."rows="4">{{ $custom_page->tiw_about }}</textarea>
                        @error('tiw_about')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                        <!-- End of Form -->
                    </div>
                    <div class="form-group col-6">
                        <!-- Form -->
                        <label for="textarea">Copyright Page</label>
                        <textarea id="editor2" name="tiw_copyright" class="form-control" placeholder="Enter your message..." rows="4">{{ $custom_page->tiw_copyright }}</textarea>
                        @error('tiw_copyright')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                        <!-- End of Form -->
                    </div>
                    <div class="form-group col-6">
                        <!-- Form -->
                        <label for="textarea">Privacy & Policy</label>
                        <textarea id="editor3" name="tiw_privacy" class="form-control" placeholder="Enter your message..." rows="4">{{ $custom_page->tiw_privacy }}</textarea>
                        @error('tiw_privacy')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                        <!-- End of Form -->
                    </div>
                    <div class="form-group col-6">
                        <!-- Form -->
                        <label for="textarea">Terms and Conditions</label>
                        <textarea id="editor4" name="tiw_terms" class="form-control" placeholder="Enter your message..." rows="4">{{ $custom_page->tiw_terms }}</textarea>

                        @error('tiw_terms')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                        <!-- End of Form -->
                    </div>
                </div>

                <div class="mt-3 form-group">
                    <button type="submit" class="btn btn-primary"><i class="fas fa-sync"></i> Update Page Setting </button>
                </div>
            </form>
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
