<?php include("funciones/cabecera.php"); ?>

<?php
//digitos//
if($_POST){
$numero=$_POST['var1'];

if ($numero<10) {
    $imp="su numero es de un solo digito";
    
}
if (($numero>10) and ($numero<99)) {
    $imp="su numero es de dos digito";
    
}
if (($numero>100) and ($numero<999)) {
    $imp="su numero es de tres digitos";
    
}
if (($numero>1000) and ($numero<9999)){
$imp="su numero es de cuatro digitos";
    
}
if ($numero>9999){
    $imp="su numero tiene demaciados digitos";
    
}
}
?>

<div class="container">
    <h1>Ejecicio3</h1>
  <div class="card">
    <div class="card-header"><h1>Contador de digitos</h1></div>
    <div class="card-body">
    <form action="ejercicio3.php" method="post">
    <div class="form-group">
      <label for="email"><h3>Numero</h3></label>
      <input type="text" class="form-control" id="" placeholder="digite cualquier numero.." name="var1">
    </div>
    <label for="pwd"><h3>Cantidad de digitos</h3></label>
    <center>
    <h3>"<?php echo $imp; ?>"</h3>
    </center>
    </div>
    <div class="card-footer">
    <button type="submit" class="btn btn-primary" name="" value="">Realizar</button>
  </form>
    </div>
   
  </div>
</div>
<?php include("funciones/pie.php"); ?>