<?php

// fw = for who
function orderPizza($pizzatype, $customer) {

$type = $pizzatype;
echo 'Creating new order... <br>';
$pizzaOrder = 'A ';
$pizzaOrder .= $pizzatype;
$prive = calc_cts($type);

$address = 'unknown';
    if($customer == 'koen'){
        $address = 'a yacht in Antwerp';
    } elseif ($customer == 'manuele'){
        $address = 'somewhere in Belgium';
    } elseif ($customer == 'students') {
        $address = 'BeCode office';
    }

$pizzaOrder .=   ' pizza should be sent to ' . $customer . ". <br>The address: {$address}.";
echo $pizzaOrder; echo '<br>';
echo'The bill is €'.$price.'.<br>';
echo "Order finished.<br><br>";
}

function total_price($price) {
    return $price;
    }

function test($pizzaType) {
    echo "Test: type is {$pizzaType}. <br>";
    }

function calc_cts($pizzaType){
    $pizzaCost = 'unknown';

    if ($pizzaType == 'marguerita') {
        $pizzaCost = 5;
    }
    else
        {
        if ($pizzaType == 'golden'){
            $pizzaCost = 100;
            }
        if ($pizzaType == 'calzone'){
                $pizzaCost = 10;
            }
        if ($pizzaType == 'hawai') {
            throw new Exception('Computer says no');
            }
    }

    return $pizzaCost;
}

function orderPizzaForEveryone(){
$test= 0;
orderPizza('calzone', 'koen');
orderPizza('marguerita', 'manuele');
orderPizza('golden', 'students');
}

function makeCustomersHappy($do_it) {
if ($do_it) {
    orderPizzaForEveryone();
}
}

makeCustomersHappy(true);