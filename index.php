	
	

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Starter Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="slider/css/slider.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../docs-assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="slider/js/bootstrap-slider.js"></script>
	<script src="https://api.pinocc.io/pinoccio.js" type="text/javascript"></script>
	<script type="text/javascript" src="dadada.js"></script>
	<link href="dadada.css" media="screen" rel="stylesheet" type="text/css" />


  </head>

  <body>

    <div class="container">
	<h1>Scout test</h1>
    <div class="well" style="max-width: 400px; margin: 0 auto 10px;">
      <button type="button" class="btn btn-primary btn-lg btn-block" id="red">Red</button>
      <button type="button" class="btn btn-primary btn-lg btn-block" id="blue">Blue</button>
      <button type="button" class="btn btn-primary btn-lg btn-block" id="green">Green</button>

    </div>
   <div class="well">
   <p>
      <b>R</b> 
   <div class="slider slider-horizontal" id="RC" style="width: 314px;">
      <div class="slider-track">
         <div class="slider-selection" style="left: 0%; width: 50.19607843137255%;"></div>
         <div class="slider-handle" style="left: 50.19607843137255%;"></div>
         <div class="slider-handle hide" style="left: 0%;"></div>
      </div>
      <div class="tooltip top hide" style="top: -40px; left: 140.6156862745098px;">
         <div class="tooltip-arrow"></div>
         <div class="tooltip-inner">128</div>
      </div>
      <input type="text" class="span2" value="" data-slider-min="0" data-slider-max="255" data-slider-step="1" data-slider-value="128" data-slider-id="RC" id="R" data-slider-tooltip="hide" data-slider-handle="square">
   </div>
   </p>
   <p>
      <b>G</b> 
   <div class="slider slider-horizontal" id="GC" style="width: 314px;">
      <div class="slider-track">
         <div class="slider-selection" style="left: 0%; width: 50.19607843137255%;"></div>
         <div class="slider-handle round" style="left: 50.19607843137255%;"></div>
         <div class="slider-handle round hide" style="left: 0%;"></div>
      </div>
      <div class="tooltip top hide" style="top: -40px; left: 140.6156862745098px;">
         <div class="tooltip-arrow"></div>
         <div class="tooltip-inner">128</div>
      </div>
      <input type="text" class="span2" value="" data-slider-min="0" data-slider-max="255" data-slider-step="1" data-slider-value="128" data-slider-id="GC" id="G" data-slider-tooltip="hide" data-slider-handle="round">
   </div>
   </p>
   <p>
      <b>B</b> 
   <div class="slider slider-horizontal" id="BC" style="width: 314px;">
      <div class="slider-track">
         <div class="slider-selection" style="left: 0%; width: 50.19607843137255%;"></div>
         <div class="slider-handle triangle" style="left: 50.19607843137255%;"></div>
         <div class="slider-handle triangle hide" style="left: 0%;"></div>
      </div>
      <div class="tooltip top hide" style="top: -40px; left: 140.6156862745098px;">
         <div class="tooltip-arrow"></div>
         <div class="tooltip-inner">128</div>
      </div>
      <input type="text" class="span2" value="" data-slider-min="0" data-slider-max="255" data-slider-step="1" data-slider-value="128" data-slider-id="BC" id="B" data-slider-tooltip="hide" data-slider-handle="triangle">
   </div>
   </p>
   <div id="RGB"></div>
</div>

	<div id="out">

	</div>

    </div><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>
