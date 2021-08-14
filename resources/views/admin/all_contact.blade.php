@extends('admin.admin_master')

@section('title')
Admin Panel || Contact
@endsection

@section('content')


<div class="col-12 mb-4">
    <div class="card border-light shadow-sm">
        <div class="card-header">
            <div class="row align-items-center">
                <div class="col">
                <h2 class="h5">Contact User List <span class="text-danger">({{ count($contacts) }})</span> </h2>
                </div>
            </div>
        </div>
        <div class="table-responsive mt-2">
            <table id="table_id" class="display">
                <thead>
                    <tr>
                        <th>User Name</th>
                        <th>User Email</th>
                        <th>Seen</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($contacts as $contact)
                    <tr>
                        <td>{{ $contact->name }}</td>
                        <td>{{ $contact->email }}</td>
                        @if($contact->seen == 'Yes')
                        <td><b class="text-success">YES</b></td>
                        @else
                        <td><b class="text-danger">NO</td>
                        @endif
                        <td class="d-flex justify-content-center">
                            <a href="{{ route('contact.show',$contact->id) }}" class="btn btn-info btn-sm mr-2"><i class="fas fa-eye"></i></a>
                            <a id="delete" href="{{ route('contact.destroy',$contact->id) }}" class="btn btn-danger btn-sm mr-2"> <i class="fas fa-trash"></i></a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
