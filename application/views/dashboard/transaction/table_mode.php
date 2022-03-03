<div class="col-md-12">
    <div class="card">
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