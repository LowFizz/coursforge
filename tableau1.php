<?php 
     $nblignes = $_GET['nblignes'];
     $nbcolonnes = $_GET['nbcolonnes'];
    /// $nbtaille = $_GET['nbtaille'];

    echo '<table border=1>';
    for ($i = 0; $i < $nblignes; $i++) {
        echo "<tr>";
        for ($j = 0; $j < $nbcolonnes; $j++){
            ?>
            <td> <?php echo "Ligne ". $i. " Cellulle ". $j?> </td>

            <?php
        }
        echo "</tr>";
    }
    echo '</table>';