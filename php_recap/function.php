<?php 

function askMe($name="Hallo"){
    echo "Reza";
}

// askMe();

// askMe("Reza");

// call_user_func('askMe','Reza');

// call_user_func_array('askMe',['Reza']);


// Anonymouse Function ( Closure )
$solider=function($name){
    // echo $name.PHP_EOL;
};

// $solider('Capiten Amerika');

function getLastName($name) {
    $real_name = explode(" ",$name);

    $getLastIndex=count($real_name)-1;

    if($real_name[$getLastIndex]!="Doe")
    {
        return "You are not Doe Family ";
    }

    echo $real_name[$getLastIndex].PHP_EOL;
}

echo getLastName("Jane Doe rostchild");





































































































































































































