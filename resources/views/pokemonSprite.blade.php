<!DOCTYPE html>

<html style="height: 100%;">
  <head>
    <meta name="viewport" content="width=device-width, minimum-scale=0.1">
    <title>PokemonSprite {{$pokemonId}}</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" integrity="sha384-...snip..."/>
  </head>
  <body style="margin: 0px; background: #0e0e0e; height: 100%; display: flex;
  justify-content: center;
  align-items: center;
  height: 100%;">
    <img style='display:block;-webkit-user-select: none;margin: auto;background-color: hsl(0, 0%, 90%);transition: background-color 300ms;' src="{{ asset('Sprites/First_151/'.$pokemonId.'-front-n.gif') }}">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-...snip..."></script>
  </body>
  
</html>
