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

    <div class="row">
        <div id="recent-transactions" class="col-12">
            @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
            @endif
            <div class="card">
                <div class="card-content">
                    <div class="table-responsive">
                        <table id="recent-orders" class="table table-hover table-md mb-0">
                            <thead>
                            <tr>
                                <th class="border-top-0">Category Name</th>
                                <th class="border-top-0">Description</th>
                                <th class="border-top-0">Image</th>
                                <th class="border-top-0">Date Created</th>
                                <th class="border-top-0">Actions</th>
                            </tr>
                            </thead>
                            <tbody>

                            @foreach($categories as $category)

                                <tr>
                                    <td class="text-truncate">{{ $category->category_name }}</td>
                                    <td class="text-truncate">{{  \Illuminate\Support\Str::limit($category->description, 15, '...' ) }}</td>
                                    <td class="text-truncate"><img
                                            src="{{ asset('category/images/'.$category->image) }}" alt="">
                                    </td>
                                    <td class="text-truncate">{{ $category->created_at->diffForHumans() }}</td>
                                    <td><a href="{{ url('admin/category/edit/'.$category->id) }}"
                                           class="btn btn-md btn-warning">Edit</a>
                                    </td>
                                    <td><a href="{{ url('admin/category/delete/'.$category->id) }}"
                                           class="btn btn-md btn-danger"
                                           onclick="return confirm('Are you sure you want to delete the event of {{ $category->category_name }}?')">Delete</a>
                                    </td>
                                    <td>
                                        <div class="custom-control custom-switch">

                                            <input data-id="{{$category->id}}"
                                                   class="toggle-class custom-control-input"
                                                   type="checkbox"
                                                   data-onstyle="success"
                                                   data-offstyle="danger"
                                                   data-toggle="toggle"
                                                   data-on="Active"
                                                   id="event-{{$category->id}}"
                                                   data-off="InActive"
                                                {{ $category->active ? 'checked' : '' }}
                                            >
                                            <label id="event-{{ $category->id }}"
                                                   class="custom-control-label label-event-{{ $category->id }}"
                                                   for="event-{{ $category->id }}">{{ $category->active ? 'Active' : 'Inactive' }}</label>
                                        </div>


                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            {{--page-links--}}
            {{ $categories->links() }}
        </div>
    </div>

    <script>
        $(function () {
            $('.toggle-class').change(function () {
                var status = $(this).prop('checked') == true ? 1 : 0;
                var id = $(this).data('id');

                var label = $('.label-event-' + id);
                if (status) {
                    label.text('Active');
                } else {
                    label.text('Inactive');
                }

                $.ajax({
                    type: "GET",
                    dataType: "json",
                    url: '{{ url('admin/category/change-active') }}',
                    data: {'status': status, 'id': id},
                    success: function (data) {
                        console.log(data.success)
                    }
                });
            })
        })
    </script>

@endsection
