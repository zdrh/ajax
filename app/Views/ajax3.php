<?php

foreach ($teams as $key => $row) {
    $rank = ($page) * $perPage + $key + 1;
?>
    <div class="col">
        <div class="card" style="height:500px">
            <div class="card-header">
                <?= $rank; ?>
            </div>
            <div class="card-body">
                <h5 class="card-title"><?= $row->general_name; ?></h5>
                <p class="card-text"><b>Založeno: </b><?= $row->founded; ?></p>
            </div>
        </div>
    </div>
<?php
}
if ($page == $totalPages) {
    $lastPage = true;
} else {
    $lastPage = false;
}
?>
<script>
    if (<?= $lastPage; ?> == true) {
        //document.getElementById("next").style.display = "none";
        $("#next").hide();
    }
</script>