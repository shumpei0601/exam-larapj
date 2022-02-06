<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function index()
    {
        $items = Contact::all();
        return view('index', ['items' => $items]);
    }
    public function confirm(Request $request)
    {
        $this->validate($request, Contact::$rules);

        $reminds = $request->all();

        return view('confirm', ['reminds' => $reminds]);
    }
    public function itinerary(Request $request)
    {
        $action = $request->get('action', 'return');
        $remind = $request->except('action');
        if($action === 'submit') {
            $contact = new Contact;
            $contact->fill($remind)->save();


            return redirect()->route('contact.complete');
        } else {
            return redirect()->route('contact.contact')->withInput($remind);
        }
    }
    public function thanks(Request $request)
    {
        $contact = new Contact;
        $reminds = $request->all();
        unset($reminds['_token_']);
        $contact->fill($reminds)->save();

        return view('thanks', ['reminds' => $reminds]);
    }
}