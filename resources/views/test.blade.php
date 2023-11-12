@extends('layouts.base')

@section('title', 'test')

@section('content')
    Ich bin ein Test
    <p>User ID: {{$ivan}}</p>
    <p>Account ID: {{$ziko}}</p>

    <p>Unser Response Code is: {{$responseCode}}</p>

<form method="get" action="">
    @csrf
 
    <input type="text" name="text" />
    <input type="submit" name="submit" />

</form>
@endsection