<!DOCTYPE html>
<html>
<head>
    <title>Requests</title>
</head>
<body>
<div><button type="button" onclick="goToHome()">Home</button></div> <br><br>
<script>
    function goToHome() {
        window.location.href="/dashboard";
    }
</script>
@if (count($request)==0)
    <p color='red'> There are no requests in the database!</p>
@else

    <table style="border: 1px solid black">
        <tr>
            <td> Request Id </td>
            <td> Created at </td>
            <td> Updated at </td>
            <td> Date </td>
            <td> User ID </td>
            <td> Request type </td>
            <td> Summary </td>
            <td> Priority </td>
            <td> Status </td>
            <td> Description </td>
            <td> Attachment </td>
        </tr>
        @foreach ($request as $request)
            <tr>
                <td> {{ $request->id }} </td>
                <td> {{ $request->created_at }} </td>
                <td> {{ $request->updated_at }} </td>
                <td> {{ $request->date }} </td>
                <td> {{ $request->userID }} </td>
                <td> {{ $request->request_type }} </td>
                <td> {{ $request->name }} </td>
                <td> {{ $request->priority }} </td>
                <td> {{ $request->status }} </td>
                <td> {{ $request->description }} </td>
                <td> {{ $request->attachment }} </td>
        @endforeach
    </table>
@endif

</body>
</html>

