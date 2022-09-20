<!doctype html>

<head>
    <title>Create</title>
</head>
<body>
<form method="post" action="{{action([\App\Http\Controllers\PagesController::class,'update'])}}" enctype="multipart/form-data">
    @csrf
    <input type="number" name="id" value="{{$student->id}}"required>
    <label>Name:</label>
    <input type="text" name="name" value="{{$student->name}}"required>
    <label> Address:</label>
    <input type="text" name="address" value="{{$student->address}}"required>
    <label>Age:</label>
    <input type="number" name="age" value="{{$student->age}}"required>
    <label>DOB:</label>
    <input type="date" name="dob" value="{{$student->dob}}"required>
    <input type="submit">
</form>
</body>
</html>
