<?php
echo $this->extend('layout/template');

echo $this->section('content');



?>
<h1>Seznam týmů</h1>
<div id="pagination" class="row row-cols-1 row-cols-md-3 g-4 mb-4">

    <?php
    foreach ($teams as $key => $row) {
        $rank = ($page - 1) * $perPage + $key + 1;
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
    <?php } ?>

</div>


<?= $pager->links('group2', 'ajax2'); ?>
<script>
    $(document).ready(function() {
        let page = 0;
        $(window).scroll(function() {

            if ($(window).scrollTop() + $(window).height() >= $(document).height() - 10) {
                page++;
                const xmlhttp = new XMLHttpRequest();

                xmlhttp.onload = function() {

                    $('#pagination').append(this.responseText);
                }
                xmlhttp.open("GET", "ajax3/" + page);
                xmlhttp.send();

            }
        });
    });
</script>

<?= $this->endSection();
