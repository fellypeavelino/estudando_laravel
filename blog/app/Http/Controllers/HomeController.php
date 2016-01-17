<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
	public function contato() {
		//return view('post.teste');
		return view('page.contato');
	}

	public function postContato() {
		$rules = array( 'nome' => 'required', 'email' => 'required|email');
		$validation = Validator::make(Input::all(), $rules);
		$data = array();
		$data['nome'] = Input::get("nome");
		$data['email'] = Input::get("email");
		$data['texto'] = Input::get("texto");
			if($validation->passes()) {
				Mail::send('emails.contato', $data, function($message) {
					$message->from(Input::get('email'), Input::get('nome'));
					$message->to('contato@billjr.com.br') ->subject('Contato Bill Jr.');
				});
				return Redirect::to('contato') 
				->with('message', 'Mensagem enviada com sucesso!');
			}
		return Redirect::to('contato')->withInput()->withErrors($validation)->with('message', 'Erro! Preencha todos os campos corretamente.');
	}

}
