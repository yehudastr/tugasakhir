

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
    </head>
    <body>

        <div class="container">
            <!-- Codrops top bar -->
            <div class="codrops-top">
                <a href="#">
                    <strong>&laquo; FIK UDINUS: </strong>Pembuatan Surat permohonan data
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
						
                                <h1> Surat permohonan data </h1> 
								 <p> 
                                    <label for="1(satu)" class="uname">Lampiran</label>
                                    <select id="lampiran" name="lampiran" required="required" type="text" placeholder="mysuperusername690" />
									<option> 1 (satu) eksemplar </option>
									<option> 2 (dua) eksemplar </option>
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
                                    <label for="1(satu)" class="uname">Semester Mahasiswa</label>
                                    <select id="semester" name="semester" required="required" type="text" placeholder="V (lima)" />
									<option> 1 (satu) </option>
									<option> 2 (dua) </option>
									<option> 3 (tiga) </option>
									<option> 4 (empat) </option>
									<option> 5 (lima) </option>
									<option> 6 (enam) </option>
									<option> 7 (tujuh) </option>
									<option> 8 (delapan) </option>
									<option> 9 (sembilan) </option>
									<option> 10 (sepuluh) </option>
									<option> 11 (sebelas) </option>
									<option> 12 (dua belas) </option>
									<option> 13 (dua belas) </option>
									<option> 14 (dua belas) </option>
									</select>
                                </p>
								
								 <p>
                                    <label for="emailsign" class="youmail" >Alamat Mahasiswa</label>
                                    <input id="alamat" name="alamat" required="required" type="text" / class="cap"> 
                                </p>
								 <p> 
                                    <label for="emailsign" class="youmail" >No Telephone/Hp Mahasiswa</label>
                                    <input id="telepon" name="telepon" required="required" type="text" / class="cap"> 
                                </p>
								
                                
								
                                 <p class="signin button"> 
								 <input type="reset" value="Reset"/>&nbsp &nbsp  &nbsp  &nbsp 
									<input type="submit" value="Submit"/>&nbsp &nbsp &nbsp  &nbsp  &nbsp </p>
                              
                                
                        </div>
						</form>

                        <div id="register" class="animate form">
                            <form  action="mysuperscript.php" autocomplete="on"> 
                               
                        </div>
						
                    </div>
                </div>  
            </section>
        </div>
    </body>
</html>