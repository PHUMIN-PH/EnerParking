<?php 

include "../../controller/conn_db.php";

$sql = "SELECT * FROM daily_income_report " ;

$stmt = sqlsrv_query($conn , $sql);

$space ='&nbsp;&nbsp;&nbsp;&nbsp;';

// while($obj = sqlsrv_fetch_array($stmt,SQLSRV_FETCH_ASSOC)){
//     $Date = $obj['date_']->format('d/m/Y');
//     // echo $obj['t_start'].'</br>';
//     echo $Date . $space;
//     $Time = $obj['t_start']->format('H : i: s');
//     echo $Time . '</br>';

// $obj = sqlsrv_fetch_array($stmt,SQLSRV_FETCH_ASSOC);
// echo ($obj['Uname']);

// }

// sqlsrv_free_stmt($stmt);
// sqlsrv_close($conn);


?>