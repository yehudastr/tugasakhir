
<!DOCTYPE html>
<!--[if lt IE 7 ]> <html lang="en" class="no-js ie6 lt8"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="no-js ie7 lt8"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="no-js ie8 lt8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="UTF-8" />
        <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">  -->
        <title>Input Surat Pernyataan Masih Kuliah </title>
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
                    <strong>&laquo;FIK UDINUS : </strong>Pembuatan Surat pernyataan kuliah
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
						
                                <h1> Surat pernyataan kuliah </h1> 
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
                                    <label for="emailsign" class="youmail" >Tahun Pelajaran</label>
                                    <select name="th_pelajaran" id="th_pelajaran" class="cap" required>
										<option value="">Pilih Tahun Pelajaran Mahasiswa</option>
										
										<option value="2016 / 2017">2016 / 2017 </option>
										
										<option value="2017 / 2018">2017 / 2018 </option>
										
										<option value="2018 / 2019">2018 / 2019 </option>
										
										<option value="2019 / 2020">2019 / 2020 </option>
										
										<option value="2020 / 2021">2020 / 2021</option>
										
										<option value="2021 / 2022">2021 / 2022 </option>
										
										<option value="2022 / 2023">2022 / 2023 </option>
										
										<option value="2023 / 2024">2023 / 2024 </option>
										
										<option value="2024 / 2025">2024 / 2025 </option>
										
										<option value="2025 / 2026">2025 / 2026 </option>
										
										<option value="2026 / 2027">2026 / 2027 </option>
										
										<option value="2027 / 2028">2027 / 2028</option>
										
										<option value="2028 / 2029">2028 / 2029 </option>
										
										<option value="2029 / 2030">2029 / 2030 </option>
										
										<option value="2030 / 2031">2030 / 2031</option>
										
										<option value="2031 / 2032">2031 / 2032 </option>
										
										<option value="2032 / 2033">2032 / 2033</option>
										
										<option value="2033 / 2034">2033 / 2034</option>
										
										<option value="2034 / 2035">2034 / 2035 </option>
										
										<option value="2035 / 2036">2035 / 2036 </option>
										
										<option value="2036 / 2037">2036 / 2037 </option>
										
										<option value="2037 / 2038">2037 / 2038 </option>
										
										<option value="2038 / 2039">2038 / 2039</option>
										
										<option value="2039 / 2040">2039/2040 </option>
										
										<option value="2040 / 2041">2040 / 2041</option>
										
										<option value="2041 / 2042">2041 / 2042</option>
										
										<option value="2042 / 2043">2042 / 2043</option>
										
										<option value="2043 / 2044">2043 / 2044</option>
										
										<option value="2044 / 2045">2044 / 2045 </option>
										
										<option value="2045 / 2046">2045 / 2046</option>
										
										<option value="2046 / 2047">2046 / 2047</option>
										
										<option value="2047 / 2048">2047 / 2048 </option>
										
										<option value="2048 / 2049">2048 / 2049 </option>
										
										<option value="2049 / 2050">2049 / 2050 </option>
										<option value="2054 / 2055">2054 / 2055</option>
										<option value="2056 / 2057">2056 / 2057 </option>
									</select>
                                </p>
								<p> 
                                    <label for="emailsign" class="youmail" > Nama Orang Tua </label>
                                    <input id="nama_ortu" name="nama_ortu" required="required" type="text" class="cap"> 
                                </p>
								
								<p> 
                                    <label for="emailsign" class="youmail" > NIP orang tua / Pensiun </label>
                                    <input id="nip" name="nip" required="required" type="text" class="cap"> 
                                </p>
								<p> 
                                    <label for="emailsign" class="youmail" > pangkat / golongan </label>
                                    <input id="pangkat" name="pangkat" required="required" type="text" class="cap"> 
                                </p>
								<p> 
                                    <label for="emailsign" class="youmail" >Instansi Orang Tua </label>
                                    <input id="instansi" name="instansi" required="required" type="text" class="cap"> 
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