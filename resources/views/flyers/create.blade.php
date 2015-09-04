@extends('layouts.master')

@section('content')

    <h1>Selling your home?</h1>

    <hr>

    <form action="{{ route('flyers.store') }}" method="post">

        @include('partials._form-errors')

        @include('flyers.partials._form')

    </form>

@endsection