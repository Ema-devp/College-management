<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Course;

class CourseController extends Controller
{
    /**
     * Display a listing of courses.
     */
    public function index()
    {
        $courses = Course::latest()->get();

        return view('backend.courses', compact('courses'));
    }

    /**
     * Show Add Course Form.
     */
    public function create()
    {
        return view('backend.create-course');
    }

    /**
     * Store a newly created course.
     */
    public function store(Request $request)
    {
        $request->validate([
            'course_code'   => 'required|max:50',
            'course_name'   => 'required|max:255',
            'department'    => 'required|max:255',
            'credit'        => 'required|integer',
            'teacher'       => 'required|max:255',
            'description'   => 'nullable',
            'status'        => 'required',
            'prerequisites' => 'nullable',
        ]);

        Course::create([
            'course_code'   => $request->course_code,
            'course_name'   => $request->course_name,
            'department'    => $request->department,
            'credit'        => $request->credit,
            'teacher'       => $request->teacher,
            'description'   => $request->description,
            'status'        => $request->status,
            'prerequisites' => $request->prerequisites,
        ]);

        return redirect()
            ->route('courses.index')
            ->with('success', 'Course Added Successfully.');
    }

    /**
     * Display the specified course.
     */
    public function show(Course $course)
    {
        return view('backend.show-course', compact('course'));
    }

    /**
     * Show Edit Course Form.
     */
    public function edit(Course $course)
    {
        return view('backend.edit-course', compact('course'));
    }

    /**
     * Update Course.
     */
    public function update(Request $request, Course $course)
    {
        $request->validate([
            'course_code'   => 'required|max:50',
            'course_name'   => 'required|max:255',
            'department'    => 'required|max:255',
            'credit'        => 'required|integer',
            'teacher'       => 'required|max:255',
            'description'   => 'nullable',
            'status'        => 'required',
            'prerequisites' => 'nullable',
        ]);

        $course->update([
            'course_code'   => $request->course_code,
            'course_name'   => $request->course_name,
            'department'    => $request->department,
            'credit'        => $request->credit,
            'teacher'       => $request->teacher,
            'description'   => $request->description,
            'status'        => $request->status,
            'prerequisites' => $request->prerequisites,
        ]);

        return redirect()
            ->route('courses.index')
            ->with('success', 'Course Updated Successfully.');
    }

    /**
     * Delete Course.
     */
    public function destroy(Course $course)
    {
        $course->delete();

        return redirect()
            ->route('courses.index')
            ->with('success', 'Course Deleted Successfully.');
    }
}