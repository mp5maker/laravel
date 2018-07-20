@extends('layouts.parent')

@section('head')
    @parent
    <p> Child:: I will tell it here </p>
@stop

@section('body')
    <p> Child: Let me give something to talk about. </p>
@stop