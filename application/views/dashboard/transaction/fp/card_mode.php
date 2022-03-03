<br />
<?php
                                                if($transht > 0){
                                                    foreach($trans as $tran):
                                                ?>
<div class="col-md-4">
    <div class="card timbul ani-dt">
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
            <p>
                Kode Transaksi: <?php echo $tran->trans_code; ?>
                <br />
                Tanggal Order: <?php echo $tran->tgl_order; ?>
                <br />
                Status Pesanan: <?php echo $tran->progress_status; ?>
            </p>
            <a href="" class="btn btn-outline btn-info">Detail</a>
            <?php
                            if($tran->progress_status == "New"){
                            ?>
            <a href="https://api.whatsapp.com/send?phone=62895388310044&text=%3D%3D%3D%3D%20PESANAN%20BARU%20%3D%3D%3D%3D%3D%0A--------Rincian%20Order--------------%0AKode%20Transaksi%3A%20<?php echo urldecode($tran->trans_code); ?>%0ANama%20Order%3A%20<?php echo urldecode($tran->trans_name); ?>%0ATanggal%20Order%3A%<?php echo urldecode($tran->tgl_order); ?>%0ARincian%3A%20<?php echo urldecode($tran->rincian); ?>%0ANama%20Paket%3A%20<?php echo urldecode($tran->packet_name); ?>%0AStatus%20Progress%3A%20<?php echo urldecode($tran->progress_status); ?>%0AMetode%20Pembayaran%3A%20<?php echo urldecode($tran->payment_method); ?>%0AKategori%20Pesanan%3A%20<?php echo urldecode($tran->kategori); ?>%0A%0A--------Rincian%20Customer---------%0ANama%3A%20<?php echo urldecode($tran->first_name . " " . $tran->last_name); ?>%0AStatus%3A%20<?php echo urldecode($tran->who); ?>%0APerusahaan%3A%20<?php echo urldecode($tran->company); ?>%0ANegara%3A%20<?php echo urldecode($tran->country); ?>%0A%0AMohon%20untuk%20mengonfirmasi%20%0Apesanan%20saya.%0A-----------Terima%20Kasih-------------%0A"
                target="__blank" class="btn btn-success"><i class="fab fa-whatsapp"></i> Konfirmasi Ke WhatsApp</a>
            <?php }else{ ?>
            <a href="" class="btn btn-success"><i class="fab fa-file-invoice"></i> Lihat Invoice</a>
            <?php } ?>
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