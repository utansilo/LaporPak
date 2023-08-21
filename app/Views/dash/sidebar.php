
<style>
    .sidebar ul li img{ 
        margin-bottom: 50px;
    }
    .sidebar ul li{
        font-size: 20px;
        letter-spacing: 5px;
        font-weight: 800;
        list-style-type: none;
        margin-top: 20px;
        margin-bottom: 20px;
    }
    .sidebar a {
        padding: 12px 0 12px 0;
        border-radius: 12px;
        text-decoration: none;
        font-size: 18px;
        display: block;
    }

    .sidebar a:hover {
        background-color: #6e5de7;
        color: white;
    }

    .sidebar a.active {
        background-color: #4CAF50;
        color: white;
    }
</style>
    <div class="card-sidebar">
        <img src="<?= base_url('img/logo_amikom_122.png'); ?>" style="margin-bottom: 60px;" alt="">
        <ul style="padding-left: 0;">
            <?php if (session()->get('user')['role'] === 'admin') : ?>
                <li><a href="<?php echo base_url('admin'); ?>">Admin</a></li>
            <?php endif; ?>
            <li><a href="<?php echo base_url('dashboard'); ?>">Dashboard</a></li>
            <?php if (session()->get('user')['role'] === 'user') : ?>
                <li><a href="<?php echo base_url('form'); ?>">Form</a></li>
            <?php endif; ?>
            <!-- <li><a href="<?php echo base_url('form'); ?>">Form</a></li> -->
            <li style="margin-top: 250px;"><a href="<?php echo base_url('logout'); ?>">Logout</a></li>
        </ul>
    </div>
