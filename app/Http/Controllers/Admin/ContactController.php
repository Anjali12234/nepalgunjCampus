<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\Http\Requests\Contact\StoreContactRequest;
use App\Models\Contact;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class ContactController extends Controller
{
    public function index()
    {
        $contacts=Contact::latest()->paginate();
        return view('admin.contact.index',compact('contacts'));
    }
    public function store(StoreContactRequest $request)
    {

        Contact::create($request->validated());
        Alert::success('Message submitted successfully');
        return back();
    }
    public function show(Contact $contact)
    {  
        return view('admin.contact.show',compact('contact'));
    }

    public function destroy(Contact $contact)
    {
        $contact->delete();
        Alert::success('message deleted successfully');
        return back();
    }
}
