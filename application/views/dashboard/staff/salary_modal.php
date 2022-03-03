<?php
foreach($salary as $salarrr):
?>
<div class="modal fade" id="<?php echo $salarrr->staff_id; ?>" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">×</button>
                <h4 class="modal-title">Judul Modal</h4>
            </div>
            <div class="modal-body">
                <p>Selamat Mencari</p>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">tutup</button>
            </div>
        </div>

    </div>
</div>
<?php endforeach; ?>