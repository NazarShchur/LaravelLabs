@extends('app')
@section('title', 'schools')
@section('content')
<h1>{{$student->first_name}}</h1>
<h1>{{$student->second_name}}</h1>
<h1>Student of {{$student->school->name}}</h1>

<h2>Student`s sections</h2>

@foreach($student->sections as $section)
    <form method="get" action="{{url("/section/$section->id")}}">
        <button type="submit">{{$section->name}}</button>
    </form>
    <p></p>
@endforeach

<h2>Join section</h2>
@foreach($student->school->sections as $section)
         @if ($student->sections->contains($section))
         @else
    <form method="post" action="{{url("/join")}}">
        @csrf
        <label>
            {{$section->name}}
            <input type="hidden" value="{{$section->id}}" name="section_id">
            <input type="hidden" value="{{$student->id}}" name="student_id">
            <button type="submit">Join</button>
        </label>
    </form>
         @endif
@endforeach
@endsection
