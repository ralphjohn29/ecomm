@extends('admin.admin_layouts.main')


@section('page-title', 'Product Categories')
@section('breadcrumb-title', 'Create Categories')

@section('content')
    <section id="basic-form-layouts">
        <div class="row match-height">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title" id="basic-layout-form">Create Category</h4>
                        <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                        <div class="heading-elements">
                            <ul class="list-inline mb-0">
                                <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                            </ul>
                        </div>


                    </div>
                    <div class="card-content collapse show">
                        <div class="card-body">
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif

                            <div class="card-text">
                                <p>fields with <span class="danger">*</span> are required.</p>
                            </div>

                            <form method="post" action="{{ route('admin.category.store') }}" class="form"
                                  enctype="multipart/form-data">
                                @csrf
                                <div class="form-body">
                                    <div class="form-group">
                                        <label for="categoryName">Category Name <span class="danger">*</span></label>
                                        <input type="text" id="categoryName" class="form-control" placeholder="Name"
                                               name="category_name">
                                    </div>

                                    <div class="form-group">
                                        <label for="category_description">Description <span
                                                class="danger">*</span></label>
                                        <textarea id="category_description" rows="5" class="form-control"
                                                  name="category_description" placeholder="About Category"></textarea>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-md-3" for="image">Select Image<span
                                                class="danger">*</span><br> ( size: 20x20 & max:256kb )</label>
                                        <div class="col-md-9 ">
                                            <label id="projectinput8" class="file">
                                                <input type="file" id="image" name="image">
                                                <span class="file-custom"></span>
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-actions">

                                    <a href="{{ route('admin.category') }}" class="btn btn-outline-warning mr-1">
                                        <i class="ft-x">Cancel</i>
                                    </a>

                                    <button type="submit" class="btn btn-primary">
                                        <i class="la la-check-square-o"></i> Save
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

@endsection
