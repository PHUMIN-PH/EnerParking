<?php include("../template/header.php") ?>

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800 tb-5">รายงานรับประจำวันที่มีการใช้คูปองส่วนลด</h1>
                    <!-- <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
                        For more information about DataTables, please visit the <a target="_blank"
                            href="https://datatables.net">official DataTables documentation</a>.</p> -->

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="d-flex justify-content-between card-header col-md-12 col-lg-12 col-xl-12 hidden-lg-down py-3">
                            <h6 class="m-0 font-weight-bold text-primary">รายงานรับประจำวันที่มีการใช้คูปองส่วนลด</h6>
                            <h6 class="m-0 font-weight-bold text-primary"></h6>
                            <h6 class="m-0 font-weight-bold text-primary">ชนิดคูปอง</h6>
                            <h6 class="m-0 font-weight-bold text-primary"></h6>
                        </div>

                        <!-- ===========================================    DateTime Menu     =======     =====    ================================================    -->
            <!-- ===========================================                     =======     =====    ================================================    -->
                    <form>
                    <div class="row pl-2 ">
                            <div class="row col-sm-12 col-md-8 col-lg-8 col-xl-8">
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
                            <div class="row col-sm-12 col-md-4 col-lg-4 col-xl-4">
                                <div class="form-group col m-2">
                                    <select class="form-control" id="exampleFormControlSelect1">
                                    <option>Select coupon</option>
                                    <option>2019-3A</option>
                                    <option>2020-2D</option>
                                    <option>2021-FF</option>
                                    <option>2022-F9</option>
                                    <option>2023-E8</option>
                                    </select>
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
                                        <tr>
                                            <th>Tax invoice (ABB)</th>  <!-- ใบกำกับภาษีฉบับเต็ม -->
                                            <th>License Plate</th>      <!-- ใบกำกับภาษีฉบับเต็ม -->
                                            <th>Check in Date</th>      <!-- ใบกำกับภาษีฉบับเต็ม -->
                                            <th>Check in Time</th>      <!-- ใบกำกับภาษีฉบับเต็ม -->
                                            <th>Door (in)</th>          <!-- ใบกำกับภาษีฉบับเต็ม -->
                                            <th>Check out Date</th>     <!-- ใบกำกับภาษีฉบับเต็ม -->
                                            <th>Check out time</th>     <!-- ใบกำกับภาษีฉบับเต็ม -->
                                            <th>Exit</th>               <!-- ใบกำกับภาษีฉบับเต็ม -->
                                            <th>total time</th>         <!-- ใบกำกับภาษีฉบับเต็ม -->
                                            <th>Parking fee</th>        <!-- ค่าจอดรถ -->
                                            <th>fine</th>               <!-- ค่าปรับ -->
                                            <th>Discount</th>           <!-- ส่วนลด -->
                                            <th>Discount Code</th>      <!-- รหัสส่วนลด -->
                                            <th>POS ID</th>       <!-- รหัสเครื่องคิดเงิน -->
                                            <th>Tax invoice</th>        <!-- ใบกำกับภาษีฉบับเต็ม -->
                                            <th>Coupon</th>             <!-- เลขที่คูปอง -->
                                            <th>Stamp</th>              <!-- ตราประทับ -->
                                            <th>money</th>              <!-- มูลค่า -->
                                            <th>VAT</th>                <!-- VAT -->
                                            <th>Amount</th>             <!-- จำนวนเงิน -->
                                            <th>Payment</th>            <!-- ชำระโดย -->
                                        </tr>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                        <tr>
                                            <th>Tax invoice (ABB)</th>  <!-- ใบกำกับภาษีฉบับเต็ม -->
                                            <th>License Plate</th>      <!-- ใบกำกับภาษีฉบับเต็ม -->
                                            <th>Check in Date</th>      <!-- ใบกำกับภาษีฉบับเต็ม -->
                                            <th>Check in Time</th>      <!-- ใบกำกับภาษีฉบับเต็ม -->
                                            <th>Door (in)</th>          <!-- ใบกำกับภาษีฉบับเต็ม -->
                                            <th>Check out Date</th>     <!-- ใบกำกับภาษีฉบับเต็ม -->
                                            <th>Check out time</th>     <!-- ใบกำกับภาษีฉบับเต็ม -->
                                            <th>Exit</th>               <!-- ใบกำกับภาษีฉบับเต็ม -->
                                            <th>total time</th>         <!-- ใบกำกับภาษีฉบับเต็ม -->
                                            <th>Parking fee</th>        <!-- ค่าจอดรถ -->
                                            <th>fine</th>               <!-- ค่าปรับ -->
                                            <th>Discount</th>           <!-- ส่วนลด -->
                                            <th>Discount Code</th>      <!-- รหัสส่วนลด -->
                                            <th>POS ID</th>       <!-- รหัสเครื่องคิดเงิน -->
                                            <th>Tax invoice</th>        <!-- ใบกำกับภาษีฉบับเต็ม -->
                                            <th>Coupon</th>             <!-- เลขที่คูปอง -->
                                            <th>Stamp</th>              <!-- ตราประทับ -->
                                            <th>money</th>              <!-- มูลค่า -->
                                            <th>VAT</th>                <!-- VAT -->
                                            <th>Amount</th>             <!-- จำนวนเงิน -->
                                            <th>Payment</th>            <!-- ชำระโดย -->
                                        </tr>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <tr>
                                            <td>661004100057 </td>
                                            <td>ยจ4650</td>
                                            <td>4/10/2566</td>
                                            <td>09:49:26</td>
                                            <td>ENTRY-01</td>
                                            <td>4/10/2566</td>
                                            <td>11:22:30</td>
                                            <td>EXIT-01</td>
                                            <td>01:33:04</td>
                                            <td>0.00</td>
                                            <td>0</td>
                                            <td>30</td>
                                            <td>วิทยาศาสตร์ทางทะเล</td>
                                            <td>E052000002A4169</td>
                                            <td></td>
                                            <td>C-003-02937</td>
                                            <td></td>
                                            <td>0.0000</td>
                                            <td>0.0000</td>
                                            <td>0.00</td>
                                            <td>CASH</td>
                                        </tr>
                                        <tr>
                                            <td>661004_100057 </td>
                                            <td>ยจ4650</td>
                                            <td>4/10/2566</td>
                                            <td>09:49:26</td>
                                            <td>ENTRY-01</td>
                                            <td>4/10/2566</td>
                                            <td>11:22:30</td>
                                            <td>EXIT-01</td>
                                            <td>01:33:04</td>
                                            <td>0.00</td>
                                            <td>0</td>
                                            <td>30</td>
                                            <td>วิทยาศาสตร์ทางทะเล</td>
                                            <td>E052000002A4169</td>
                                            <td></td>
                                            <td>C-003-02937</td>
                                            <td></td>
                                            <td>0.0000</td>
                                            <td>0.0000</td>
                                            <td>0.00</td>
                                            <td>CASH</td>
                                        </tr>
                                        <tr>
                                            <td>661004_100057 </td>
                                            <td>ยจ4650</td>
                                            <td>4/10/2566</td>
                                            <td>09:49:26</td>
                                            <td>ENTRY-01</td>
                                            <td>4/10/2566</td>
                                            <td>11:22:30</td>
                                            <td>EXIT-01</td>
                                            <td>01:33:04</td>
                                            <td>0.00</td>
                                            <td>0</td>
                                            <td>30</td>
                                            <td>วิทยาศาสตร์ทางทะเล</td>
                                            <td>E052000002A4169</td>
                                            <td></td>
                                            <td>C-003-02937</td>
                                            <td></td>
                                            <td>0.0000</td>
                                            <td>0.0000</td>
                                            <td>0.00</td>
                                            <td>CASH</td>
                                        </tr>
                                        <tr>
                                            <td>661004_100057 </td>
                                            <td>ยจ4650</td>
                                            <td>4/10/2566</td>
                                            <td>09:49:26</td>
                                            <td>ENTRY-01</td>
                                            <td>4/10/2566</td>
                                            <td>11:22:30</td>
                                            <td>EXIT-01</td>
                                            <td>01:33:04</td>
                                            <td>0.00</td>
                                            <td>0</td>
                                            <td>30</td>
                                            <td>วิทยาศาสตร์ทางทะเล</td>
                                            <td>E052000002A4169</td>
                                            <td></td>
                                            <td>C-003-02937</td>
                                            <td></td>
                                            <td>0.0000</td>
                                            <td>0.0000</td>
                                            <td>0.00</td>
                                            <td>CASH</td>
                                        </tr>
                                        <tr>
                                            <td>661004_100057 </td>
                                            <td>ยจ4650</td>
                                            <td>4/10/2566</td>
                                            <td>09:49:26</td>
                                            <td>ENTRY-01</td>
                                            <td>4/10/2566</td>
                                            <td>11:22:30</td>
                                            <td>EXIT-01</td>
                                            <td>01:33:04</td>
                                            <td>0.00</td>
                                            <td>0</td>
                                            <td>30</td>
                                            <td>วิทยาศาสตร์ทางทะเล</td>
                                            <td>E052000002A4169</td>
                                            <td></td>
                                            <td>C-003-02937</td>
                                            <td></td>
                                            <td>0.0000</td>
                                            <td>0.0000</td>
                                            <td>0.00</td>
                                            <td>CASH</td>
                                        </tr>
                                        <tr>
                                            <td>661004_100057 </td>
                                            <td>ยจ4650</td>
                                            <td>4/10/2566</td>
                                            <td>09:49:26</td>
                                            <td>ENTRY-01</td>
                                            <td>4/10/2566</td>
                                            <td>11:22:30</td>
                                            <td>EXIT-01</td>
                                            <td>01:33:04</td>
                                            <td>0.00</td>
                                            <td>0</td>
                                            <td>30</td>
                                            <td>วิทยาศาสตร์ทางทะเล</td>
                                            <td>E052000002A4169</td>
                                            <td></td>
                                            <td>C-003-02937</td>
                                            <td></td>
                                            <td>0.0000</td>
                                            <td>0.0000</td>
                                            <td>0.00</td>
                                            <td>CASH</td>
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