<div class="col-md-12">
    <div class="card ani-dt">
        <div class="card-body">
            <table class="table" id="table1">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Paket</th>
                        <th>Harga</th>
                        <th>Qty</th>
                        <th>Subtotal</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                                                if($cartht > 0){
                                                    $no = 1;
                                                    $total = 0;
                                                    foreach($cart as $ca):
                                                ?>
                    <tr>
                        <td><?php echo $no++; ?></td>
                        <td><?php echo $ca->packet_name; ?></td>
                        <td><?php echo rupiah($ca->price); ?></td>
                        <td><?php echo $ca->qty; ?></td>
                        <?php
						$subtotal = $ca->price * $ca->qty;
                        $total += $subtotal;
						?>
                        <td><?php echo rupiah($subtotal); ?></td>
                        <td>
                            <?php
                        $crt = $ca->cart_id;
                        $cst = $this->session->userdata('ses_id');
                        $det = $this->db->query("SELECT * FROM details WHERE cart_id='$crt'")->num_rows();
                            if($det > 0){
                        ?>
                            <a href="" class="btn btn-success btn-small" data-bs-toggle="modal"
                                data-bs-target="#detailsedit<?php echo $ca->cart_id; ?>"><i
                                    class="fa fa-pencil"></i></a>
                            <a href="" class="btn btn-warning btn-small" data-bs-toggle="modal"
                                data-bs-target="#details<?php echo $ca->cart_id; ?>"><i class="fa fa-list"></i></a>
                            <?php }else{ ?>
                            <a href="" class="btn btn-info btn-small" data-bs-toggle="modal"
                                data-bs-target="#detailsadd<?php echo $ca->cart_id; ?>">Add Details</a>
                            <?php }
                        ?>
                        </td>
                    </tr>
                    <?php
                    endforeach;
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
            <br />
            <br />
            <?php
            $v = $this->session->userdata('ses_id');
            $g = $this->db->query("SELECT * FROM keranjang WHERE cust_id='$v'")->num_rows();
            if($g > 0){
            ?>
            <div class="for-cekot">
                <h3 style="color: #fff;"><?php echo rupiah($total); ?></h3>
            </div>
            <div class="for-cekot-kanan">
                <a href="<?php echo base_url('client/cart/checkout'); ?>">
                    <h3 style="color: #fff;">Checkout</h3>
                </a>
            </div>
            <?php }else{ }?>
        </div>
    </div>
</div>