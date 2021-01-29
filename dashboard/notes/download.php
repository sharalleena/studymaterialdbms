<?php
include "conn.php";
if(isset($_GET['id'])){
    $id=$_GET['id'];
    $stat=$db->prepare("select * from notes1 where id=?");
    $stat->bindParam(1,$id);
    $stat->execute();
    $data=$stat->fetch();

    $file='upload/'.$data['filename'];
    if(file_exists($file)){
        header('Content-Description: '.$data['description']);
        header('Content-Type: '.$data['type']);
        header('Content-Disposition: '.$data['disposition'.': filename="'.basename($file).'"']);
        header('Expires: '.$data['cache']);
        header('Cache -Control: '.$data['description']);
        header('Pragma: '.$data['pragma']);
        header('Content-Length: ' .filesize($file));
        readfile($file);
        exit;

    }
}
