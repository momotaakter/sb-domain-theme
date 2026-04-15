
@extends('backend.pertials.master')
@section('mainContent')
<div class="container mt-5">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h2>📋 Student List</h2>
        <a href="{{ route('studentINFO.create') }}" class="btn btn-success">➕ Add New Student</a>
    </div>

    @if($students->count() > 0)
        <div class="table-responsive">
            <table class="table table-bordered table-hover align-middle">
                <thead class="table-dark text-center">
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($students as $student)
                        <tr class="text-center">
                            <td>{{ $student->id }}</td>
                            <td>{{ $student->name }}</td>
                            <td>{{ $student->email }}</td>
                            <td>
                                <a href="{{ route('studentINFO.edit', $student->id) }}" class="btn btn-primary btn-sm me-1">✏️ Edit</a>
                                
                                <form action="{{ route('studentINFO.destroy', $student->id) }}" method="POST" style="display: inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this student?')">🗑️ Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    @else
        <div class="alert alert-info text-center">
            No students found.
        </div>
    @endif
</div>
@endsection
