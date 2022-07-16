<?php
 
function print_rectangle($n, $m)
{
    $i;
    $j;
    for ($i = 1; $i <= $n; $i++)
    {
        for ($j = 1; $j <= $m; $j++)
        {
            if ($i == 1 || $i == $n ||
                $j == 1 || $j == $m)        
                echo("*");        
            else
                echo(" ");        
        }
        echo("\n");
    }
 
}
 
 
    $rows = 6;
    $columns = 20;
    print_rectangle($rows, $columns);
 
  
?>