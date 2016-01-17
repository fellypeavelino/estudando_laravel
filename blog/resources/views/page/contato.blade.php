oi
<?php
	if(Session::has('message'))
	{ Session::get('message') ;}
	echo Form::open(array('action' => 'HomeController@contato', 'role' => 'form')) ;
	echo Form::label('nome', 'Nome', array('class'=>'control-label'));
	echo Form::text('nome', null, array('placeholder'=>'Seu nome...', 'class'=>'form-control'));
	echo Form::label('email', 'E-mail', array('class'=>'control-label'));
	echo Form::text('email', null, array('placeholder'=>'Seu e-mail...', 'class'=>'form-control'));
	echo Form::submit('Enviar Mensagem', array('class' => 'btn btn-default'));
	echo Form::close();
?>
