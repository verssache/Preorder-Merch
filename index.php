<!DOCTYPE html>
<html lang="en">
<head>
<script>
  (adsbygoogle = window.adsbygoogle || []).push({
    google_ad_client: "ca-pub-7311927522643335",
    enable_page_level_ads: true
  });
</script>
<script>
function myFunction() {
    var x = document.getElementById("id1").value;
    if (x == "1" || x == "2") document.getElementById("id2").style.display = "block";
    if (x == "3") document.getElementById("id2").style.display = "none";
}
</script>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta content='true' name='MSSmartTagsPreventParsing' />
    <title>SGB Team Reg. Semarang</title>
	<link rel="shortcut icon" href="logo.ico" />
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/metisMenu/metisMenu.min.css" rel="stylesheet">
    <link href="assets/dist/css/sb-admin-2.css" rel="stylesheet">
    <link href="assets/dist/css/custom-czec.css" rel="stylesheet">
    <link href="assets/vendor/morrisjs/morris.css" rel="stylesheet">
    <link href="assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
    <script src="oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.html"></script>
    <script src="oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.html"></script>
    <style type="text/css">
        body {
            font-family: 'Quicksand', sans-serif;
            margin-bottom: 50px;
        }
    </style>
</head>
<body>

<nav class="navbar navbar-default">
        <div class="container-fluid container-fluid-spacious">
        <div class="navbar-header">
                <a class="navbar-brand" href="3">SGB Team Reg. Semarang</a>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
   					<li class=""><a href="https://www.facebook.com/mrlverssache" title="Contact" data-toggle="" class="no-submenu">
                    <span class="item-text">Contact Us</span>
                    </a>
                    </li>
				</ul>
            </div>
        </div>
