<?php
foreach($inv as $iv):
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title><?php echo $iv->trans_code; ?></title>
    <link rel="stylesheet" href="<?php echo base_url(); ?>komponen/assets/inv/style.css" media="all" />
</head>

<body>
    <header class="clearfix">
        <div id="logo">
            <img src="<?php echo base_url(); ?>komponen/assets/images/logo/fasapro.png">
        </div>
        <div id="company">
            <h2 class="name">FASAProduction</h2>
            <div>Jl. Janti, gang Puntodewo No. 232</div>
            <div>Banguntapan, Bantul, Yogyakarta</div>
            <div>(62)895-3883-10044</div>
            <div><a href="mailto:fasaproductionofficial@gmail.com">fasaproductionofficial@gmail.com</a></div>
        </div>
        </div>
    </header>
    <main>
        <div id="details" class="clearfix">
            <div id="client">
                <div class="to">INVOICE TO:</div>
                <h2 class="name"><?php echo $iv->first_name ." ". $iv->last_name; ?></h2>
                <div class="address">
                    <?php
                    if($iv->who == "Pebisnis"){
                        echo $iv->who . " At " . $iv->company . ", " . $iv->country;
                    }else{
                        echo $iv->who . ", " . $iv->country;
                    }
                    ?>
                </div>
                <div class="email"><a href="mailto:john@example.com"><?php echo $iv->cust_email; ?></a></div>
            </div>
            <div id="invoice">
                <h1>INVOICE <?php echo $iv->trans_code; ?></h1>
                <div class="date">Date of Invoice: <?php echo idtgl('d-m-Y',$iv->tgl_order); ?></div>
            </div>
        </div>
        <table border="0" cellspacing="0" cellpadding="0" style="width: 100%;">
            <thead>
                <tr>
                    <th class="no">#</th>
                    <th class="desc">DETAIL PROJECT</th>
                    <th class="qty">QUANTITY</th>
                    <th class="total">TOTAL</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                foreach($inv as $invo):
                ?>
                <tr>
                    <td class="no"><?php echo $no++; ?></td>
                    <td class="desc">
                        <h3><?php echo $invo->trans_name; ?></h3><?php echo $invo->rincian; ?>
                    </td>
                    <td class="qty">1</td>
                    <td class="total"><?php echo rupiah($invo->total_pay); ?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
            <tfoot>
                <tr>
                    <td colspan="4">SUBTOTAL <?php echo rupiah($invo->total_pay); ?>
                        <hr />Diskon Rp 0
                        <hr />GRAND TOTAL
                        <?php echo rupiah($invo->total_pay); ?>
                    </td>
                </tr>
            </tfoot>
        </table>
        <div id="thanks">Thank you!</div>
        <div id="notices">
            <div>NOTICE:</div>
            <div class="notice">
                Pembayaran ditolak jika lebih dari 2 hari, dan project akan hangus.
                <br />
                Mohon untuk membayar sejumlah yang tertera ke nomor rekening berikut:
                <br />
                <br />
                <table style="width: 100%;">
                    <tbody>
                        <tr>
                            <td>BNI</td>
                            <td>: 0354360131 (a.n Fazal Said Wicaksono)</td>
                        </tr>
                        <tr>
                            <td>Mandiri</td>
                            <td>: 1020010168414 (a.n Fazal Said Wicaksono)</td>
                        </tr>
                        <tr>
                            <td>BSI</td>
                            <td>: 7173454974 (a.n Fazal Said Wicaksono)</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </main>
    <footer>
        FASAProduction under lisence by FasTechnology Indonesia.
    </footer>
</body>

</html>
<?php endforeach; ?>