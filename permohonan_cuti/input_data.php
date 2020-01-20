

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
	

function getkey(e)
{
if (window.event)
   return window.event.keyCode;
else if (e)
   return e.which;
else
   return null;
}
function goodchars(e, goods, field)
{
var key, keychar;
key = getkey(e);
if (key == null) return true;
 
keychar = String.fromCharCode(key);
keychar = keychar.toLowerCase();
goods = goods.toLowerCase();
 
// check goodkeys
if (goods.indexOf(keychar) != -1)
    return true;
// control keys
if ( key==null || key==0 || key==8 || key==9 || key==27 )
   return true;
    
if (key == 13) {
    var i;
    for (i = 0; i < field.form.elements.length; i++)
        if (field == field.form.elements[i])
            break;
    i = (i + 1) % field.form.elements.length;
    field.form.elements[i].focus();
    return false;
    };
// else return false
return false;
}

</script>


    </head>
    <body>
<form name="form1" method="post" action="../berhasil.html">

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
						<form name="form1" method="post" action="aksi_input_data.php" autocomplete="on">
						
                                <h1> Surat permohonan cuti </h1> 
								 <p> 
                                    <label for="emailsign" class="youmail" > Nama Mahasiswa </label>
                                    <input id="nama" name="nama" required="required"  class="cap"> 
                                </p>
								  <p> 
                                    <label for="emailsign" class="youmail" >NIM &nbsp;</label>
                                    <input id="nim" name="nim" required="required" type="text" vclass="cap"> 
                                </p>
								<p> 
								 <label for="emailsign" class="youmail" >Tahun Masuk</label>
									
								
									<input id='angkatan' name='angkatan' required='required' type='text' class='cap' autofocus /> 
                                   
                                </p>
                                  
                                      
								<p> 
                                    <label for="emailsign" class="youmail" >Tahun Akademik</label>
									<!--<input id='th_akademik' name='th_akademik' required='required' type='text' class='cap' value=''autofocus readonly/> -->
									
                                   <select name="th_akademik" id="th_akademik" class="cap" required>
										<option value="">Pilih Tahun Akademik Mahasiswa</option>
										
										<option value="2016 / 2017">2016 </option>
										
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
										
										<option value="2049 / 2050" >2049 / 2050 </option>
										
									</select> 
                                </p>
								<p>
                                	<label for="emailsign" class="youmail">Semester Saat Ini</label>
                                    <select name="semester" id="semester" class="cap" required>
									<option value="">Pilih Semester Mahasiswa</option>
									<option value="1 (Satu)"> 1 (Satu) </option>
									<option value="2 (Dua)"> 2 (Dua) </option>
									<option value="3 (Tiga)"> 3 (Tiga) </option>
									<option value="4 (Empat)"> 4 (Empat) </option>
									<option value="5 (Lima)"> 5 (Lima) </option>
									<option value="6 (Enam)"> 6 (Enam) </option>
									<option value="7 (Tujuh)"> 7 (Tujuh) </option>
									<option value="8 (Delapan)"> 8 (Delapan) </option>
									<option value="9 (Sembilan)"> 9 (Sembilan) </option>
									<option value="10 (Sepuluh)"> 10 (Sepuluh) </option>
									<option value="11 (Sebelas)"> 11 (Sebelas) </option>
									<option value="12 (Dua Belas)"> 12 (Dua Belas) </option>
									<option value="13 (Tiga Belas)"> 13 (Tiga Belas) </option>
									<option value="14 (Empat Belas)"> 14 (Empat Belas) </option>
									</select>
                                </p>
								 <p> 
                                    <label for="emailsign" class="youmail" >Semester Pengambilan Cuti</label>
                                    <select name="semester2" id="semester2" class="cap" required>
										<option value="">Gasal / Genap</option>
										<option value="Gasal">Gasal </option>
										<option value="Genap">Genap </option>
									</select>
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
                                    <label for="emailsign" class="youmail" >Jenjang Studi</label>
                                    <select name="jenjang" id="jenjang" class="cap" required>
										<option value="">Pilih Jenjang Studi saat ini</option>
										
										<option value="D-3">D-3 </option>
										<option value="S-1">S-1 </option>
										<option value="S-2">S-2 </option>
										<option value="S-3">S-3 </option>
									</select>
                                </p>
								 <p> 
                                    <label for="emailsign" class="youmail" > Jumlah SKS</label>
                                    <input id="sks" maxlength="2" name="sks" required="required" type="text" / class="cap"  onKeyPress="return goodchars(event,'0123456789',this)"> 
                                </p>
								
								 <p> 
                                    <label for="emailsign" class="youmail" > Jumlah IPK</label>
                                    <input id="ipk" maxlength="4" name="ipk" required="required" type="text" / class="cap" onKeyPress="return goodchars(event,',0123456789',this)"> 
                                </p>
								 <p> 
                                    <label for="emailsign" class="youmail" >Alamat</label>
                                    <input id="alamat" name="alamat" required="required" type="text" / class="cap"> 
                                </p>
								 <p> 
                                    <label for="emailsign" class="youmail" >No Telephone/Hp Mahasiswa</label>
                                    <input id="hp" name="hp" maxlength="15" required="required" type="text" / class="cap" onKeyPress="return goodchars(event,'0123456789',this)" > 
                                </p>
								
								
								<P>
								
								
                                    <label for="emailsign" class="youmail" >Alasan Cuti </label>
									<textarea type="text" name="alasan" id="alasan" /></textarea>
									 
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