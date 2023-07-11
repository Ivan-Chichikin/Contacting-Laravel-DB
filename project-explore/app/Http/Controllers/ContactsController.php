<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\ContactsRequest;
use App\Models\Contacts;

class ContactsController extends Controller{
    public function submitFC(ContactsRequest $req){

        $contact = new Contacts();
        $contact->name = $req->input('name');
        $contact->email = $req->input('email');
        $contact->subject = $req->input('subject');
        $contact->message = $req->input('message');

        $contact->save();

        return redirect()->route('home')->with('success', 'Обращение создано!');
    }

    public function allData(){ 
        $contact = new Contacts();
        return view('contacts-data', ['data' => $contact->orderBy('id', 'desc')->take(10)->get()]); 
        // сортировка: desc – по убыванию; asc – по возрастанию; take – ограничивает кол-во записей  

        // return view('contacts-data', ['data' => $contact->where('subject', '=', 'Ресурсы')->get()]); // Вывод по теме
    }

    public function showOneMessage($id){
        $contact = new Contacts();
        return view('one-message', ['data' => $contact->find($id)]); 
    }

    public function updateMessage($id){
        $contact = new Contacts();
        return view('update-message', ['data' => $contact->find($id)]); 
    }

    public function updateMessageSubmit($id, ContactsRequest $req){
        $contact = Contacts::find($id); // выбираем запись и помещаем в объект Contact
        $contact->name = $req->input('name');
        $contact->email = $req->input('email');
        $contact->subject = $req->input('subject');
        $contact->message = $req->input('message');

        $contact->save();

        return redirect()->route('contacts-data-one', $id)->with('success', 'Обращение обновлено!');
    }
    
    public function deleteMessage($id){
        Contacts::find($id)->delete();
        return redirect()->route('contacts-data')->with('success', 'Обращение удалено!');
    }

}
