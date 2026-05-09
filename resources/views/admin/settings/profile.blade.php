@extends('admin.layouts.app')

@section('title', 'My Profile')

@section('content')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">My Profile</h1>
</div>

<!-- Profile Card -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Profile Information</h6>
    </div>
    <div class="card-body">
        <form method="POST" action="#">
            @csrf
            <div class="form-group">
                <label for="name">Full Name</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ Auth::user()->name ?? 'Administrator' }}" required>
            </div>
            <div class="form-group">
                <label for="email">Email Address</label>
                <input type="email" class="form-control" id="email" name="email" value="{{ Auth::user()->email ?? '' }}" required>
            </div>
            <div class="form-group">
                <label for="phone">Phone Number</label>
                <input type="tel" class="form-control" id="phone" name="phone" placeholder="+1 (555) 000-0000">
            </div>
            <div class="form-group">
                <label for="bio">Bio</label>
                <textarea class="form-control" id="bio" name="bio" rows="4" placeholder="Tell us about yourself"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Save Profile</button>
        </form>
    </div>
</div>
@endsection
