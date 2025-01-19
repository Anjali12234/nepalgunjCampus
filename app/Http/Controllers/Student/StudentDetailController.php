<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use App\Http\Requests\StudentDetail\StoreStudentDetailRequest;
use App\Models\Student;
use App\Models\StudentDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StudentDetailController extends Controller
{
    public function create()
{
    $student = Auth::guard('student')->user();

    // Retrieve the related StudentDetail
    $studentDetail = StudentDetail::with('student')->where('student_id', $student->id)->first();

    return view('student.profile', compact('student', 'studentDetail'));
}


    public function store(StoreStudentDetailRequest $request)
    {
        $student = Auth::guard('student')->user()->load('studentDetail');
        if ($student) {
           
            if ($request->hasFile('image') && $student?->image) {
                $this->deleteFile($student?->image);
            }
            $studentDetail = studentDetail::updateOrCreate(
                ['student_id' => $student->id],
                $request->validated()
            );
            $studentUpdatedData = [
                'name' => $request->input('name'),
                'email' => $request->input('email'),
                'roll_no' => $request->input('roll_no'),
                'gender' => $request->input('gender'),
            ];
            $student->update($studentUpdatedData);
            return redirect()->back()->with('status', 'You have successfully addedd your detail. To add post wait until the your account is not verified. For other information contact on the given contact on the site.');
         }
    }
    

}
