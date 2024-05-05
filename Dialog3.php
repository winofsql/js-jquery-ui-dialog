<?php 
$dialog_id = "dialog";

require_once("ui-type.php");
?>
<!DOCTYPE html>
<html>
<head>
<title>jQuery UI Datepicker</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.13.2/themes/<?= $ui_type ?>/jquery-ui.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.13.2/jquery-ui.min.js"></script>

<style>
</style>  
  
<script>

$(function(){

  $("#action").on("click", function() {
    $( "#dialog" ).dialog({
      modal: true,
      width: 400,
      buttons: {
        Ok: function() {
          $( this ).dialog( "close" );
        }
      }
    });
  });

});
  
</script>
</head>
<body>
<h1 class="alert alert-primary"><a href=".">メッセージダイアログ : モーダル</a></h1>
<div id="main" class="m-4">
  <input type="button" id="action" value="ダイアログを開く" class="btn btn-primary">
</div>


<div id="dialog" title="ダウンロード終了" style='display:none;'>
  <p>
    <span class="ui-icon ui-icon-circle-check"></span>
    ファイルは ダウンロードフォルダーに正常にダウンロードされました。
  </p>
  <p>
    現在、ストレージ容量の 36% を使用しています。
  </p>
</div>

</body>
</html>