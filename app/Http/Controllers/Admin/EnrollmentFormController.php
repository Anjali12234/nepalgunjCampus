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
     public function exportCsv()
    {
        $enrollmentForms = EnrollmentForm::all();
    
        $filename = 'enrollmentForms.csv';
        $headers = [
            'Content-Type' => 'text/csv',
            'Content-Disposition' => "attachment; filename=\"$filename\"",
        ];
    
        $callback = function () use ($enrollmentForms) {
            $handle = fopen('php://output', 'w');
            fputcsv($handle, ['ID', 'Name', 'Email','Address','College Name','Faculty','Phone Number']); // Header row
    
            foreach ($enrollmentForms as $enrollmentForm) {
                fputcsv($handle, [
                    $enrollmentForm->id,
                    $enrollmentForm->name,
                    $enrollmentForm->email,
                    $enrollmentForm->address,
                    $enrollmentForm->college_name,
                    $enrollmentForm->faculty,
                    $enrollmentForm->phone_no,
                ]);
            }
    
            fclose($handle);
        };
    
        return response()->stream($callback, 200, $headers);
    }
}
