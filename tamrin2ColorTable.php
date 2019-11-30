<div style="background-color:rgb(<?php echo rand(0,255); ?>,<?php echo rand(0,255);?>,<?php echo rand(0,255);?>)">

</div>
<?php
echo '<table style="width:100%;height:100;">';
for ($i=0; $i<=20; $i++) {
    echo "<tr>";
    for ($j=0; $j<=20; $j++) {
        echo "<td style='background-color: rgb(".rand(0,255)."," .rand(0,255).",".rand(0,255).") '> </td>";
    
    }
    echo "</tr>";
}
echo '</table>';