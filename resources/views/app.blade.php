<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Vue and Lumen</title>
    <link rel="stylesheet" href="css/app.css" />
</head>
<body>
<h1>My App</h1>
<div id="app">
    <h1>Hello App!</h1>
    <p>
        <router-link to="/foo"><button>Go to Foo</button></router-link>
        <router-link to="/bar"><button>Go to Bar</button></router-link>
    </p>

    <router-view></router-view>
</div>
<script src="js/app.js"></script>
</body>
</html>
