@extends('layouts.master')

@section('title', 'New Admission')

@section('content')

<div class="courses-header">
    <div class="courses-header-left">
        <h2 class="courses-title">New Admission</h2>
        <p class="courses-subtitle">Fill in the details below to submit a new student application.</p>
    </div>
    <div class="courses-header-right">
        <a href="{{ route('admissions.index') }}" class="btn btn-secondary">
            <i class="fa-solid fa-arrow-left"></i> Back to List
        </a>
    </div>
</div>

<div class="card" style="background: #fff; padding: 25px; border-radius: 10px; box-shadow: 0 4px 6px rgba(0,0,0,0.05); margin-top: 20px;">
    
    @if ($errors->any())
        <div class="alert alert-danger" style="background-color: #f8d7da; color: #721c24; padding: 12px; border-radius: 5px; margin-bottom: 20px;">
            <ul style="margin: 0; padding-left: 20px;">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('admissions.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div style="display: flex; gap: 20px; margin-bottom: 15px;">
            <div style="flex: 1;">
                <label style="font-weight: 600; margin-bottom: 5px; display: block;">First Name <span style="color:red;">*</span></label>
                <input type="text" name="first_name" value="{{ old('first_name') }}" class="form-control" placeholder="First Name" required style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 5px;">
            </div>
            <div style="flex: 1;">
                <label style="font-weight: 600; margin-bottom: 5px; display: block;">Last Name <span style="color:red;">*</span></label>
                <input type="text" name="last_name" value="{{ old('last_name') }}" class="form-control" placeholder="Last Name" required style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 5px;">
            </div>
        </div>

        <div style="margin-bottom: 15px;">
            <label style="font-weight: 600; margin-bottom: 5px; display: block;">Email Address <span style="color:red;">*</span></label>
            <input type="email" name="email" value="{{ old('email') }}" class="form-control" placeholder="ex: myname@example.com" required style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 5px;">
        </div>

        <div style="display: flex; gap: 20px; margin-bottom: 15px;">
            <div style="flex: 1;">
                <label style="font-weight: 600; margin-bottom: 5px; display: block;">Department <span style="color:red;">*</span></label>
                <select name="department" class="form-control" required style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 5px;">
                    <option value="">Select Department</option>
                    <option value="Computer Science">Computer Science</option>
                    <option value="Business">Business</option>
                    <option value="English">English</option>
                </select>
            </div>
            <div style="flex: 1;">
                <label style="font-weight: 600; margin-bottom: 5px; display: block;">Phone Number <span style="color:red;">*</span></label>
                <input type="text" name="phone" value="{{ old('phone') }}" class="form-control" placeholder="(000) 000-0000" required style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 5px;">
            </div>
        </div>

        <div style="margin-bottom: 15px;">
            <label style="font-weight: 600; margin-bottom: 5px; display: block;">Letter of Intention</label>
            <textarea name="letter_of_intention" rows="4" class="form-control" placeholder="Write letter of intention..." style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 5px;">{{ old('letter_of_intention') }}</textarea>
        </div>

        <div style="margin-bottom: 20px;">
            <label style="font-weight: 600; margin-bottom: 5px; display: block;">Click to upload Files</label>
            <div style="border: 2px dashed #007bff; padding: 20px; text-align: center; border-radius: 8px; background-color: #f8f9fa;">
                <i class="fa-solid fa-cloud-arrow-up" style="font-size: 30px; color: #007bff;"></i>
                <p style="margin: 10px 0 5px 0; font-weight: 600;">Upload a File</p>
                <p style="font-size: 12px; color: #6c757d; margin-bottom: 10px;">Drag and drop files here or click to browse</p>
                <input type="file" name="attachment" class="form-control" style="display: inline-block; width: auto;">
                <p style="font-size: 11px; color: #999; margin-top: 5px;">Max Total Upload Size: 500MB</p>
            </div>
        </div>

        <div>
            <button type="submit" class="btn btn-success" style="background-color: #28a745; color: white; border: none; padding: 12px 25px; border-radius: 5px; font-weight: bold; cursor: pointer;">
                Submit Application
            </button>
        </div>
    </form>
</div>

@endsection