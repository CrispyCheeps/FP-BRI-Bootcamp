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
                    <h3 class="page-title mt-5">Add Category</h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <form action="{{ route("addCategory") }}" method="POST">
                    @csrf
                    @method("post")
                    <div class="row formtype">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Nama Category</label>
                                <input name="name" class="form-control" type="text" > </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary buttonedit">Create Category</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
