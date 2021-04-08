<?php
  require_once "../config.php";  
  $data = '<div class="row text-center">';
  if (isset($_POST["kategori"]))
  {
    $kategori = $_POST["kategori"];
    if ($kategori == "all")
    {
      $result = $conn->query("SELECT * FROM tb_harga WHERE merek = 'FUSO' AND discontinue = 0");
    }
    else
    {
      $result = $conn->query("SELECT * FROM tb_harga WHERE merek = 'FUSO' AND kategori='$kategori' AND discontinue = 0");
    }    
    while ($row = $result->fetch_array())
    {
      $tipe = strtolower(str_replace(' ', '', $row["tipe"]));
      $tipe = str_replace('-', '', $tipe);
      $data .= '<div class="col-4 col-sm-3">
                <img src="' .BASE_URL.DS. 'assets/img/fuso/' .$tipe. '.png" alt="Mitsubishi FUSO" class="img-fluid" style="width: 200px">
                <p class="text-uppercase">' .$row["tipe"]. '</p>
                </div>';
    }    
  }
  else
  {
    $data .= 'data not found.';
  }  
  $data .= '</div>';

  echo $data;
?>