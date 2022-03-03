<div class="sidebar-menu">
    <ul class="menu">
        <li class="sidebar-title">Menu</li>

        <li class="sidebar-item  ">
            <a href="<?php echo base_url('client/dashboard'); ?>" class='sidebar-link'>
                <i class="bi bi-grid-fill"></i>
                <span>Dashboard</span>
            </a>
        </li>

        <li class="sidebar-item  has-sub">
            <a href="#" class='sidebar-link'>
                <i class="bi bi-stack"></i>
                <span>Orders</span>
            </a>
            <ul class="submenu ">
                <li class="submenu-item ">
                    <a href="<?php echo base_url('client/fp_orders'); ?>">Pesanan Saya</a>
                </li>
            </ul>
        </li>

    </ul>
</div>