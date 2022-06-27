<!DOCTYPE html>
<html>
<head>
    <title>Update a user</title>
</head>
<body>
<form method="POST" action="{{action([App\Http\Controllers\UserController::class, 'update']) }}">
    @csrf
    <input type="hidden" name="id" id="id" value="{{ $user->id }}">
    <label for="name">Name: </label>
    <input type="text" name="name" id="name"> <br><br>
    <label for="surname">Surname: </label>
    <input type="text" name="surname" id="surname"><br><br>
    <label for="group">Group: </label>
    <select id="group" type="number" name="group">
        <option value="1">User</option>
        <option value="2">Administrator</option>
        <option value="3">IT department</option>
    </select><br><br>
    <label for="email">Email: </label>
    <input type="email" name="email" id="email"><br><br>
    <label for="password">Password: </label>
    <input type="password" name="password" id="password"><br><br>
    <input type="submit" value="update">
</form>

</body>
</html>
