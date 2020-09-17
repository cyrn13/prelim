<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laagan Itinerary</title>
    <link rel="stylesheet" href="{{('css/bootstrap.css')}}">
    <style>
        li {
            margin-left:5%;
        }
    </style>
</head>
<body>
    <h1>Tourist Spots</h1>
    Home | <a href="{{url('/known')}}">Popularly Known</a>  | <a href="{{url('/suggested')}}">Mostly Suggested</a> 
    <h4 style="margin-top:3%">Places Sort By</h4>
    <li> 
        <a href="{{url('/known')}}">Peoples Choice</a> 
    </li>
    <li>
        <a href="{{url('/suggested')}}">Recommended</a> 
    </li>
</body>
</html>