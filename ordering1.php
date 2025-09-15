<?php
function pizzaPrice($pizzaName, $basePrice, $toppingsAmount, $currency="kr", $toppingsPrice=15) {
    $totalPrice = $basePrice + ($toppingsAmount * $toppingsPrice);
    echo "You ordered a $pizzaName pizza with $toppingsAmount toppings. ";
    echo "Base price: $basePrice $currency, ";
    echo "Topping price: $toppingsPrice $currency each. ";
    echo "Total: $totalPrice $currency<br>";
    return $totalPrice;    
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bad Pizza Code</title>
</head>
<body>
<?php
pizzaPrice('small',60,2,'EUR');
pizzaPrice('medium',80,2,'kr','25');
pizzaPrice('large',100,5);
?>
</body>
</html>