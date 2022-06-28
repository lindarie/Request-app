<!DOCTYPE html>
<html>
<head>
    <title>Requests</title>
</head>
<body>
<div><button type="button" onclick="showRequests()">{{__('customlang.Show All Requests')}}</button></div> <br><br>
<script>
    function showRequests() {
        window.location.href="/request/";
    }
</script>
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
    @foreach ($showrequest as $request)
        <tr>
            <td> {{ $id =$request->id }} </td>
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
        </tr>
</table>
@endforeach

@if (count($showcomment)==0)
    <p color='red'> {{__('customlang.There are no comments!')}}</p>
@else
    <table style="border: 1px solid black">
        <tr>
            <td> Comment Id</td>
            <td> Created at</td>
            <td> Updated at</td>
            <td> Date</td>
            <td> Text</td>
            <td> User ID</td>
            <td> request ID</td>
        </tr>
        <br><br>
        @foreach ($showcomment as $request)
            <tr>
                <td> {{ $request->id }} </td>
                <td> {{ $request->created_at }} </td>
                <td> {{ $request->updated_at }} </td>
                <td> {{ $request->date }} </td>
                <td> {{ $request->text }} </td>
                <td> {{ $request->userID }} </td>
                <td> {{ $request->requestID }} </td>
            </tr>
        @endforeach
    </table>
@endif

<form method="POST" action="{{action([App\Http\Controllers\CommentController::class, 'create']) }}">
    @csrf
    <input type="hidden" name="requestID" id="requestID" value="{{$id}}">
    <label for="text">{{__('customlang.Comment:')}} </label>
    <input type="text" name="text" id="text">
    <input type="submit" value="{{__('customlang.Add')}}">
</form>


</body>
</html>
