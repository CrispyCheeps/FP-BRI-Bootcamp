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
                        <h4 class="card-title float-left mt-2">Categories</h4>
                        <a href="{{ route('formAddCategory') }}" class="mx-2 btn btn-primary float-right veiwbutton">Add
                            Category</a>
                        <a href="{{ route('form/employee/add') }}" class="btn btn-primary float-right veiwbutton">Add
                            Product</a>
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
                                <label>Category ID</label>
                                <input type="text" class="form-control" id="usr">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Category Name</label>
                                <input type="text" class="form-control" id="usr1">
                            </div>
                        </div>
                        {{-- <div class="col-md-3">
                            <div class="form-group">
                                <label>Role</label>
                                <select class="form-control" id="sel1" name="sellist1">
                                    <option>Admin</option>
                                    <option>Manager</option>
                                    <option>Staff</option>
                                    <option>Accountant</option>
                                </select>
                            </div>
                        </div> --}}
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
                                        <th>Category ID</th>
                                        <th>Category name</th>
                                        <th class="text-right">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($category as $categories)
                                    <tr>
                                        <td>{{ $categories->id}}</td>
                                        <td>{{ $categories->name }}</td>
                                
                                        <td class="text-right">
                                            <div class="dropdown dropdown-action">
                                                <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown"
                                                    aria-expanded="false"><i
                                                        class="fas fa-ellipsis-v ellipse_color"></i></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="edit-employee.html"><i
                                                            class="fas fa-pencil-alt m-r-5"></i> Edit</a>
                                                    <a class="dropdown-item"  data-toggle="modal"
                                                        data-target="#delete_asset"><i
                                                            class="fas fa-trash-alt m-r-5"></i> Delete</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <div id="delete_asset" class="modal fade delete-modal" role="dialog">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                                <div class="modal-body text-center">
                                                    <img src="assets/img/sent.png" alt="" width="50" height="46">
                                                    <h3 class="delete_class">Are you sure want to delete this category? all products within the category will be also deleted! </h3>
                                                    <div class="m-t-20"> <a href="#" class="btn btn-white" data-dismiss="modal">Close</a>
                                                        <form method="POST" action={{ route("deleteCategory", ['id'=> $categories->id]) }}>
                                                            @csrf
                                                            
                                                            <button type='submit' class="btn btn-danger">Delete</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
</div>
@endsection
