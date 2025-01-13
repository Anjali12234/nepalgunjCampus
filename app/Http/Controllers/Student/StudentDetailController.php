<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use App\Http\Requests\StudentDetail\StoreStudentDetailRequest;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StudentDetailController extends Controller
{
    public function create()
    {
       

        return view('student.profile');
    }

    public function storeOrUpdate(StoreStudentDetailRequest $request)
    {
        $student = Auth::guard('student')->user();
    
        if ($request->hasFile('image') && $image = $student->getRawOriginal('image')) {
            $this->deleteFile($image);
        }
    
        $student->update([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'roll_no' => $request->input('roll_no'),
        ]);
    
        $student->studentDetail->updateOrCreate(
            ['student_id' => $student->id], 
            $request->only([
                'address',
                'phone_number',
                'faculty_name',
                'registration_no',
                'facebook_url',
                'instagram_url',
                'description',
            ])
        );
    
        return redirect()->back()->with('success', 'Profile updated successfully.');
    }
    

}
