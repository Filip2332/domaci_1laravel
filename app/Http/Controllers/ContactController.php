<?php

//vizuelna putanja do kontrolera
namespace App\Http\Controllers;
use App\Models\ContactModel;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(){
        return view('/kontakt');
    }


    public function getAllContacts(){
        $allContacts = ContactModel::all();
        dd($allContacts);
        return view("allContacts",compact('allContacts'));
    }
}
