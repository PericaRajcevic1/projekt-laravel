<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\VisitorContact;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

class PagesController extends Controller
{
    public function index()
    {
      return view('pages.index');
    }

    public function showContactForm()
    {
        return view('Pages.contact');

        
    }

    public function submitContactForm(Request $request)
    {
      
    

      

      $data = [
        'name' => $request->name,
        'email' =>$request->email,
        'message' =>$request->message,
        'document' =>$request->document,
        'choose' =>$request->choose,
        
        
      ];
      

      Mail::to('pericarajcevic@gmail.com')->send (new VisitorContact($data));

      Session::flash('message', 'Hvala Vam na vašoj poruci!');
      return redirect()->route('contact.show');
    }
}
