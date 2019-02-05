<?php

include_once 'Database/Database.php';


?>


<script type="text/javascript">


  window.open("output/outputmenu.php","_blank")
  window.open("output/outputsubmenu1.php","_blank")
  window.open("output/outputsubmenu2.php","_blank")
  window.open("output/outputsubmenu3.php","_blank")
  window.open("output/version.php","_blank")
  window.open("output/outputquest.php","_blank")


</script>

<?php



// $my_file = 'file.txt';
// $handle = @fopen($my_file, 'w') or die('Cannot open file:  '.$my_file);
// $data = 'This is the data';
// fwrite($handle, $data);
//
//
// $my_file2 = 'file2.txt';
// $handle2 = fopen($my_file2, 'w') or die('Cannot open file:  '.$my_file2);
// $data2 = 'This is the data';
// fwrite($handle2, $data2);
//
//
// $files = array($my_file,$my_file2);
// $zipname = 'file.zip';
// $zip = new ZipArchive;
// $zip->open($zipname, ZipArchive::CREATE);
// foreach ($files as $file) {
//   $zip->addFile($file);
// }
// $zip->close();
//
// header('Content-Type: application/zip');
// header('Content-disposition: attachment; filename='.$zipname);
// header('Content-Length: ' . filesize($zipname));
// readfile($zipname);



 ?>
