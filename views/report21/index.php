<?php include("../template/header.php") ?>

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800 tb-5">รายงานรับล่วงหน้าสำหรับสมาชิก</h1>
                    <!-- <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
                        For more information about DataTables, please visit the <a target="_blank"
                            href="https://datatables.net">official DataTables documentation</a>.</p> -->

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="d-flex justify-content-between card-header col-md-12 col-lg-12 col-xl-12 hidden-lg-down py-3">
                            <h6 class="m-0 font-weight-bold text-primary">รายงานรับล่วงหน้าสำหรับสมาชิก</h6>
                            <h6 class="m-0 font-weight-bold text-primary"></h6>
                           
                            <h6 class="m-0 font-weight-bold text-primary"></h6>
                        </div>

                        <!-- ===========================================    DateTime Menu     =======     =====    ================================================    -->
            <!-- ===========================================                     =======     =====    ================================================    -->
                    <form>
                        <div class="row m-2">
                            <div class="form-group col-sm-6 col-md-6 col-lg-6 col-xl-3 pt-2">
                                <select class="form-control" id="exampleFormControlSelect1">
                                <option>January</option>
                                <option>February</option>
                                <option>March</option>
                                <option>April</option>
                                <option>May</option>
                                <option>June</option>
                                <option>July</option>
                                <option>August</option>
                                <option>September</option>
                                <option>October</option>
                                <option>November</option>
                                <option>December</option>
                                </select>
                            </div>
                            <div class="form-group col-sm-6 col-md-6 col-lg-6 col-xl-3 pt-2" name="year">
                                <select class="form-control" id="exampleFormControlSelect1">
                                <option>2018</option>
                                <option>2019</option>
                                <option>2020</option>
                                <option>2021</option>
                                <option>2022</option>
                                <option>2023</option>
                                </select> 
                            </div>
                            <div class="form-group  row col-lg-12 col-xl-6 ">
                                <button type="submit" class="form-control btn btn-primary btn-block col m-2" name="print">Print</button>
                                <button type="submit" class="form-control btn btn-info btn-block col pl-2 m-2" name="export">Export</button>
                                <button type="submit" class="form-control btn btn-success btn-block col pl-2 m-2" name="submit_date">Search</button>
                            </div>
                        
                        
                            <!-- <div class="row col-sm-12 col-md-12 col-lg-12 col-xl-12 pl-4 pt-2">
                                <button type="submit" class="form-control btn btn-primary btn-block col m-2" name="print">Print</button>
                                <button type="submit" class="form-control btn btn-info btn-block col pl-2 m-2" name="export">Export</button>
                                <button type="submit" class="form-control btn btn-success btn-block col pl-2 m-2" name="submit_date">Search</button>
                            </div> -->
                            
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
                                            <th>Member-ID</th>
                                            <th>Name</th>
                                            <th>License plate</th>
                                            <th>Type</th>
                                            <th>Card Number</th>
                                            <th>Payment</th>
                                            <th>Use</th>
                                            <th>EXP</th>
                                            <th>Comment</th>
                                            <th>1/2023</th>
                                            <th>2/2023</th>
                                            <th>3/2023</th>
                                            <th>4/2023</th>
                                            <th>5/2023</th>
                                            <th>6/2023</th>
                                            <th>7/2023</th>
                                            <th>8/2023</th>
                                            <th>9/2023</th>
                                            <th>10/2023</th>
                                            <th>11/2023</th>
                                            <th>12/2023</th>
                                        </tr>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                        <tr>
                                            <th>Member-ID</th>
                                            <th>Name</th>
                                            <th>License plate</th>
                                            <th>Type</th>
                                            <th>Card Number</th>
                                            <th>Payment</th>
                                            <th>Use</th>
                                            <th>EXP</th>
                                            <th>Comment</th>
                                            <th>1/2023</th>
                                            <th>2/2023</th>
                                            <th>3/2023</th>
                                            <th>4/2023</th>
                                            <th>5/2023</th>
                                            <th>6/2023</th>
                                            <th>7/2023</th>
                                            <th>8/2023</th>
                                            <th>9/2023</th>
                                            <th>10/2023</th>
                                            <th>11/2023</th>
                                            <th>12/2023</th>
                                        </tr>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <tr>
                                            <td>66-0002 </td>
                                            <td>นายณัฐวุฒิ ศรีใคร</td>
                                            <td>5กญ5134</td>
                                            <td>คณะแพทย์</td>
                                            <td>M-0002</td>
                                            <td>30/6/2566</td>
                                            <td>1/4/2566</td>
                                            <td>31/7/2566</td>
                                            <td>ต่อ 1 เดือน</td>
                                            <td>0</td>
                                            <td>0</td>
                                            <td>0</td>
                                            <td>934.58</td>
                                            <td>934.58</td>
                                            <td>934.58</td>
                                            <td>934.58</td>
                                            <td>934.58</td>
                                            <td>934.58</td>
                                            <td>934.58</td>
                                            <td>934.58</td>
                                            <td>934.58</td>
                                        </tr>
                                        <tr>
                                            <td>66-0002 </td>
                                            <td>นายณัฐวุฒิ ศรีใคร</td>
                                            <td>5กญ5134</td>
                                            <td>คณะแพทย์</td>
                                            <td>M-0002</td>
                                            <td>30/6/2566</td>
                                            <td>1/4/2566</td>
                                            <td>31/7/2566</td>
                                            <td>ต่อ 1 เดือน</td>
                                            <td>0</td>
                                            <td>0</td>
                                            <td>0</td>
                                            <td>934.58</td>
                                            <td>934.58</td>
                                            <td>934.58</td>
                                            <td>934.58</td>
                                            <td>934.58</td>
                                            <td>934.58</td>
                                            <td>934.58</td>
                                            <td>934.58</td>
                                            <td>934.58</td>
                                        </tr>
                                        <tr>
                                            <td>66-0002 </td>
                                            <td>นายณัฐวุฒิ ศรีใคร</td>
                                            <td>5กญ5134</td>
                                            <td>คณะแพทย์</td>
                                            <td>M-0002</td>
                                            <td>30/6/2566</td>
                                            <td>1/4/2566</td>
                                            <td>31/7/2566</td>
                                            <td>ต่อ 1 เดือน</td>
                                            <td>0</td>
                                            <td>0</td>
                                            <td>0</td>
                                            <td>934.58</td>
                                            <td>934.58</td>
                                            <td>934.58</td>
                                            <td>934.58</td>
                                            <td>934.58</td>
                                            <td>934.58</td>
                                            <td>934.58</td>
                                            <td>934.58</td>
                                            <td>934.58</td>
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