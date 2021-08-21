@extends('admin.admin_master')

@section('title')
Admin Panel || Comment
@endsection

@section('content')


<div class="col-12 mb-4">
    <div class="card border-light shadow-sm">
        <div class="card-header">
            <div class="row align-items-center">
                <div class="col">
                <h2 class="h5">Comments (<span class="text-danger">{{ count($comments) }}</span>)</h2>
                </div>
            </div>
        </div>
        <div class="table-responsive mt-2">
            <table id="table_id" class="display">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Post Name</th>
                        <th>Email</th>
                        <th>Message</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($comments as $comment)
                    <tr>
                        <td>{{ $comment->name }}</td>
                        <td>{{ $comment->name }}</td>
                        <td>{{ $comment->email }}</td>
                        <td>{{ $comment->message }}</td>
                        <td>
                            @if ($comment->status === 1)
                            <a href="{{ route('comment.edit',$comment->id) }}" class="btn btn-success btn-sm mr-2">Approve</a>
                            @else
                            <a href="{{ route('comment.edit',$comment->id) }}" class="btn btn-primary btn-sm mr-2">Pending</a>
                            @endif
                        </td>
                        <td class="d-flex justify-content-center">
                            <form action="{{ route('comment.destroy',$comment->id) }}" method="POST">
                               @csrf
                               @method('delete')
                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
