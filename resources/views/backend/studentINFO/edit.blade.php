
@extends('backend.pertials.master')
@section('mainContent')
    


<div class="container mt-5">
    <div class="card shadow-lg p-4">
        <h3 class="text-center mb-4">✏️ Edit Student</h3>

        <form action="{{ route('studentINFO.update', $student->id) }}" method="POST">
            @csrf
            @method('PUT')

            <!-- Name -->
            <div class="mb-3">
                <label class="form-label">Name</label>
                <input 
                    type="text" 
                    name="name" 
                    class="form-control @error('name') is-invalid @enderror"
                    placeholder="Enter student name"
                    value="{{ old('name', $student->name) }}"
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
                    placeholder="Enter student email"
                    value="{{ old('email', $student->email) }}"
                >
                @error('email')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <!-- Buttons -->
            <div class="d-flex justify-content-between">
                <a href="{{ route('studentINFO.index') }}" class="btn btn-secondary">⬅️ Back</a>
                <button type="submit" class="btn btn-primary">💾 Update Student</button>
            </div>

        </form>
    </div>
</div>


@endsection