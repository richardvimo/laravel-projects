<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function getIndex() {
    	$firstName = "Richard";
		$lastName = "Villarroel Montaño";
		$fullName = $firstName." ".$lastName;
		return view('pages/welcome')->with('fullName', $fullName);
	}

	public function getAbout() {
		$firstName = "Richard";
		$lastName = "Villarroel Montaño";
		$fullName = $firstName." ".$lastName;
		return view('pages/about')->with('fullName', $fullName);
	}

	public function getContact() {
		return view('pages.contact');
	}

	public function postContact(Request $request) {
		$this->validate($request, [
			'email' => 'required|email',
			'subject' => 'min:3',
			'message' => 'min:10']);
		$data = array(
			'email' => $request->email,
			'subject' => $request->subject,
			'bodyMessage' => $request->message
			);
		Mail::send('emails.contact', $data, function($message) use ($data){
			$message->from($data['email']);
			$message->to('hello@devmarketer.io');
			$message->subject($data['subject']);
		});
		Session::flash('success', 'Your Email was Sent!');
		return redirect('/');
	}
}
