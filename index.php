<style>
    form>input{
        margin:10px;
        padding:10px 0;
        width:200px;
    }
</style>
<form action="/" method="GET">
    <input type="number" name="qator" id="">
</form>
<?php
    $qator=$_GET['qator'];
    $ustun=2*$qator-1;   
            for($yulduz=1; $yulduz<=$qator;  $yulduz=$yulduz+2)
            {
                $bush="";
                $yul="";
                for($j=1; $j<=($qator-$yulduz)/2; $j++){
                    $bush="$bush<span style='color:yellow'>*</span>";
                }
            
                for($k=1; $k<=$yulduz; $k++){
                    $yul="$yul<span style='color:green'>*</span>";
                }
                echo "$bush$yul$bush <br>";
            }                    
?>
