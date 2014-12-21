@extends('layouts.default')

@section('content')

<div class="container">
    <div class="pull-right">
    <div class="center-block">
    <div class="col-md-4-offset-6">
    <h1> Register a new account</h1>
        {{Form::open()}}
        <div>
        {{Form::label('name','Name:')}}
        {{Form::text('name')}}
        </div>
        <div>
         {{Form::label('email','Email:')}}
        {{Form::text('email')}}
        </div>
        <div>
        {{Form::submit('register new account')}}
        </div>
        {{Form::close()}} 
        </div>
    </div>
    </div>
    </div>