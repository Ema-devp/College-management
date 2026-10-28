@extends('layouts.master')

@section('title', 'Add New Course')

@section('content')

<div class="course-page">

    <!-- Page Header -->

    <div class="course-header">

        <div>

            <h2>Add New Course</h2>

            <p>Create a new course for your college management system.</p>

        </div>

        <a href="{{ route('courses.index') }}" class="back-btn">

            <i class="fa-solid fa-arrow-left"></i>

            Back to Courses

        </a>

    </div>

    <!-- Course Form -->

    <div class="course-form-card">

        <form action="{{ route('courses.store') }}" method="POST">

            @csrf

            <div class="row">

                <!-- Course Code -->

                <div class="col-lg-4 mb-4">

                    <label class="form-label">Course Code</label>

                    <input
                        type="text"
                        name="course_code"
                        class="form-control"
                        placeholder="ART250"
                        required>

                </div>

                <!-- Course Name -->

                <div class="col-lg-8 mb-4">

                    <label class="form-label">Course Name</label>

                    <input
                        type="text"
                        name="course_name"
                        class="form-control"
                        placeholder="Introduction to Digital Arts"
                        required>

                </div>

                <!-- Department -->

                <div class="col-lg-4 mb-4">

                    <label class="form-label">Department</label>

                    <select name="department" class="form-select">

                        <option>Computer Science</option>
                        <option>Business</option>
                        <option>English</option>
                        <option>Arts & Humanities</option>

                    </select>

                </div>

                <!-- Credit -->

                <div class="col-lg-4 mb-4">

                    <label class="form-label">Credit Hours</label>

                    <select name="credit" class="form-select">

                        <option>1</option>
                        <option>2</option>
                        <option selected>3</option>
                        <option>4</option>

                    </select>

                </div>

                <!-- Teacher -->

                <div class="col-lg-4 mb-4">

                    <label class="form-label">Teacher</label>

                    <input
                        type="text"
                        name="teacher"
                        class="form-control"
                        placeholder="Teacher Name">

                </div>

                <!-- Description -->

                <div class="col-12 mb-4">

                    <label class="form-label">Course Description</label>

                    <textarea
                        class="form-control"
                        name="description"
                        rows="5"
                        placeholder="Write course description..."></textarea>

                </div>

                <!-- Status -->

                <div class="col-lg-4 mb-4">

                    <label class="form-label">Course Status</label>

                    <select
                        class="form-select"
                        name="status">

                        <option value="Active">Active</option>

                        <option value="Inactive">Inactive</option>

                    </select>

                </div>

                <!-- Pre Requisites -->

                <div class="col-lg-8 mb-4">

                    <label class="form-label">Pre-requisites</label>

                    <input
                        type="text"
                        name="prerequisites"
                        class="form-control"
                        placeholder="Example: HTML, CSS">

                </div>

            </div>

            <!-- Buttons -->

            <div class="course-form-buttons">

                <a href="{{ route('courses.index') }}" class="cancel-btn">

                    Cancel

                </a>

                <button type="submit" class="save-btn">

                    <i class="fa-solid fa-floppy-disk"></i>

                    Save Course

                </button>

            </div>

        </form>

    </div>

</div>

@endsection