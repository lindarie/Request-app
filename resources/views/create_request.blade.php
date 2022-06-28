<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>{{__('customlang.New Request')}}</title>
    <link rel="stylesheet" href={{ asset('css/style.css')}}>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Nunito:wght@200;400&display=swap');
    </style>
</head>
<body>

<form class="formCenter" method="POST" action="{{action([App\Http\Controllers\RequestController::class, 'store']) }}">
    @csrf
    <label class="hcenter" for="request_type">{{__('customlang.What can we help you with?')}} </label> <br><br>

    <select  type="text" name="request_type" id="request_type">
        <option value="error">{{__('customlang.Error')}}</option>
        <option value="consultation">{{__('customlang.Consultation')}}</option>
        <option value="change">{{__('customlang.Change')}}</option>
        <option value="travel request">{{__('customlang.Travel request')}}</option>
        <option value="purchase">{{__('customlang.Purchase')}}</option>
    </select>

    <input type="hidden" id="status" name="status" value="Open"><br><br>

    <label for="name">{{__('customlang.Summary')}}: </label><br><br>
    <input class="inputRequest"  type="text"  size="100" name="name" id="name"><br><br>

    <label for="priority">{{__('customlang.Priority')}}: </label><br><br>
    <select  type="text" name="priority" id="priority">
        <option class="inputRequest" value="A">{{__('customlang.A - Critical')}}</option>
        <option value="B">{{__('customlang.B - High')}} </option>
        <option value="C">{{__('customlang.C - Medium')}}</option>
        <option value="D">{{__('customlang.D - Low')}}</option>
    </select><br><br>

        <label for="attachment">{{__('customlang.Attach a file')}}:</label> <br><br>
        <input type="file" id="attachment" name="attachment"><br><br>

        <label for="date">{{__('customlang.Date')}}:</label><br><br>
        <input type="date" id="date" name="date"><br><br>

        <label for="description">{{__('customlang.Description')}}:</label><br><br>
        <textarea id="description" name="description" rows="15" cols="100"></textarea> <br><br>
    @if (count($errors) > 0)
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li style="color:red">{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <input class="submit" type="submit" value="{{__('customlang.Send')}}">
</form>
<br>
<div><button class="cancelButton" type="button" onclick="goToHome()">{{__('customlang.Cancel')}}</button></div> <br><br>

<script>
    function goToHome() {
        window.location.href="/dashboard";
    }
</script>
</body>
</html>
