<!DOCTYPE html>
<html lang="en">
<?php include 'conf.php'; ?>

<head>
   <link rel="stylesheet" href="css/adminlte.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.7/css/select2.min.css" rel="stylesheet" />
 	<script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
 	<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.7/js/select2.min.js"></script>

    	<!-- Pemanggilan DataTables -->
    <link rel="stylesheet" href="css/dataTables.bootstrap.min.css">
    <link rel="stylesheet" href="css/buttons.bootstrap.min.css">
    <link rel="stylesheet" href="css/responsive.bootstrap.min.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>
</head>

<body>

    <center>
        <h1>Nama Wilayah : <?php echo @$_GET['wilayah']; ?></h1>
        <form action="index.php" method="get">
            <select name='wilayah' onchange='this.form.submit()'>
                <option value='<?php echo @$_GET['wilayah']; ?>'><?php echo @$_GET['wilayah']; ?></option>
                <option value='DKI Jakarta'>DKI Jakarta</option>
                <option value='Jawa Barat'>Jawa Barat</option>
                <option value='Banten'>Banten</option>
                <option value='Jawa Tengah'>Jawa Tengah</option>
            </select>
        </form>
        <?php if (!is_null(@$_GET['wilayah'])) { ?>
            <h2>Input Data Pasien :</h2>
            <?php include 'input.php'; ?>
            <br>_________________________________________________<br><br>
            <?php include 'output.php'; ?>
        <?php } ?>
    </center>
</body>

</html>