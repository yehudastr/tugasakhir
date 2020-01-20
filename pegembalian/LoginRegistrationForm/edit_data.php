<form name="form1" method="POSt" action="aksi_edit.php">
<table align="center" border="2" width="65%" height="100%" >
	<tr>
	<td>
		<table align="center" border="0" width="100%" height="10%" cellpadding = "7">
		<tr>
		<?php
$host="localhost";
$user="root";
$pass="";
$database="login";
$conn=mysql_connect($host,$user,$pass);
if ($conn) {
$buka= mysql_select_db ($database);}
if ($buka)
	echo "";
	$tampil= "select * from isi_surat where id ='$_GET[id]'";
	$tampill= mysql_query($tampil);
	$hasil = mysql_fetch_array($tampill);
	?>
		<td> &nbsp </td>
		<td> &nbsp </td>
		<td width="13%"><img src="2.png" width="107px" height="128px" align="right"></img></td>
		<td> <center><br>KEMENTRIAN RISET, TEKNOLOGI, DAN PENDIDIKAN TINGGI<br>
		UNIVERSITAS DIPONEGORO <br>
		<b>FAKULTAS TEKNIK</b><br>
		Jl. Prof. H. Soedarto, S.H Tembalang - Semarang, Kode Pos 50275 Telp. (+6224)7460053,<br>
		7460055 Fax. (+6224)7460055<br>
		Site : http://www.ft.undip.ac.id - Email : teknik@undip.ac.id</center></td>
		<td> &nbsp </td>
		<td> &nbsp </td>
		</tr>
		<tr >
		<td> &nbsp </td>
		<td> &nbsp </td><td colspan="2" height="1"><hr size="1.8px" color="black"></td></tr> 
		</table>
		
			<table align="center" border="0" width="8%" height="20%" cellpadding = "5">
			<tr>
			<td> &nbsp </td>
			<td> &nbsp </td>
			<td> &nbsp </td>
			<td width="8%"> &nbsp &nbsp &nbsp &nbsp Nomor </td>
			<td width="1%"> : </td>
			<td> &nbsp  /UN7.3.3/PP/2017  &nbsp  &nbsp <font color="gray" size="2.5px"><i> * tidak untuk diisi oleh mahasiswa</i></font></td>
			</tr>
				<tr>
				<td> &nbsp </td>
				<td> &nbsp </td>
				<td> &nbsp </td>
				<td>  &nbsp &nbsp &nbsp &nbsp Lampiran </td>
				<td width="1%"> : </td>
				<td> <input name="lampiran" type="text" id="lampiran" size="26%" value="<?php echo $hasil['lampiran']; ?>"> </td>
				</tr>
					<tr>
					<td> &nbsp </td>
					<td> &nbsp </td>
					<td> &nbsp </td>
					<td> &nbsp &nbsp &nbsp &nbsp Hal  </td>
					<td width="1%"> : </td>
					<td width="30%"> <b><ins> Permohonan Praktek Kerja </ins></b></td>
					</tr>
						<tr>
						<td> &nbsp </td>
						<td> &nbsp </td>
						<td> &nbsp </td>
						<td valign="top">  &nbsp &nbsp &nbsp &nbsp Yth.  </td>
						<td width="1%" valign="top"> : </td>
						<td> 
							<table align="left" border="0" width="80%" height="4%" cellpadding = "5">
							<tr>
							<td width="33%"> Nama Jabatan </td>
							<td width="1%"> : </td>
							<td> <input type="text" name="jabatan" id="jabatan" size="55%" value="<?php echo $hasil['jabatan']; ?>"> </td>
							</tr>
							<tr>
							<td> Nama Lembaga </td>
							<td> : </td>
							<td> <input type="text" name="lembaga" id="lembaga"  size="55%" value="<?php echo $hasil['lembaga']; ?>"> </td>
							</tr>
							<tr>
							<td> Nama Alamat </td>
							<td> : </td>
							<td> <input type="text" name="alamat" id="alamat"  size="55%" value="<?php echo $hasil['alamat']; ?>"> </td>
							</tr>
							<tr>
							<td> Nama Kota/Kabupaten </td>
							<td> : </td>
							<td> <input type="text" name="kota" id="kota"  size="55%" value="<?php echo $hasil['kota']; ?>"> </td>
							</tr></table>
						</td>
						</tr>
							<tr>
							<td> &nbsp </td>
							<td> &nbsp </td>
							<td> &nbsp </td>
							<td colspan="5"> &nbsp &nbsp &nbsp &nbsp  Dalam rangka menyelesaikan mata kuliah kerja praktek, mahasiswa Fakultas Teknik dibawah ini :  </td>
							</tr>
								<tr>
								<td colspan="7">
									<table align="left" border="0" width="100%" height="4%" cellpadding = "5">
									<tr>
									<td> &nbsp </td>
									<td> &nbsp </td>
									<td> &nbsp &nbsp &nbsp &nbsp &nbsp  Nama </td>
									<td width="1%"> : </td>
									<td> <input name="nama" type="text" id="nama"  size="72.5%" value="<?php echo $hasil['nama']; ?>" readonly/> </td>
								</td>
								</tr>
									<tr>
									<td> &nbsp </td>
									<td> &nbsp </td>
									<td width="23%"> &nbsp &nbsp &nbsp &nbsp &nbsp  NIM </td>
									<td width="1%"> : </td>
									<td> <input name="nim" type="text" id="nim" size="72.5%" value="<?php echo $hasil['nim']; ?>" readonly/></td>
									</tr>
										<tr>
										<td> &nbsp </td>
										<td> &nbsp </td>
										<td> &nbsp &nbsp &nbsp &nbsp &nbsp  Departemen </td>
										<td width="1%"> : </td>
										<td> <input name="departemen" type="text" id="departemen" size="72.5%" value="<?php echo $hasil['departemen']; ?>"> </td>
										</tr>
											<tr>
											<td> &nbsp </td>
											<td> &nbsp </td>
											<td> &nbsp &nbsp &nbsp &nbsp &nbsp  Program Studi </td>
											<td width="1%"> : </td>
											<td> <input name="program" type="text" id="program"  size="72.5%" value="<?php echo $hasil['program']; ?>"> </td>
											</tr>
												<tr>
												<td> &nbsp </td>
												<td> &nbsp </td>
												<td>&nbsp &nbsp &nbsp &nbsp &nbsp  Semester </td>
												<td width="1%"> : </td>
												<td> <input name="semester" type="text" id="semester" size="72.5%" value="<?php echo $hasil['semester']; ?>"> </td>
												</tr>
													<tr>
													<td> &nbsp </td>
													<td> &nbsp </td>
													<td> &nbsp &nbsp &nbsp &nbsp &nbsp  Alamat Tempat Tinggal</td>
													<td width="1%"> : </td>
													<td> <input name="alamat_siswa" type="text" id="alamat_siswa" size="72.5%" value="<?php echo $hasil['alamat_siswa']; ?>"> </td>
													</tr>
														<tr>
														<td> &nbsp </td>
														<td> &nbsp </td>
														<td>  &nbsp &nbsp &nbsp &nbsp &nbsp  Telepon/Hp </td>
														<td width="1%"> : </td>
														<td> <input name="hp" type="text" id="hp"  size="72.5%" value="<?php echo $hasil['hp']; ?>"> </td>
														</tr>
										</table>
													
							<tr>
							<td> &nbsp </td>
							<td> &nbsp </td>
							<td> &nbsp </td>
							<td colspan="3"> &nbsp &nbsp &nbsp &nbsp Akan melaksanakan Program Kerja Praktek mulai &nbsp <input type="text" name="tgl_satu" id="tgl_satu"  value="<?php echo $hasil['tgl_satu']; ?>"> &nbsp s/d &nbsp <input type="text" id="tgl_dua" name="tgl_dua"  value="<?php echo $hasil['tgl_dua']; ?>">. Mohon 
							<br> &nbsp &nbsp &nbsp &nbsp berkenan sekiranya dapat menerima mahasiswa tersebut untuk melaksanakan kerja praktek dan dibantu untuk mendapatkan 
							<br> &nbsp &nbsp &nbsp &nbsp data berupa : </td>
							</tr>
								<tr>
								<td> &nbsp </td>
								<td> &nbsp </td>
								<td> &nbsp </td>
								<td colspan="7"> &nbsp &nbsp &nbsp &nbsp <textarea name="isi" cols="100" rows="13"><?php echo $hasil['isi']; ?></textarea>  </td>
								</tr>
									<tr>
									<td> &nbsp </td>
									<td> &nbsp </td>
									<td> &nbsp </td>
									<td colspan="4"> &nbsp &nbsp &nbsp &nbsp Atas perhatian, bantuan, serta kerjasamanya kami ucapkan terimakasih.<br><br></td>
									</tr>
										<tr>
										<td> &nbsp </td>
										<td> &nbsp </td>
										<td> &nbsp </td>
										<td valign="top"> </td>
										<td width="1%" valign="top"> </td>
										<td colspan="4"> 
											<table align="right" border="0" width="55%" height="1%">
											<tr>
											<td> Semarang, ...................................................
											<br> a.n Dekan
											<br> Wakil Dekan Akademik dan Kemahasiswaan
											<br>
											<br>
											<br>
											<br></td>
											<td> &nbsp </td>
											<td> &nbsp </td>
											<td> &nbsp </td>
										</tr>
												<tr>
												<td> <ins><b>Prof. Dr. Moh. Djaeni. , ST, M.eng</b></ins>
												<br> <b> NIP. 197102071995121001 </b>
												<br>
												<br></b></ins></td>
												<td> &nbsp </td>
												<td> &nbsp </td>
												<td> &nbsp </td>
												</tr>
											</table>
												<tr>
												<td> &nbsp </td>
												<td> &nbsp </td>
												<td> &nbsp </td>
												<td colspan="4"> &nbsp &nbsp &nbsp &nbsp Tembusan : <br>
												&nbsp &nbsp &nbsp &nbsp - Dekan sebagai Laporan<br><br><br></td>
												</tr>
																	
											</table>
											</tr>
											</table>
							<td height="40"> <font face="Times New Roman"></td>
	<td>:</td>
	<td><input type="hidden" name="id" id="id"  size="10%" value="<?php echo $hasil['id']; ?>" readonly/></td>
				
			
<br><center>
<input type="submit" name="simpan" value="Simpan"> &nbsp
<a href="surat_coba.php?id=<?php echo $hasil['id']?>"> cetak </a>  &nbsp
<input type="reset" name="batal" value="Keluar">
</center>
</table>
</tr>
</table>
</form>