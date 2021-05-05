<?php
	date_default_timezone_set("Asia/Jakarta");
	include 'DBController.php';
	$db_handle = new DBController();
	$WilayahResult = $db_handle->runQuery("SELECT DISTINCT Wilayah FROM wilayah ORDER BY Wilayah ASC");
?>
<html>
<head>
<link href="style.css" type="text/css" rel="stylesheet" />
<meta charset="utf-8">
    <title>Sistem Informasi Covid-19</title>

    	<!-- Pemanggilan Bootstrap -->
    <link rel="stylesheet" href="css/adminlte.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.7/css/select2.min.css" rel="stylesheet" />
 	<script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
 	<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.7/js/select2.min.js"></script>

    	<!-- Pemanggilan DataTables -->
    <link rel="stylesheet" href="css/dataTables.bootstrap.min.css">
    <link rel="stylesheet" href="css/buttons.bootstrap.min.css">
    <link rel="stylesheet" href="css/responsive.bootstrap.min.css">
   

	<style>
	h3 {text-align: center;}
	h2 {text-align: center;}
	div {text-align: center;}
	</style>
</head>
<body>
	</br>
    <form method="POST" name="search" action="">
        <select name="Wilayah[]" onchange='this.form.submit()'>
  			<option >- Pilih Wilayah -</option>
  			<option value="DKI JAKARTA">DKI JAKARTA</option>
  			<option value="JAWA BARAT">JAWA BARAT</option>
  			<option value="JAWA TENGAH">JAWA TENGAH</option>
  			<option value="BANTEN">BANTEN</option>
 		</select>
            <div id="button">
        <span style="float: right">
        <a href="tambah_pasien.php" class="btn btn-primary">Tambah Pasien</a>
        </span>
   		   </div>
            </div>
            	<?php
                	if (! empty($_POST['Wilayah'])) {
                ?>
                    <table cellpadding="10" cellspacing="1">

                <tbody>
                	<?php
                    	$query = "SELECT * from wilayah";
                    	$i = 0;
                    	$selectedOptionCount = count($_POST['Wilayah']);
						$selectedOption = "";
						while ($i < $selectedOptionCount) {
                        	$selectedOption = $selectedOption . "'" . $_POST['Wilayah'][$i] . "'";
                        if ($i < $selectedOptionCount - 1) {
                            $selectedOption = $selectedOption . ", ";
                        }     
                        $i ++;
                    	}
                    		$query = $query . " WHERE Wilayah in (" . $selectedOption . ")";
                    
                    		$result = $db_handle->runQuery($query);
                		}
                			if (! empty($result)) {
                    			foreach ($result as $key => $value) {
                   ?>
                        
                     <div class="nav-md">
		<!-- awal container -->
  					<div class="container body">
    					<div class="main_container">

		<!-- awal isi halaman -->
      					<div class="right_col" role="main">
        					<div class="">
         						<div class="page-title">
          							</div>

          			<div class="clearfix"></div>

          <div class="row">
             <div class="col-md-12">
            	<div class="h-25">
            	<?php
 					if(isset($_POST["Wilayah"]))
					echo '</br>' .'<h2>'. " Data Pemantauan Covid19 Wilayah " . $result[$key]['Wilayah'];}
					echo '</br>'.'<h3>'."Per " . date("d M Y H:i:s") ;
				?>
				<br>
             	Ibnu Dwi Permana / 181011401198
             	</div>
             </div>
          </div>
               <div class="row">
                   <div class="col-lg-3 col-6">
<!--			 small card -->
            		<div class="small-box bg-info">
              			<div class="inner">
                		<h3>Positif</h3>
                	<div class="col" id="user_data_1"><?php echo '<h5>'.$result[$key]['Positif']; ?></div>
                		</div>
                	</div>
                	</div>
                
                   <div class="col-lg-3 col-6">
            		<div class="small-box bg-success">
              		 <div class="inner">
                		<h3>Dirawat</h3>
                		<div class="col" id="user_data_2"><?php echo '<h5>'.$result[$key]['Dirawat']; ?></div>
                	 </div>
                	</div>
                   </div>
                
                	<div class="col-lg-3 col-6">
            			<div class="small-box bg-warning">
              				<div class="inner">
                				<h3>Sembuh</h3>
                			<div class="col" id="user_data_2"><?php echo '<h5>'.$result[$key]['Sembuh']; ?></div>
                			</div>
                		</div>
                	</div>
                
                	<div class="col-lg-3 col-6">
            			<div class="small-box bg-danger">
              				<div class="inner">
                				<h3>Meninggal</h3>
                			<div class="col" id="user_data_2"><?php echo '<h5>'.$result[$key]['Meninggal']; ?></div></div>
                		</div>
                	</div>
               	</div>

                <?php
                    }
                    
				?>
                    
                </tbody>
            </table>
            <?php
                
                ?>  
        </div>
    </form>
</body>
</html>