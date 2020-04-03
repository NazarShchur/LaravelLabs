<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <title>Laravel</title>
</head>

<body>
<h1 style="text-align: center"> {{$school->name}}</h1>
<div style="float: left">
    <h2>Create new Student</h2>
    <form method="post" action="{{url('/saveStudent')}}">
        @csrf
        <label for="firstName">
            <h3>First name</h3>
            <input type="text" id="firstName" name="firstName">
            <h3>Second name</h3>
            <input type="text" id="secondName" name="secondName">
            <input type="hidden" value="{{$school->id}}" id="schoolId" name="schoolId">
        </label>
        <button type="submit">save</button>
    </form>
    <h1>students</h1>
    @foreach($school->students as $student)
        <form method="get" action="{{url("/student/$student->id")}}">
            <button type="submit">{{$student->first_name}} {{$student->second_name}}</button>
        </form>
        <p></p>
    @endforeach
</div>

<div style="float: right">
    <h2>Create new Section</h2>
    <form method="post" action="{{url('/createSection')}}">
        @csrf
            <h3>Section name</h3>
            <input type="text" id="name" name="name">
            <input type="hidden" value="{{$school->id}}" id="school_id" name="school_id">
        <button type="submit">save</button>
    </form>
    <h1>Sections</h1>
    @foreach($school->sections as $section)
        <form method="get" action="{{url("/section/$section->id")}}">
            <button type="submit">{{$section->name}}</button>
        </form>
        <p></p>
    @endforeach
</div>

</body>
