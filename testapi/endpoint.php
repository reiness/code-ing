<?php
require_once"methods.php";
$mhs = new Mahasiswa();
$request_method=$_SERVER["REQUEST_METHOD"];
switch ($request_method) {
    case 'GET':
            $mhs->get_mhss();
        break;
    case 'POST': //jika ada method post
        if(!empty($_GET['id']))
        {
            $id=intval($_GET['id']);    
            $mhs->update_mhs($id);
        }
        else
        {
            $nama = $_GET['nama'];
            $nim = $_GET['nim'];
            $mhs->insert_mhs($nama, $nim);
        }
        break;
    case 'DELETE': //jika ada method delete
        $id=intval($_GET['id']);
        $mhs->delete_mhs($id);
        break;
    default:

    // Invalid Request Method
    header("HTTP/1.0 405 Method Not Allowed");
    break;
break;
}
?>