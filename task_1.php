<?php 
// with simple for loop 
function evenNum()
{
    for($i = 2; $i<=20; $i+=2)
    {
        echo $i;
        echo PHP_EOL;
    }   
}

evenNum();

echo "=================================";


// with while loop
$a = 0;
while($a<20)
{
    echo $a+=2;
    echo PHP_EOL;

}

echo "=================================";


// do-while loop
function evenNumWithDoWhile()
{
    $x = 0;
    do{
        echo $x+=2;
        echo PHP_EOL;
    }while($x < 20);
}
evenNumWithDoWhile();