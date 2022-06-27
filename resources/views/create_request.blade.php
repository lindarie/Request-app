<!DOCTYPE html>
<html>
<head>
    <title>New Request</title>
</head>
<body>
<form method="POST" action="{{action([App\Http\Controllers\RequestController::class, 'store']) }}">
    @csrf
    <label for="request_type">What can we help you with?: </label> <br><br>

    <select  type="text" name="request_type" id="request_type">
        <option value="error">Error</option>
        <option value="consultation">Consultation</option>
        <option value="change">Change</option>
        <option value="travel request">Travel request</option>
        <option value="purchase">Purchase</option>
    </select>

    <input type="hidden" id="status" name="status" value="open"><br><br>

    <label for="name">Summary: </label><br><br>
    <input type="text" name="name" id="name"><br><br>

    <label for="priority">Priority: </label>
    <select  type="text" name="priority" id="priority">
        <option value="A">A - Critical</option>
        <option value="B">B - High </option>
        <option value="C">C - Medium</option>
        <option value="D">D - Low</option>
    </select><br><br>

        <label for="attachment">Attach a file:</label>
        <input type="file" id="attachment" name="attachment"><br><br>

        <label for="date">Date:</label>
        <input type="date" id="date" name="date"><br><br>

        <label for="description">Description:</label><br><br>
        <textarea id="description" name="description" rows="15" cols="100"></textarea> <br><br>

    <input type="submit" value="Send">
</form>
<br>
<div><button type="button" onclick="goToHome()">Cancel</button></div> <br><br>
<script>
    function goToHome() {
        window.location.href="/dashboard";
    }
</script>

</body>
</html>
