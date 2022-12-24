<?php
require 'ssp.class.php';
include_once('koneksi.php');

$dbDetails = array(
    'host' => 'localhost',
    'user' => 'root',
    'pass' => '',
    'db' => 'bengawan_solo',
);

$table = 'tma';

$primaryKey = 'id_tma';

$columns = array(
    array('db' => 'id_tma', 'dt' => 0),
    array('db' => 'nilai', 'dt' => 1),
    array('db' => 'waktu', 'dt' => 2),
    array(
        'db' => 'id_tma',
        'dt' => 3,
        'formatter' => function ($d, $row) {
            return "<td>
      <a class='btn btn-info' href='' onclick=\"showInfo('$d')\">Info</a>
      <a class='btn btn-danger' href='' onclick=\"deleteData('$d')\">Delete</a>
    </td>";
        }
    )
);



echo json_encode(
    SSP::simple($_GET, $dbDetails, $table, $primaryKey, $columns)
);

?>