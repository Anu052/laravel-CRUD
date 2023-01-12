@extends('schools.layout') @section('content')
<div class="wrapperdiv">
    <div class="formcontainer">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Add New School</h2>
                </div>
            </div>
        </div>
        @if($errors->any())
        <div class="alert alert-danger">
        <strong>Oops! There were some problems with your input.</strong>
        <ul>
            @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
        </div>
        @endif
        <form
            action="{{ route('schools.store') }}"
            method="POST"
            enctype="multipart/form-data"
        >
            @csrf
            <div class="row ">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group row">
                        <label for="name" class="col-sm-2 col-form-control"
                            >Name</label
                        >
                        <div class="col-sm-10">
                            <input
                                type="text"
                                name="name"
                                id="name"
                                class="form-control"
                            />
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="address" class="col-sm-2 col-form-control"
                            >Address</label
                        >
                        <div class="col-sm-10">
                        <input
                                type="text"
                                name="address"
                                id="address"
                                class="form-control"
                            />
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="phone" class="col-sm-2 col-form-control"
                            >Phone</label
                        >
                        <div class="col-sm-10">
                        <input
                                type="text"
                                name="phone"
                                id="phone"
                                class="form-control"
                            />
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-2"></div>

                        <div class="col-sm-10">
                            <button
                                type="submit"
                                name="submit"
                                id="submit"
                                class="btn btn-primary"
                            >
                                SUBMIT
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection