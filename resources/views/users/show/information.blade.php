@extends('layouts.app')

@section('title', 'Your Profile')

@section('content')
<div class="container">
    <div id="profile-information" class="row">
        <div class="col-md-4">
            <h4 class="text-gray-900 font-weight-bold">Profile Photo Section</h4>
            <span>Update your account's profile photo</span>
        </div>
        <div class="col-md-8">
            <div class="card bg-white rounded shadow-sm">
                <div class="card-body">
                    <div class="card-text">
                        <div>
                            <div>
                                <label for="photo" class="text-gray-800 font-weight-bold">Photo</label>
                            </div>
                            <div class="mt-2">
                                <img class="rounded-circle" src="{{ Auth::user()->photo() }}" width="200"
                                    alt="{{ Auth::user()->name }}">
                            </div>
                            <button class="btn btn-light text-uppercase mt-2">Select A New Photo</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <hr class="my-5">

    <div class="row">
        <div class="col-md-4">
            <h4 class="text-gray-900 font-weight-bold">Profile Information</h4>
            <span>Update your account's profile information and email address.</span>
        </div>
        <div class="col-md-8">

            <div class="card bg-white rounded shadow-sm">
                <div class="card-body">
                    <div class="card-text">
                        <div class="form-group">
                            <label for="name" class="text-gray-800 font-weight-bold">Name</label>
                            <input type="text" name="name" id="name" value="{{ Auth::user()->name }}"
                                class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="email" class="text-gray-800 font-weight-bold">Email</label>
                            <input type="email" name="email" id="email" value="{{ Auth::user()->email }}"
                                class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="email" class="text-gray-800 font-weight-bold">Phone</label>
                            <input type="email" name="phone_number" id="email" value="{{ Auth::user()->phone_number }}"
                                class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="idNumber" class="text-gray-800 font-weight-bold">National ID Number</label>
                            <input type="text" name="national_identification_number" id="idNUmber"
                                value="{{ Auth::user()->national_identification_number }}" class="form-control">
                        </div>

                        <div class="clearfix">
                            <button type="button" class="btn btn-dark text-uppercase float-right">Save</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection