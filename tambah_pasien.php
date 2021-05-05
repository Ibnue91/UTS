<!-- untuk bagian head -->

<html>
<head>
	<link href="style.css" type="text/css" rel="stylesheet" />
<meta charset="utf-8">
    <title>Sistem Informasi Covid-19</title>

    	<!-- Pemanggilan Bootstrap -->
<!--    <link rel="stylesheet" href="css/adminlte.min.css">-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.7/css/select2.min.css" rel="stylesheet" />
 	<script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
 	<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.7/js/select2.min.js"></script>

    	<!-- Pemanggilan DataTables -->
    <link rel="stylesheet" href="css/dataTables.bootstrap.min.css">
    <link rel="stylesheet" href="css/buttons.bootstrap.min.css">
    <link rel="stylesheet" href="css/responsive.bootstrap.min.css">
   

<!--
	<style>
	h3 {text-align: center;}
	h2 {text-align: center;}
	div {text-align: center;}
	</style>
-->
</head>
    <body>
        
        <h4>Data Pasien</h4>
        <form action="config.php" method="POST">
        <table border="0" cellpadding="2">
            <tr>
                <td width="100">Wilayah</td>
                <td width="280">: <input type="text" name="wilayah" value="" /></td>
            </tr>
            <tr>
                <td>Posisitf</td>
                <td>: <input type="text" name="positif" value="" /></td>
            </tr>
            <tr>
                <td>Dirawat</td>
                <td>: <input type="text" name="dirawat" value="" /></td>
            </tr>
            <tr>
                <td>Sembuh</td>
                <td>: <input type="text" name="sembuh" value="" /></td>
            </tr>
            <tr>
                <td>Meninggal</td>
                <td>: <input type="text" name="meninggal" value="" /></td>
            </tr>
            <tr>
                <td></td>
                <td>  <input type="submit" value="Save"></td>
            </tr>
        </table>
        </form>
    </body>
</html>