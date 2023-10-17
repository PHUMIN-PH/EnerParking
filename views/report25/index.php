<?php include("../template/header.php") ?>

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800 tb-5">สถิติของ การรเข้าจอดรถของสมาชิกประจำเดือน รายบุคคล</h1>
                    <!-- <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
                        For more information about DataTables, please visit the <a target="_blank"
                            href="https://datatables.net">official DataTables documentation</a>.</p> -->

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">ตาราง สถิติของ การรเข้าจอดรถของสมาชิกประจำเดือน รายบุคคล</h6>
                        </div>

                        <form>
                        <div class="row m-2">

                            <div class="input-group pl-2 pr-2 m-1">

                                <input type="text" class="form-control" placeholder="ID or Name">
                                
                                <div class="input-group-append">
                                    <button class="btn btn-success" type="submit">Go</button>
                                </div>
                            </div>

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
                                <option>2023</option>
                                <option>2022</option>
                                <option>2021</option>
                                <option>2020</option>
                                <option>2019</option>
                                <option>2018</option>
                                </select> 
                            </div>
                            <div class="form-group  row col-lg-12 col-xl-6 ">
                                <button type="submit" class="form-control btn btn-primary btn-block col m-2" name="print">Search</button>
                                <button type="submit" class="form-control btn btn-info btn-block col pl-2 m-2" name="export">Export</button>
                                <button type="submit" class="form-control btn btn-success btn-block col pl-2 m-2" name="submit_date">Print</button>
                            </div>
                        
                        
                            <!-- <div class="row col-sm-12 col-md-12 col-lg-12 col-xl-12 pl-4 pt-2">
                                <button type="submit" class="form-control btn btn-primary btn-block col m-2" name="print">Print</button>
                                <button type="submit" class="form-control btn btn-info btn-block col pl-2 m-2" name="export">Export</button>
                                <button type="submit" class="form-control btn btn-success btn-block col pl-2 m-2" name="submit_date">Search</button>
                            </div> -->
                            
                        </div>
                        </form>


                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Date</th>
                                            <th>number of car</th>
                                            <th>Tax invoice number</th>
                                            <th>Tax invoice number</th>
                                            <th>Machine code</th>
                                            <th>Exit Door</th>
                                            <th>money</th>
                                            <th>VAT</th>
                                            <th>amount</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Date</th>
                                            <th>number of car</th>
                                            <th>Tax invoice number</th>
                                            <th>Tax invoice number</th>
                                            <th>Machine code</th>
                                            <th>Exit Door</th>
                                            <th>money</th>
                                            <th>VAT</th>
                                            <th>amount</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <tr>
                                            <td>2011/04/25</td>
                                            <td>240</td>
                                            <td>661005-100001</td>
                                            <td>661005-100147</td>
                                            <td>Machine code</td>
                                            <td>Exit2</td>
                                            <td>8,520.50</td>
                                            <td>458.10</td>
                                            <td>8978.60</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>

            <?php include("../template/footer.php") ?>

            <?php include("../template/foot.php") ?>