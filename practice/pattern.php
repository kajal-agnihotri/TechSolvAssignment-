<?php
for($i=1; $i<=4; $i++){
    for($j=1; $j<=(2*4)-1; $j++){
       if($j>=4-($i-1) && $j<=4+($i-1)){
        echo "*";
       }else{
        echo "&nbsp;&nbsp;";
       }
        
    }
    echo "<br/>";
}
?>