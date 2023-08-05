<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <title>All Posts</title>
    <link href="{{asset('css/bootstrap.css')}}" rel="stylesheet" />
    <link href="{{asset('css/style.css')}}" rel="stylesheet" />
    <script src="{{asset('js/axios.min.js')}}"></script>
</head>

<body class="d-flex flex-column h-100">


<div class="container">
    <h1>All Posts</h1>
    @foreach ($posts as $post)
        <div class="post">
            <h2>{{ $post->title }}</h2>
            <p>{{ $post->excerpt }}</p>
            <hr>
        </div>
    @endforeach
</div>


<script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>

</body>



</html>
