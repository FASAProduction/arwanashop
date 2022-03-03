<br />
<?php
                                                if($transht > 0){
                                                    foreach($trans as $tran):
                                                ?>
<div class="col-md-4">
    <div class="card timbul">
        <div class="card-header">
            <?php
            if($tran->kategori == "Website"){
            ?>
            <img src="<?php echo base_url(); ?>komponen/assets/images/logo/fasaproduction_mc.jpg" width="90%" />
            <?php }else{ ?>
            <img src="<?php echo base_url(); ?>komponen/assets/images/logo/articulate.png" width="90%" />
            <?php } ?>
        </div>
        <hr />
        <div class="card-body">
            <h5 class="card-name"><?php echo $tran->trans_name; ?></h5>
        </div>
    </div>
</div>
<?php endforeach; 
}else{
?>
<div class="col-md-4">
    <div class="card timbul">
        <div class="card-body">
            <center>
                <p>Anda belum memesan apapun.</p>
                <br />
                <a href="#" class="btn rounded-pill btn-success">Pesan Web Sekarang</a>
            </center>
        </div>
    </div>
</div>
<?php } ?>