<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Request to Middleware</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <form action = "{{url('/middlewarefirst')}}" method = 'get'>
        <input type = 'submit' name = 'terminate' value = 'Terminate'/><br/><br/>
        <input type = 'submit' name = 'ok' value = 'OK'/><br/><br/>
    </form>
</body>
</html>