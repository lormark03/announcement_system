@extends('layouts.app')

@section('content')
<div class="mb-4">
    <h1 class="h4 mb-1">Dashboard</h1>
    <p class="text-muted mb-0">
        Welcome back, {{ auth()->user()->username }}.
    </p>
</div>

{{-- STATS --}}
<div class="row g-3 mb-4">
    <div class="col-md-3">
        <div class="card shadow-sm">
            <div class="card-body">
                <div class="text-muted small">Users</div>
                <div class="h4 mb-0">0</div>
            </div>
        </div>
    </div>

    <div class="col-md-3">
        <div class="card shadow-sm">
            <div class="card-body">
                <div class="text-muted small">Instructors</div>
                <div class="h4 mb-0">0</div>
            </div>
        </div>
    </div>

    <div class="col-md-3">
        <div class="card shadow-sm">
            <div class="card-body">
                <div class="text-muted small">Courses</div>
                <div class="h4 mb-0">0</div>
            </div>
        </div>
    </div>

    <div class="col-md-3">
        <div class="card shadow-sm">
            <div class="card-body">
                <div class="text-muted small">Enrollments</div>
                <div class="h4 mb-0">0</div>
            </div>
        </div>
    </div>
</div>

{{-- CONTENT ROW --}}
<div class="row g-3">
    <div class="col-md-6">
        <div class="card shadow-sm h-100">
            <div class="card-body">
                <h6 class="card-title">Quick Actions</h6>

                @if(auth()->user()->role === App\Models\User::ROLE_ADMIN)
                    <a href="{{ route('admin.users.index') }}" class="btn btn-sm btn-primary me-2">
                        Manage Users
                    </a>
                @endif

                <a href="{{ route('profile.edit') }}" class="btn btn-sm btn-outline-secondary">
                    My Profile
                </a>
            </div>
        </div>
    </div>

    <div class="col-md-6">
        <div class="card shadow-sm h-100">
            <div class="card-body">
                <h6 class="card-title">Recent Activity</h6>
                <p class="text-muted mb-0 small">
                    No recent activity available.
                </p>
            </div>
        </div>
    </div>
</div>
@endsection
