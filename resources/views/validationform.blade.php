<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Validation Form</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <div class = 'container'>
        <div class = 'row'>
            <div class = 'col'>
                <h1> Registration form for our club!</h1>
            </div>
            <form action = "{{url('/registration')}}" method = "POST">
                {{csrf_field()}}
                <label for = 'username'> Username </label><br/>
                <input type = 'text' name = 'username'/><br/>
                @if(($errors->has('username')))
                    <small> {{$errors->first('username')}} </samll>
                @endif
                <br/>

                <label for  = 'email'> Email </label><br/>
                <input type = 'text' name = 'email'/><br/>
                @if($errors->has('email'))
                    <small>{{$errors->first('email')}}</small>
                @endif
                <br/>

                <label for = 'password'> Password </label><br/>
                <input type = 'password' name = 'password'/><br/>
                @if($errors->has('password'))
                    <small>{{$errors->first('password')}}</small>
                @endif
                <br/>

                <label for = 'password_confirmation'> Password Confirmation </label><br/>
                <input type = 'password' name = 'password_confirmation'/><br/>
                @if($errors->has('password_confirmation'))
                    <small>{{$errors->first('password_confirmation')}}</small>
                @endif
                <br/>

                <input type = 'submit' value = 'Register'/>
            </form>
        </div>
    </div>
    @foreach($errors->all() as $message)
        {{$message}}<br/>
    @endforeach

    {{$errors->first('username', '<span class = "error">:message</span>')}}
    {{$errors->first('email', '<span class = "error">:message</span>')}}
    {{$errors->first('password', '<span class = "error">:message</span>')}}
    {{$errors->first('password_confirmation', '<span class = "error">:message</span>')}}
</body>
</html>