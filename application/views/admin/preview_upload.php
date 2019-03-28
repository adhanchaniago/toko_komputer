
<!DOCTYPE html>
<!--Author     : @arboshiki-->
<html> 
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <title>Preview</title>
        <link rel="shortcut icon" href="<?php echo base_url('assets/img/logo2.png')?>" />
        
        <link rel="stylesheet" href="<?php echo base_url('assets/admin/css/bootstrap.min.css')?>">
        <link rel="stylesheet" href="<?php echo base_url('assets/admin/css/font-awesome.min.css')?>"/>
        <link rel="stylesheet" href="<?php echo base_url('assets/admin/css/weather-icons.min.css')?>"/>

        <!--lobiadmin-with-plugins.css contains all LobiAdmin css plus lobiplugins all css files, plus third party plugins-->
        <link rel="stylesheet" href="<?php echo base_url('assets/admin/css/lobiadmin-with-plugins.css')?>"/>
        <!--Put your css here-->
        
        <!--This css file is for only demo usage-->
        <link rel="stylesheet" href="<?php echo base_url('assets/admin/css/demo.css')?>"/>
        <script type="text/javascript" src="<?php echo base_url('assets/admin/js/lib/jquery.min.js')?>"></script>     
    </head>
    <body>
<!--Column rendering-->
    <div class="panel panel-light" id="pendaftar">
        <div class="panel-heading">
            <div class="panel-title">
                <h4>Data Product</h4>
            </div>
        </div>

       
       
        <div class="panel-body">
            <!-- live preview -->
            <?php
                if(isset($_POST['preview'])){ 
                  if(isset($upload_error)){ 
                    echo "<div style='color: red;'>".$upload_error."</div>"; 
                    die; 
                  }
                  echo "<form method='post' action='".base_url("admin/import_product")."'>";
                  echo "<input type='hidden' name='id_katagori' value='".$id_katagori."'>";
                  echo "<input type='hidden' name='id_sub_katagori' value='".$id_sub_katagori."'>";
                  echo "<div style='color: red;' id='kosong'>
                  Semua data belum diisi, Ada <span id='jumlah_kosong'></span> data yang belum diisi.
                  </div>";                  
                  echo "<table id='data-table-example' border='1' cellpadding='8' class='display table table-striped table-bordered'>
                  <tr>
                    <th colspan='5'>Preview Data</th>
                  </tr>
                  <tr>
                    <th style='display:none'> id katagori </th>
                    <th style='display:none'> Id Sub katagori </th>
                    <th>Grouping</th>
                    <th>Nama Product</th>
                    <th>Harga</th>
                    <th>Spesifikasi</th>
                    <th>Notes</th>
                  </tr>";
                  
                  $numrow = 1;
                  $kosong = 0;                
                  foreach($sheet as $row){

                    $id_katagori      = $id_katagori;
                    $id_sub_katagori  = $id_sub_katagori;              
                    $grouping         = $row['A']; 
                    $nama_product     = $row['B']; 
                    $harga            = $row['C'];
                    $spesifikasi      = $row['D'];  
                    $notes            = $row['E'];
                    if(empty($grouping) && empty($nama_product) && empty($harga)  && empty($spesifikasi) && empty($notes))
                      continue; 
                    if($numrow > 1){
                      $grouping_td           = ( ! empty($grouping))? "" : " style='background: #E07171;'"; 
                      $nama_product_td       = ( ! empty($nama_product))? "" : " style='background: #E07171;'"; 
                      $harga_td              = ( ! empty($harga))? "" : " style='background: #E07171;'";
                      $spesifikasi_td        = ( ! empty($spesifikasi))? "" : " style='background: #E07171;'";  
                      $notes_td              = ( ! empty($notes))? "" : " style='background: #E07171;'"; 
                      if(empty($grouping) or empty($nama_product) or empty($harga) or empty($spesifikasi) or empty($notes) ){
                        $kosong++; 
                      }                      
                      echo "<tr>";
                      echo "<td".$grouping_td.">".$grouping."</td>";
                      echo "<td".$nama_product_td.">".$nama_product."</td>";
                      echo "<td".$harga_td.">".$harga."</td>";
                      echo "<td".$spesifikasi_td.">".$spesifikasi."</td>";
                      echo "<td".$notes_td.">".$notes."</td>";
                      echo "</tr>";
                    }                    
                    $numrow++; 
                  }                  
                  echo "</table>";                 
                  if($kosong > 0){
                  ?>  
                    <script>
                    $(document).ready(function(){                      
                      $("#jumlah_kosong").html('<?php echo $kosong; ?>');                      
                      document.getElementById("kosong").style.display='';
                    });
                    </script>
                  <?php
                  }else{ 
                    echo "<hr>";                   
                    echo "<button type='submit' name='import' class='btn btn-primary'>Import</button>";
                    echo "<a href='".base_url("admin/home#master_product")."' class='btn btn-primary'>Cancel</a>";
                  }
                  echo "</form>";
                }
            ?>
           <?php echo $this->session->flashdata('info'); ?>            
        </div>
    </div>
    <?php $this->load->view($script_table);?>
        <script>
           document.getElementById("kosong").style.display='none';
        </script>       
        <script type="text/javascript" src="<?php echo base_url('assets/admin/js/lib/jquery-ui.min.js')?>"></script>
        <script type="text/javascript" src="<?php echo base_url('assets/admin/js/bootstrap/bootstrap.min.js')?>"></script>
        <script type="text/javascript" src="<?php echo base_url('assets/admin/js/lobi-plugins/lobibox.min.js')?>"></script>
        <script type="text/javascript" src="<?php echo base_url('assets/admin/js/lobi-plugins/lobipanel.min.js')?>"></script>
        <script type="text/javascript" src="<?php echo base_url('assets/admin/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js')?>"></script>      
        <script type="text/javascript" src="<?php echo base_url('assets/admin/js/LobiAdmin.min.js')?>"></script>
        <script type="text/javascript" src="<?php echo base_url('assets/admin/js/app.js')?>"></script> 
    </body>
</html>




  