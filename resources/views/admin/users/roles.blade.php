@extends('admin.layouts.app')

@section('title', 'Manage Roles')

@section('content')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Manage Roles</h1>
    <button class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" data-toggle="modal" data-target="#addRoleModal">
        <i class="fas fa-plus fa-sm text-white-50"></i> Add Role
    </button>
</div>

<!-- Roles Table Card -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Available Roles</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Role Name</th>
                        <th>Description</th>
                        <th>Users Count</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><strong>Admin</strong></td>
                        <td>Full system access</td>
                        <td><span class="badge badge-primary">5</span></td>
                        <td>
                            <button class="btn btn-sm btn-warning" data-toggle="modal" data-target="#editRoleModal"><i class="fas fa-edit"></i></button>
                            <button class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></button>
                        </td>
                    </tr>
                    <tr>
                        <td><strong>User</strong></td>
                        <td>Basic user access</td>
                        <td><span class="badge badge-success">45</span></td>
                        <td>
                            <button class="btn btn-sm btn-warning" data-toggle="modal" data-target="#editRoleModal"><i class="fas fa-edit"></i></button>
                            <button class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></button>
                        </td>
                    </tr>
                    <tr>
                        <td><strong>Manager</strong></td>
                        <td>Manager level access</td>
                        <td><span class="badge badge-info">12</span></td>
                        <td>
                            <button class="btn btn-sm btn-warning" data-toggle="modal" data-target="#editRoleModal"><i class="fas fa-edit"></i></button>
                            <button class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
