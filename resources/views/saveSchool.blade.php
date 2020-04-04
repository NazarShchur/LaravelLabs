@extends('app')
@section('title', 'schools')
@section('content')
    <h1>Create new School</h1>
    <form method="post" action="{{url('/saveSchool')}}">
        @csrf
        <label for="name">
            <h3>School name</h3>
            <input type="text" id="name" name="name">
        </label>
        <button type="submit">save</button>
    </form>
    @foreach($schools as $school)
        <form method="get" action="{{url("school/$school->id")}}">
            <button type="submit">{{$school->name}}</button>
        </form>
        <p></p>
    @endforeach
    @endsection

