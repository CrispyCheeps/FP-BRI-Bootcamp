@extends('layouts.master')
@section('content')
{{-- message --}}
@if (session()->has('message'))
<div class="alert alert-success">
    <button type="button" class="close" data-dismiss="alert">x</button>
    {{session()->get('message')}}
</div>
@endif
<div class="page-wrapper">
    <div class="content container-fluid">
        <div class="page-header">
            <div class="row align-items-center">
                <div class="col">
                    <h3 class="page-title mt-5">Add Product</h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <form action="{{ route("addProduct") }}" method="POST">
                    @csrf
                    @method("post")
                    <div class="row formtype">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Nama Produk</label>
                                <input name="name" class="form-control" type="text" > </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Description</label>
                                <input name="description" class="form-control" type="text" > </div>
                        </div>
                        {{-- <div class="col-md-4">
                            <div class="form-group">
                                <label>Status</label>
                                <input class="form-control" type="text" value=""> </div>
                        </div> --}}
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Category</label>
                                <input name="category_id" class="form-control" type="text" > </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Price</label>
                                <input name="price" class="form-control" type="text" > </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Weight</label>
                                <input name="weight" class="form-control" type="text" > </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>IMG</label>
                                <input name="img_url" class="form-control" type="text" > </div>
                        </div>
                        
                        
                        {{-- <div class="col-md-4">
                            <div class="form-group">
                                <label>Role</label>
                                <select class="form-control" id="sel1" name="sellist1">
                                    <option>Select</option>
                                    <option>Admin</option>
                                    <option>Manager</option>
                                    <option>Staff</option>
                                    <option>Servants</option>
                                    <option>Accountant</option>
                                </select>
                            </div>
                        </div> --}}
                    </div>
                    <button type="submit" class="btn btn-primary buttonedit">Create Product</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
