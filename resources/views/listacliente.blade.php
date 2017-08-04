@extends('layouts.front')
@section('content')
    @foreach($clients as $c)
        {{$c->name}} <br>
    @endforeach
@endsection