@extends('admin.layouts.app')

@section('title', 'Security Settings')

@section('content')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Security Settings</h1>
</div>

<!-- Change Password Card -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Change Password</h6>
    </div>
    <div class="card-body">
        <form method="POST" action="#">
            @csrf
            <div class="form-group">
                <label for="current_password">Current Password</label>
                <input type="password" class="form-control" id="current_password" name="current_password" required>
            </div>
            <div class="form-group">
                <label for="new_password">New Password</label>
                <input type="password" class="form-control" id="new_password" name="new_password" required>
            </div>
            <div class="form-group">
                <label for="new_password_confirmation">Confirm New Password</label>
                <input type="password" class="form-control" id="new_password_confirmation" name="new_password_confirmation" required>
            </div>
            <button type="submit" class="btn btn-primary">Update Password</button>
        </form>
    </div>
</div>

<!-- Two-Factor Authentication Card -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Two-Factor Authentication</h6>
    </div>
    <div class="card-body">
        <p>Two-factor authentication is currently <strong class="text-warning">disabled</strong></p>
        <p>Enhance your account security by enabling two-factor authentication.</p>
        <button type="button" class="btn btn-warning">Enable 2FA</button>
    </div>
</div>

<!-- Active Sessions Card -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Active Sessions</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Device</th>
                        <th>IP Address</th>
                        <th>Last Active</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Chrome on Windows</td>
                        <td>192.168.1.100</td>
                        <td>5 minutes ago</td>
                        <td><button class="btn btn-sm btn-danger">Logout</button></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
