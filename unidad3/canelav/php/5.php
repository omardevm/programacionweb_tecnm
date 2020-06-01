<?php
    echo '<table border=1>';
 
    echo '<tr>';
    echo '<td>X</td>';
 
    for ($i=1; $i <= 11; $i++) { 
        echo '<td>';
        echo $i;
        echo '</td>';
    }
 
    echo '</tr>';
 
    for ($i=1; $i <= 11; $i++) { 
        echo '<tr>';
        echo '<td>';
        echo $i;
        echo '</td>';
 
        for ($j=1; $j <= 11; $j++) { 
             
            echo '<td>';
            echo $i * $j;
            echo '</td>';
 
        }
 
        echo '</tr>';
    }
 
    echo '</table>';
     
?>