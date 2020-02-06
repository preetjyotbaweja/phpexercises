<?php
/*
+---+
| 1 |
+---+
Use while-loop to print the numbers 1 to 10.
*/

$count = 1;
while ($count <= 10) {
	echo "$count";

	$count++;
};

// task separator
echo "<hr style=\"margin 1rem 0\">";

/*
+---+
| 2 |
+---+
Use the PHP function range(start, end, step) 
to create array of numbers 5 to 100 with the step 5 
(example: 5, 10, 15, ...)
*/

$multifive = range(5,100,5);
// For reference:
print_r($multifive);
 echo "<br>";

/*
Use for-loop and if-statement to print all odd numbers.
How to check if a number is odd or even? 
Divide it by 2, and if there is a remainder, the number is odd. 
Use modulus operator (outputs the remainder after division), 
for example: 
1 % 2 = 1 -> odd number
2 % 2 = 0 -> even number
3 % 2 = 1 -> odd number
4 % 2 = 0 -> even number
*/


 $even= "";
 $odd= "";
for ($multifive = 0; $multifive <= 100; $multifive += 5) {
    if ($multifive%2==0) {
    $even.=$multifive."  ";
    } else {
    $odd.=$multifive." "; 
	}
}
echo "$odd";



// task separator
echo "<hr style=\"margin 1rem 0\">";

/*
+---+
| 3 |
+---+
Declare and assign the indexed array with your favourite food 
(at least 4 array elements). Name the array food.
*/

$favourites = array('poutine','pizza','pasta','bacon');
print_r($favourites);
echo "<br><br>";

/*
Use while-loop to print array elements (every food in a new row).
*/
$pree = 0;
while ($pree === 0) {
	echo "$favourites[0]"."<br>";
	$pree ++;
	echo "$favourites[1]"."<br>";
	$pree ++;
	echo "$favourites[2]"."<br>";
	$pree ++;
	echo "$favourites[3]"."<br>";
	$pree ++;
}
echo "<br>";

/*
Use for-loop to print array elements (every food in a new row).
*/

for ($pree = 0; $pree <= 3; $pree ++) { 
	if ($pree === 0) {
		echo "$favourites[0]"."<br>";
	} else if ($pree === 1) {
		echo "$favourites[1]"."<br>";
	} else if ($pree === 2) {
		echo "$favourites[2]"."<br>";
	} else {
		echo "$favourites[3]"."<br>";
	}
}
echo "<br>";

/*
Use foreach-loop to print array elements (every food in a new row).
*/

foreach ($favourites as $p) {
	echo "$p <br>";
}

// task separator
echo "<hr style=\"margin 1rem 0\">";

/*
+---+
| 4 |
+---+
Print the array from task 3 as unordered list. Printing has to be done inside the for-loop.
Before looping, you need to print the opening list-tag <ul>
After looping, you need to print the closing list-tag </ul>
*/
$b = 0;
echo "<ul>";
for ($b = 0; $b <= 3; $b ++) { 
	if ($b === 0) {
		echo "<li>$favourites[0]</li>";
	} else if ($b === 1) {
		echo "<li>$favourites[1]</li>";
	} else if ($b === 2) {
		echo "<li>$favourites[2]</li>";
	} else {
		echo "<li>$favourites[3]</li>";
	}
}
echo "</ul>";

// task separator
echo "<hr style=\"margin 1rem 0\">";

/*
+---+
| 5 |
+---+
The array from task 3 is turned into associative array. 
The meal courses are broken down based on the type (salad, main course, dessert, ...) 
and country of origin (Italy, Spain, India, ...)
$food_assoc = [
  "pizza" => [
    "type" => "main course",
    "origin" => "Italy"
  ],
  "cheesesake" => [
    "type" => "desert",
    "origin" => "Greece"
  ]
]
So, food_assoc is an associative array. 
Every key of food_assoc (pizza, cheesecake) will now have the value that is associative array itself 
and carries the information about the type and origin.
*/

$food_assoc = [
	"poutine" => [
    	"type" => "snacks",
    	"origin" => "Canada"
  	],
  	"pizza" => [
    	"type" => "main course",
    	"origin" => "Italy"
  	],
  	"pasta" => [
  		"type" => "starter",
    	"origin" => "Italy"
  	], 
  	"bacon" => [
  		"type" => "main-course",
    	"origin" => "canada"
  	]
];

/*
Loop through $food_assoc and use print_r() to print the entire meal course 
(entire array that includes type and origin).
*/

print_r($food_assoc);

/*
Loop through $food_assoc and print the meal names (keys of $food_assoc)
as unordered list-items. Loop through the current meal (inner loop through sub-array) 
and print the type and origin as nested list items (see the example below).
*/



echo "<br><br>My favourite meals: 
<ul>";
foreach ($food_assoc as $d => $d_value) {
    echo "<li>" . $d . "</li>
    <ul>" . "<li>" . $d_value['type'] . "</li>
    <li>" . $d_value['origin'] . "</li>
    </ul>";
}

echo "</ul>";

?>