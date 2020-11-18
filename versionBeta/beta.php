<!DOCTYPE html>
<html lang="en-us">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <?php 
  $name = $_POST['name'];
  $edad = date('Y')-($_POST['age']);
  ?>

    <title>CreaGuemil | <?php print($name);?> | <?php print($edad);?> años</title>
    <link rel="stylesheet" href="TemplateData/style.css">
    <link rel="icon" type="image/png" href="http://crea.guemil.info/TemplateData/favicon.png" /> 
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

<?php
if (isset($_SERVER['HTTP_USER_AGENT'])) {
    $agent = $_SERVER['HTTP_USER_AGENT'];
}

if (strlen(strstr($agent, 'Firefox')) > 0) { ?>
<style>
  #unity-webgl-logo{display:none;}
</style>
<?php };?>

  </head>
  <body>
    <div id="unity-container" class="unity-desktop">
      <canvas id="unity-canvas"></canvas>
      <div id="unity-loading-bar">
        <div id="unity-logo"></div>
        <div id="unity-progress-bar-empty">
          <div id="unity-progress-bar-full"></div>
        </div>
      </div>
      <div id="unity-footer">
        <div id="unity-webgl-logo"><button onclick="window.print()"><i class="fas fa-print" style="margin-right:5px"></i> Imprime esta página</button></div>
        <div id="unity-fullscreen-button"></div>
        <div id="unity-build-title">Ver en pantalla completa</div>
      </div>
    </div>
    <script>
      var buildUrl = "Build";
      var loaderUrl = buildUrl + "/TestGuemilV4.loader.js";
      var config = {
        dataUrl: buildUrl + "/TestGuemilV4.data",
        frameworkUrl: buildUrl + "/TestGuemilV4.framework.js",
        codeUrl: buildUrl + "/TestGuemilV4.wasm",
        streamingAssetsUrl: "StreamingAssets",
        companyName: "Guemil",
        productName: "Plataforma Guemil",
        productVersion: "1.0",
      };

      var container = document.querySelector("#unity-container");
      var canvas = document.querySelector("#unity-canvas");
      var loadingBar = document.querySelector("#unity-loading-bar");
      var progressBarFull = document.querySelector("#unity-progress-bar-full");
      var fullscreenButton = document.querySelector("#unity-fullscreen-button");

      if (/iPhone|iPad|iPod|Android/i.test(navigator.userAgent)) {
        container.className = "unity-mobile";
      } else {
        canvas.style.width = "960px";
        canvas.style.height = "600px";
      }
      loadingBar.style.display = "block";

      var script = document.createElement("script");
      script.src = loaderUrl;
      script.onload = () => {
        createUnityInstance(canvas, config, (progress) => {
          progressBarFull.style.width = 100 * progress + "%";
        }).then((unityInstance) => {
          loadingBar.style.display = "none";
          fullscreenButton.onclick = () => {
            unityInstance.SetFullscreen(1);
          };
        }).catch((message) => {
          alert(message);
        });
      };
      document.body.appendChild(script);
    </script>
  </body>
</html>
