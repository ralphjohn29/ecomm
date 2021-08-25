@extends('admin.admin_layouts.main')


@section('page-title', 'Product Categories')
@section('breadcrumb-title', 'All Categories')

@section('create-btn')
    <a href="{{ route('admin.category.create') }}" class="btn btn-info">Create Category</a>
@endsection


@section('content')


    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

@endsection
