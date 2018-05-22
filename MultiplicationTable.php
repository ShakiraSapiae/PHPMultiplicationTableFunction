<?php
//Question 1 -using Example value
function printTable($array1, $array2)
{ //open function
//table description
echo "<table border='1px solid-black' cellspacing='0' align='center' >";

//table header with bold
echo "<tr><th>&nbsp;</th>"; //the empty cell
$arrlength1 = count($array1); //count loop into array1 object
for($i = 0; $i < $arrlength1; $i++){ //for loop to get object in array1[0] = 5
	echo "<th scope='row' width='10%'>".$array1[$i]."</th>"; //the objects are display as header
} //close for loop
echo "</tr>"; //close header

// Table body
$arrlength2 = count($array2); //count loop into array2 object
for($i = 0; $i < $arrlength2; $i++)//for loop to get object in array2 as header row
{
	echo "<tr><th scope='col' width='10%'>".$array2[$i]."</th>"; //get header row value array2[0] = 2
	for ($j = 0; $j < $arrlength1; $j++) //for loop to get object in array1[0] = 5
	{
		echo "<td align='center'>" . ($array2[$i] * $array1[$j]) . "</td>";//multiply 2x5=10
	}
	echo "</tr>";//close second row
}
echo "</table>";//close table tag
} //close function
$array1 = array(5,9,4,8); //x-axis array
$array2 = array(2,6,3,7,5); //y-axis array
printTable ($array1, $array2); //call function to print the result
?>
