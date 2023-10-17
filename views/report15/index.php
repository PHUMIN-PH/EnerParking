<?php include("../template/header.php") ?>

                <?php include ("API_15.php") ?>
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800 tb-5">รายงานรายรับประจำวัน</h1>
                    <!-- <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
                        For more information about DataTables, please visit the <a target="_blank"
                            href="https://datatables.net">official DataTables documentation</a>.</p> -->

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <form>
                        <div class="row m-2">
                            <div class="col-sm-12 col-md-5 col-lg-5 col-xl-5 md-form md-outline pt-2" id="accLabels">
                            <!-- <label for="accessibility-example">Try me...</label> -->
                                <input placeholder="Select date" type="date" id="accessibility-example" class="form-control">
                                <i class="fas fa-calendar input-prefix" tabindex=0></i>
                            </div>
                            <div class="col-lg-2 col-xl-2 pt-2">
                                <button type="submit" class="btn btn-primary btn-block " name="submit_date">submit</button>
                            </div>
                        </div>    

                        
                        </form>

                        <?php print_r($stmt); ?>
                        
                        <div class="card-body">
                            
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Start</th>          <!-- เวลาเริ่มต้น -->
                                            <th>End</th>            <!-- เวลาสิ้นสุด -->
                                            <th>Income</th>         <!-- รายรับจากการเข้าจอด -->
                                            <th>total money</th>    <!-- รวมรายได้ -->
                                            <th>Fine</th>           <!-- ค่าปรับบัตรหาย -->
                                            <th>Amount</th>         <!-- รวมทั้งสิ้น -->
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Start</th>           <!-- เวลาเริ่มต้น -->
                                            <th>End</th>             <!-- เวลาสิ้นสุด -->
                                            <th>Income</th>          <!-- รายรับจากการเข้าจอด -->
                                            <th>total money</th>     <!-- รวมรายได้ -->
                                            <th>Fine</th>            <!-- ค่าปรับบัตรหาย -->
                                            <th>Amount</th>          <!-- รวมทั้งสิ้น -->
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php
                                        while($rows = sqlsrv_fetch_array($stmt,SQLSRV_FETCH_ASSOC)){
                                            $Date = $rows['date_']->format('d/m/Y');
                                            $Time_st = $rows['t_start']->format('H : i: s');
                                            $Time_end = $rows['t_end']->format('H : i: s');
                                        ?>
                                        <tr>
                                            <td> <?=$Time_st ?> </td>
                                            <td> <?=$Time_end ?> </td>
                                            <td> <?=$rows['income'] ?> </td>
                                            <td> <?=$rows['total_income'] ?> </td>
                                            <td> <?=$rows['fine'] ?> </td>
                                            <td> <?=$rows['amount'] ?> </td>
                                        </tr>
                                        <?php } ?>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            <?php include("../template/footer.php") ?>

            <?php include("../template/foot.php") ?>