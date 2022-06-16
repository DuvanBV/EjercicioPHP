<?php include("funciones/cabecera.php");
if($_POST){
$num1=$_POST['var1'];
$i=1;


}
?>
<div class="container">
    <h1>Ejecicio6</h1>
  <div class="card">
    <div class="card-header"><h1>Tabla de multiplicar</h1></div>
    <div class="card-body">
    <form action="ejercicio6.php" method="post">
    <div class="form-group">
      <label for="email"><h3>Numero:</h3></label>
      <input type="text" class="form-control" id="" placeholder="digite el numero que desea multiplicar.." name="var1">
    </div>
    <div class="form-group">
      <label for="email"><h3>Tabla:</h3></label>
      <center>
        <H4>
            <?php 
            while ($i <= 10){
            echo"$num1 x $i =". $num1 * $i++ ."<br>";    
            } 
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