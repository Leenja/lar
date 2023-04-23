<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>About me</title>
</head>
<body>
    <h1> {{$name}} Website! </h1>
    <p>Hi, <b>my name is {{$name}} </b>,and welcome to my <cite>very basic <abbr title="Hypertext Markup Language">HTML</abbr> website.</cite>
        <hr>
    </p>
    <h2>Some info about me :</h2>
    <p>This is my Email: {{$email}} </p>
    <table>
        <tr>
            <td>
                <img src={{$photo}} width="400" height="250" alt="leen">
            </td>
            <td>
                <h1>About Me :</h1>
                <p> {{$about}} </p>
                <p>Skills of mine: </p>
                {{-- {{implode(',', $skills)}}--}}
                <ul>
                    @foreach ($skills as $skills)
                        <li> {{$skills}} </li>
                    @endforeach
                </ul>
            </td>
        </tr>
    </table> <br>
    <hr>
</body>
</html>
