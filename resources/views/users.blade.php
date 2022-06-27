<!DOCTYPE html>
<html>
<head>
    <title>Users</title>
</head>
<body>
<div><button type="button" onclick="goToHome()">Home</button></div> <br>
<div><button type="button" onclick="createUser()">Create User</button></div> <br><br>
<script>
    function goToHome() {
        window.location.href="/dashboard";
    }
    function createUser() {
        window.location.href="/register";
    }
</script>
@if (count($request)==0)
    <p color='red'> There are no users in the database!</p>
@else

    <table style="border: 1px solid black">
        <tr>
            <td> User Id </td>
            <td> Created at </td>
            <td> Updated at </td>
            <td> Name </td>
            <td> Surname </td>
            <td> Group </td>
            <td> E-mail </td>
        </tr>
        @foreach ($request as $request)
            <tr>
                <td> {{ $request->id }} </td>
                <td> {{ $request->created_at }} </td>
                <td> {{ $request->updated_at }} </td>
                <td> {{ $request->name }} </td>
                <td> {{ $request->surname }} </td>
                <td> {{ $request->groupID }} </td>
                <td> {{ $request->email }} </td>
        @endforeach
    </table>
@endif

</body>
</html>


