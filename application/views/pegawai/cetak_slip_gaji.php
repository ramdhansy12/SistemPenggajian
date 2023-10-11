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

	<?php foreach($potongan as $p) {
	$potongan=$p->jml_potongan;
	} ?>
		

	<?php foreach($print_slip as $ps) : ?>

	<?php $potongan_gaji=$ps->alpha * $potongan; ?>

	<table style="width: 100%">
		<tr>
			<td width="20%">Nama Pegawai</td>
			<td width="2%">:</td>
			<td><?php echo $ps->nama_pegawai?></td>
		</tr>
		<tr>
			<td>NIK</td>
			<td>:</td>
			<td><?php echo $ps->nik?></td>
		</tr>
		<tr>
			<td>Jabatan</td>
			<td>:</td>
			<td><?php echo $ps->nama_jabatan?></td>
		</tr>
		<tr>
			<td>Bulan</td>
			<td>:</td>
			<td><?php echo substr($ps->bulan, 0,2) ?></td>
		</tr>
		<tr>
			<td>Tahun</td>
			<td>:</td>
			<td><?php echo substr($ps->bulan, 2,4) ?></td>
		</tr>
	</table>

	<table class="table table-striped table-bordered mt-3">
		<tr>
			<th class="text-center" width="5%">No</th>
			<th class="text-center" >Keterangan</th>
			<th class="text-center" >Jumlah</th>
		</tr>
		<tr>
			<td>1</td>
			<td>Gaji Pokok</td>
			<td>Rp. <?php echo number_format($ps->gaji_pokok,0,',','.') ?></td>
		</tr>

		<tr>
			<td>2</td>
			<td>Tunjangan Transportasi</td>
			<td>Rp. <?php echo number_format($ps->tj_transport,0,',','.') ?></td>
		</tr>

		<tr>
			<td>3</td>
			<td>Uang Makan</td>
			<td>Rp. <?php echo number_format($ps->uang_makan,0,',','.') ?></td>
		</tr>

		<tr>
			<td>4</td>
			<td>Potongan</td>
			<td>Rp. <?php echo number_format($potongan_gaji,0,',','.') ?></td>
		</tr>

		<tr>
			<th colspan="2" style="text-align: right;">Total Gaji : </th>
			<th>Rp. <?php echo number_format($ps->gaji_pokok+$ps->tj_transport+$ps->uang_makan-$potongan_gaji,0,',','.') ?></th>
		</tr>
	</table>

	<table width="100%">
		<tr>
			<td></td>
			<td>
				<p>Pegawai</p>
				<br>
				<br>
				<p class="font-weight-bold"><?php echo $ps->nama_pegawai?></p>
			</td>

			<td width="200px">
				<p>Tegal, <?php echo date("d M Y")?> <br> Finance,</p>
				<br>
				<br>
				<p>___________________</p>
			</td>
		</tr>
	</table>

	<?php endforeach ;?>

</body>
</html>

<script type="text/javascript">
	window.print();
</script>