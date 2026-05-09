@extends('admin.layouts.app')

@section('title', 'General Settings')

@section('content')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">General Settings</h1>
</div>

<!-- Settings Card -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Application Settings</h6>
    </div>
    <div class="card-body">
        <form method="POST" action="#">
            @csrf
            <div class="form-group">
                <label for="app_name">Application Name</label>
                <input type="text" class="form-control" id="app_name" name="app_name" value="My Admin Application" required>
            </div>
            <div class="form-group">
                <label for="app_email">Support Email</label>
                <input type="email" class="form-control" id="app_email" name="app_email" value="support@example.com" required>
            </div>
            <div class="form-group">
                <label for="app_url">Application URL</label>
                <input type="url" class="form-control" id="app_url" name="app_url" value="https://example.com" required>
            </div>
            <div class="form-group">
                <label for="timezone">Timezone</label>
                <select class="form-control" id="timezone" name="timezone" required>
                    <option value="UTC">UTC</option>
                    <option value="America/New_York">America/New_York</option>
                    <option value="Asia/Jakarta">Asia/Jakarta</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Save Settings</button>
        </form>
    </div>
</div>
@endsection
