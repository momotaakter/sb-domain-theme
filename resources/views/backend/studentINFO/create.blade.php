@extends('backend/pertials/master')

@section('mainContent')
    

<div class="container mt-5">
    <div class="card shadow-lg p-4">
        <h3 class="text-center mb-4">➕ Add Student</h3>

        <form action="{{ route('studentINFO.store') }}" method="POST">
            @csrf

            <!-- Name -->
            <div class="mb-3">
                <label class="form-label">Name</label>
                <input 
                    type="text" 
                    name="name" 
                    class="form-control @error('name') is-invalid @enderror"
                    placeholder="Enter your name"
                    value="{{ old('name') }}"
                >
                @error('name')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <!-- Email -->
            <div class="mb-3">
                <label class="form-label">Email</label>
                <input 
                    type="email" 
                    name="email" 
                    class="form-control @error('email') is-invalid @enderror"
                    placeholder="Enter your email"
                    value="{{ old('email') }}"
                >
                @error('email')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <!-- Button -->
            <div class="d-grid">
                <button type="submit" class="btn btn-primary">
                    💾 Save Student
                </button>
            </div>

        </form>
    </div>
</div>
@endsection