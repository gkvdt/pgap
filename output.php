<?php
include_once 'head.php';
 ?>
<h3>
  Çıktı Al</h3>
</div>
<div class="module-body">
  <div class="chart inline-legend grid">
    <div id="placeholder2" class="graph" style="height: 100%">
      <p>Yeni Versyonda Neler Eklendi?</p>
      <p>Version Notu Ekleyip Çıktı aAlabilirsin.</p>

      <form class="" action="util/addVersion.php" method="get">
        <input type="text" name="version_note" value=""><br>
        <input type="submit" name="" value="Notu ekle ve çıktıyı al" class="btn">
      </form>


      <?php include_once 'footer.php'; ?>
