<div class="col-md-12">
    <div class="card ani-dt">
        <div class="card-body">
            <table class="table" id="table1">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Kode Transaksi</th>
                        <th>Paket</th>
                        <th>Nama Pesanan</th>
                        <th>Status Pengerjaan</th>
                        <th>Status Pembayaran</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                                                if($transht > 0){
                                                    $no = 1;
                                                    foreach($trans as $tra):
                                                ?>
                    <tr>
                        <td><?php echo $no++; ?></td>
                        <td><?php echo $tra->trans_code; ?></td>
                        <td><?php echo $tra->packet_name; ?></td>
                        <td><?php echo $tra->trans_name; ?></td>
                        <td><?php echo $tra->progress_status; ?></td>
                        <td><?php echo $tra->payment_status; ?></td>
                        <td>
                            <span class="badge bg-info">Lihat Detail</span>
                            <?php
                            if($tra->progress_status == "New"){
                            ?>
                            <a href="https://api.whatsapp.com/send?phone=62895388310044&text=%3D%3D%3D%3D%20PESANAN%20BARU%20%3D%3D%3D%3D%3D%0A--------Rincian%20Order--------------%0AKode%20Transaksi%3A%20<?php echo urldecode($tra->trans_code); ?>%0ANama%20Order%3A%20<?php echo urldecode($tra->trans_name); ?>%0ATanggal%20Order%3A%<?php echo urldecode($tra->tgl_order); ?>%0ARincian%3A%20<?php echo urldecode($tra->rincian); ?>%0ANama%20Paket%3A%20<?php echo urldecode($tra->packet_name); ?>%0AStatus%20Progress%3A%20<?php echo urldecode($tra->progress_status); ?>%0AMetode%20Pembayaran%3A%20<?php echo urldecode($tra->payment_method); ?>%0A%0A--------Rincian%20Customer---------%0ANama%3A%20<?php echo urldecode($tra->first_name . " " . $tra->last_name); ?>%0AStatus%3A%20<?php echo urldecode($tra->who); ?>%0APerusahaan%3A%20<?php echo urldecode($tra->company); ?>%0ANegara%3A%20<?php echo urldecode($tra->country); ?>%0A%0AMohon%20untuk%20mengonfirmasi%20%0Apesanan%20saya.%0A-----------Terima%20Kasih-------------%0A"
                                target="__blank"><span class="badge bg-success">Konfirmasi Melalui WhatsApp</span></a>
                            <?php }else{ ?>
                            <a href="<?php echo base_url(); ?>index.php/invoice/inv/<?php echo $tra->trans_code; ?>"><span
                                    class="badge bg-primary">Lihat Invoice</span></a>
                            <?php } ?>
                        </td>
                    </tr>
                    <?php endforeach;
                                                }else{
                                                ?>
                    <tr>
                        <td colspan="7">
                            <center>
                                Anda belum memesan apapun.
                            </center>
                        </td>
                        <?php
                                                }
                                                ?>
                </tbody>
            </table>
        </div>
    </div>
</div>