@extends('admin.admin_master')

@section('title')
Admin Panel || Products
@endsection

@section('content')


<div class="col-12 mb-4">
    <div class="card border-light shadow-sm">
        <div class="card-header">
            <div class="row align-items-center">
                <div class="col">
                    <h2 class="h5">Products(<span class="text-danger">{{ count($products) }}</span>)</h2>
                </div>
                <div class="col text-right">
                    <a href="{{ route('product.create') }}" class="btn btn-sm btn-success"><i class="fas fa-plus"></i>
                        New Product</a>
                </div>
            </div>
        </div>
        <div class="table-responsive mt-2">
            <table id="table_id" class="display">
                <thead>
                    <tr>
                        <th>Image</th>
                        <th>Category Name</th>
                        <th>Name English</th>
                        <th>Name Bangla</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($products as $product)
                    <tr class="text-center">
                        <td width="10%"><img style=" width:60px; height: 50px;"
                                src="{{ asset($product->thambnail_image) }}" alt=""></td>
                        <td width="10%">{{ $product->category->name_en }}</td>
                        <td width="25%">{{ $product->name_en }}</td>
                        <td width="25%">{{ $product->name_ban }}</td>
                        <td width="5%">
                            @if ($product->status == 1)
                            <a href="{{ route('product.disable',$product->id) }}">
                                <span class="badge bg-success">Active</span>
                            </a>
                            @else
                            <a href="{{ route('product.enable',$product->id) }}">
                                <span class="badge bg-danger">InActive</span>
                            </a>
                            @endif
                        </td>
                        <td class="d-flex justify-content-center">
                            <a href="{{ route('product.show',$product->id) }}" class="btn btn-success btn-sm mr-2"><i
                                    class="fas fa-eye"></i></a>
                            <a href="{{ route('product.edit',$product->id) }}" class="btn btn-info btn-sm mr-2"><i
                                    class="fas fa-edit"></i></a>

                            <form action="{{ route('product.destroy',$product->id) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger btn-sm" type="submit"><i class="fas fa-trash"></i></button>
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
