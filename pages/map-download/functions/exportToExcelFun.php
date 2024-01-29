<?php


require_once('../../../vendor/autoload.php');

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;


$getCustomerDataToExport = function ($date) use ($link) {
  if ($date == '') {
    $query = "SELECT * FROM `customers`";
  } else {
    $query = "SELECT * FROM `customers` WHERE date(`download_date`) = '{$date}'";
  }
  $queryResult = mysqli_query($link, $query);
  $newColumnName = ['Customer Number', 'First Name', 'Last Name', 'Email', 'Phone Number', 'Reason', 'Where they learned.', 'Downloaded Map', 'Requested Date', 'Email Status', 'Final Status'];

  if (mysqli_num_rows($queryResult) > 0) {
    $customerData = array();
    while ($row = mysqli_fetch_assoc($queryResult)) {
      $customerData[] = array_combine($newColumnName, array_values($row));
    }
    return $customerData;
  } else {
    return false;
  }
};

if (isset($_POST["export_to_excel"])) {

  if ($getCustomerDataToExport($_POST['date']) !== false) {

    foreach (range('A', 'K') as $alpha) {
      $excelColumnOrig[] = $alpha;
    }
    foreach (range('A', 'K') as $alpha) {
      $excelColumn[] = $alpha . '1';
    }

    $customerArrKeys = (array_keys($getCustomerDataToExport($_POST['date'])[0]));
    foreach ($customerArrKeys as $rows) {
      $customerArrKeys =  array_combine($excelColumn, $customerArrKeys);
    };

    $spreadsheet = new Spreadsheet();
    $sheet = $spreadsheet->getActiveSheet();

    foreach ($customerArrKeys as $key => $value) {
      $sheet->setCellValue($key, $value);
    }

    foreach ($getCustomerDataToExport($_POST['date']) as $rows) {
      $customerDataArr[] = array_combine($excelColumnOrig, array_values($rows));
    }

    $i = 2;
    foreach ($customerDataArr as $rows) {
      foreach ($rows as $key => $value) {
        $sheet->setCellValue($key . $i, $value);
      }
      $i++;
    }

    $writer = new Xlsx($spreadsheet);
    if ($_POST['date'] == '') {
      $filename = "Free-Map-Dowload-Customer-Data (" . date('d-M-Y') . ").xlsx";
    } else {
      $filename = "Free-Map-Dowload-Customer-Data (" . $_POST['date'] . ").xlsx";
    }

    $writer->save($filename);


    header("Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet");
    header("Content-Disposition: attachment; filename=" . $filename);
    header("Content-length: " . filesize($filename));
    header('Expires: 0');
    header('Cache-Control: must-revalidate, post-check=0, pre-check=0');

    ob_get_clean();
    echo file_get_contents($filename);
    ob_end_flush();

    unlink($filename);
    header("Location:{$_SERVER['PHP_SELF']}");
    exit();
  } else {
    $logs[] = 'There\'s no data to export';
  }
}
