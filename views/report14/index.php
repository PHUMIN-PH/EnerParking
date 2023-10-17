<?php include("../template/header.php") ?>

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800 tb-5">รายงานการเปิดประตูกรณีพิเศษ</h1>
                    <!-- <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
                        For more information about DataTables, please visit the <a target="_blank"
                            href="https://datatables.net">official DataTables documentation</a>.</p> -->

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">ตาราง รายงานการเปิดประตูกรณีพิเศษ</h6>
                        </div>

                        <!-- ===========================================    DateTime Menu     =======     =====    ================================================    -->
            <!-- ===========================================                     =======     =====    ================================================    -->
                       <form> 
            <div class="row pl-2 ">
                            <div class="row col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6 md-form md-outline pt-2" id="accLabels">
                                    <input placeholder="Select date" type="date" id="accessibility-example" class="form-control">
                                    <i class="fas fa-calendar input-prefix" tabindex=0></i>
                                </div>
                                <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6 md-form md-outline pt-2" id="accLabels">
                                    <input placeholder="Select date" type="time" id="accessibility-example" class="form-control">    <!-- Timeeeeeee -->
                                    <i class="fas a-calendar input-prefix" tabindex=0></i>
                                </div>
                                <!-- <Div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                    <h6 class="font-weight-bold text-primary pt-3"style="text-align:center;"> To </h6>
                                </Div> -->
                                <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6 md-form md-outline pt-2" id="accLabels">
                                    <input placeholder="Select date" type="date" id="accessibility-example" class="form-control">
                                    <i class="fas fa-calendar input-prefix" tabindex=0></i>
                                </div>
                                <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6 md-form md-outline pt-2" id="accLabels">
                                    <input placeholder="Select date" type="time" id="accessibility-example" class="form-control">    <!-- Timeeeeeee -->
                                    <i class="fas fa-calendar input-prefix" tabindex=0></i>
                                </div>
                            </div>
                            <div class="row col-sm-12 col-md-12 col-lg-12 col-xl-12 pl-4 pt-2">
                                <button type="submit" class="form-control btn btn-primary btn-block col m-2" name="print">Print</button>
                                <button type="submit" class="form-control btn btn-info btn-block col pl-2 m-2" name="export">Export</button>
                                <button type="submit" class="form-control btn btn-success btn-block col pl-2 m-2" name="submit_date">Search</button>
                            </div>
                            
                        </div>

                        <!-- ===========================================                     =======     =====    ================================================    -->

                        <!-- <div class="row pl-2">
                            <div class="row col-sm-12 col-md-9 col-lg-9 col-xl-9">
                                <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6 md-form md-outline pt-2" id="accLabels">
                                    <input placeholder="Select date" type="date" id="accessibility-example" class="form-control">
                                    <i class="fas fa-calendar input-prefix" tabindex=0></i>
                                </div>
                                <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6 md-form md-outline pt-2" id="accLabels">
                                    <input placeholder="Select date" type="time" id="accessibility-example" class="form-control">    
                                    <i class="fas fa-calendar input-prefix" tabindex=0></i>
                                </div>
                                <Div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                    <h6 class="font-weight-bold text-primary pt-3"style="text-align:center;"> To </h6>
                                </Div>
                                <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6 md-form md-outline pt-2" id="accLabels">
                                    <input placeholder="Select date" type="date" id="accessibility-example" class="form-control">
                                    <i class="fas fa-calendar input-prefix" tabindex=0></i>
                                </div>
                                <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6 md-form md-outline pt-2" id="accLabels">
                                    <input placeholder="Select date" type="time" id="accessibility-example" class="form-control">    
                                    <i class="fas fa-calendar input-prefix" tabindex=0></i>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-3 col-lg-3 col-xl-3 pt-2">
                                <button type="submit" class="form-control btn btn-primary btn-block   " name="print">Print</button>
                                <button type="submit" class="form-control btn btn-info btn-block   " name="export">Export</button>
                                <button type="submit" class="form-control btn btn-success btn-block   " name="submit_date">Search</button>
                            </div>
                            
                        </div> -->



            <!-- ===========================================    DateTime Menu     =======     =====    ================================================    -->
            <!-- ===========================================                     =======     =====    ================================================    -->
                       </form>


                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Date</th>
                                            <th>Time</th>
                                            <th>Ticket-ID</th>          <!-- เลขที่บัตรจอดรถ -->
                                            <th>License Plate</th>      <!-- ป้ายทะเบียนรถ -->
                                            <th>Exit Door</th>          <!-- ประตูออก -->
                                            <th>Comment</th>            <!-- หมายเหตุ -->
                                            <th>Employee</th>           <!-- เจ้าหน้าที่ -->
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Date</th>
                                            <th>Time</th>
                                            <th>Ticket-ID</th>          <!-- เลขที่บัตรจอดรถ -->
                                            <th>License Plate</th>      <!-- ป้ายทะเบียนรถ -->
                                            <th>Exit Door</th>          <!-- ประตูออก -->
                                            <th>Comment</th>            <!-- หมายเหตุ -->
                                            <th>Employee</th>           <!-- เจ้าหน้าที่ -->
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <tr>
                                            <td>27/9/2566</td>
                                            <td>12:10:54</td>
                                            <td>V-1126</td>
                                            <td></td>
                                            <td>EXIT-02</td>
                                            <td>ไม้ไม่เปิด</td>
                                            <td>แนน</td>
                                        </tr>
                                        <tr>
                                            <td>27/9/2566</td>
                                            <td>11:40:22</td>
                                            <td></td>
                                            <td>บท3809</td>
                                            <td>EXIT-02</td>
                                            <td>โวล่าเซลล์</td>
                                            <td>แนน</td>
                                        </tr>
                                        <tr>
                                            <td>27/9/2566</td>
                                            <td>13:43:14</td>
                                            <td></td>
                                            <td></td>
                                            <td>EXIT-02</td>
                                            <td>บัตรไม่ขึ้นข้อมุล</td>
                                            <td>แนน</td>
                                        </tr>
                                        <tr>
                                            <td>27/9/2566</td>
                                            <td>13:43:14</td>
                                            <td></td>
                                            <td></td>
                                            <td>EXIT-02</td>
                                            <td>บัตรไม่ขึ้นข้อมุล</td>
                                            <td>แนน</td>
                                        </tr>
                                        <tr>
                                            <td>27/9/2566</td>
                                            <td>11:40:22</td>
                                            <td>V-0173</td>
                                            <td></td>
                                            <td>EXIT-01</td>
                                            <td>ช่างโลล่าเซลล์</td>
                                            <td>แนน</td>
                                        </tr>
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->


            <?php include("../template/footer.php") ?>

            <?php include("../template/foot.php") ?>