<html>
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
<div class="container max-w-full mx-auto pt-5" style="width:900px;">
@foreach($posts as $post)
        <article class="mb-4">

        <h2 class="text-x1 font-bold text-gray-900">{{$post->title}}</h2>
        <p class="text-md text-gray-600">{{$post->content}}</p>
        </article>

    @endforeach


</div>

</body>
</html>