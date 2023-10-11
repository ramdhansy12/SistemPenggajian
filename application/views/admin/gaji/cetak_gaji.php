<!DOCTYPE html>
<html>
<head>
	<title><?php echo $title?></title>
	<style type="text/css">
		body{
			font-family: Arial;
			color: black;
		}
		.page {
            /* margin: 20mm; */
            width: 210mm;
            height: 297mm;
            /* height: 842px;
            width: 595px; */
            /* to centre page on screen*/
            margin-left: auto;
            margin-right: auto;
            font-family: Georgia, 'Times New Roman', Times, serif;

            border: 5px solid #000;
            border-bottom: 0;
            height: 10px;
            margin-top: 15px;
        }

        .blangko {
            background: #fff;
            text-align: center;
            border-left: 5px solid #000;
            border-right: 5px solid #000;
            height: 25px;
            line-height: 25px;
            width: 150px;
            margin: -15px auto 0;
            /* height 25px + 5px border = 30/2 = 15 */
        }

        h1,
        h3,
        h5,
        h6 {
            text-align: center;
            padding-right: 10px;
        }

        #text-header {
            margin-top: 35px;
            /* max-height: 100px; */
        }

        .row {
            margin-top: 20px;
        }

        .keclogo {
            font-size: 18pt;
            font-size: 18pt;
        }

        .kablogo {
            font-size: 12pt;
        }

        .alamatlogo {
            font-size: 11pt;
        }

        .kodeposlogo {
            font-size: 11pt;
        }

        #tls {
            text-align: right;
        }

        .alamat-tujuan {
            margin-left: 50%;
        }

        .garis1 {
            border-top: 5px solid black;
            height: 2px;
            border-bottom: 1px solid black;
        }

        #pembuka {
            font-size: 12pt;

            margin: 0;
            /* text-indent: 2rem; */
            text-align: justify;
        }

        #isi {
            font-size: 12pt;

            margin: 0;
            /* text-indent: 2rem; */
            text-align: justify;
        }

        #logo {
            margin: auto;
            margin-left: 10px;
            margin-right: auto;
            margin-top: 30px;
        }

        #tempat-tgl {
            margin-left: 0px;
            margin-top: 12px;
            margin-bottom: 12px;
            font-size: 12pt;
            text-align: justify;
        }

        .kotak {
            border-radius: 5px;
            /* background-color: #d6d6d6; */
            padding: 20px;
            width: 120px;
            height: 150px;
            border: 2px solid #474747;
        }

        #tempat-tgl2 {
            margin-left: 0px;
            margin-top: 12px;
            margin-bottom: 12px;
            font-size: 12pt;
            text-align: justify;

        }


		.slipgaji {
			font-style: italic;
			font-size: 14px;
			font-weight: bold;
			text-align: right;
		}

	</style>
	
</head>
<body>
<h6 class="slipgaji">Laporan Gaji Karyawan</h6>

<center>
	<header>
     <div class="row">
        <!-- <div id="img" class="col-md-3">
			<img id="logo" src="{{ asset('asset/images/logo.png') }}" width="120" height="125" />
		</div> -->
		<div class="img col-md-2">
      		<img src="<?php echo base_url(); ?>assets/img/full_logo.png" width="100" height="50" >
		</div>
		
	</div id="text-header" class="col-md-9">
	
		<h3 class="namapt">PT. SINTRA SINARINDO ELEKTRIK</h3>
        <h1 class="alamatlogo	">Lippo Cikarang, Serang, Cikarang Selatan</h1>
        <h6 class="alamatlogo"> Jl. Jati III, Blok J7-03 kode pose 17550</h6></h1>
		<!-- Newton Techno Park, Jl. Jati III, Blok J7-03, Lippo Cikarang, Serang, Cikarang Selatan, Bekasi, Jawa Barat 17550, Indonesia -->
    </div>
    </div>
	<hr class="garis1" />
    <!-- <div id="alamat" class="row"> -->
    </header>
		<!-- <h1>PT. SINTRA SINARINDO ELEKTRIK</h1>
		<h2>Daftar Gaji Pegawai</h2>
		<hr style="width: 50%; border-width: 5px; color: black"> -->
	</center>

	<?php
	if((isset($_GET['bulan']) && $_GET['bulan']!='') && (isset($_GET['tahun']) && $_GET['tahun']!='')){
			$bulan = $_GET['bulan'];
			$tahun = $_GET['tahun'];
			$bulantahun = $bulan.$tahun;
		}else{
			$bulan = date('m');
			$tahun = date('Y');
			$bulantahun = $bulan.$tahun;
		}
	?>
	<table>
		<tr>
			<td>Bulan</td>
			<td>:</td>
			<td><?php echo $bulan?></td>
		</tr>
		<tr>
			<td>Tahunn</td>
			<td>:</td>
			<td><?php echo $tahun?></td>
		</tr>
	</table>
	<table class="table table-bordered table-triped">
			<tr>
				<th class="text-center">No</th>
				<th class="text-center">NIK</th>
				<th class="text-center">Nama Pegawai</th>
				<th class="text-center">Jenis Kelamin</th>
				<th class="text-center">Jabatan</th>
				<th class="text-center">GajI Pokok</th>
				<th class="text-center">Tj. Transport</th>
				<th class="text-center">Uang Makan</th>
				<th class="text-center">Potongan</th>
				<th class="text-center">Total Gaji</th>
			</tr>
			<?php foreach($potongan as $p) : {
				$alpha = $p->jml_potongan;
			} ?>
			<?php $no=1; foreach($cetak_gaji as $g) : ?>
			<?php $potongan = $g->alpha * $alpha ?>
			<tr>
				<td class="text-center"><?php echo $no++ ?></td>
				<td class="text-center"><?php echo $g->nik ?></td>
				<td class="text-center"><?php echo $g->nama_pegawai ?></td>
				<td class="text-center"><?php echo $g->jenis_kelamin ?></td>
				<td class="text-center"><?php echo $g->nama_jabatan ?></td>
				<td class="text-center">Rp. <?php echo number_format($g->gaji_pokok,0,',','.') ?></td>
				<td class="text-center">Rp. <?php echo number_format($g->tj_transport,0,',','.') ?></td>
				<td class="text-center">Rp. <?php echo number_format($g->uang_makan,0,',','.') ?></td>
				<td class="text-center">Rp. <?php echo number_format($potongan,0, ',','.') ?></td>
				<td class="text-center">Rp. <?php echo number_format($g->gaji_pokok + $g->tj_transport + $g->uang_makan - $potongan,0,',','.') ?></td>
			</tr>
			<?php endforeach ;?>
			<?php endforeach ;?>
		</table>

		<table width="100%">
			<tr>
				<td></td>
				<td width="200px">
					<p>Cikarang Selatan, <?php echo date("d M Y") ?> <br> Finance</p>
					<br>
					<br>
					<p>_____________________</p>
				</td>
			</tr>
		</table>
</body>
</html>

<script type="text/javascript">
	window.print();
</script>