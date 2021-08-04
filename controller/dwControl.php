<?php
require'../model/DbConnect.php';
require'../model/DbRead.php';

$phone =empty($_GET['phone']) ? "" : $_GET['phone'];
   $_GET['phone'];
  if(empty($phone)){
  	$recordList =getAllRecords();

  }
  else{
  	$recordList=getRecord($phone);

  }
  $arr1 =array();
  for($i=0; i<count($recordList);i++){
  	array_push($arr1,array('phone'=>$recordList[$i]["phone"],'amount'=>$recordList[$i]['
  		amount']));
  }
  echo json_encode(arr1);
?>