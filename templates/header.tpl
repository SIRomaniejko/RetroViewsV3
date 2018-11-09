<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <base href="{$root}/">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="icon" href="https://orig00.deviantart.net/f0b2/f/2017/242/c/f/cuphead_icon__8__by_malfacio-dblstxi.png" type="image/gif" sizes="16x16">
    <title>RetroViewsV3</title>
    <link rel="stylesheet" href="css/main.css">
  </head>
  <body class="bg-info">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand">RetroViews3</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item bold">
                  <a class="nav-link" href="">Home<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item bold">
                  <a class="nav-link" href="categorias">Categorías</a>
                </li>

            {if isset($user)}
              <li class="nav-item bold">
                <a class="nav-link bold" href="administrador">Administrar</a>
              </li>
            </ul>
              <form action="logout" method="post">
                <button type="submit" class="btn btn-danger">Logout</button>
              </form>

            {else}
            </ul>
              <form class="right" action="login" method="post">
                <button type="submit" class="btn btn-primary">Login</button>
              </form>
              <form action="registrarse" method="post">
                <button type="submit" class="btn btn-secondary">Registrarse</button>
              </form>
            {/if}
        </div>
    </nav>
