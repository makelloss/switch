<?php
$mark = rand (0,6);
switch ($mark) {
    case 1:echo "Оценка $mark";
        break;
    case 2:echo "Оценка $mark";
        break;
    case 3:echo "Оценка $mark";
        break;
    case 4:echo "Оценка $mark";
        break;
    case 5:echo "Оценка $mark";
        break;
    default:echo "<span style = \" color: red;\">Такой оценки нету ($mark) </span>";
}