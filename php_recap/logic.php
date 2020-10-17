<?php

// var_dump(true && true); // True
// var_dump(true || false); // True
// var_dump(true || true); // True
// var_dump(true xor true);  // False
// var_dump(true xor false); // True
// var_dump(true != 'true'); // False
// var_dump(true !== 'true'); // True
// var_dump(true || (false && false)); // True
// var_dump(true && (false || true) || false or (1 !='1')); // True


if(true)
{
    // echo "Yono";
} else {
    // echo "Reza";
}
echo PHP_EOL;
// echo (false) ? "Budi fathe'r" : "Not Budi Father's";

// var_dump(range(1,10));
foreach (range(1,10) as $key) {
    // echo "*".$key."\t";
}
echo PHP_EOL;
for($x=1;$x<=10;$x++)
{
    for($y=1;$y<=10;$y++)
    {
        // echo $x."x".$y."=".$x*$y."\t";
    }
    // echo "\n";
}
$num=0;
while(true)
{
    $num=rand(1,10);

    if($num == 9)
    {
        exit("Better Lucky Next Time");
    }else{
        echo "Your Lose".$num.PHP_EOL;
    }
}


$num=rand(1,100);


