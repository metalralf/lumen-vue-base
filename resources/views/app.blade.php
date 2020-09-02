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
<div id="app">
    <v-app>
      <v-main>
        <v-container>Hello world</v-container>
        <v-row align="center">
            <v-col class="text-center" cols="12" sm="4">
            <div class="my-2">
                <v-btn small>Normal</v-btn>
            </div>
            <div class="my-2">
                <v-btn small color="primary">Primary</v-btn>
            </div>
            <div class="my-2">
                <v-btn small color="error">Error</v-btn>
            </div>
            <div class="my-2">
                <v-btn small disabled>Disabled</v-btn>
            </div>
            </v-col>
            <v-col class="text-center" cols="12" sm="4">
            <div class="my-2">
                <v-btn>Normal</v-btn>
            </div>
            <div class="my-2">
                <v-btn color="primary">Primary</v-btn>
            </div>
            <div class="my-2">
                <v-btn color="error">Error</v-btn>
            </div>
            <div class="my-2">
                <v-btn disabled>Disabled</v-btn>
            </div>
            </v-col>
            <v-col class="text-center" cols="12" sm="4">
            <div class="my-2">
                <v-btn large>Normal</v-btn>
            </div>
            <div class="my-2">
                <v-btn large color="primary">Primary</v-btn>
            </div>
            <div class="my-2">
                <v-btn large color="error">Error</v-btn>
            </div>
            <div class="my-2">
                <v-btn large disabled>Disabled</v-btn>
            </div>
            </v-col>
        </v-row>
      </v-main>
    </v-app>
</div>
<script src="js/app.js"></script>
</body>
</html>
