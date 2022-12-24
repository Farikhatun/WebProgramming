<?php
include_once("koneksi.php");
$db = new koneksiDB();
$koneksi = $db->getKoneksi();
$request = $_SERVER['REQUEST_METHOD'];
$uri_path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$uri_segment = explode('/', $uri_path);

switch ($request) {
    case 'GET' :
        if (!empty($uri_segment[4])) {
            $id = intval($uri_segment[4]);
            get_karyawan($id);
        } else {
            get_karyawan();
        }
        break;
    case 'POST' :
        insert_karyawan();
        break;
    case 'PUT' :
        $id = intval($uri_segment[4]);
        update_karyawan($id);
        break;
    case 'DELETE' :
        $id = intval($uri_segment[4]);
        delete_karyawan($id);
        break;

    default:
        header("HTTP/1.0 405 Method Tidak Terdaftar");
        break;
}


function get_karyawan($id = ""){
    global $koneksi;
    $query = "SELECT * FROM tb_karyawan";

    if (!empty($id)){
        $query .= " WHERE id=$id LIMIT 1";
    }

    $respon = array();
    $result = mysqli_query($koneksi, $query);
    
    if ($result) {
        $respon['status'] = "sukses";
        $respon['pesan'] = "Data berhasil diambil";
        while ($row = mysqli_fetch_assoc($result)) {
            $respon['data'][] = $row;
        }
    } else{
        $respon['status'] = "gagal";
        $respon['pesan'] = "Data tidak berhasil diambil";
    }
    header('Content-Type: application/json');
    echo json_encode($respon);
}

function insert_karyawan(){
    global $koneksi;
    $data = json_decode(file_get_contents('php://input'),true);
    $nama = $data['nama'];
    $email = $data['email'];
    $divisi = $data['divisi'];
    $gaji = $data['gaji'];

    $query = "INSERT INTO tb_karyawan SET nama='".$nama."', email='".$email."', divisi='".$divisi."', gaji='".$gaji."'";

    if(mysqli_query($koneksi, $query)){
        $respon = [
            'status'=>'sukses',
            'pesan'=>'Data karyawan berhasil ditambahkan!'
        ];
    } else{
        $respon = [
            'status'=>'gagal',
            'pesan'=>'Data karyawan gagal ditambahkan!'
        ];
    }
    header('Content-type:application/json');
    echo json_encode($respon);
}

function update_karyawan($id){
    global $koneksi;
    $data = json_decode(file_get_contents('php://input'),true);
    $nama = $data['nama'];
    $email = $data['email'];
    $divisi = $data['divisi'];
    $gaji = $data['gaji'];
    
    $query = "UPDATE tb_karyawan SET nama='".$nama."', email='".$email."', divisi='".$divisi."', gaji='".$gaji."' WHERE id=".$id;
    
    if(mysqli_query($koneksi, $query)){
        $respon = [
            'status'=>'sukses',
            'pesan'=>'Data karyawan berhasil diperbarui!'
        ];
    } else{
        $respon = [
            'status'=>'gagal',
            'pesan'=>'Data karyawan gagal diperbarui!'
        ];
    }
    header('Content-type:application/json');
    echo json_encode($respon);
}

function delete_karyawan($id){
    global $koneksi;
    
    $query = "DELETE FROM tb_karyawan WHERE id=".$id;
    
    if(mysqli_query($koneksi, $query)){
        $respon = [
            'status'=>'sukses',
            'pesan'=>'Data karyawan berhasil dihapus!'
        ];
    } else{
        $respon = [
            'status'=>'gagal',
            'pesan'=>'Data karyawan gagal dihapus!'
        ];
    }
    header('Content-type:application/json');
    echo json_encode($respon);
}

?>