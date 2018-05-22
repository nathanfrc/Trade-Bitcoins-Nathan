
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

<!-- library for cookie management -->
<script src="js/jquery.cookie.js"></script>
<!-- calender plugin -->
<script src='bower_components/moment/min/moment.min.js'></script>
<script src='bower_components/fullcalendar/dist/fullcalendar.min.js'></script>
<!-- data table plugin -->
<script src='js/jquery.dataTables.min.js'></script>

<!-- select or dropdown enhancer -->
<script src="bower_components/chosen/chosen.jquery.min.js"></script>
<!-- plugin for gallery image view -->
<script src="bower_components/colorbox/jquery.colorbox-min.js"></script>
<!-- notification plugin -->
<script src="js/jquery.noty.js"></script>
<!-- library for making tables responsive -->
<script src="bower_components/responsive-tables/responsive-tables.js"></script>
<!-- tour plugin -->
<script src="bower_components/bootstrap-tour/build/js/bootstrap-tour.min.js"></script>
<!-- star rating plugin -->
<script src="js/jquery.raty.min.js"></script>
<!-- for iOS style toggle switch -->
<script src="js/jquery.iphone.toggle.js"></script>
<!-- autogrowing textarea plugin -->
<script src="js/jquery.autogrow-textarea.js"></script>
<!-- multiple file upload plugin -->
<script src="js/jquery.uploadify-3.1.min.js"></script>
<!-- history.js for cross-browser state change on ajax -->
<script src="js/jquery.history.js"></script>
<!-- application script for Charisma demo -->
<script src="js/charisma.js"></script>

<script src="js/jquery-2.1.0.js"></script>
<link id="bs-css" href="css/bootstrap-cerulean.min.css" rel="stylesheet">

    <link href="css/charisma-app.css" rel="stylesheet">
    <link href='bower_components/fullcalendar/dist/fullcalendar.css' rel='stylesheet'>
    <link href='bower_components/fullcalendar/dist/fullcalendar.print.css' rel='stylesheet' media='print'>
    <link href='bower_components/chosen/chosen.min.css' rel='stylesheet'>
    <link href='bower_components/colorbox/example3/colorbox.css' rel='stylesheet'>
    <link href='bower_components/responsive-tables/responsive-tables.css' rel='stylesheet'>
    <link href='bower_components/bootstrap-tour/build/css/bootstrap-tour.min.css' rel='stylesheet'>
    <link href='css/jquery.noty.css' rel='stylesheet'>
    <link href='css/noty_theme_default.css' rel='stylesheet'>
    <link href='css/elfinder.min.css' rel='stylesheet'>
    <link href='css/elfinder.theme.css' rel='stylesheet'>
    <link href='css/jquery.iphone.toggle.css' rel='stylesheet'>
    <link href='css/uploadify.css' rel='stylesheet'>
    <link href='css/animate.min.css' rel='stylesheet'>
<!--jQuery validador -->
<script src="js/jquery.validate.min.js"></script>
<!-- Para ajax -->
<script src="js/jquery-2.1.0.js"></script>

    <!-- jQuery -->
    <script src="bower_components/jquery/jquery.min.js"></script>
  <script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/jquery.validate.min.js"></script>




<?php include "pesquisaAjax/pesquisaValorBTC.php" ?>



<div class="container">
  <h2> <h2> <span class="glyphicon glyphicon-bitcoin"></span>Blockchain </h2></br></h2>
<?php include "pesquisaAjax/pesquisaValorBTC.php" ?>

<div class="container">
  <div class="row">
    <div class="col-sm-4">
<form  id="form_pesquisa" method="POST" >
 
  
<div class="container">
  <h2>Moeda</h2>
    <label class="radio-inline">
      <input type="radio"  id="moeda" name="moeda" value="USD">USD - Dólar
    </label>
    <label class="radio-inline">
      <input type="radio"  checked="checked" id="moeda" name="moeda" value="BRL">BRL - Real
    </label>
  </br>
  <div class="row">
    <div class="col-sm-3">
     <div class="input-group" >
      <input type="text" class="form-control" placeholder="Digite o valor em reais ou dolar" name="valor" id="valor" data-toggle="tooltip" data-placement="top" title="Digite o valor em reais ou dólar">
      <div class="input-group-btn">
        <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
      </div>
    </div>
  </div>
  </div>

  <th class="center">  <button type="submit" class="btn btn-default">Pesquisar</button></th> 
  
  </form>
      <div id="reposta"></div>
</div>
</div>
  
</br>


</div>
  
</br>

</div>


    
  