<!DOCTYPE html>
<!--[if lt IE 7 ]> <html lang="en" class="no-js ie6 lt8"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="no-js ie7 lt8"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="no-js ie8 lt8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="UTF-8" />
        <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">  -->
        <title>Input Surat Permohonan Praktek Kerja </title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <meta name="description" content="Login and Registration Form with HTML5 and CSS3" />
        <meta name="keywords" content="html5, css3, form, switch, animation, :target, pseudo-class" />
        <meta name="author" content="Codrops" />
        <link rel="shortcut icon" href="../favicon.ico"> 
        <link rel="stylesheet" type="text/css" href="css/demo.css" />
        <link rel="stylesheet" type="text/css" href="css/style.css" />
		<link rel="stylesheet" type="text/css" href="css/animate-custom.css" />
	<script src="lib/jquery.min.js"></script>
<script src="lib/zebra_datepicker.js"></script>
<link rel="stylesheet" href="lib/css/default.css" />

<script>
    $(document).ready(function(){
        $('#tgl_satu').Zebra_DatePicker({
            format: 'd F Y',
            months : ['Januari','Februari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','November','Desember'],
            days : ['Minggu','Senin','Selasa','Rabu','Kamis','Jum\'at','Sabtu'],
            days_abbr : ['Ming','Sen','Sel','Rab','Kam','Jum','Sab']
        });
    });
	$(document).ready(function(){
        $('#tgl_dua').Zebra_DatePicker({
            format: 'd F Y',
            months : ['Januari','Februari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','November','Desember'],
            days : ['Minggu','Senin','Selasa','Rabu','Kamis','Jum\'at','Sabtu'],
            days_abbr : ['Ming','Sen','Sel','Rab','Kam','Jum','Sab']
        });
    });
