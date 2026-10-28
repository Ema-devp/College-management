@extends('layouts.master')

@section('title', 'Admissions')

@section('content')
<div class="courses-header">
    <div class="courses-header-left">
        <h2 class="courses-title">Admissions</h2>
        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif
        <p class="courses-subtitle">Manage all student admission applications.</p>
    </div>
    <div class="courses-header-right">
        <a href="{{ route('admissions.create') }}" class="courses-add-btn">
            <i class="fa-solid fa-plus"></i> New Admission
        </a>
    </div>
</div>

<section class="courses-table-card">
    <div class="courses-table-wrapper">
        <table class="courses-table">
            <thead>
                <tr>
                    <th>Student Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Department</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @forelse($admissions as $admission)
                <tr>
                    <td>{{ $admission->student_name }}</td>
                    <td>{{ $admission->email }}</td>
                    <td>{{ $admission->phone }}</td>
                    <td>{{ $admission->department }}</td>
                    <td>
                        <span class="badge">{{ $admission->status }}</span>
                    </td>
                    <td class="action-buttons">
                        <a href="#"><i class="fa-solid fa-eye"></i></a>
                        <a href="#"><i class="fa-solid fa-pen"></i></a>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="6" class="text-center">No Admission Applications Found</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</section>
@endsection