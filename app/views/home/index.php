<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title><?php echo Config::get('project.name.full', 'Untitled Project'); ?> Sprouted</title>
        <style>
            @import url(//fonts.googleapis.com/css?family=Lato:300,400,700);

            body {
                margin:0;
                font-family:'Lato', sans-serif;
                text-align:center;
                color: #999;
            }

            .welcome {
                width: 500px;
                height: 300px;
                position: absolute;
                left: 50%;
                top: 50%;
                margin-left: -250px;
                margin-top: -150px;
            }
        </style>
    </head>
    <body>
        <div class="welcome">
            <a href="http://laravel.com" title="Laravel PHP Framework"><img src="<?php echo asset('img/laravel-logo.png'); ?>" height="135" width="135" alt="Laravel logo"></a>
            <h1><?php echo Config::get('project.name.full', 'Untitled Project'); ?><br>is planted and sprouted.</h1>
            <h2>Now let's get growing!</h2>
        </div>
    </body>
</html>
