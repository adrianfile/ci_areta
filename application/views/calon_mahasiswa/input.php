<!DOCTYPE html>
<head>
    <title></title>
</head>
<style type="text/css">
			p {
				text-align: center;
				font-size: 20px;
			}
</style>
<body>
    <p><b>DAFTAR calon_mahasiswa</b></p>
    <?php echo form_open('calon_mahasiswa/save'); ?>
	<table align="center" border="1px">
		<tr>
			<td>NIK</td>
			<td><input type="text" name="nik" required></td></td>
		</tr>
		<tr>
			<td>Kode calon_mahasiswa</td>
			<td><input type="text" name="kode_calon_mahasiswa" required></td>
		</tr>
		<tr>
			<td>Nama calon_mahasiswa</td>
			<td><input type="text" name="nama_calon_mahasiswa" required></td>
		</tr>
		<tr>
			<td>Jenis Kelamin</td>
			<td><input type="radio" name="jenis_kelamin" value="L">Laki Laki
				<input type="radio" name="jenis_kelamin" value="P">Perempuan
					</td>
		</tr>
		<tr>
			<td>Email</td>
			<td><input type="text" name="email" required></td>
		</tr>
		<tr>
			<td>Status</td>
			<td><input type="radio" name="status" value="Aktif" >Aktif
				<input type="radio" name="status" value="Pasif">Pasif
					</td>
		</tr>
		<tr>
			<td>
				<input type="submit" value="SIMPAN">
				<input type="reset" value="BATAL">
			</td>
		</tr>
	</table>
	<?php echo form_close(); ?>
</body>
</html>