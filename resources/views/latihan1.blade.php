<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>LaraVue</title>
  <style>
    body {
      font-family: sans-serif;
      margin: 15%;
    }
  </style>
</head>

<body>
  <div id="app">
    <header-component></header-component>
    <h1 v-text="'Hello, '+title"></h1>
    <example-component></example-component>
    <footer-component></footer-component>
  </div>
  <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>