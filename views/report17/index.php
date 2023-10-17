<?php include("../template/header.php") ?>

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2  tb-5 font-weight-bold text-primary">รายงานรายรับประจำเดือน</h1>
                    <!-- <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
                        For more information about DataTables, please visit the <a target="_blank"
                            href="https://datatables.net">official DataTables documentation</a>.</p> -->

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <form>
                        <div class="row py-3 m-2">
                            <!-- <h6 class="col-sm-12 col-md-7 col-lg-5 col-xl-3 m-0 font-weight-bold text-primary">ตาราง รายงานรายรับประจำเดือน</h6> -->
                            <!-- <div class="col-sm-12 col-md-5 col-lg-5 col-xl-5 md-form md-outline pt-2" id="accLabels">
                                <input placeholder="Select date" type="date" id="accessibility-example" class="form-control">
                                <i class="fas fa-calendar input-prefix" tabindex=0></i>
                            </div> -->
                            <div class="form-group col-sm-6 col-md-6 col-lg-6 col-xl-3">
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
                            <div class="form-group col-sm-6 col-md-6 col-lg-6 col-xl-3" name="year">
                                <select class="form-control" id="exampleFormControlSelect1">
                                <option>2018</option>
                                <option>2019</option>
                                <option>2020</option>
                                <option>2021</option>
                                <option>2022</option>
                                <option>2023</option>
                                </select>
                            </div>
                            <!-- <div class="form-group col-lg-2 col-xl-2 pt-2"> -->
                                <button type="submit" class="form-control btn btn-primary btn-block  col-xl-2 pt-2 " name="submit_date">submit</button>
                            <!-- </div> -->
                        </div>
                        </form>
                        
                        <div class="card-body">
                            
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Date</th>          
                                            <th>Parking Income</th>          
                                            <th>Member Income</th> 
                                            <th>Total Income</th>        
                                            <th>Fine (Parking)</th>    
                                            <th>Fine (Member)</th>           
                                            <th>Total</th>     
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Date</th>          
                                            <th>Parking Income</th>          
                                            <th>Member Income</th> 
                                            <th>Total Income</th>        
                                            <th>Fine (Parking)</th>    
                                            <th>Fine (Member)</th>           
                                            <th>Total</th>     
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <tr>
                                            <td>1/1/2566</td>
                                            <td>0.00</td>
                                            <td>0.00</td>
                                            <td>0.00</td>
                                            <td>0.00</td>
                                            <td>0.00</td>
                                            <td>0.00</td>
                                        </tr>
                                        <tr>
                                            <td>2/1/2566</td>
                                            <td>0.00</td>
                                            <td>0.00</td>
                                            <td>0.00</td>
                                            <td>0.00</td>
                                            <td>0.00</td>
                                            <td>0.00</td>
                                        </tr>
                                        <tr>
                                            <td>3/1/2566</td>
                                            <td>0.00</td>
                                            <td>0.00</td>
                                            <td>0.00</td>
                                            <td>0.00</td>
                                            <td>0.00</td>
                                            <td>0.00</td>
                                        </tr>
                                        <tr>
                                            <td>4/1/2566</td>
                                            <td>0.00</td>
                                            <td>0.00</td>
                                            <td>0.00</td>
                                            <td>0.00</td>
                                            <td>0.00</td>
                                            <td>0.00</td>
                                        </tr>
                                        <tr>
                                            <td>5/1/2566</td>
                                            <td>0.00</td>
                                            <td>0.00</td>
                                            <td>0.00</td>
                                            <td>0.00</td>
                                            <td>0.00</td>
                                            <td>0.00</td>
                                        </tr>
                                        <tr>
                                            <td>6/1/2566</td>
                                            <td>0.00</td>
                                            <td>0.00</td>
                                            <td>0.00</td>
                                            <td>0.00</td>
                                            <td>0.00</td>
                                            <td>0.00</td>
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