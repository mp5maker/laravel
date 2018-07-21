<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Form Action to the rescue</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <h4> Simple Get Request with hidden forms </h4>
    <form action =  " {{ url('/dumpdata') }}" method = 'GET'>
        {{csrf_field()}}
        <input type = 'hidden' name = 'foo' value = 'bar'/>
        <input type = 'hidden' name = 'baz' value = 'boo'/>
        <input type = 'submit' value = 'send'/>
    </form>
</body>
</html>