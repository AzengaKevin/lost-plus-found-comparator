@extends('layouts.app')

@section('title', 'Profile Settins')

@section('content')
<div class="container">

    <div class="row">
        <div class="col-md-4">
            <h4 class="text-gray-900 font-weight-bold">Update Password</h4>
            <span>Ensure your account is using a long, random password to stay secure.</span>
        </div>
        <div class="col-md-8">
            <div class="card bg-white rounded shadow-sm">
                <div class="card-body">
                    <div class="card-text">
                        <div class="form-group">
                            <label for="currentPassword" class="text-gray-800 font-weight-bold">Current Password</label>
                            <input type="password" name="current_password" id="currentPassword" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="newPassword" class="text-gray-800 font-weight-bold">New Password</label>
                            <input type="password" name="new_password" id="newPassword" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="passwordConfirmation" class="text-gray-800 font-weight-bold">Confirm
                                Password</label>
                            <input type="password" name="password_confirmation" id="passwordConfirmation"
                                class="form-control">
                        </div>

                        <div class="clearfix">
                            <button type="button" class="btn btn-dark text-uppercase float-right">Save</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <hr class="my-5">

    <div class="row">
        <div class="col-md-4">
            <h4 class="text-gray-900 font-weight-bold">Delete Account</h4>
            <span>Permanently delete your account.</span>
        </div>
        <div class="col-md-8">

            <div class="card bg-white shadow-sm">
                <div class="card-body">
                    <div class="card-text">
                        <p>Once your account is deleted, all of its resources and data will be permanently deleted. Before deleting
                            your account, please download any data or information that you wish to retain.</p>

                            <button type="button" class="btn btn-danger text-uppercase">Delete Account</button>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</div>
@endsection