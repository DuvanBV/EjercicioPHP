<?php include("funciones/cabecera.php"); ?>

<?php
//descuentos//
if($_POST){
$cantidad=$_POST['var1'];
$precio=10000;
$des1=0.20;
$des2=0.10;
$total=$precio*$cantidad;
//$por=$total*$des1;
//$por2=$total*$des2;
//$valor=$total-$por;
//$valor2=$total-$por2;

if ($cantidad>=3) {
    $des=0.20;
    $por=$total*$des1;
    $valor=$total-$por;
}
if ($cantidad<3) {
    $des=0.10;
    $por2=$total*$des2;
    $valor=$total-$por2; 
}
}
?>    



<div class="container">
    <h1>Ejecicio2</h1>
  <div class="card">
    <div class="card-header"><h1>Descuento de camisetas</h1></div>
    <div class="card-body">
    <form action="ejercicio2.php" method="post">
    <div class="form-group">
      <label for="email"><h3>Cantidad</h3></label>
      <input type="text" class="form-control" id="" placeholder="digite la cantidad que desea comprar.." name="var1">
    </div>
    <div class="form-group">
      <label for="email"><h3>Precio unitario:</h3></label>
      <input type="text" class="form-control" id="" placeholder="" name="" value="<?php echo $precio; ?>">
    </div>
    <div>
        <center>
        <H4>"usted ha comprado <?php echo $cantidad; ?> y su descuento es de <?php echo $des*100; ?>%"</H4>
        </center>   
    </div>
    <label for="pwd"><h3>Valor total:</h3></label>
    <input type="text" class="form-control" id="" placeholder="" name="" value="<?php echo $valor; ?>">
    </div>
    <div class="card-footer">
    <button type="submit" class="btn btn-primary" name="" value="">Realizar</button>
  </form>
    </div>
   
  </div>
</div>
<?php include("funciones/pie.php"); ?>