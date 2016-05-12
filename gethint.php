<?php
// Array with names
$a[] = "Star Wars";
$a[] = "Bruce Campbell";
$a[] = "Christina Hendricks";
$a[] = "Rolling Gun Battle in Downtown Beijing";
$a[] = "Ninjas";
$a[] = "Space Walk";
$a[] = "Mars";
$a[] = "Quaid";
$a[] = "Melena";
$a[] = "Michael Ironside";
$a[] = "Kitty Cats";
$a[] = "Nova Scotia";
$a[] = "M41A Pulse Rifle";
$a[] = "Katja Kassin";
$a[] = "Fajitas";
$a[] = "Lawrence of Arabia";
$a[] = "World War I";
$a[] = "Acid Trips";
$a[] = "Cattle Mutilation";
$a[] = "Dinosaurs";
$a[] = "Fighter Jet Pilot";

// get the q parameter from URL
$q = $_REQUEST["q"];

$hint = "";

// lookup all hints from array if $q is different from "" 
if ($q !== "") {
    $q = strtolower($q);
    $len=strlen($q);
    foreach($a as $name) {
        if (stristr($q, substr($name, 0, $len))) {
            if ($hint === "") {
                $hint = $name;
            } else {
                $hint .= ", $name";
            }
        }
    }
}

// Output "no suggestion" if no hint was found or output correct values 
echo $hint === "" ? "no suggestion" : $hint;
?>