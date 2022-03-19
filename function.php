<?php

function getArea($type, $length, $width = null){

    $area = "";
    $area_type = "";

    switch($type){
        case "r":
            $area = $length * $width;
            $area_type = "Rectangle";
            break;

        case "s":
            $area = $length * $length;
            $area_type = "Square";
            break;

        case "t":
            $area = .5 * ( $length * $width);
            $area_type = "Triangle";
            break;

        case "c":
            $area = 3.1416 * ($length * $length);
            $area_type = "Circle";
            break;

        default:
            $area = "Undefined";
            $area_type = "Undefined";
            break;
    }
        return "The area of this {$area_type} is {$area}";
}

?>

