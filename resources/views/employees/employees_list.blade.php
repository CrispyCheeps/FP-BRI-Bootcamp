@extends('layouts.master')
@section('content')
{{-- message --}}
{!! Toastr::message() !!}
<div class="page-wrapper">
    <div class="content container-fluid">
        <div class="page-header">
            <div class="row align-items-center">
                <div class="col">
                    <div class="mt-5">
                        <h4 class="card-title float-left mt-2">Products</h4>
                        <a href="{{ route('form/employee/add') }}" class="btn btn-primary float-right veiwbutton">Add
                            Products</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <form>
                    <div class="row formtype">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Products ID</label>
                                <input type="text" class="form-control" id="usr">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Products Name</label>
                                <input type="text" class="form-control" id="usr1">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Role</label>
                                <select class="form-control" id="sel1" name="sellist1">
                                    <option>Admin</option>
                                    <option>Manager</option>
                                    <option>Staff</option>
                                    <option>Accountant</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Search</label>
                                <a href="#" class="btn btn-success btn-block mt-0 search_button"> Search </a>

                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="datatable table table-stripped">
                                <thead>
                                    <tr>
                                        <th>Products ID</th>
                                        <th>Products Name</th>
                                        <th>Description</th>
                                        <th>Status</th>
                                        <th>Category</th>
                                        <th>Price</th>
                                        <th>Weight</th>
                                        <th>Img Url</th>
                                        <th class="text-right">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($product as $products)
                                    <tr>
                                        <td>{{ $products->id}}</td>
                                        <td>{{ $products->name }}</td>
                                        <td>{{ $products->description }}</td>
                                        <td>{{ $products->status }}</td>
                                        <td>{{ $products->category_id }}</td>
                                        <td>{{ $products->price }}</td>
                                        <td>{{ $products->weight }}</td>
                                        <td>{{ $products->img_url }}</td>
                                        <td class="text-right">
                                            <div class="dropdown dropdown-action">
                                                <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown"
                                                    aria-expanded="false"><i
                                                        class="fas fa-ellipsis-v ellipse_color"></i></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="edit-employee.html"><i
                                                            class="fas fa-pencil-alt m-r-5"></i> Edit</a>
                                                    <a class="dropdown-item" href={{ route("deleteProduct", ['id'=> $products->id]) }} data-toggle="modal"
                                                        data-target="#delete_asset"><i
                                                            class="fas fa-trash-alt m-r-5"></i> Delete</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach
                                    {{-- <tr>
                                        <td>Albina Simonis</td>
                                        <td>Ma-0001</td>
                                        <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__"
                                                data-cfemail="b7d6dbd5ded9d6c4dedad8d9dec4f7d2cfd6dac7dbd299d4d8da">[email&#160;protected]</a>
                                        </td>
                                        <td>828-634-2744</td>
                                        <td>7 May 2015</td>
                                        <td>
                                            <span class="custom-badge status-green">Manager</span>
                                        </td>
                                        <td class="text-right">
                                            <div class="dropdown dropdown-action">
                                                <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown"
                                                    aria-expanded="false"><i
                                                        class="fas fa-ellipsis-v ellipse_color"></i></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="edit-employee.html"><i
                                                            class="fas fa-pencil-alt m-r-5"></i> Edit</a>
                                                    <a class="dropdown-item" href="#" data-toggle="modal"
                                                        data-target="#delete_asset"><i
                                                            class="fas fa-trash-alt m-r-5"></i> Delete</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr> --}}

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="delete_asset" class="modal fade delete-modal" role="dialog">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-body text-center">
                        <img src="assets/img/sent.png" alt="" width="50" height="46">
                        <h3 class="delete_class">Are you sure want to delete this Asset?</h3>
                        <div class="m-t-20"> <a href="#" class="btn btn-white" data-dismiss="modal">Close</a>
                            <form method="POST" action={{route('deleteProduct', ['id'=> $products->id])}}>
                                @csrf
                                <button type='submit' class="btn btn-danger">Delete</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
