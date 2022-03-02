<?php

# Condiciones

$a = 5;
$b = 10;

if ($a > $b){
    
    echo "a es mayor que b";

}


else if ($a == $b){

    echo "a es igual que b";

}

else {

    echo "a es menor que b";

}

echo "<br><br>";

# Switches

$dia = "Lunes";

switch($dia){
    
    case 'Viernes':
        echo "Voy a la fiesta";
        break;

    case 'Sabado':
        echo "Voy a estudiar php";
        break;

    case 'Domingo':
        echo "Voy a descansar";
        break;
        
    default: echo "Voy a la Universidad";
}

echo "<br><br>";

# Ciclo while

$n = 1;

while($n < 5){              # si colocamos '<=' esto llegara hasta 5

    echo $n;
    $n++;                   # mas 'echo "<br>";' si quisiera que se muestren uno debajo del otro

}

echo "<br><br>";

# Ciclo do while

$p = 1;

do{                         # nos dara el mismo resultado anterior
    
    echo $p;
    $p++;

}
while ($p <= 5);

echo "<br><br>";

for($i=1; $i<=5; $i++){

    echo $i;

}



?>