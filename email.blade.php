@extends('layouts.master')

@section('content')
    <div class="container">
        <h1>Click the Link To Verify Your Email</h1>

         Click the following link to verify your email {{ url('/verifyemail/'.$email_token)}}
    </div>
@stop