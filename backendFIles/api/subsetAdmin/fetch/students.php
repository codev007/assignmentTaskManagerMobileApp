<?php
require_once '../../operationDB/adminOperations.php';
require_once '../../subsetAdmin/write.php';

if($_SERVER['REQUEST_METHOD']=='POST'){
    $data=json_decode(file_get_contents("php://input"));
    $batchID=$data->batch_id;
    $coaching_id=$data->coaching_id;
    if(!empty($batchID) && !empty($coaching_id)){
        $db=new adminoperations();
        $getData=$db->getStudent($coaching_id,$batchID);
        echo json_encode($getData);
    }
}