<!doctype html>

<head>
    <title>Create</title>
</head>
<body>
<form method="post" action="{{action([\App\Http\Controllers\PagesController::class,'submit'])}}" enctype="multipart/form-data">
    @csrf
    <label>Name:</label>
    <input type="text" name="name" required>
    <label> Address:</label>
    <input type="text" name="address" required>
    <label>Age:</label>
    <input type="number" name="age" required>
    <label>DOB:</label>
    <input type="date" name="dob" required>
    <label>Image</label>
    <input type="file" name="image" required>
<input type="submit">
</form>
</body>
</html>
