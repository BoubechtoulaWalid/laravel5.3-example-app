<?php
namespace App\Http\Controllers;

use App\Http\Requests\ContactFormRequest;
use App\Models\Message;
use Illuminate\Http\Request;
use App\Http\Requests;

class ContactsController extends Controller
{
    public function contacts() {
        return view('frontend.contacts.contacts');
    }

    public function send(ContactFormRequest $request) {
/*        \Mail::send('emails.contact',
            array(
                'name' => $request->get('name'),
                'email' => $request->get('email'),
                'user_message' => $request->get('message')
            ), function($message)
            {
                $message->from('admin@example.dev');
                $message->to('admin@example.dev', 'Admin')
                    ->subject('Feedback');
            });*/

        $message = new Message([
            'name'  => $request->get('name'),
            'email' => $request->get('email'),
            'body'  => $request->get('message'),
        ]);

        $message->save();

        return \Redirect::route('contacts')->with('message', 'Thanks for contacting us!');
    }
}
