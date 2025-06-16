<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\ContactEmail;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {

        $emails = ContactEmail::paginate(6);

        return view('Dashboard.pages.Emails.index', compact('emails'));
    }

    public function delete($id)
    {

        $contactEmail = ContactEmail::findOrFail($id);

        $contactEmail->delete();
        notyf()
            ->position('x', 'center')
            ->position('y', 'top')
            ->success('Sucessfully: Email Deleted SucessFully.');
        return redirect()->back();
    }
}
