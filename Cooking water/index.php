<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Cooking water</title>
</head>
<body>

<form action="#" method="post">
    Amount of water (format x.x): <input type="text" name="m">
    Device power (kW, format x.x): <input type="text" name="p">
    Start temperature (less than 100C, format x.x): <input type="text" name="t1">
    <input type="submit" formmethod="post" value="Cook">
</form>

<?php
echo '</br>';
require_once('lib/Cooking.php');
?>

</body>
</html>

<!--m - masa wody = 1,7 kg
T₁ - temperatura początkowa wody = 20°C
T₂ - temperatura końcowa wody = 100°C
ΔT - różnica temperatur = T₂ - T₁ = 100°C - 20°C = 80°C
c - ciepło właściwe wody = 4200 J/kg°C
Q - całkowita ilośc ciepła potrzebna do zagotowania wody
Q = c * m * ΔT = 4200 J/kg°C * 1,7 kg * 80°C = 571200 J
W - praca prądu elektrycznego
W = P * t
P - moc = 2 kW = 2000 W
t - czas poboru prądu
W = Q
571200 J = 2000 W * t
t - czas do zagotowania wody = 571200 J / 2000 W = 285,6 s = 4,76 min
odp
285,6 s = 4,76 min -->