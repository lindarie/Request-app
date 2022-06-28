<!DOCTYPE html>
<html>
<head>
    <title>Requests</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href={{ asset('css/style.css')}}>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Nunito:wght@200;400&display=swap');
    </style>
</head>
<body>
<div>
    <button class="homebutton" type="button" onclick="showRequests()">{{__('customlang.Show All Requests')}}</button>
</div>
<br><br>
<script>
    function showRequests() {
        window.location.href = "/request/";
    }
</script>
@foreach ($showrequest as $request)
    <div class="requestCenter">
    <div class="bold">{{__('customlang.Request Id')}}  </div>
    <div> {{ $id =$request->id }} </div><br>
    <div class="bold"> {{__('customlang.Created at')}} </div>
    <div> {{ $request->created_at }} </div><br>
    <div class="bold"> {{__('customlang.Date')}} </div>
    <div> {{ $request->date }} </div><br>
    <div class="bold">{{__('customlang.User ID')}}  </div>
    <div> {{ $request->userID }} </div><br>
    <div class="bold"> {{__('customlang.Request type')}} </div>
    <div> {{ $request->request_type }} </div><br>
    <div class="bold"> {{__('customlang.Summary')}} </div>
    <div> {{ $request->name }} </div><br>
    <div class="bold"> {{__('customlang.Priority')}} </div>
    <div> {{ $request->priority }} </div><br>
    <div class="bold"> {{__('customlang.Status')}} </div>
    <div> {{ $request->status }} </div><br>
    <div class="bold"> {{__('customlang.Description')}} </div>
    <div> {{ $request->description }} </div><br>
    <div class="bold">  {{__('customlang.Attachment')}}  </div>
    <div> {{ $request->attachment }} </div><br>
    </div>
@endforeach

@if (count($showcomment)==0)
    <p color='red'> {{__('customlang.There are no comments!')}}</p>
@else

        <br><br>
        @foreach ($showcomment as $request)
            <div class="comment">
            <div> User: {{ $request->userID }}</div>
            <div class="bold"> {{ $request->text }} </div>
            <div> Created: {{ $request->created_at }}</div>
            </div>
            <br><br>
        @endforeach

@endif
@if (Auth::user()->groupID==3)
    @if (count($errors) > 0)
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li style="color:red">{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="{{action([App\Http\Controllers\CommentController::class, 'create']) }}">
        @csrf
        <input type="hidden" name="requestID" id="requestID" value="{{$id}}">
        <label for="text">{{__('customlang.Comment:')}} </label>
        <input type="text" size="50" name="text" id="text"> <br><br>
        <input type="submit" class="addButton" value="{{__('customlang.Add')}}">
    </form>
@endif


</body>
</html>
