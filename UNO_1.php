ml lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title></title>
    <link rel="stylesheet" href="css/main.css" />
    <link rel="icon" href="images/favicon.png" />
  </head>
  <body>
    <div id='game' style="background-color:grey; position: relative">
        <canvas id='background_cnavas'style="background-color:grey; position: absolute width: 800px; height: 420px;"></canvas>
        <canvas id='main_canvas'style="background-color:grey; position: absolute width: 800px; height: 420px;">Leider kann dieser Browser das Spiel nicht ausführen.</canvas>
        <h1><?php
            function init()
            {
                main_canvas = document.getElementById('main_canvas');
                main_ctx = main_canvas
            }
           echo init();
        ?></h1>
    </div>
  </body>
</html>