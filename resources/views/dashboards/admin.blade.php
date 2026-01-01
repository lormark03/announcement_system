@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <div>
        <h1 class="h3 mb-0">Admin Dashboard</h1>
        <p class="text-muted mb-0">Welcome back, {{ auth()->user()->username }}.</p>
    </div>
</div>

{{-- STAT CARDS --}}
<div class="row g-3 mb-4">
    <div class="col-md-3">
        <div class="card text-center">
            <div class="card-body">
                <h6 class="text-muted">Total Users</h6>
                <h3 class="mb-0">0</h3>
            </div>
        </div>
    </div>

    <div class="col-md-3">
        <div class="card text-center">
            <div class="card-body">
                <h6 class="text-muted">Instructors</h6>
                <h3 class="mb-0">0</h3>
            </div>
        </div>
    </div>

    <div class="col-md-3">
        <div class="card text-center">
            <div class="card-body">
                <h6 class="text-muted">Courses</h6>
                <h3 class="mb-0">0</h3>
            </div>
        </div>
    </div>

    <div class="col-md-3">
        <div class="card text-center">
            <div class="card-body">
                <h6 class="text-muted">Enrollments</h6>
                <h3 class="mb-0">0</h3>
            </div>
        </div>
    </div>
</div>

{{-- MAIN CONTENT --}}
<div class="row g-3">
    <div class="col-md-6">
        <div class="card h-100">
            <div class="card-body">
                <h5 class="card-title">User Management</h5>
                <p class="card-text">
                    Manage students, instructors, and admins. Add, edit, or remove users.
                </p>
                <a href="{{ route('admin.users.index') }}" class="btn btn-sm btn-primary">
                    Manage Users
                </a>
            </div>
        </div>
    </div>

    <div class="col-md-6">
        <div class="card h-100">
            <div class="card-body">
                <h5 class="card-title">Course Management</h5>
                <p class="card-text">
                    View and manage all courses created by instructors.
                </p>
                
            </div>
        </div>
    </div>

    <div class="col-md-6">
        <div class="card h-100">
            <div class="card-body">
                <h5 class="card-title">Instructor Activity</h5>
                <p class="card-text">
                    Monitor instructor actions and course updates.
                </p>
            </div>
        </div>
    </div>

    <div class="col-md-6">
        <div class="card h-100">
            <div class="card-body">
                <h5 class="card-title">System Logs</h5>
                <p class="card-text">
                    Review recent system activities and logs.
                </p>
            </div>
        </div>
    </div>
</div>
@endsection
