<?php include("funciones/cabecera.php"); ?>

<?php
// Ejercicios Básicos //
if(isset($_POST['var1'], $_POST['var2'], $_POST['accion'] )){
$num=$_POST['var1'];
$num2=$_POST['var2'];
$accion=$_POST['accion'];


if($accion=="suma"){
    $resultado= $num+$num2;
}
if($accion=="resta"){
    $resultado= $num-$num2;
}
if($accion=="multiplicacion"){
    $resultado= $num*$num2;
}
if($accion=="division"){
    $resultado= $num/$num2;
}

}
?>
<br>



<div class="container">
    <h1>Ejecicio1</h1>
  <div class="card">
    <div class="card-header"><h1>Operaciones matematicas</h1></div>
    <div class="card-body">
    <form action="ejercicio1.php" method="post">
    <div class="form-group">
      <label for="email"><h3>Valor 1:</h3></label>
      <input type="text" class="form-control" id="" placeholder="digite el primer valor.." name="var1">
    </div>
    <div class="form-group">
      <label for="pwd"><h3>Valor 2:</h3></label>
      <input type="text" class="form-control" id="" placeholder="digite el segundo valor.." name="var2">
    </div>
    <div>
        <label for="">Suma</label>
        <input type="checkbox" name="accion" value="suma" id="">
        <br>
        <label for="">Resta</label>
        <input type="checkbox" name="accion" value="resta" id="">
        <br>
        <label for="">Multiplicacion</label>
        <input type="checkbox" name="accion" value="multiplicacion" id="">
        <br>
        <label for="">Division</label>
        <input type="checkbox" name="accion" value="division" id="">
    </div>
    <label for="pwd"><h3>Resultado</h3></label>
    <input type="text" class="form-control" id="" placeholder="" name="" value="<?php echo $resultado; ?>">
    </div>
    <div class="card-footer">
    <button type="submit" class="btn btn-primary" name="" value="">Realizar</button>
  </form>
    </div>
   
  </div>
</div>
<?php include("funciones/pie.php"); ?>