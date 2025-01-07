<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Notice\StoreNoticeRequest;
use App\Http\Requests\Notice\UpdateNoticeRequest;
use App\Models\Notice;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use RealRashid\SweetAlert\Facades\Alert;

class NoticeController extends Controller
{
    public function index()
    {
        $notices = Notice::latest()->paginate(10);
        return view('admin.notice.index', compact('notices'));
    }

  
    public function store(StoreNoticeRequest $request)
    {
        Notice::create($request->validated());
        Alert::success('Notice submitted successfully');      
      
        return redirect(route('admin.notice.index'));
    }

   
    public function show(Notice $notice)
    {
        $notice->load('files');
        return view("admin.notice.show", compact('notice'));
    }

   
    public function edit(Notice $notice)
    {
        return view('admin.notice.edit',compact('notice'));
    }   

   
    public function update(UpdateNoticeRequest $request, Notice $notice)
    {
       
            $notice->update($request->validated());
            toast('Notice updated successfully', 'success');
            return redirect(route('admin.notice.index'));
       
    }

    
    public function destroy(notice $notice)
    {
        foreach ($notice->files as $file) {
            $this->deleteFile($file->file);
        }
        $notice->delete();
        toast('Notice deleted successfully', 'success');
        return back();
    }

    public function updateStatus(Notice $notice)
    {
        $notice->update([
            'status' => !$notice->status
        ]);
        toast('Status updated successfully', 'success');
        return back();
    }
}
