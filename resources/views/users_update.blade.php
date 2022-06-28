<!DOCTYPE html>
<html>
<head>
    <title>{{__('customlang.Update a user')}}</title>
</head>
<body>
<form method="POST" action="{{action([App\Http\Controllers\UserController::class, 'update']) }}">
    @csrf
    <input type="hidden" name="id" id="id" value="{{ $user->id }}">
    <label for="name">{{__('customlang.Name')}}: </label>
    <input type="text" name="name" id="name"> <br><br>

    <label for="surname">{{__('customlang.Surname')}}: </label>
    <input type="text" name="surname" id="surname"><br><br>

    <label for="group">{{__('customlang.Group')}}: </label>
    <select id="group" type="number" name="group">
        <option value="1">{{__('customlang.User')}}</option>
        <option value="2">{{__('customlang.Administrator')}}</option>
        <option value="3">{{__('customlang.IT department')}}</option>
    </select><br><br>
    <label for="email">{{__('customlang.Email')}}: </label>
    <input type="email" name="email" id="email"><br><br>

    <label for="password">{{__('customlang.Password')}}: </label>
    <input type="password" name="password" id="password"><br><br>
    @if (count($errors) > 0)
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li style="color:red">{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <input type="submit" value="{{__('customlang.update')}}">
</form>

</body>
</html>
