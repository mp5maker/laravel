<!DOCTYPE html>
<html lang = 'us'>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>{{ $header }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <div class = 'container'>
        <div class = 'row'>
            <div class = 'col'>
                <h1>{{ $heading }}</h1>
            </div>
        </div>
        <div class = 'row'>
            <div class = 'col'>
                <div class = 'timing'>
                    <span>Current Date :: {{ date('d/m/y') }}<span>
                </div>
            </div>
        </div>
        <div class = 'row'>
            <div class = 'col'>
                <div class = 'if-else-structure'>
                    @if($control == 'yes')
                        <p> Well done!</p>
                    @elseif($control == 'no')
                        <p> Sorry, for your loss</p>
                    @else
                        <p> Nothing </p>
                    @endif
                </div>
            </div>
        </div>
        <div class = 'row'>
            <div class = 'col'>
                <div class = 'for-each-structure'>
                    @foreach ($countries as $country)
                        <p>{{ $country }}</p>
                    @endforeach
                </div>
            </div>
        </div>
        <div class = 'row'>
            <div class = 'col'>
                <div class = 'for-loop-structure'>
                    @for($i = 0; $i < count($countries); $i++)
                        <p>{{ $countries[$i] }}</p>
                    @endfor
                </div>
            </div>
        </div>
        <div class = 'row'>
            <div class = 'col'>
                <div class = 'while-loop-structure'>
                    {{ $i = 0}}
                    @while($i < count($countries))
                        <p>{{ $countries[$i] }}</p>
                        <p>{{ $i++ }}</p>
                    @endwhile
                </div>
            </div>
        </div>
        <div class = 'row'>
            <div class = 'col'>
                <div class = 'unless-structure'>
                    @unless($control == 'yes')
                        <p> Well done!</p>
                    @endunless
                </div>
            </div>
        </div>
    </div>
</body>
</html>