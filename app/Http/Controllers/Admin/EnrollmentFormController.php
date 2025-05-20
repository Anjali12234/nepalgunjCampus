<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\EnrollmentForm;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class EnrollmentFormController extends Controller
{
 
    public function index()
    {
        $enrollmentForms = EnrollmentForm::latest()->paginate(10);
        return view('admin.enrollmentForm.index',compact('enrollmentForms'));
    }

    public function show(EnrollmentForm $enrollmentForm)
    {  
        return view('admin.enrollmentForm.show',compact('enrollmentForm'));
    }

    public function destroy(EnrollmentForm $enrollmentForm)
    {
        $enrollmentForm->delete();
        Alert::success('Form deleted successfully');
        return back();
    }
    public function updateStatus(EnrollmentForm $enrollmentForm)
    {
        $enrollmentForm->update([
            'status' => !$enrollmentForm->status
        ]);
        toast('Status updated successfully', 'success');
        return back();
    }
}
