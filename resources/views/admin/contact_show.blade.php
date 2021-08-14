@extends('admin.admin_master')

@section('title')
Admin Panel || Product Show
@endsection

@section('content')

<div class="col-12 mb-4">
    <div class="card border-light shadow-sm">
        <div class="card-header">
            <div class="row align-items-center">
                <div class="col">
                    <h2 class="h5">Contact Message</h2>
                </div>
                <div class="col text-right">
                    <a href="{{ route('all.contact') }}" class="btn btn-sm btn-primary"><i
                            class="fas fa-angle-double-left"></i> Back</a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="row mb-4">
                <div class="col-lg-12 col-sm-6">
                    <!-- Form -->
                    <h2>{{ $contact->name }} Message</h2>
                    <textarea disabled name="short_description_en"
                        class="form-control"
                        id="textarea" rows="15">{{ $contact->message }}</textarea>
                    <!-- End of Form -->
                </div>
            </div>
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
