<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>{{__('customlang.Users')}}</title>
    <link rel="stylesheet" href={{ asset('css/style.css')}}>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Nunito:wght@200;400&display=swap');
    </style>
</head>
<body>
<div><button class="homebutton" type="button" onclick="goToHome()">{{__('customlang.Home')}}</button></div> <br>
<div><button class="createUserButton" type="button" onclick="createUser()">{{__('customlang.Create User')}}</button></div> <br><br>
<script>
    function goToHome() {
        window.location.href="/dashboard";
    }
    function createUser() {
        window.location.href="/register";
    }
</script>
@if (count($request)==0)
    <p color='red'>{{__('customlang.There are no users in the database')}} !</p>
@else

    <table class="usersTable" style="border: 1px solid black">
        <tr>
            <td> {{__('customlang.User ID')}} </td>
            <td> {{__('customlang.Created at')}} </td>
            <td> {{__('customlang.Updated at')}} </td>
            <td> {{__('customlang.Name')}} </td>
            <td> {{__('customlang.Surname')}} </td>
            <td> {{__('customlang.Group')}} </td>
            <td> {{__('customlang.E-mail')}} </td>
        </tr>
        @foreach ($request as $request)
            <tr>
                <td> {{ $id = $request->id }} </td>
                <td> {{ $request->created_at }} </td>
                <td> {{ $request->updated_at }} </td>
                <td> {{ $request->name }} </td>
                <td> {{ $request->surname }} </td>
                <td> {{ $request->groupID }} </td>
                <td> {{ $request->email }} </td>
                <td> <input class="updateButton" type="button" value="{{__('customlang.update')}}" onclick="updateUser({{$id }})"></td>
                <td>
                    <form method="POST" action="{{action([App\Http\Controllers\UserController::class, 'destroy'], $id) }}"> @csrf @method('DELETE') <input class="deleteButton" type="submit" value="{{__('customlang.delete')}}"/></form>
                </td>
        @endforeach
    </table>
@endif
<script>

    function updateUser(id) {
        window.location.href = "update/"+id;
    }
</script>
</body>
</html>


