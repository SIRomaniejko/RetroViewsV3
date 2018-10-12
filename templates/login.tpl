<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="css/main.css">
    <title>RetroViewsV3</title>
  </head>
  <body>
  <div class="formLogin">
    <form class="top" method="post" action="verificarLogin">
    <div class="form-group">
        <input type="text" class="form-control" name="user" placeholder="Usuario">
    </div>
    <div class="form-group">
        <input type="password" class="form-control" name="pass" placeholder="Contraseña">
    </div>
    <button type="submit" class="btn btn-primary">Go!</button>
    </form>
    <div class="container center">
      <h1>{$Message}</h1>
    </div>
  </div>

{include file="footer.tpl"}
