<?php
$row_length = 6;
$column_length = 10;

for ($row = 1; $row <= $row_length; $row++) {
    for ($column = 1; $column <= $column_length; $column++) {
        if ($row == 1 || $row == $row_length) {
            echo "*&nbsp;";
        } else if ($column == 1 || $column == $column_length) {
            echo "*&nbsp;";
        } else {
            echo "&nbsp;&nbsp;&nbsp;";
        }
    }
    echo '<br>';
}
?>
