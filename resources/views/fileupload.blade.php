<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>File Upload</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <form action = "{{url('/filepost')}}" method = 'POST' enctype = 'multipart/form-data'>
        {{csrf_field()}}
        <label for = 'Upload'>File Upload</label><br/>
        <input type = 'hidden' name = "MAX_FILE_SIZE" value = '524288'/>
        <input type = 'file' name = 'upload'/><br/>
        <input type = 'submit'/>
    </form>
</body>
</html>