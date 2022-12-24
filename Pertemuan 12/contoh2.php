<?php
$ftp_server = "ftp.crissad.com";
$ftp_username = "pemweb@crissad.com";
$ftp_password = "pemrogramanweb";
$source_file = 'file/allo.txt';
$target_file = 'target.txt';
// set up koneksi
$conn_id = ftp_connect($ftp_server);
// login dengan username dan password
$login_result = ftp_login($conn_id, $ftp_username, $ftp_password);
ftp_pasv($conn_id, true);
// cek koneksi
if ((!$conn_id) || (!$login_result)) {
    echo "<h1>FTP gagal tersambung!</h1>";
    exit;
} else {
    echo "<h1>Koneksi ke $ftp_server berhasil</h1>";
}
// upload file
$upload = ftp_put($conn_id, $target_file, $source_file, FTP_ASCII);
// cek status upload
if (!$upload) {
    echo "FTP upload gagal!";
} else {
    echo "File $source_file berhasil diupload ke $ftp_server dengan nama 
$target_file";
}
// tutup sesi FTP
ftp_close($conn_id);
