<?php

require 'vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

if (isset($_POST['export'])) {

    $spreadsheet = new Spreadsheet();
    $sheet = $spreadsheet->getActiveSheet();

    $query = "SELECT * FROM pesanan";

    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) > 0) {
        $sheet->setCellValue('A1', 'ID');
        $sheet->setCellValue('B1', 'Name');
        $sheet->setCellValue('C1', 'Phone');
        $sheet->setCellValue('D1', 'Start Date');
        $sheet->setCellValue('E1', 'Booking Date');
        $sheet->setCellValue('F1', 'Duration (days)');
        $sheet->setCellValue('G1', 'Package ID');
        $sheet->setCellValue('H1', 'Accommodation Service');
        $sheet->setCellValue('I1', 'Transportation Service');
        $sheet->setCellValue('J1', 'Meal Service');
        $sheet->setCellValue('K1', 'Guests');
        $sheet->setCellValue('L1', 'Package Price');
        $sheet->setCellValue('M1', 'Total Price');

        $row = 2;
        while ($data = mysqli_fetch_assoc($result)) {
            $sheet->setCellValue('A' . $row, $data['id_pesanan']);
            $sheet->setCellValue('B' . $row, $data['nama_pemesan']);
            $sheet->setCellValue('C' . $row, $data['nomor_hp']);
            $sheet->setCellValue('D' . $row, $data['tanggal_mulai_wisata']);
            $sheet->setCellValue('E' . $row, $data['tanggal_pesanan']);
            $sheet->setCellValue('F' . $row, $data['durasi_wisata']);
            $sheet->setCellValue('G' . $row, $data['id_paket_wisata']);
            $sheet->setCellValue('H' . $row, $data['layanan_penginapan'] == 1 ? 'Yes' : 'No');
            $sheet->setCellValue('I' . $row, $data['layanan_transportasi'] == 1 ? 'Yes' : 'No');
            $sheet->setCellValue('J' . $row, $data['layanan_makanan'] == 1 ? 'Yes' : 'No');
            $sheet->setCellValue('K' . $row, $data['jumlah_peserta']);
            $sheet->setCellValue('L' . $row, $data['harga_paket']);
            $sheet->setCellValue('M' . $row, $data['jumlah_tagihan']);
            $row++;
        }
    }

    $writer = new Xlsx($spreadsheet);
    $writer->save('list_reservations.xlsx');

    header('Location: reservations.php?message=export_success');
}
