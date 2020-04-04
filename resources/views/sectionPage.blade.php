@extends('app')
@section('title', 'schools')
@section('content')
<h1>{{$section->name}} in {{$section->school->name}}</h1>
<h2>Attenders</h2>
@foreach($section->students as $student)
    <form method="get" action="{{url("/student/$student->id")}}">
        <button type="submit">{{$student->first_name}} {{$student->second_name}}</button>
    </form>
    <p></p>
@endforeach
</body>
