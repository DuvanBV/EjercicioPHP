<?php include("funciones/cabecera.php"); ?>
<?php
if($_POST){
$nota1=$_POST['var1'];
$nota2=$_POST['var2'];
$nota3=$_POST['var3'];
$promedio=$nota1+$nota2+$nota3/3;


if ($promedio>=70){
    $resultado="aprobo";
}
else{
    $resultado="reprobo";
}
}
?>

<div class="container">
    <h1>Ejecicio5</h1>
  <div class="card">
    <div class="card-header"><h1>Promedio de notas</h1></div>
    <div class="card-body">
    <form action="ejercicio5.php" method="post">
    <div class="form-group">
      <label for="email"><h3>nota1:</h3></label>
      <input type="text" class="form-control" id="" placeholder="digite su nota.." name="var1">
    </div>
    <div class="form-group">
      <label for="email"><h3>nota2:</h3></label>
      <input type="text" class="form-control" id="" placeholder="digite su nota.." name="var2">
    </div>
    <div class="form-group">
      <label for="email"><h3>nota3:</h3></label>
      <input type="text" class="form-control" id="" placeholder="digite su nota.." name="var3">
    </div>
    <div class="form-group">
      <label for="email">Promedio:</label>
      <input type="text" class="form-control" id="" placeholder="" name="" value="<?php echo $promedio; ?>">
    </div>
    <div>
        <center>
        <H4>"Usted <?php echo $resultado; ?>"</H4>
        </center>   
    <div class="card-footer">
    <button type="submit" class="btn btn-primary" name="" value="">Realizar</button>
  </form>
    </div>
   
  </div>
</div>
<?php include("funciones/pie.php"); ?>