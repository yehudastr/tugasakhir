<?php  
 
/**
 * @author stalsa
 */
require_once("fpdf17/fpdf.php");

class FPDF_AutoWrapTable extends FPDF {
  	private $data = array();
  	private $options = array(
  		'filename' => 'surat_tugas.pdf',
  		'destinationfile' => '',
  		'paper_size'=>'A4',
  		'orientation'=>'P'
  	);
 
  	function __construct($data = array(), $options = array()) {
    	parent::__construct();
    	$this->data = $data;
    	$this->options = $options;
	}
 
	public function rptDetailData () {
		//
		$border = 0;
		$this->AddPage();
		$this->SetAutoPageBreak(true,60);
		$this->AliasNbPages();
		$left = 40;
 
		//header
		$this->SetFont("Times", "B", 14);
		$this->Image('5.jpg',18,17,90);
		$this->SetX(2);
		$this->SetX($left); $this->Cell(0, 20, '      KEMENTERIAN RISET, TEKNOLOGI, DAN PENDIDIKAN TINGGI', 10, 1,'C');
		$this->SetX($left); $this->Cell(0, 20, '      UNIVERSITAS DIPONEGORO', 10, 1,'C');
		$this->SetX($left); $this->Cell(0, 20, '      FAKULTAS TEKNIK', 10, 1,'C');
		$this->SetFont("", "", 9);
		$this->SetFont("Times", "", 11);
		$this->SetX($left); $this->Cell(0, 10, '      Jl. Prof. H. Soedarto, S.H. Tembalang Semarang, Kode Pos 50275 Telp. (024) 7460053,', 10, 1,'C');
		$this->SetX($left); $this->Cell(0, 20, '      7460055 Fax. (024) 746055', 10, 1,'C');
		$this->SetX($left); $this->Cell(0, 5, '      Site : http://ft.undip.ac.id - Email : teknik@undip.ac.id', 10, 1,'C');
		$this->Ln(5);
		$this->Cell(0, 4, " ", "B");
		$this->Ln(5);
		$this->Cell(0, 1, " ", "B");
		$this->Ln(10);
		$this->SetFont("", "B", 12);
		$this->Ln(10);
 
		$h = 20;
		$left = 25;
		$left1 = 46;
		$top = 60;	
		#tableheader
		$this->SetFillColor(255,255,255);	
		$left = $this->GetX();
		
		
		#koneksi ke database (disederhanakan)
		include "koneksi_database.php";
		$id=$_GET['id'];
		
		$this->SetFont('Times','',12);
		
		$left1 = $this->GetX();			
			$this->SetX($left1 += 22); $this->Cell(50,$h,'Nomor',0,0,'L',true);
			$this->SetX($left1 += 75); $this->Cell(10, $h, ':', 0, 0, 'L',true);
			$this->SetX($left += 107); $this->MultiCell(510, $h, '............... / UN7.3.3/PP/2017',0, 1, 'L',true);
		//Select data status mahasiswa
		$query=mysql_query("SELECT * FROM isi_surat WHERE id='$id'");
		
		while($data=mysql_fetch_array($query)){
			$left1 = $this->GetX();			
				$this->SetX($left1 += 22); $this->Cell(50,$h,'Lampiran',0,0,'L',true);
				$this->SetX($left1 += 75); $this->Cell(10, $h, ':', 0, 0, 'L',true);
				$this->SetX($left += 0); $this->MultiCell(510, $h, $data['lampiran'],0, 1, 'L',true);
				$this->Ln(7);

					
			$this->SetX($left1 += -75); $this->Cell(50,$h,'Hal',0,0,'L',true);
			$this->SetX($left1 += 75); $this->Cell(10, $h, ':', 0, 0, 'L',true);
			$this->SetX($left += 0); $this->MultiCell(510, $h, 'Permohonan Kerja',0, 1, 'L',true);
			
			$this->SetFont('Times','',12);		
				$this->SetX($left1 += -75); $this->Cell(50,$h,'Yth.',0,0,'L',true);
				$this->SetX($left1 += 75); $this->Cell(10, $h, '', 0, 0, 'L',true);
				$this->SetX($left += 0); $this->MultiCell(510, $h, $data['jabatan'],0, 1, 'L',true);	
		
	
				$this->SetX($left1 += 22); $this->Cell(50,$h,'',0,0,'L',true);
				$this->SetX($left1 += 75); $this->Cell(10, $h, '', 0, 0, 'L',true);
				$this->SetX($left += 0); $this->MultiCell(510, $h, $data['lembaga'],0, 1, 'L',true);	
					
				$this->SetX($left1 += 22); $this->Cell(50,$h,'',0,0,'L',true);
				$this->SetX($left1 += 75); $this->Cell(10, $h, '', 0, 0, 'L',true);
				$this->SetX($left += 0); $this->MultiCell(510, $h, $data['alamat'],0, 1, 'L',true);	
		
				$this->SetX($left1 += 22); $this->Cell(50,$h,'',0,0,'L',true);
				$this->SetX($left1 += 75); $this->Cell(10, $h, '', 0, 0, 'L',true);
				$this->SetX($left += 0); $this->MultiCell(510, $h, $data['kota'],0, 1, 'L',true);	
				$this->Ln(7);
			
		
				$this->SetX($left += -85); $this->MultiCell(510, $h, ' Dalam rangka menyelesaikan mata kuliah kerja praktek, mahasiswa Fakultas Teknik dibawah ini : ',0, 1, 'L',true);	
				
			$left1 = $this->GetX();			
				$this->SetX($left1 += 35); $this->Cell(50,$h,'Nama',0,0,'L',true);
				$this->SetX($left1 += 125); $this->Cell(10, $h, ':', 0, 0, 'L',true);
				$this->SetX($left += 146); $this->MultiCell(510, $h, $data['nama'],0, 1, 'L',true);
			
		
				$this->SetX($left1 += -125); $this->Cell(50,$h,'NIM',0,0,'L',true);
				$this->SetX($left1 += 125); $this->Cell(10, $h, ':', 0, 0, 'L',true);
				$this->SetX($left += 0); $this->MultiCell(510, $h, $data['nim'],0, 1, 'L',true);
			
				$this->SetX($left1 += -125); $this->Cell(50,$h,'Departemen',0,0,'L',true);
				$this->SetX($left1 += 125); $this->Cell(10, $h, ':', 0, 0, 'L',true);
				$this->SetX($left += 0); $this->MultiCell(510, $h, $data['departemen'],0, 1, 'L',true);
			
				$this->SetX($left1 += -125); $this->Cell(50,$h,'Program',0,0,'L',true);
				$this->SetX($left1 += 125); $this->Cell(10, $h, ':', 0, 0, 'L',true);
				$this->SetX($left += 0); $this->MultiCell(510, $h, $data['program'],0, 1, 'L',true);
			
			
				$this->SetX($left1 += -125); $this->Cell(50,$h,'Semester',0,0,'L',true);
				$this->SetX($left1 += 125); $this->Cell(10, $h, ':', 0, 0, 'L',true);
				$this->SetX($left += 0); $this->MultiCell(510, $h, $data['semester'],0, 1, 'L',true);
			
			
			$this->SetX($left1 += -125); $this->Cell(50,$h,'Alamat Tempat Tinggal',0,0,'L',true);
				$this->SetX($left1 += 125); $this->Cell(10, $h, ':', 0, 0, 'L',true);
				$this->SetX($left += 0); $this->MultiCell(510, $h, $data['alamat_siswa'],0, 1, 'L',true);
			
			
			$this->SetX($left1 += -125); $this->Cell(50,$h,'No Telephone/Hp',0,0,'L',true);
				$this->SetX($left1 += 125); $this->Cell(10, $h, ':', 0, 0, 'L',true);
				$this->SetX($left += 0); $this->MultiCell(510, $h, $data['hp'],0, 1, 'L',true);
				$this->Ln(7);
			
			
			$this->SetX($left += -142); $this->MultiCell(510, $h, 'Akan melaksanakan Program Kerja Praktek mulai '.$data['tgl_satu'].' s/d '.$data['tgl_dua'].'. Mohon berkenan sekiranya dapat menerima mahasiswa tersebut untuk melaksanakan kerja praktek dan dibantu untuk mendapatkan data berupa :',0, 1, 'L',true);														
			$this->SetX($left += -2); $this->MultiCell(510, $h, $data['isi'],0, 1, 'L',true);
			$this->Ln(20);
			
			$left1 = $this->GetX();		
			
			$this->SetX($left1 += 17); $this->Cell(50,$h,'   Atas perhatian, bantuan, serta kerjasamanya kami ucapkan terimakasih.',0,0,'L',true);
			$this->Ln(30);
		}
		$left1 = $this->GetX();			
			$this->SetX($left1 += 308); $this->Cell(85,$h,'  Semarang, ',0,0,'L',true);
		$this->Ln(17);
		
		$left1 = $this->GetX();			
			$this->SetX($left1 += 308); $this->Cell(85,$h,'  a.n Dekan ',0,0,'L',true);
		$this->Ln(17);
		
		$left1 = $this->GetX();			
			$this->SetX($left1 += 308); $this->Cell(85,$h,'  Wakil Dekan Akademik dan Kemahasiswaan ',0,0,'L',true);
		$this->Ln(70);
		
		$this->SetFont('Times','B',12);
		$left1 = $this->GetX();			
			$this->SetX($left1 += 308); $this->Cell(85,$h,'  Prof. Dr. Moh. Djaeni. , ST, M.eng ',0,0,'L',true);
		$this->Ln(17);
		
		$left1 = $this->GetX();			
			$this->SetX($left1 += 308); $this->Cell(85,$h,'  NIP. 197102071995121001  ',0,0,'L',true);
		$this->Ln(30);
		
		$left1 = $this->GetX();			
			$this->SetX($left1 += 22); $this->Cell(40,$h,'  Tembusan :',0,0,'L',true);
		$this->Ln(17);
		
		$this->SetFont('Times','',12);
		$left1 = $this->GetX();			
			$this->SetX($left1 += 22); $this->Cell(50,$h,'  - Dekan sebagai Laporan',0,0,'L',true);
		$this->Ln(17);
	}
}
 
	public function printPDF () {
 
		if ($this->options['paper_size'] == "A4") {
			$a = 8.3 * 72; //1 inch = 72 pt
			$b = 12.0 * 72;
			$this->FPDF($this->options['orientation'], "pt", array($a,$b));
		} else {
			$this->FPDF($this->options['orientation'], "pt", $this->options['paper_size']);
		}
 
	    $this->SetAutoPageBreak(false);
	    $this->AliasNbPages();
	    $this->SetFont("Times", "B", 12);
	    //$this->AddPage();
 
	    $this->rptDetailData();
 
	    $this->Output($this->options['filename'],$this->options['destinationfile']);
  	}
 
  	private $widths;
	private $aligns;
 
	function SetWidths($w)
	{
		//Set the array of column widths
		$this->widths=$w;
	}
 
	function SetAligns($a)
	{
		//Set the array of column alignments
		$this->aligns=$a;
	}
 
	function Row($data)
	{
		//Calculate the height of the row
		$nb=3;
		for($i=0;$i<count($data);$i++)
			$nb=max($nb,$this->NbLines($this->widths[$i],$data[$i]));
		$h=10*$nb;
		//Issue a page break first if needed
		$this->CheckPageBreak($h);
		//Draw the cells of the row
		for($i=0;$i<count($data);$i++)
		{
			$w=$this->widths[$i];
			$a=isset($this->aligns[$i]) ? $this->aligns[$i] : 'L';
			//Save the current position
			$x=$this->GetX();
			$y=$this->GetY();
			//Draw the border
			//$this->Rect($x,$y,$w,$h);
			//Print the text
			$this->MultiCell($w,15,$data[$i],0,$a);
			//Put the position to the right of the cell
			$this->SetXY($x+$w,$y);
		}
		//Go to the next line
		$this->Ln($h);
	}
 
	function CheckPageBreak($h)
	{
		//If the height h would cause an overflow, add a new page immediately
		if($this->GetY()+$h>$this->PageBreakTrigger)
			$this->AddPage($this->CurOrientation);
	}
 
	function NbLines($w,$txt)
	{
		//Computes the number of lines a MultiCell of width w will take
		$cw=&$this->CurrentFont['cw'];
		if($w==0)
			$w=$this->w-$this->rMargin-$this->x;
		$wmax=($w-2*$this->cMargin)*100/$this->FontSize;
		$s=str_replace("\r",'',$txt);
		$nb=strlen($s);
		if($nb>0 and $s[$nb-1]=="\n")
			$nb--;
		$sep=-1;
		$i=0;
		$j=0;
		$l=0;
		$nl=1;
		while($i<$nb)
		{
			$c=$s[$i];
			if($c=="\n")
			{
				$i++;
				$sep=-1;
				$j=$i;
				$l=0;
				$nl++;
				continue;
			}
			if($c==' ')
				$sep=$i;
			$l+=$cw[$c];
			if($l>$wmax)
			{
				if($sep==-1)
				{
					if($i==$j)
						$i++;
				}
				else
					$i=$sep+1;
				$sep=-1;
				$j=$i;
				$l=0;
				$nl++;
			}
			else
				$i++;
		}
		return $nl;
	}
} //end of class
 
/* contoh penggunaan dengan data diambil dari database mysql
 * 
 * 1. buatlah database di mysql
 * 2. buatlah tabel 'pegawai' dengan field: nip, nama, alamat, email dan website
 * 3. isikan beberapa contoh data ke tabel pegawai tersebut.
 * 
 * */
 
 
#ambil data dari DB dan masukkan ke array
$data = array();
/*$query = "SELECT * FROM isi_surat WHERE id='$id'";
$sql = mysql_query ($query) or die ("Error on Query Download Data : ".mysql_error());
while ($row = mysql_fetch_assoc($sql)) {
	array_push($data, $row);
}*/
 
//pilihan
$options = array(
	'filename' => 'surat_tugas'.$nip.'.pdf', //nama file penyimpanan, kosongkan jika output ke browser
	'destinationfile' => 'I', //I=inline browser (default), F=local file, D=download
	'paper_size'=>'A4',	//paper size: F4, A3, A4, A5, Letter, Legal
	'orientation'=>'P' //orientation: P=portrait, L=landscape
);
 
$tabel = new FPDF_AutoWrapTable($data, $options);
$tabel->printPDF();
?>