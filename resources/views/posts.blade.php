<!--this is blade file-->
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Document</title>
</head>
<body>
@foreach($posts as $post)
    <div>{{ $post->title }}</div>
{{--    <p>{{ $post->content }}</p>--}}
{{--    <hr>--}}
{{--    <p>Author: {{ $post->author->name }}</p>--}}
{{--    <p>Created at: {{ $post->created_at }}</p>--}}
{{--    <p>Updated at: {{ $post->updated_at }}</p>--}}
{{--    <hr>--}}

@endforeach
</body>
</html>
