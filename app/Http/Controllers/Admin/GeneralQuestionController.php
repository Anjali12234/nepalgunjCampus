<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\GeneralQuestion\StoreGeneralQuestionRequest;
use App\Http\Requests\GeneralQuestion\UpdateGeneralQuestionRequest;
use App\Models\GeneralQuestion;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class GeneralQuestionController extends Controller
{
    public function index()
    {
        $generalQuestions = GeneralQuestion::paginate(10);
        return view("admin.generalQuestion.index", compact("generalQuestions"));
    }
    public function create()
    {
       
        return view('admin.generalQuestion.create');
    }
    
    public function store(StoreGeneralQuestionRequest $request)
    {
        GeneralQuestion::create($request->validated());
        Alert::success('File added successfully');
        return back();
    }

    public function edit(GeneralQuestion $generalQuestion)
    {
        return view('admin.generalQuestion.edit',compact('generalQuestion'));
    }

    public function update(UpdateGeneralQuestionRequest $request, GeneralQuestion $generalQuestion)
    {

        $generalQuestion->update($request->validated());
        Alert::success('generalQuestion updated successfully');
        return redirect(route('admin.generalQuestion.create'));
    }

    public function destroy(GeneralQuestion $generalQuestion)
    {
        $generalQuestion->delete();
        Alert::success('generalQuestion deleted successfully');
        return back();
    }
}