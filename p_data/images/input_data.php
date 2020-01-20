<?php include('akses.php'); 
include "koneksi_database.php";
$user=$_SESSION['guest']; 
$query=mysql_query("select * from mahasiswa where username = '$user'");
$q = mysql_fetch_array($query);

?>
<form name="form1" method="post" action="aksi_input_data.php">
<table align="center" border="2" width="65%" height="100%">
<tr>
<td>
		<table align="center" border="0" width="100%" height="10%" cellpadding = "7">
		<tr>
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
		<td> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp/UN7.3.3/PP/2017  &nbsp  &nbsp <font color="gray" size="2.5px"><i> * tidak untuk diisi oleh mahasiswa</i></font></td>
		
		</tr>
		
			<tr>
			<td> &nbsp </td>
			<td> &nbsp </td>
			<td> &nbsp </td>
			<td>  &nbsp &nbsp &nbsp &nbsp Lampiran </td>
			<td width="1%"> : </td>
			<td> <input name="lampiran" type="text" id="lampiran" size="26%" required autofocus> <font color="gray" size="2.5px"><i> * .eksp</i></font></td>
			
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
						<td width="30%"> Nama Jabatan </td>
						<td width="1%"> : </td>
						<td> <input type="text" name="jabatan" id="jabatan" placeholder="Rektor" size="55%" required autofocus> </td>
						</tr>
						<tr>
						<td> Nama Lembaga </td>
						<td> : </td>
						<td> <input type="text" name="lembaga" id="lembaga" placeholder="Universitas Diponegoro" size="55%" required autofocus> </td>
						</tr>
						<tr>
						<td> Nama Alamat </td>
						<td> : </td>
						<td> <input type="text" name="alamat" id="alamat" placeholder="Jl. Prof. H. Soedarto, S.H Tembalang - Semarang" size="55%" required autofocus> </td>
						</tr>
						<tr>
						<td> Nama Kota/Kabupaten </td>
						<td> : </td>
						<td> <input type="text" name="kota" id="kota" placeholder="Semarang" size="55%" required autofocus> </td>
						</tr></table>
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
								<td> <input name="nama" type="text" id="nama" placeholder="Fitri Nur Azizah" size="72.5%" value="<?php echo $q['nama_mhs']; ?>" required autofocus readonly/> </td>
							</tr>
							
								<tr>
								<td> &nbsp </td>
								<td> &nbsp </td>
								<td width="23%"> &nbsp &nbsp &nbsp &nbsp &nbsp  NIM </td>
								<td width="1%"> : </td>
								<td> <input name="nim" type="text" id="nim"   size="72.5%" value="<?php echo $q['nim']; ?>" required autofocus  readonly/></td>
								
								</tr>
									
									<tr>
									<td> &nbsp </td>
									<td> &nbsp </td>
									<td> &nbsp &nbsp &nbsp &nbsp &nbsp  Departemen </td>
									<td width="1%"> : </td>
									<td> <input name="departemen" type="text" id="departemen" placeholder="Universitas Negeri"  size="72.5%" required autofocus> </td>
									
									</tr>
										
										<tr>
										<td> &nbsp </td>
										<td> &nbsp </td>
										<td> &nbsp &nbsp &nbsp &nbsp &nbsp  Program Studi </td>
										<td width="1%"> : </td>
										<td> <input name="program" type="text" id="program" placeholder="Sistem Komputer"  size="72.5%" required autofocus> </td>
										</tr>
										
											<tr>
											<td> &nbsp </td>
											<td> &nbsp </td>
											<td>&nbsp &nbsp &nbsp &nbsp &nbsp  Semester </td>
											<td width="1%"> : </td>
											<td> <input name="semester" type="text" id="semester" placeholder="II(Dua)" size="72.5%" required autofocus> </td>
											
											</tr>
											
												<tr>
												<td> &nbsp </td>
												<td> &nbsp </td>
												<td> &nbsp &nbsp &nbsp &nbsp &nbsp  Alamat Tempat Tinggal</td>
												<td width="1%"> : </td>
												<td> <input name="alamat_siswa" type="text" id="alamat_siswa" placeholder="Jl. Pandanaran II/12, Semarang"  size="72.5%" required autofocus> </td>
												
												</tr>
												
													<tr>
													<td> &nbsp </td>
													<td> &nbsp </td>
													<td>  &nbsp &nbsp &nbsp &nbsp &nbsp  Telepon/Hp </td>
													<td width="1%"> : </td>
													<td> <input name="hp" type="text" id="hp" placeholder="087-832503775"  size="72.5%" required autofocus> </td>
													
													</tr>
										</table>
													
														<tr>
														<td> &nbsp </td>
														<td> &nbsp </td>
														<td> &nbsp </td>
														<td colspan="3"> &nbsp &nbsp &nbsp &nbsp Akan melaksanakan Program Kerja Praktek mulai &nbsp <input type="text" name="tgl_satu" id="tgl_satu" placeholder="16 Januari 2017" required autofocus> &nbsp s/d &nbsp <input type="text" id="tgl_dua" name="tgl_dua" placeholder="16 Maret 2017" required autofocus>. Mohon 
														<br> &nbsp &nbsp &nbsp &nbsp berkenan sekiranya dapat menerima mahasiswa tersebut untuk melaksanakan kerja praktek dan dibantu untuk mendapatkan 
														<br> &nbsp &nbsp &nbsp &nbsp data berupa : </td>
														</tr>
														
															<tr>
															<td> &nbsp </td>
															<td> &nbsp </td>
															<td> &nbsp </td>
															<td colspan="7"> &nbsp &nbsp &nbsp &nbsp <textarea name="isi" cols="100" rows="13" placeholder=" &nbsp  Berisi kelengkapan data mahasiswa sebelum melaksanakan kerja praktek... "required autofocus ></textarea>  </td>
															
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
																	<td width="1%" valign="top">  </td>
																	<td colspan="4"> 
																		<table align="right" border="0" width="50%" height="1%">
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
																				<td colspan="4"> &nbsp &nbsp &nbsp &nbsp <b>Tembusan : </b><br>
																				&nbsp &nbsp &nbsp &nbsp - Dekan sebagai Laporan<br><br><br></td>
																				</tr>
																	
																		</table>
																		</tr>
																		</table>
				
			
				<br><center>
				<input type="submit" name="simpan" value="Simpan"> &nbsp
				<input type="reset" name="batal" value="Batal"> &nbsp
				</center>
			

			
		</table>
		</tr>
		</table>
		<tr>
		
		
		