</script>


    </head>
    <body>
	 

        <div class="container">
            <!-- Codrops top bar -->
            <div class="codrops-top">
                <a href="#">
                    <strong>&laquo; FIK UDINUS  </strong>
                </a>
                <span class="right">
                    <a href="../index.php">
                        <strong>Kembali ke halaman awal </strong>
                    </a>
                </span>
                <div class="clr"></div>
            </div><!--/ Codrops top bar -->
            <header>
               
            </header>
            <section>				
                <div id="container_demo" >
                    <!-- hidden anchor to stop jump http://www.css3create.com/Astuce-Empecher-le-scroll-avec-l-utilisation-de-target#wrap4  -->
                    <a class="hiddenanchor" id="toregister"></a>
                    <a class="hiddenanchor" id="tologin"></a>
                    <div id="wrapper">
                        <div id="login" class="animate form">
						<form name="form1" method="post" action="../berhasil.html" autocomplete="on">
						
                                <h1> Surat permohonan praktek kerja </h1> 
								<p>
                                	<label for="emailsign" class="youmail">Lampiran</label>
                                    <select name="lampiran" id="lampiran" class="cap" required>
									<option value="">Lampiran Yang Dibutuhkan</option>
                                  
									<option> 1(satu) eksemplar </option>
									<option> 2(dua) eksemplar </option>
									</select>
                                </p>
								 <p> 
                                    <label for="emailsign" class="youmail" >Jabatan Alamat Surat</label>
                                    <input id="nama_jabatan" name="nama_jabatan" required="required" type="text" class="cap" /> 
                                </p>
								 <p> 
                                    <label for="emailsign" class="youmail" >Nama Lembaga</label>
                                    <input id="nama_lembaga" name="nama_lembaga" required="required" type="text" class="cap" / > 
                                </p>
								 <p> 
                                    <label for="emailsign" class="youmail" >Alamat Lembaga</label>
                                    <input id="alamat_lmbg" name="alamat_lmbg" required="required" type="text" / class="cap"> 
                                </p>
								 <p> 
                                    <label for="emailsign" class="youmail" >Kota/Kab</label>
                                    <input id="kota_kabupaten" name="kota_kabupaten" required="required" type="text"  class="cap"> 
                                </p>
                                <p> 
                                    <label for="emailsign" class="youmail" > Nama Mahasiswa </label>
                                    <input id="nama" name="nama" required="required"  class="cap"> 
                                </p>
								  <p> 
                                    <label for="emailsign" class="youmail" >NIM &nbsp;</label>
                                    <input id="nim" name="nim" required="required" type="text" vclass="cap"> 
                                </p>
																	<p>
                                	<label for="emailsign" class="youmail">Program Studi</label>
                                    <select name="prog_studi" id="prog_studi" class="cap" required>
										<option value="">Pilih Program Studi Mahasiswa</option>
										
										<option value="Teknik Informatika S1">Teknik Informatika S1</option>
										<option value="Sistem Informasi S1">Sistem Informasi S1</option>
										<option value="Desain Komunikasi Visual S1">Desain Komunikasi Visual S1</option>
										<option value="Ilmu Komunikasi S1">Ilmu Komunikasi S1</option>
										<option value="Film dan Televisi">Film dan Televisi</option>
										<option value="teknik Informatika D3">Teknik Informatika D3</option>
										<option value="Broadcasting D3">Broadcasting D3</option>
										<option value="Magister Teknik Informatika">Magister Teknik Informatika</option>
									</select>
                                </p>
								<p>
                                	<label for="emailsign" class="youmail">Semester</label>
                                    <select name="semester" id="semester" class="cap" required>
									<option value="">Pilih Semester Mahasiswa</option>
									<option value="1 (Satu) "> 1 (Satu) </option>
									<option value="2 (Dua)"> 2 (Dua) </option>
									<option value="3 (Tiga)"> 3 (Tiga) </option>
									<option value="4 (Empat)"> 4 (Empat) </option>
									<option value="5 (Lima)"> 5 (Lima) </option>
									<option value="6 (Enam)"> 6 (Enam) </option>
									<option value="7 (Tujuh)"> 7 (Tujuh) </option>
									<option value="8 (Delapan) "> 8 (Delapan) </option>
									<option value="9 (Sembilan)"> 9 (Sembilan) </option>
									<option value="10 (Sepuluh)"> 10 (Sepuluh) </option>
									<option value="11 (Sebelas)"> 11 (Sebelas) </option>
									<option Value="12 (Dua Belas)"> 12 (Dua Belas) </option>
									</select>
                                </p>
								
								 <p> 
                                    <label for="emailsign" class="youmail" >Alamat Mahasiswa</label>
                                    <input id="alamat_siswa" name="alamat_siswa" required="required" type="text" / class="cap"> 
                                </p>
								 <p> 
                                    <label for="emailsign" class="youmail" >No Telephone/Hp Mahasiswa</label>
                                    <input id="hp" name="hp" required="required" type="text" / class="cap"> 
                                </p>
								<p> 
								
                                    <label for="emailsign" class="youmail" >Tgl Mulai Praktek Kerja </label>
									<input type="text" name="tgl_satu" id="tgl_satu" data-date-format="dd MM yyyy" />
									 <div class="controls input-append date form_date" data-date="" data-date-format="dd MM yyyy" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd">
                                    
									
									 <span class="add-on"><i class="icon-th"></i></span> </div>
                                </p>
								<p> 
								
                                    <label for="emailsign" class="youmail" >Tgl Selesai Praktek Kerja </label>
									<input type="text" name="tgl_dua" id="tgl_dua" data-date-format="dd MM yyyy" />
									 <div class="controls input-append date form_date" data-date="" data-date-format="dd MM yyyy" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd">
                                    
									
									 <span class="add-on"><i class="icon-th"></i></span> </div>
                                </p>
								
								 <p> 
                                    <label for="emailsign" class="youmail" >Kelengkapan Mahasiswa Mengenai Kerja Praktek</label>
                                    <textarea id="isi" name="isi" required="required" type="text" class="cap" placeholder="Isikan kelengkapan yang harus anda siapkan untuk persyaratan praktek kerja "/> </textarea>
                                </p>
								
                                 <p class="signin button"> 
								 <input type="reset" value="Reset"/>&nbsp &nbsp  &nbsp  &nbsp 
									<input type="submit" value="Simpan"/>&nbsp &nbsp &nbsp  &nbsp  &nbsp </p>
                              
                                
                        </div>
						</form>

                        <div id="register" class="animate form">
                           
                        </div>
						
                    </div>
                </div>  
            </section>
        </div>
    </body>
</html>