<?php

#while

echo "while: ";
$i = 10;
while ($i < 10){
    echo $i;
    $i++;
}

#do...while

echo "<br>do...while: ";
$i = 0;
do {
    echo $i;
} while ($i < 10);

#for

echo "<br>for: ";
for ($i = 0; $i < 10; $i++){
   echo $i; 
}
