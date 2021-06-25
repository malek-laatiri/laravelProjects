<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>biens {{$type}} {{$base }}</h1>
<div>
    @if ($price > 10)
        <h1>pizza is expensive</h1>
        @elseif($price == 15)
        <h1>55</h1>

    @endif
</div>
</body>
</html>