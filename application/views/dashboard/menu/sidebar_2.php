<?php
foreach($cust as $cus):
?>
<div id="sidebar" class="active">
    <?php
            if($cus->jk == "Wa"){
            ?>
    <div class="sidebar-wrapper active"
        style="background: url('<?php echo base_url(); ?>komponen/assets/images/bg/cewek_2.jpg'); background-size: auto;">
        <div class="sidebar-header">
            <div class="d-flex justify-content-between">
                <div class="logoa">
                    <a href="<?php echo base_url('client/dashboard'); ?>"><img
                            src="<?php echo base_url(); ?>komponen/assets/images/logo/flogo.png" alt="Logo"
                            width="100%"></a>
                </div>
                <div class="toggler">
                    <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                </div>
            </div>
        </div>
        <?php $this->load->view('dashboard/menu/sidebar'); ?>
        <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
    </div>
    <?php }else{ ?>
    <div class="sidebar-wrapper active"
        style="background: url('<?php echo base_url(); ?>komponen/assets/images/bg/bege.jpg'); background-size: auto;">
        <div class="sidebar-header">
            <div class="d-flex justify-content-between">
                <div class="logo">
                    <a href="<?php echo base_url('client/dashboard'); ?>"><img
                            src="<?php echo base_url(); ?>komponen/assets/images/logo/flogo.png" alt="Logo" srcset=""
                            width="100%"></a>
                </div>
                <div class="toggler">
                    <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                </div>
            </div>
        </div>
        <?php $this->load->view('dashboard/menu/sidebar'); ?>
        <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
    </div>
    <?php } ?>
</div>
<?php endforeach; ?>