<!DOCTYPE html>
<html lang="en">
<head>
    <?php require PATH_VIEW.'components/head.php'?>
    <style>
        .square{
            height: 200px;
        }
        .inner{
            text-align: center;
        }
    </style>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
        <?php require PATH_VIEW.'components/top.php'?>
        <?php require PATH_VIEW.'components/side.php'?>
            <div class="content-wrapper">
                <section class="content">
                    <div class="container-fluid">
                        <div class="row" style="padding: 10px;">
                            <div class="col-lg-6 col-6">
                                <div class="small-box square" style="background-color: #4bd0cc;">
                                    <div class="inner">
                                        <h3>Total Room Available <i class="nav-icon fas fa-building"></i></h3>

                                        <h1 style="font-size: 100px;"><?php echo $data2;?></h1>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-6">
                                <!-- small box -->
                                <div class="small-box square" style="background-color: #4bd0cc;">
                                    <div class="inner">
                                        <h3>Total Room Occupied <i class="nav-icon fas fa-building"></i></h3>

                                        <h1 style="font-size: 100px;"><?php echo $data3;?></h1>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-6">
                                <!-- small box -->
                                <div class="small-box square" style="background-color: #343A40;">
                                    <div class="inner">
                                        <h3 style="color: #ffffff;">Total Tenants <i class="nav-icon fas fa-users"></i></h3>

                                        <h1 style="font-size: 100px; color: #ffffff;"><?php echo $data;?></h1>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-6">
                                <!-- small box -->
                                <div class="small-box square" style="background-color: #343A40;">
                                    <div class="inner">
                                        <h3 style="color: #ffffff;">Total Guests <i class="nav-icon fas fa-users"></i></h3>

                                        <h1 style="font-size: 100px; color: #ffffff;"><?php echo $data4;?></h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
    </div>
    <?php require PATH_VIEW.'components/script.php'?>
    <script>
        $('#dashboard').addClass('sidebaractive');
        $('#dashboardp').addClass('sidebarblacktext');
        $('#dashboardi').addClass('sidebarblacktext');
    </script>
</body>
</html>