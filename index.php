<?php

function orderPizza($pizzaType, $customer) {
$price = calculatePrice($pizzaType);

$address = '';
    if($customer == 'koen'){
        $address = 'a yacht in Antwerp';
    } elseif ($customer == 'manuele'){
        $address = 'somewhere in Belgium';
    } elseif ($customer == 'students') {
        $address = 'BeCode office';
    }

echo 'Creating new order... <br>';
echo "A {$pizzatype} pizza should be sent to {$customer}. <br>";
echo "The address: {$address}. <br>";
echo "The bill is €{$price}. <br>";
echo 'Order finished.<br>';
}

function total_price($price) {
    return $price;
    }

function calculatePrice($pizzaType){
    $pizzaPrice = 'unknown';

    if ($pizzaType == 'marguerita') {
        $pizzaPrice = 5;
    }
    else
        {
        if ($pizzaType == 'golden'){
            $pizzaPrice = 100;
        }
        if ($pizzaType == 'calzone'){
            $pizzaPrice = 10;
        }
        if ($pizzaType == 'hawai') {
            throw new Exception('Computer says no');
        }
    }
    return $pizzaPrice;
}

function orderPizzaForEveryone(){
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