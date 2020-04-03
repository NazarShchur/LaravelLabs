<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <title>Laravel</title>
</head>

<body>
<h1>Users</h1>


@if (count($all) > 0)
    @foreach($all as $user )
        <p>User {{$user->getId()}}</p>
    @endforeach
@else
    <p>There is no users</p>
@endif

<form method="post" action="{{url('addUser')}}">
    @csrf
    <label for="id">
        Add user with id
    <input type="number" id="id" name="id">
    </label>
    <button type="submit">Add</button>

</form>
</body>
