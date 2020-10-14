<?php
echo "<table border='3px'>";
//echo "<tr><td></td><td>1</td><td>2</td><td>3</td><td>4</td><td>5</td><td>6</td><td>7</td><td>8</td><td>9</td><td>10</td></tr>";
for($i ;$i < 10;$i++){
    echo "<tr><td>".$i."</td>";
    for($j = 0;$j < 10;$j++){
        echo "<td>".($i+1)*($j+1)."</td>";
    }
    echo "</tr>";
}
echo "</table>";
?>