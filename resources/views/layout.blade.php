<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <style>
        html, body {
            font-weight: 100;
            margin: 0;
        }
        .header {
            height: 100px;
            background-color: #bce8f1;
        }
        .content {
            height: 300px;
            background-color: #d58512;
        }
        .footer {
            height: 100px;
            background-color: #2a88bd;
        }
    </style>
</head>
<body>
    <div class="header">这里是头部</div>
    @section('contents')
        <p>123这一行写在layout主视图模板中</p>
    @show

    <div class="footer">这里是底部</div>
</body>
</html>































