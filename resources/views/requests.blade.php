<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>{{__('customlang.Requests')}}</title>
    <link rel="stylesheet" href={{ asset('css/style.css')}}>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Nunito:wght@200;400&display=swap');
    </style>
</head>
<body>

<div><button class="homebutton" type="button" onclick="goToHome()">{{__('customlang.Home')}}</button></div> <br><br>
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

    <table class="center" >
        <tr class="headdings">
            <td> {{__('customlang.Request type')}} </td>
            <td> {{__('customlang.Summary')}} </td>
            <td> {{__('customlang.Status')}} </td>
            <td> {{__('customlang.Created at')}} </td>
            <td>{{__('customlang.User ID')}}  </td>
            <td> {{__('customlang.Priority')}} </td>
        </tr>

        @foreach ($request as $request)
            <tr>
                <td> {{ $request->request_type }} </td>
                <td> {{ $request->name }} </td>
                <td> {{ $request->status }} </td>
                <td> {{ $request->created_at }} </td>
                <td> {{ $request->userID }} </td>
                <td> @if($request->priority=='A') A - Critical @endif
                    @if($request->priority=='B') A - High @endif
                    @if($request->priority=='C') A - Medium @endif
                    @if($request->priority=='D') A - Low @endif
                </td>
                <td><button type="button" onclick="showRequest( {{$request->id}} )">{{__('customlang.Show more')}}</button></td>
        @endforeach
    </table>
    <hr>
@endif

</body>
</html>

