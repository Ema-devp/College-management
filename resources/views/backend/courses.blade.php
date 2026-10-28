@extends('layouts.master')

@section('title', 'Courses')

@section('content')

<!-- এখান থেকে Courses Page শুরু -->

<div class="courses-header">

    <div class="courses-header-left">

        <h2 class="courses-title">Courses</h2>

        @if(session('success'))

<div class="alert alert-success">

    {{ session('success') }}

</div>

@endif

        <p class="courses-subtitle">
            Manage all college courses from one place.
        </p>

    </div>

   <div class="courses-header-right">

    <a href="{{ route('courses.create') }}" class="courses-add-btn">
    <i class="fa-solid fa-plus"></i>
    Add New Course
</a>

</div>

</div>

<!-- Statistics -->

<section class="courses-stats">

    <div class="courses-stat-card">

        <div class="courses-stat-icon courses-blue">

            <i class="fa-solid fa-book-open"></i>

        </div>

        <div class="courses-stat-content">

            <p>Total Courses</p>

            <h3>45</h3>

        </div>

    </div>

    <div class="courses-stat-card">

        <div class="courses-stat-icon courses-green">

            <i class="fa-solid fa-circle-check"></i>

        </div>

        <div class="courses-stat-content">

            <p>Active Courses</p>

            <h3>38</h3>

        </div>

    </div>

    <div class="courses-stat-card">

        <div class="courses-stat-icon courses-orange">

            <i class="fa-solid fa-user-graduate"></i>

        </div>

        <div class="courses-stat-content">

            <p>Students</p>

            <h3>1248</h3>

        </div>

    </div>

    <div class="courses-stat-card">

        <div class="courses-stat-icon courses-pink">

            <i class="fa-solid fa-building"></i>

        </div>

        <div class="courses-stat-content">

            <p>Departments</p>

            <h3>12</h3>

        </div>

    </div>

</section>

<!-- Course Table Card -->

<section class="courses-table-card">

    <!-- Toolbar -->

    <div class="courses-toolbar">

        <div class="courses-search">

            <input
                type="text"
                placeholder="Search Courses...">

            <button>

                <i class="fa-solid fa-magnifying-glass"></i>

            </button>

        </div>

        <div class="courses-filter">

            <select>

                <option>All Departments</option>

                <option>Computer Science</option>

                <option>Business</option>

                <option>English</option>

            </select>

        </div>

        <div class="courses-filter">

            <select>

                <option>All Status</option>

                <option>Active</option>

                <option>Inactive</option>

            </select>

        </div>

    </div>

    <!-- Table -->

    <div class="courses-table-wrapper">

        <table class="courses-table">

            <tbody>

@forelse($courses as $course)

<tr>

    <td>{{ $course->course_code }}</td>

    <td>{{ $course->course_name }}</td>

    <td>{{ $course->department }}</td>

    <td>{{ $course->credit }}</td>

    <td>{{ $course->teacher }}</td>

    <td>

        @if($course->status == 'Active')

            <span class="courses-active">

                {{ $course->status }}

            </span>

        @else

            <span class="courses-inactive">

                {{ $course->status }}

            </span>

        @endif

    </td>

    <td class="action-buttons">

        <a href="{{ route('courses.show', $course->id) }}">

            <i class="fa-solid fa-eye"></i>

        </a>

        <a href="{{ route('courses.edit', $course->id) }}">

            <i class="fa-solid fa-pen"></i>

        </a>

        <form action="{{ route('courses.destroy', $course->id) }}"
              method="POST"
              style="display:inline;">

            @csrf
            @method('DELETE')

            <button type="submit"
                    style="border:none;background:none;color:red;">

                <i class="fa-solid fa-trash"></i>

            </button>

        </form>

    </td>

</tr>

@empty

<tr>

    <td colspan="7" class="text-center">

        No Courses Found

    </td>

</tr>

@endforelse

</tbody>
            <tbody>

                <tr>

                    <td>CS101</td>
                    <td>Introduction to Programming</td>
                    <td>Computer Science</td>
                    <td>3</td>
                    <td>John Smith</td>

                    <td>

                        <span class="courses-active">

                            Active

                        </span>

                    </td>

                     <td class="action-buttons">

                        <a href="#"><i class="fa-solid fa-eye"></i></a>

                        <a href="#"><i class="fa-solid fa-pen"></i></a>

                        <a href="#"><i class="fa-solid fa-trash"></i></a>

                    </td>

                </tr>

                <tr>

                    <td>BUS201</td>
                    <td>Business Management</td>
                    <td>Business</td>
                    <td>4</td>
                    <td>Sarah Johnson</td>

                    <td>

                        <span class="courses-active">

                            Active

                        </span>

                    </td>

                    <td class="action-buttons">

                        <a href="#"><i class="fa-solid fa-eye"></i></a>

                        <a href="#"><i class="fa-solid fa-pen"></i></a>

                        <a href="#"><i class="fa-solid fa-trash"></i></a>

                    </td>

                </tr>

                <tr>

                    <td>ENG110</td>
                    <td>English Grammar</td>
                    <td>English</td>
                    <td>3</td>
                    <td>David Miller</td>

                    <td>

                        <span class="courses-inactive">

                            Inactive

                        </span>

                    </td>

                    
                    <td class="action-buttons">

                        <a href="#"><i class="fa-solid fa-eye"></i></a>

                        <a href="#"><i class="fa-solid fa-pen"></i></a>

                        <a href="#"><i class="fa-solid fa-trash"></i></a>

                    </td>

                </tr>

            </tbody>

        </table>

    </div>

    <!-- Pagination -->

    <div class="courses-pagination">

        <span>Showing 1 to 3 of 45 Courses</span>

        <div class="courses-page-links">

            <a href="#"><i class="fa-solid fa-angle-left"></i></a>

            <a href="#" class="active">1</a>

            <a href="#">2</a>

            <a href="#">3</a>

            <a href="#"><i class="fa-solid fa-angle-right"></i></a>

        </div>

    </div>

</section>

@endsection