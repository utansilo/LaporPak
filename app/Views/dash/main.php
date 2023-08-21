<!DOCTYPE html>
<html>
<head>
    <title>Perpusku</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url('css/lap.css'); ?>">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://use.fontawesome.com/ef8d38f3f3.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            $.ajax({
                url: '<?php echo base_url("dashboard/check_menu"); ?>',
                method: 'POST',
                dataType: 'json',
                success: function(response) {
                    if (response.success) {
                        // Aktifkan menu dashboard
                        $("#menu-dashboard").addClass("active");
                    }
                }
            });
        });
    </script>
    <style>
    html,body {
        font-family: 'Poppins', sans-serif;
        height: 100%;
        background-color: #F6F9FF;
    }
    .containers {
        display: flex;
        height: 100%;
    }
    .sidebar {
        width: 20%;
        margin: 8px auto 8px 8px;
        border-radius: 8px;
        color: #6e5de7;
        background: rgba(110, 93, 231, 0.1);
        padding: 31px 46px 40px 46px;
        text-align: center;
        height: 100%;
    /* Tambahkan gaya lainnya sesuai kebutuhan */
    }
    .content {
        flex: 1;
        margin-left: 20px;
        margin-bottom: 30px;
    /* Tambahkan gaya lainnya sesuai kebutuhan */
    }
    </style>
</head>
<body>
    <div class="containers">
        <div class="sidebar">
            <?php include('sidebar.php'); ?>
        </div>
        <div class="content">
            <?php include($viewContent); ?>
        </div>
    </div>
</body>
</html>
