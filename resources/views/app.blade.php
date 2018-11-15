<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Chris's Stuff</title>
    <link rel="stylesheet" href="dist/app.css" />
</head>
<body>
{{--<h1>My App</h1>--}}
<div id="app">
        {{--<router-link to="/foo">Go to Foo</router-link>
        <router-link to="/bar">Go to Bar</router-link>--}}
        <the-welcome-page></the-welcome-page>
        <router-link to="/conway-checkers">Conway Checkers</router-link>

    <router-view></router-view>
</div>
<script src="dist/app.js"></script>
</body>
</html>
