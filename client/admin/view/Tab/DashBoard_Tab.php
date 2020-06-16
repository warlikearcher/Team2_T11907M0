
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="align-items-center  mb-4">
        <h1 class="text-gray-800">Tổng quát</h1>
    </div>
    <!-- Content Row -->
    <div class="row">
        <!-- Earnings money money money !!!! -->
        <div class="session_card mb-4 padding-0">
            <div class="card border-left-success shadow">
                <div class="card-body">
                    <div class=" no-gutters align-items-center">
                        <div class="card-font">
                            <?php
                            if (mysqli_num_rows($result) > 0) {
                                $money = mysqli_fetch_assoc($result);
                            }
                            ?>
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Thu nhập</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo number_format($money["totalAll"],0); ?></div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Content Row -->

    <div class="row">
        <div class="col-xl-8 col-lg-7">
            <div class="card shadow mb-4">
                 Card Header - Dropdown 
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Bảng tổng kết thu nhập đơn hàng hàng tháng</h6>
                </div>
                 Card Body 
                <div class="card-body">
                    <div class="chart-area">
                        <canvas id="myAreaChart"></canvas>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>