<?php include("funciones/cabecera.php");
if($_POST){
$dia=$_POST['var1'];
$mes=$_POST['var2'];
$año=$_POST['var3'];

if($mes==1){
    $resultado="$dia/enero/$año";
}
if($mes==2){
    $resultado="$dia/febrero/$año";
}
if($mes==3){
    $resultado="$dia/marzo/$año";
}
if($mes==4){
    $resultado="$dia/abril/$año";
}
if($mes==5){
    $resultado="$dia/mayo/$año";
}
if($mes==6){
    $resultado="$dia/junio/$año";
}
if($mes==7){
    $resultado="$dia/julio/$año";
}
if($mes==8){
    $resultado="$dia/agosto/$año";
}
if($mes==9){
    $resultado="$dia/septiembre/$año";
}
if($mes==10){
    $resultado="$dia/octubre/$año";
}
if($mes==11){
    $resultado="$dia/noviembre/$año";
}
if($mes==12){
    $resultado="$dia/diciembre/$año";
}
elseif(($mes<1) or ($mes>12)){
    $resultado="la fecha es incorrecta";
}
elseif(($dia<1) or ($dia>31)){
    $resultado="la fecha es incorrecta";
}

}
?>
<div class="container">
    <h1>Ejecicio7</h1>
  <div class="card">
    <div class="card-header"><h1>Fechas</h1></div>
    <div class="card-body">
    <form action="ejercicio7.php" method="post">
    <div class="form-group">
      <label for="email"><h3>Dia:</h3></label>
      <input type="number" class="form-control" id="" placeholder="digite el dia.." name="var1">
    </div>
    <div class="form-group">
      <label for="email"><h3>Mes:</h3></label>
      <input type="number" class="form-control" id="" placeholder="digite el mes.." name="var2">
    </div>
    <div class="form-group">
      <label for="email"><h3>Año:</h3></label>
      <input type="number" class="form-control" id="" placeholder="digite el año.." name="var3">
    </div>
    <div class="form-group">
      <label for="email"><h3>Tabla:</h3></label>
      <center>
        <H4>
        <?php
        echo $resultado;
        ?>
        </H4>
      </center>  
    </div>
    <div>
        
    <div class="card-footer">
    <button type="submit" class="btn btn-primary" name="" value="">Realizar</button>
  </form>
    </div>
   
  </div>
</div>
<?php include("funciones/pie.php"); ?>