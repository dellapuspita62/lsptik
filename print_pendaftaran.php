<?php

include 'config/conn.php';
require('assets/vendors/vendor/autoload.php');

date_default_timezone_set('Asia/Makassar');
$ts = time();
$date  = date('Ymd_h:i:sa', $ts);

use Dompdf\Dompdf;

$dompdf = new Dompdf();

$hasil = mysqli_query($query, 'SELECT * FROM pendaftaran');

$html = '<html>';
$html .= '<center><h3>Laporan Data Pendafaran</h3></center>';
$html .= '<table border="1" width="100%">
<tr>
    <th>No</th>
    <th>NIK</th>
    <th>Nama</th>
    
    <th>Skema</th>
    <th>Email</th>
</tr>';

$no = 1;
while ($data = mysqli_fetch_array($hasil)) {
    $html .= '<tr>
                <td>' . $no . '</td>
                <td>' . $data['nik'] . '</td>
                <td>' . $data['nama'] . '</td>
                <td>' . $data['skema'] . '</td>
                <td>' . $data['email'] . '</td>
                     
                </tr>';
    $no++;
}
$html .= '</html>';

$dompdf->loadHTML($html);

//setting ukuran dan orientasi kertas
$dompdf->setPaper('A4', 'Potrait');

//rendering dari HTML ke PDF
$dompdf->render();

//cetak output file pdf
$dompdf->stream('laporan_data_pendaftaran_' . $date . 'pdf');

?>