<?php

require "vendor/autoload.php";

$textToGenerateBarCode =  $_POST['textToGenerate'];
$bar  = new Picqer\Barcode\BarcodeGeneratorHTML();
$code = $bar->getBarcode( $textToGenerateBarCode,$bar::TYPE_CODE_128);

echo "
<html>
<head>
    <link rel='stylesheet' href='dist/bootstrap/css/bootstrap.min.css'>
    <script src='dist/Jquery/jquery-3.3.1.slim.min.js'></script>
    <script src='dist/bootstrap/js/bootstrap.min.js'></script>
    <script src='dist/propper/popper.min.js'></script>
</head>

<body>

<div class='container'>
    <form action='' method='post'>
        <div class='row' style='margin-top: 100px;'>
            <div class='col-12 text-center'>
              <input type='text' name='textToGenerate' class='form-control'>
            </div>
            <div class='col-12 text-center' style='margin-top: 10px;'>
                <button type='submit' class='btn btn-success'>Generate Bar Code</button>
            </div> 
        </div>
    </form>
    
    <div class='row'>
    
    </div>
    <div class='list-group'>
      <a href='#' class='list-group-item list-group-item-action'>
        Cras justo odio
      </a>
      <a href='#' class='list-group-item list-group-item-action' data-toggle='modal' data-target='#exampleModal'>Dapibus ac facilisis in</a>
      <a href='#' class='list-group-item list-group-item-action'>Morbi leo risus</a>
      <a href='#' class='list-group-item list-group-item-action'>Porta ac consectetur ac</a>
      <a href='#' class='list-group-item list-group-item-action disabled'>Vestibulum at eros</a>
    </div>
</div>


<!-- Button trigger modal -->
<button type='button' class='btn btn-primary' data-toggle='modal' data-target='#exampleModal'>
  Launch demo modal
</button>

<!-- Modal -->
<div class='modal fade' id='exampleModal' tabindex='-1' role='dialog' aria-labelledby='exampleModalLabel' aria-hidden='true'>
  <div class='modal-dialog' role='document'>
    <div class='modal-content'>
      <div class='modal-header'>
        <h5 class='modal-title' id='exampleModalLabel'>Modal title</h5>
        <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
          <span aria-hidden='true'>&times;</span>
        </button>
      </div>
      <div class='modal-body'>
        ...
      </div>
      <div class='modal-footer'>
        <button type='button' class='btn btn-secondary' data-dismiss='modal'>Close</button>
        <button type='button' class='btn btn-primary'>Save changes</button>
      </div>
    </div>
  </div>
</div>



</body>
</html>";