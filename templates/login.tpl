<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="css/main.css">
    <link rel="icon" href="https://orig00.deviantart.net/f0b2/f/2017/242/c/f/cuphead_icon__8__by_malfacio-dblstxi.png" type="image/gif" sizes="16x16">
    <title>RetroViewsV3</title>
  </head>
  <body class="fondo">
  <div class="formLogin">
    <form class="top" method="post" action="verificarLogin">
    <div class="form-group">
        <input type="text" class="form-control" name="user" placeholder="Usuario" autofocus>
    </div>
    <div class="form-group">
        <input type="password" class="form-control" name="pass" placeholder="Contraseña">
    </div>
    <button type="submit" class="btn btn-primary ancho">Login</button>
    </form>
    {if $Message != ""}
    <div class="p-1 mb-2 bg-danger top center rounded">
      <h3>{$Message}</h3>
    {else}
    <div>
      <h1>{$Message}</h1>
    {/if}
    </div>
  </div>

{include file="footer.tpl"}
