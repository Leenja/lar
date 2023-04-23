<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contact</title>
</head>
<body>
    <h1>Hello</h1>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi quasi quam eveniet voluptatibus pariatur iure.</p>
    <?php
        $title = '<h3> This is how we print with Mustache<h3>';
        $bool = false;
    ?>
    @if ($bool)
        {{ $title }}
        @{{ time() }}
        {!! $title !!}
    @endif

    @for ($i=0 ; $i<10 ; $i++)
        <li> {{ $title }} </li>
    @endfor
    <form action ="#">
        <input type="text">
        <input type="text">
        <input type="text">
        <input type="submit">
    </form>
</body>
</html>
