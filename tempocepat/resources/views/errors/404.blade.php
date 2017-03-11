<!DOCTYPE html>
<html>
    <head>
        @include('layouts.head')
        <title>Page Not Found</title>

        <link href="//fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                color: #B0BEC5;
                display: table;
                font-weight: 100;
                /*font-family: 'Lato';*/
            }

            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }

            .content {
                text-align: center;
                display: inline-block;
            }

            .title, h2 {
                font-size: 72px;
                margin-bottom: 40px;
                /*color: #B0BEC5;*/
                color: #eee;
            }

            .title, h2 {
                text-transform: uppercase;
            }

            h2{
                font-size: 36px;
                margin-top: -25px;
                text-transform: uppercase;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="content">
                <div class="title">Ups, 404 Error</div>
                <h2>Page Not Found</h2>
            </div>
        </div>
    </body>
</html>
