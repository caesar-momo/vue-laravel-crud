<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        html,body {
            margin:0;
            padding:0;
            height:100%;
            width:100%;
            background-color: #d1d1d1
        }
        #mute{
            position:absolute;
        }
        #mute.on{
            opacity:0.7;
            z-index:1000;
            background:white;
            height:100%;
            width:100%;
        }
    </style>
</head>
    <body>
        <div id="mute"></div>
        <div id="app"></div>
        <script src="js/app.js"></script>
    </body>
</html>


