<!DOCTYPE html>
<html>
<head>
    <title>{{__('customlang.Requests')}}</title>
</head>
<body>
<div><button type="button" onclick="goToHome()">{{__('customlang.Home')}}</button></div> <br><br>
<script>
    function goToHome() {
        window.location.href="/dashboard";
    }
    function showRequest(id) {

        window.location.href="/comments/"+id;
    }
</script>
@if (count($request)==0)
    <p color='red'> {{__('customlang.There are no requests in the database')}}!</p>
@else

    <table style="border: 1px solid black">
        <tr>
            <td>{{__('customlang.Request Id')}}  </td>
            <td> {{__('customlang.Created at')}} </td>
            <td> {{__('customlang.Updated at')}} </td>
            <td> {{__('customlang.Date')}} </td>
            <td>{{__('customlang.User ID')}}  </td>
            <td> {{__('customlang.Request type')}} </td>
            <td> {{__('customlang.Summary')}} </td>
            <td> {{__('customlang.Priority')}} </td>
            <td> {{__('customlang.Status')}} </td>
            <td> {{__('customlang.Description')}} </td>
            <td>{{__('customlang.Attachment')}}  </td>
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
                <td><button type="button" onclick="showRequest( {{$request->id}} )">{{__('customlang.Show more')}}</button></td>
        @endforeach
    </table>
@endif

</body>
</html>

