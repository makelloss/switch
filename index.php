<?php
$mark = rand (0,6);
switch ($mark) {
    case 2:echo "Оценка 1";
        break;
    case 2:echo "Оценка 2";
        break;
        case 3:echo "Оценка 3";
        break;
    case 4:echo "Оценка 4";
        break;
    case 5:echo "Оценка 5";
        break;
    default:echo "<span style = \" color: red;\">Таких оценок нету</span>";
}