@include('client.component.tablehead')
@include('client.component.header')
@include('client.component.sidebar')

<div class="mainBox m-0 py-0">

    <!-- Add Category -->
    <div class="card innerBox mode1  p-0">
        <div class="card-body">
            <h5 class="card-title w-100 text-bold">Add Category<span class="float-right" style="cursor:pointer;"
                    onclick="closeMe()"><i class="fa fa-close"></i></span></h5><br>
            <hr>
            <h6 class="card-subtitle mb-2 text-muted small">The field labels marked with * are required input
                fields.</h6>
            <form action="{{ route('save-product-category') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-12 col-md-6 form-group">
                        <label for="catName">Name *</label>
                        <input type="text" class="form-control" name="name" id="catName">
                    </div>
                    <div class="col-12 col-md-6 form-group">
                        <label for="img">Image</label>
                        <input type="file" accept="image/*" class="form-control" name="catimg" id="img">
                    </div>
                    <div class="col-12 col-md-6 form-group">
                        <label for="parent">Parent Category *</label>
                        <select name="parent_category" id="parent" class="form-control">
                            <option value="dis" selected disabled>No Parent</option>
                            @foreach ($category as $categories)
                                <option value="{{ $categories->name }}">{{ $categories->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-12 text-left">
                        <button class="btn-add ml-1 ">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>




    <div class="card innerBox mode1 p-0 col-12 col-md-8 col-lg-6 mx-auto">
    <div class="card-body">

        <h5 class="card-title font-weight-bold d-flex justify-content-between align-items-center">
            Add Category
            <span style="cursor:pointer;" onclick="closeMe()">
                <i class="fa fa-close"></i>
            </span>
        </h5>

        <hr>

        <h6 class="card-subtitle mb-3 text-muted small">
            The field labels marked with * are required input fields.
        </h6>

        <form action="{{ route('save-product-category') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="form-row">

                <div class="col-12 col-md-6 form-group">
                    <label for="catName">Name *</label>
                    <input type="text" class="form-control" name="name" id="catName">
                </div>

                <div class="col-12 col-md-6 form-group">
                    <label for="img">Image</label>
                    <input type="file" accept="image/*" class="form-control" name="catimg" id="img">
                </div>

                <div class="col-12 col-md-6 form-group">
                    <label for="parent">Parent Category *</label>
                    <select name="parent_category" id="parent" class="form-control">
                        <option value="dis" selected disabled>No Parent</option>
                        @foreach ($category as $categories)
                            <option value="{{ $categories->name }}">{{ $categories->name }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="col-12">
                    <button class="btn btn-primary btn-block">Submit</button>
                </div>

            </div>

        </form>
    </div>
</div>

</div>


<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-bold" id="exampleModalLongTitle">Update Category</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <h6 class="card-subtitle mb-2 text-muted small">The field labels marked with * are required input
                    fields.</h6>
                <form action="{{ route('update-product-category') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <input type="hidden" class="form-control" id="category_id" name="category_id" required>
                    <div class="row">
                        <div class="col-12 col-md-6 form-group">
                            <label for="catName">Name *</label>
                            <input type="text" class="form-control" name="name" id="name">
                        </div>
                        <div class="col-12 col-md-6 form-group">
                            <label for="img">Image</label>
                            <input type="file" accept="image/*" class="form-control" name="catimg" id="catimg">
                        </div>
                        <div class="col-12 col-md-6 form-group">
                            <label for="parent">Parent Category *</label>
                            <select name="parent_category" class="form-control" id="parent_category">
                                @foreach ($category as $categories)
                                    <option value="{{ $categories->name }}">{{ $categories->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-12 text-left">
                            <button class="btn-add ml-1 ">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        </di>
    </div>
</div>




<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog"
    aria-labelledby="myLargeModalLabel" aria-hidden="true">

    <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable" role="document">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h5 class="modal-title font-weight-bold">Update Category</h5>
                <button type="button" class="close" data-dismiss="modal">
                    <span>&times;</span>
                </button>
            </div>

            <!-- Modal Body -->
            <div class="modal-body">

                <p class="text-muted small mb-3">
                    The field labels marked with <span class="text-danger">*</span> are required.
                </p>

                <form action="{{ route('update-product-category') }}" method="POST" enctype="multipart/form-data">

                    @csrf
                    @method('put')

                    <input type="hidden" class="form-control" id="category_id" name="category_id" required>

                    <div class="container-fluid">
                        <div class="row">

                            <!-- Category Name -->
                            <div class="col-12 col-md-6 mb-3">
                                <label class="font-weight-semibold">Name <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="name" id="name">
                            </div>

                            <!-- Image -->
                            <div class="col-12 col-md-6 mb-3">
                                <label>Image</label>
                                <input type="file" accept="image/*" class="form-control" name="catimg" id="catimg">
                            </div>

                            <!-- Parent Category -->
                            <div class="col-12 col-md-6 mb-3">
                                <label>Parent Category <span class="text-danger">*</span></label>
                                <select name="parent_category" class="form-control" id="parent_category">

                                    @foreach ($category as $categories)
                                        <option value="{{ $categories->name }}">
                                            {{ $categories->name }}
                                        </option>
                                    @endforeach

                                </select>
                            </div>

                        </div>
                    </div>

                    <!-- Modal Footer Buttons -->
                    <div class="modal-footer px-0">

                        <button type="button" class="btn btn-secondary"
                            data-dismiss="modal">
                            Cancel
                        </button>

                        <button type="submit" class="btn btn-primary">
                            Update Category
                        </button>

                    </div>

                </form>

            </div>

        </div>
    </div>

</div>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6 d-flex align-items-center">
                    <img src="{{ asset('/dist/img/table.jpg') }}" class="welcome-icon mx-2" style="width: 40px" />
                    <div>
                        <div class="welcome-sub">Welcome to,</div>
                        <h2 class="welcome-title m-0 fw-bold">
                            Product Category
                        </h2>
                    </div>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Product Category</li>
                    </ol>
                </div>
            </div>
            <hr>
        </div><!-- /.container-fluid -->
    </section>
    <!-- table here start-->
    <div class="container-fluid mt-4 px-3">
        @if (session()->has('status'))
            <div class="alert my-3 p-3 alert-success">
                {{ session('status') }}
            </div>
        @endif
        @if ($errors->any())
            @foreach ($errors->all() as $error)
                <div class="alert alert-danger" role="alert">
                    {{ $error }}
                </div>
            @endforeach
        @endif

        <div class="card chart-card">
            <div class="chart-header">
                <div class="row align-items-center">

                    <div class="col-6">
                        <h6 class="chart-title mb-2">Product Category</h6>
                    </div>

                    <div class="col-6 text-right">
                        <button type="button" class="export-btn mb-2" onclick="openMode1()">
                            <i class="fa fa-plus"></i> Add Category
                        </button>
                    </div>
                </div>
            </div>

            <!-- Table -->
            <div class="card-body">
                <div class="">
                    <table id="example1" class="table align-middle custom-table table-responsive d-md-table">
                        <thead>
                            <tr class="text-center">
                                <th style="text-wrap:nowrap;">SR NO.</th>
                                <th style="text-wrap:nowrap;">IMAGE</th>
                                <th style="text-wrap:nowrap;">CATEGORY</th>
                                <th style="text-wrap:nowrap;">PARENT CATEGORY</th>
                                <th style="text-wrap:nowrap;">NUMBER OF PRODUCT</th>
                                <th style="text-wrap:nowrap;">ACTIONS</th>
                            </tr>
                        </thead>

                        <tbody>
                            @php
                                $counter = 1;
                            @endphp
                            @foreach ($category as $categories)
                                <tr>
                                    <td class="text-center">{{ $counter }}</td>
                                    <td class="text-center">
                                        @if ($categories->catimg)
                                            @php
                                                $filePath = asset('uploads/image/' . $categories->catimg);
                                                $fileInfo = pathinfo($filePath);
                                                $extension = strtolower($fileInfo['extension'] ?? '');
                                            @endphp

                                            @if (in_array($extension, ['jpg', 'jpeg', 'png', 'gif']))
                                                <a href="{{ $filePath }}" target="_blank" alt=" file">
                                                    <img src="{{ $filePath }}" alt="Purchase"
                                                        class="hidden- rounded-circle" width="50px" height="50px">
                                                </a>
                                            @else
                                                <a href="{{ $filePath }}" download>
                                                    <i class="fas fa-download"></i> {{ $extension }}
                                                </a>
                                            @endif
                                        @else
                                            <p>No file available</p>
                                        @endif
                                    </td>
                                    <td class="text-center">{{ $categories->name }}</td>
                                    @if ($categories->parent_category != '')
                                        <td class="text-center">{{ $categories->parent_category }}</td>
                                    @else
                                        <td class="text-center">NA</td>
                                    @endif
                                    <?php $pro_count = DB::table('products')->where('category', $categories->name)->where('company_id', $usercompany)->distinct('id')->count(); ?>
                                    <td class="text-center">{{ $pro_count }}</td>


                                    <td>
                                        <div class="dropdown">
                                            <i class="fas fa-ellipsis-v action-icon" data-toggle="dropdown"
                                                style="cursor:pointer;"></i>

                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="#"
                                                    data-id="{{ $categories->id }}" data-toggle="modal"
                                                    data-target=".bd-example-modal-lg">
                                                    <i class="fas fa-edit"></i>
                                                    Edit
                                                </a>

                                                <div class="dropdown-divider"></div>

                                                <a class="dropdown-item text-danger"
                                                    href="{{ asset('product/delete-category/' . $categories->id) }}">
                                                    <i class="fas fa-trash"></i>
                                                    Delete
                                                </a>
                                            </div>
                                        </div>
                                    </td>

                                    @php
                                        $counter++;
                                    @endphp
                                </tr>
                            @endforeach

                        </tbody>
                        <tfoot>
                            <tr>
                                <th style="text-wrap:nowrap;">SR NO.</th>
                                <th style="text-wrap:nowrap;">IMAGE</th>
                                <th style="text-wrap:nowrap;">CATEGORY</th>
                                <th style="text-wrap:nowrap;">PARENT CATEGORY</th>
                                <th style="text-wrap:nowrap;">NUMBER OF PRODUCT</th>
                                <th style="text-wrap:nowrap;">ACTIONS</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- /.content-wrapper -->

<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script>
    $(document).ready(function() {
        $(document).on('click', '.edit_btn', function() {
            var cat_id = $(this).data('id');

            $.ajax({
                type: "GET",
                url: "/product/edit-category/" + cat_id,
                success: function(response) {
                    console.log(response);
                    $("#category_id").val(response.id);
                    $("#name").val(response.name);
                    $("#catimg").val(response.catimg);
                    $("#parent_category").val(response.parent_category);
                }
            })

        });
    });
</script>

@include('client.component.tablefooter')