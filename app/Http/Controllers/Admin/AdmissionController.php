<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admission;
use Illuminate\Http\Request;

class AdmissionController extends Controller
{
    /**
     * Display a listing of admissions.
     */
    public function index()
    {
        $admissions = Admission::latest()->get();
        return view('backend.admissions', compact('admissions'));
    }

    /**
     * Show the form for creating a new admission.
     */
    public function create()
    {
        return view('backend.create-admission');
    }

    /**
     * Store a newly created admission in storage.
     */
    public function store(Request $request)
    {
        // ১. ফ্রম ডাটা ভ্যালিডেশন
        $request->validate([
            'first_name'          => 'required|string|max:255',
            'last_name'           => 'required|string|max:255',
            'email'               => 'required|email|unique:admissions,email',
            'phone'               => 'required|string|max:20',
            'department'          => 'required|string|max:255',
            'letter_of_intention' => 'nullable|string',
            'attachment'          => 'nullable|file|mimes:pdf,doc,docx,jpg,png|max:51200', // Max 50MB (Adjust as needed)
        ]);

        // ২. ফার্স্ট ও লাস্ট নেম একত্র করে ফুল নেম তৈরি
        $studentName = trim($request->first_name . ' ' . $request->last_name);

        // ৩. ফাইল আপলোড প্রসেসিং (যদি ফাইল সাবমিট করা হয়ে থাকে)
        $filePath = null;
        if ($request->hasFile('attachment')) {
            $filePath = $request->file('attachment')->store('admissions/attachments', 'public');
        }

        // ৪. ডাটাবেজে সেভ করা
        Admission::create([
            'student_name'        => $studentName,
            'email'               => $request->email,
            'phone'               => $request->phone,
            'department'          => $request->department,
            'letter_of_intention' => $request->letter_of_intention,
            'attachment'          => $filePath,
            'status'              => 'Pending',
        ]);

        // ৫. সফল বার্তা সহ অ্যাডমিশন লিস্টে রিডাইরেক্ট
        return redirect()
            ->route('admissions.index')
            ->with('success', 'Admission Application Submitted Successfully.');
    }
}