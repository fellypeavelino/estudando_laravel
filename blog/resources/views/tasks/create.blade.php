@extends('layouts.master')

@section('content')

<h1>Add a New Task</h1>
<p class="lead">Add to your task list below.</p>
<hr>

@stop
<?php echo Form::open([
    'route' => 'tasks.store'
]) ?>

<div class="form-group">
    <?php echo Form::label('title', 'Title:', ['class' => 'control-label']) ?>
    <?php echo Form::text('title', null, ['class' => 'form-control']) ?>
</div>

<div class="form-group">
    <?php echo Form::label('description', 'Description:', ['class' => 'control-label']) ?>
    <?php echo Form::textarea('description', null, ['class' => 'form-control']) ?>
</div>

<?php echo Form::submit('Create New Task', ['class' => 'btn btn-primary']) ?>

<?php echo Form::close() ?>