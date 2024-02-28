<?php

foreach ($teams as $key => $row) {
    $rank = ($page)*$perPage + $key+1;
    echo "<tr><td>".$rank."</td><td>".$row->general_name."</td><td>".$row->founded."</td></tr>";
}
    if($page == $totalPages) {
        $lastPage = true;
    } else {
        $lastPage = false;
    }
?>
<script>
    
    if (<?= $lastPage; ?>== true ){
       //document.getElementById("next").style.display = "none";
       $("#next").hide();
    }
</script>