</nav><div class="container">
                        <div class="row">
							<div class="col-md-offset-2 col-md-8">
                                <div class="panel panel-default">
									<div class="panel-heading">
										<h3 class="panel-title"><i class="fa fa-send"></i> Formulir <b>Pre Order </b>Merchandise 7<sup>th</sup></h3>
									</div>
									<div class="panel-body">
										<form class="form-horizontal" role="form" method="POST">
											<div class="form-group">
												<label class="col-md-2 control-label">Nama Lengkap</label>
												<div class="col-md-10">
												<input type="text" name="nama" class="form-control" placeholder="Mohon baca kolom informasi dibawah ini!">
												</div>
											</div>
											<div class="form-group">
												<label class="col-md-2 control-label">Nomor Whatsapp</label>
												<div class="col-md-10">
												<input type="number" name="nomer" class="form-control" placeholder="0812xxxxxxxx">
												</div>
											</div>
											<div class="form-group">
												<label class="col-md-2 control-label">Model</label>
												<div class="col-md-10">
												<select id="id1" class="form-control" name="model" onchange="myFunction()">
													<option value="1">T-Shirt SGB-1</option>
													<option value="2">T-Shirt SGB-3</option>
													<option value="3">Hoodie SGB-2</option>
												</select>
												</div>
											</div>
											<div id="id2" class="form-group">
												<label class="col-md-2 control-label">Tipe</label>
												<div class="col-md-10">
												<select class="form-control" name="tipe">
													<option value="Short">Short Sleeve</option>
													<option value="Long">Long Sleeve</option>
												</select>
												</div>
											</div>
											<div class="form-group">
												<label class="col-md-2 control-label">Size</label>
												<div class="col-md-10">
												<select class="form-control" name="size">
													<option value="s">S</option>
													<option value="m">M</option>
													<option value="l">L</option>
													<option value="xl">XL</option>
													<option value="xxl">XXL</option>
													<option value="xxxl">XXXL</option>
													<option value="xxxxl">XXXXL</option>
												</select>
												</div>
											</div>
											<div id="id2" class="form-group">
												<label class="col-md-2 control-label">Qty</label>
												<div class="col-md-10">
												<input type="number" name="jml" class="form-control">
												</div>
											</div>
											<div class="form-group">
												<div class="col-md-offset-2 col-md-10">  
												<div class="pull-right">
        										<button type="reset" class="btn btn-default"><i class="fa fa-refresh"></i> Reset</button>
                                                <button type="submit" name="submit" class="btn btn-info"><i class="fa fa-paper-plane-o"></i> Submit</button>
                                                </div>
												</div>
											</div>
										<?php
										if (!empty($_POST['nama']) && !empty($_POST['nomer']) && !empty($_POST['jml']) && isset($_POST['submit'])) {
	                                    	$nama = ucwords($_POST['nama']);
	                                    	$wa = $_POST['nomer'];
	                                    	$model = $_POST['model'];
	                                    	$tipe = $_POST['tipe'];
	                                    	$size = $_POST['size'];
	                                    	$qty = $_POST['jml'];
	                                    	if ($model == 1) {
	                                    		$model = 'T-Shirt SGB-1';
	                                    		$saldo = 90 * $qty;
	                                    		if ($size == 'xxl') {
	                                    			$saldo += 5 * $qty;
	                                    		} elseif ($size == 'xxxl') {
	                                    			$saldo += 10 * $qty;
	                                    		} elseif ($size == 'xxxxl') {
	                                    			$saldo += 15 * $qty;
	                                    		}
	                                    	} elseif ($model == 2) {
	                                    		$model = 'T-Shirt SGB-3';
	                                    		$saldo = 90 * $qty;
	                                    		if ($size == 'xxl') {
	                                    			$saldo += 5 * $qty;
	                                    		} elseif ($size == 'xxxl') {
	                                    			$saldo += 10 * $qty;
	                                    		} elseif ($size == 'xxxxl') {
	                                    			$saldo += 15 * $qty;
	                                    		}
	                                    	} elseif ($model == 3) {
	                                    		$model = 'Hoodie SGB-2';
	                                    		$tipe = '-';
	                                    		$saldo = 190 * $qty;
	                                    		if ($size == 'xxl') {
	                                    			$saldo += 10 * $qty;
	                                    		} elseif ($size == 'xxxl') {
	                                    			$saldo += 20 * $qty;
	                                    		} elseif ($size == 'xxxxl') {
	                                    			$saldo += 30 * $qty;
	                                    		}
	                                    	}
	                                    	if ($tipe == 'Long') {
	                                    		$saldo += 10 * $qty;
	                                    	}
	                                    	// Eksekusi Data
	                                    	$fileContents = file_get_contents('json_array.txt');
											$decoded = json_decode($fileContents, true);
											$jml = count($decoded);
											if ($model == 'Hoodie SGB-2') {
											  	$array = array( 
											            $jml => array (
											               "nama" => $nama,
											               "whatsapp" => $wa,
											               "model" => $model,
											               "tipe" => $tipe,
											               "size" => strtoupper($size),
											               "qty" => $qty
											            )
											         );
											  	$link = "https://api.whatsapp.com/send?phone=6287733151286&text=Nama+Lengkap+%3A+".str_replace(" ", "+", $nama)."%0ANo.+Hp+%3A+".$wa."%0AModel+%3A+".$model."%0ASize+%3A+".strtoupper($size)."%0AQty+%3A+".$qty."%0AJumlah+Yang+Harus+Dibayarkan+%3A+".$saldo."k";
										  	} else {
										  		$array = array( 
											            $jml => array (
											               "nama" => $nama,
											               "whatsapp" => $wa,
											               "model" => $model,
											               "tipe" => $tipe,
											               "size" => strtoupper($size),
											               "qty" => $qty
											            )
											         );
										  		$link = "https://api.whatsapp.com/send?phone=6287733151286&text=Nama+Lengkap+%3A+".str_replace(" ", "+", $nama)."%0ANo.+Hp+%3A+".$wa."%0AModel+%3A+".$model."%0ASize+%3A+".strtoupper($size)."%0ATipe+%3A+".$tipe."%0AQty+%3A+".$qty."%0AJumlah+Yang+Harus+Dibayarkan+%3A+".$saldo."k";
										  	}
											$enc = json_encode($array);
											$files = "json_array.txt";
											$file = file_get_contents($files);
											$str = substr($enc, 1);
											$std = substr($file, 0,-1);
											file_put_contents($files, "$std,$str");
											echo "<script type='text/javascript'>alert('Pre-Order Berhasil!');</script>";
											echo "<center>Silahkan tekan link dibawah untuk redirect whatsapp ke admin :)</center><br>";
											echo '<center><a href="'.$link.'">Klik disini!</a></center>';
	                                    } elseif ((empty($_POST['nama']) || empty($_POST['nomer']) || empty($_POST['jml'])) && isset($_POST['submit'])) {
	                                    	echo "<script type='text/javascript'>alert('Yang benerlah goblok!');</script>";
	                                    }
										?>
										</form>
									</div>
								</div>
							</div>
							<div class="col-md-offset-2 col-md-8">
								  <div class="panel panel-default m-b-md">
								<div class="panel-heading">
								    <h3 class="panel-title"><i class="fa fa-info-circle"></i> Informasi</h3></div>
				                    <div class="panel-body">
                                        Harap dibaca sampai habis informasi dibawah ini:<br><br>							
                                    <ul>
                                    	<li>Pre-Order & Pembayaran Dilaksanakan Pada Tanggal 9-14 November 2019</li>
                                    	<li>Harga = T-Shirt : 85K , Hoodie : 185K</li>
										<li>Ukuran Menggunakan Sizechart Lokal</li>
										<li>Ukuran XXL Pada Jaket Dikenakan Tambahan 10k, Pada Kaos 5k, Berlaku Kelipatan</li>
										<li>Untuk Kaos Lengan Panjang Dikenakan Tambahan 10k</li>
										<li>Size Hoodie Bertambah ± 3cm Dari Sizechart</li>
										<li>Harga Merchandise Belum Termasuk Harga Ongkir Bersama ± 5k/pcs</li>
										<li>Jika ada pertanyaan dan masukkan, silakan kontak ke: <a href="https://api.whatsapp.com/send?phone=6287733151286&text=Halo+Admin">admin</a></li>
									</ul>
									    <br><center>Created By : <a href="https://www.facebook.com/mrlverssache">Gidhan Bagus Algary</a></center>
                                </div>
                            </div>
						</div>
					</div>
						<!-- end row -->
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/vendor/metisMenu/metisMenu.min.js"></script>
    <script src="assets/vendor/raphael/raphael.min.js"></script>
    <script src="assets/vendor/morrisjs/morris.min.js"></script>
    <script src="assets/dist/js/sb-admin-2.js"></script>
</div>
</body>
<?php
function curl($url, $fields = null, $headers = null)
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        if ($fields !== null) {
            curl_setopt($ch, CURLOPT_POST, 1);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $fields);
        }
        if ($headers !== null) {
            curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        }
        $result   = curl_exec($ch);
        $httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);
        
        return array(
            $result,
            $httpcode
        );
 }
 ?>