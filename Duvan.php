<?php include("funciones/cabecera.php"); ?>

    <section class="ejercicios1">
        <br>
       
       <br>
        <div class="divisor">
            <br><br><br>
        <h1 class="titulo">Ejercicios con PHP</h1>
<div class="basicos">
<?php
// Ejercicios Básicos //
$num=20;
$num2=10;
$suma=$num+$num2;
echo "El resultado de la suma es:   " .$suma;
?>
<br>
<?php
$num=20;
$num2=10;
$resta=$num-$num2;
echo "El resultado de la resta es:    " .$resta;
?>
<br>
<?php
$num=20;
$num2=10;
$multiplicación=$num*$num2;
echo "El resultado de la multiplicación es:    " .$multiplicación;
?>
<br>
<?php
$num=20;
$num2=10;
$división=$num/$num2;
echo "El resultado de la división es:    " .$división;
?>
</div>
<br>
<div class="circulo">
<?php
// El area de un circulo//
    $radio=5;
    $Pi=3.1416;
    $Area=($radio*$radio)*$Pi;
    echo "El radio del circulo es:   " .$Area; 
    ?>
    </div>
<br>
<div class="promedio">
<?php
//Promedio de notas //
$Nota1=75;
$Nota2=100;
$Nota3=95;

$Promedio=($Nota1+$Nota2+$Nota3)/3;
echo "El promedio es:   " .$Promedio;
?>
</div>
<br>
<div class="porcentaje">
<?php
//Porcentaje//
$valor=2000;
$porcentaje=$valor;
echo "El 10% del valor introducido es:    " .$porcentaje/10;
?>
</div>
<br>
<div class="precios">
<?php
// Promedio de precios //
$Valor1=80;
$Valor2=75;
$Valor3=90;

$Promedio=($Valor1+$Valor2+$Valor3)/3;
echo "El promedio del producto es:     " .$Promedio;
?>
</div>
<br>
<div class="salario">
<?php
//Salario //
$horas=8;
$costo=4500;
$dias=30;

$salario=($horas*$costo)*$dias;
echo "El salario es:    " .$salario;
?>
</div>
<br>
<div class="triangulo">
<?php
//Area de un triangulo//
$base=5;
$altura=10;
$Area=($base*$altura)/2;
echo "El area es: " .$Area; 
?>
</div>
<br><br><br>
</div>
<br><br><br>
</section>
<br><br>
<section class="ejercicios2">
       <br><br><br>
        <div class="divisor1">
            <br><br><br>
        <h1 class="titulo1">Ejercicios con PHP</h1>
<div class="basicos1">
<?php
    //mayor o menor de edad//
$edad=18;
if ($edad>=18)
echo"Usted es mayor de edad";
else
echo"Usted es menor de edad";
    ?>
</div>
<br>
<div class="basicos1">
<?php
//Diseñe un diagrama de flujo que me indique que numero es mayor de los dos ingresados de forma manual//
$num1=15;
$num2=20;

if ($num1>$num2) {
echo"$num1 es el numero mayor";
}
if ($num1<$num2) {
echo"$num2 es el numero mayor";
}
?>
</div>
<br>
<div class="basicos1">
    <?php
//descuentos//
$cantidad=2;
$precio=10000;
$des1=0.20;
$des2=0.10;
$total=$precio*$cantidad;
$por=$total*$des1;
$por2=$total*$des2;
$valor=$total-$por;
$valor2=$total-$por2;

if ($cantidad>=3) {
echo"el precio con descuento incluido es: $valor";
}
if ($cantidad<3) {
    echo"el precio con descuento incluido es: $valor2";
    }
    ?>    
</div>
<br>
<div class="basicos1">
<?php
//digitos//
$numero=11;

if ($numero<10) {
    echo"el numero $numero es de un solo digito";
}
if (($numero>10) and ($numero<99)) {
    echo"el numero $numero es de dos digitos";
}
if (($numero>100) and ($numero<999)) {
    echo"el numero $numero es de tres digitos";
}
if (($numero>1000) and ($numero<9999)) {
    echo"el numero $numero es de 4 digitos";
}
if ($numero>9999){
    echo"demaciados digitos...";
}
?>
</div>
<br>
<div class="basicos1">
<?php
//calificaciones//
$calificacion=1;

if (($calificacion<=20) and ($calificacion>18)) {
    echo"Su calificacion es A";
}
if (($calificacion<=18) and ($calificacion>=16)) {
    echo"Su calificacion es B";
}
if (($calificacion<=15) and ($calificacion>=13)) {
    echo"Su calificacion es C";
}
if (($calificacion<=12) and ($calificacion>=10)) {
    echo"Su calificacion es D";
}
if (($calificacion<=9) and ($calificacion>=1)) {
    echo"Su calificacion es E";
}

?>
</div>
<br>
<div class="basicos1">
<?php
//Zonas//
$zona='U';

if (($zona=='R') or ($zona=='r')) {
    echo"Zona rural";
}
if (($zona=='U') or ($zona=='u')) {
    echo"Zona urbana";
}
?>
</div>
<br>
<div class="basicos1">
<?php
//nombre//
$nombre='Duvan';

for ($i = 1; $i <= 10; $i++) {
    echo"$nombre". "<br>";
}
?>
</div>
<br>

<div class="basicos1">
<?php
//Operaciones//
$operacion='division';
$num1=2;
$num2=3;
$suma=$num1+$num2;
$multiplicacion=$num1*$num2;
$resta=$num1-$num2;
$division=$num1/$num2;

if ($operacion=='suma') {
    echo"la suma es: $suma";
}
if ($operacion=='multiplicacion') {
    echo"la multiplicacion es: $multiplicacion";
}
if ($operacion=='resta') {
    echo"la resta es: $resta";
}
if ($operacion=='division') {
    echo"la division es: $division";
}
?>
</div>
<br><br><br>
</div>
<br><br><br>
</section>
<br><br>
<?php include("funciones/pie.php"); ?>

