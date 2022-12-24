<?php
include_once("koneksi.php");
$db = new koneksiDB();
$koneksi = $db->getKoneksi();
$request = $_SERVER['REQUEST_METHOD'];
$uri_path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$uri_segment = explode('/', $uri_path);

switch ($request) {
    case 'GET' :
        if (!empty($uri_segment[5])) {
            $id = $uri_segment[5];
            get_mahasiswa($id);
        } else {
            get_mahasiswa();
        }
        break;
    case 'POST' :
        insert_mahasiswa();
        break;
    case 'PUT' :
        $id = $uri_segment[5];
        update_mahasiswa($id);
        break;
    case 'DELETE' :
        $id = $uri_segment[5];
        delete_mahasiswa($id);
        break;

    default:
        header("HTTP/1.0 405 Method Tidak Terdaftar");
        break;
}


function get_mahasiswa($id = ""){
    global $koneksi;
    $query = "SELECT * FROM mahasiswa";

    if (!empty($id)){
        $query .= " WHERE nim='$id' LIMIT 1";
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

function insert_mahasiswa(){
    global $koneksi;
    $data = json_decode(file_get_contents('php://input'),true);
    $id = $data['nim'];
    $nama = $data['nama'];
    $angkatan = $data['angkatan'];
    $semester = $data['semester'];
    $ipk = $data['ipk'];
    $email = $data['email'];
    $telepon = $data['telepon'];

    $query = "INSERT INTO mahasiswa SET nim='".$id."', nama='".$nama."', angkatan='".$angkatan."', semester='".$semester."', ipk='".$ipk."', email='".$email."', telepon='".$telepon."'";

    if(mysqli_query($koneksi, $query)){
        $respon = [
            'status'=>'sukses',
            'pesan'=>'Data mahasiswa berhasil ditambahkan!'
        ];
    } else{
        $respon = [
            'status'=>'gagal',
            'pesan'=>'Data mahasiswa gagal ditambahkan!'
        ];
    }
    header('Content-type:application/json');
    echo json_encode($respon);
}

function update_mahasiswa($id){
    global $koneksi;
    $data = json_decode(file_get_contents('php://input'),true);
    $nama = $data['nama'];
    $angkatan = $data['angkatan'];
    $semester = $data['semester'];
    $ipk = $data['ipk'];
    $email = $data['email'];
    $telepon = $data['telepon'];

    $query = "UPDATE mahasiswa SET nama='".$nama."', angkatan='".$angkatan."', semester='".$semester."', ipk='".$ipk."', email='".$email."', telepon='".$telepon."' WHERE nim='$id'";

    if(mysqli_query($koneksi, $query)){
        $respon = [
            'status'=>'sukses',
            'pesan'=>'Data mahasiswa berhasil diperbarui!'
        ];
    } else{
        $respon = [
            'status'=>'gagal',
            'pesan'=>'Data mahasiswa gagal diperbarui!'
        ];
    }
    header('Content-type:application/json');
    echo json_encode($respon);
}

function delete_mahasiswa($id){
    global $koneksi;
    
    $query = "DELETE FROM mahasiswa WHERE nim='$id'";
    
    if(mysqli_query($koneksi, $query)){
        $respon = [
            'status'=>'sukses',
            'pesan'=>'Data mahasiswa berhasil dihapus!'
        ];
    } else{
        $respon = [
            'status'=>'gagal',
            'pesan'=>'Data mahasiswa gagal dihapus!'
        ];
    }
    header('Content-type:application/json');
    echo json_encode($respon);
}

?>