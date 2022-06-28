<!DOCTYPE html>
<html>
<head>
    <title>{{__('customlang.New Request')}}</title>
</head>
<body>
<form method="POST" action="{{action([App\Http\Controllers\RequestController::class, 'store']) }}">
    @csrf
    <label for="request_type">{{__('customlang.What can we help you with?')}} </label> <br><br>

    <select  type="text" name="request_type" id="request_type">
        <option value="error">{{__('customlang.Error')}}</option>
        <option value="consultation">{{__('customlang.Consultation')}}</option>
        <option value="change">{{__('customlang.Change')}}</option>
        <option value="travel request">{{__('customlang.Travel request')}}</option>
        <option value="purchase">{{__('customlang.Purchase')}}</option>
    </select>

    <input type="hidden" id="status" name="status" value="open"><br><br>

    <label for="name">{{__('customlang.Summary')}}: </label><br><br>
    <input type="text" name="name" id="name"><br><br>

    <label for="priority">{{__('customlang.Priority')}}: </label>
    <select  type="text" name="priority" id="priority">
        <option value="A">{{__('customlang.A - Critical')}}</option>
        <option value="B">{{__('customlang.B - High')}} </option>
        <option value="C">{{__('customlang.C - Medium')}}</option>
        <option value="D">{{__('customlang.D - Low')}}</option>
    </select><br><br>

        <label for="attachment">{{__('customlang.Attach a file')}}:</label>
        <input type="file" id="attachment" name="attachment"><br><br>

        <label for="date">{{__('customlang.Date')}}:</label>
        <input type="date" id="date" name="date"><br><br>

        <label for="description">{{__('customlang.Description')}}:</label><br><br>
        <textarea id="description" name="description" rows="15" cols="100"></textarea> <br><br>

    <input type="submit" value="{{__('customlang.Send')}}">
</form>
<br>
<div><button type="button" onclick="goToHome()">{{__('customlang.Cancel')}}</button></div> <br><br>
<script>
    function goToHome() {
        window.location.href="/dashboard";
    }
</script>

</body>
</html>
