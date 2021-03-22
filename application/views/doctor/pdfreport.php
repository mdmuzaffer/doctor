<?php
/*echo"<pre>";
print_r($joineData);
die;*/


// create new PDF document
$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

// set document information
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('Md Doctor');
$pdf->SetTitle('Muzaffer');
$pdf->SetSubject('TCPDF Tutorial');
$pdf->SetKeywords('TCPDF, PDF, example, test, guide');

// set default header data
$pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE.' 006', PDF_HEADER_STRING);

// set header and footer fonts
$pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
$pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

// set default monospaced font
$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

// set margins
$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
$pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

// set auto page breaks
$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

// set image scale factor
$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

// set some language-dependent strings (optional)
if (@file_exists(dirname(__FILE__).'/lang/eng.php')) {
	require_once(dirname(__FILE__).'/lang/eng.php');
	$pdf->setLanguageArray($l);
}

// set font
$pdf->SetFont('dejavusans', '', 10);
// add a page
$pdf->AddPage();


// create some HTML content

	$image ='<img style="size:2px;" src="http://localhost/codeigniter/public/logo/md1.png"/>';

	$txt='<body style="position: relative;width: 21cm;height: 29.7cm;margin: 0 auto;color: #001028;background: #FFFFFF; font-family: Arial, sans-serif; font-size: 12px; font-family: Arial;">
	    <header class="clearfix" style="padding: 10px 0;margin-bottom: 30px;">
	  	<div id="logo" style="text-align: center;"><img src="'.$image.'">
	  	<br></div>
	    <h1 style="border-bottom: 1px solid #5D6975;color: #5D6975;font-size: 1.4em;line-height: 2.9px;font-weight: normal;text-align: center;margin-top: 10px;margin: 50px 0 0px 10px; color:olive;">
	    Patient / Doctor Details</h1>
	    </header>

	<table style="width: 100%;border-collapse: collapse; border-spacing: 0; margin-bottom: 20px;" class="table table-condensed">
    <thead>
      <tr>
        <th class="service" style="text-align: left;">
         <div id="project" float:left; text-align:left;>
	        <div style="color:green; margin-right:0px;font-size: 0.9em;"><span>Patient</span>Details</div>
	        <div><span>Patient :- </span>'.$joineData[0]->app_name.'</div>
	        <div><span>Mobile :- </span>'.$joineData[0]->app_phone.'</div>
	        <div><span>Email :- </span>'.$joineData[0]->app_email.'</div>
	        <div><span>Date :- </span>'.date("d-m-Y", strtotime($joineData[0]->app_created_at)).'</div>
	        <div><span>Address :- </span>'.$joineData[0]->app_address.'</div>
	      </div>
        </th>
        <th class="desc" style="text-align: right;">
       <div id="company" style="float:right;text-align: right; width:10px;">
        <div style="color:green">Doctor Detail</div>
        <div><span>Name: </span>'.$joineData[0]->name.'</div>
        <div><span>Spacility: </span>'.$joineData[0]->email.'</div>
        <div><span>Time: </span>'.$joineData[0]->email.'</div>
        <div><span>Check up: </span>'.date("d-m-Y", strtotime($joineData[0]->created)).'</div>
        <div><span>diseas: </span>fever</div>
      </div>
        </th>
      </tr>
    </thead>
</table>
<div>
    <h1 style="border-bottom: 1px solid #5D6975;
    color: #5D6975;
    font-size: 1.4em;
    line-height: 2.9px;
    font-weight: normal;
    text-align: center;
    margin-top: 10px; 
    color:#00afea;">Mediciens</h1>
    </br>
	</br>
</div>
<main>

  <table style="width: 100%;
border-collapse: collapse;
border-spacing: 0;
margin-bottom: 20px;">
    <thead>
      <tr style="font-weight:bold;color:red; padding:5px; font-size:10px;">
        <th class="service">SN</th>
        <th class="desc">MEDICIENCES</th>
        <th>PRICE</th>
        <th>QTY</th>
        <th>TOTAL</th>
      </tr>
    </thead>

    <tbody style="margin-top:10px;">';
		$no = 1;
		$total =0;
		foreach($joineData as $value){
    $txt.='<tr style="border: 1px solid black;">
    <td class="no">'.$no++.'</td>
    <td class="no">'.$value->medicine.'</td>
    <td class="no">'.$value->price.'</td>
    <td class="no">'.$value->quantity.'</td>
    <td class="no">'.$value->price.'</td>
    </tr>';
    $total+= $value->price;
	}

	$txt.='<tr>
        <td colspan="4" class="grand total" style="color:red;">GRAND TOTAL</td>
        <td class="grand total" style="color:red;">INR '.$total.'</td>
      </tr>
    </tbody>
  </table>

  	<div>
    <h1 style="border-bottom: 1px solid #5D6975;
    color: #5D6975;
    font-size: 1.4em;
    line-height: 2.9px;
    font-weight: normal;
    text-align: center;
    margin-top: 10px; 
    color:#00afea;"></h1>
    </br>
	</br>
</div>

  <div id="notices">
    <div>NOTICE:</div>
    <div class="notice">Hello with in 30 will be made on unpaid balances check up after 30 days will be change to see any patient</div>
  </div>
</main>
<footer style="color: #5D6975;
width: 100%;
height: 30px;
position: absolute;
bottom: 0;
border-top: 1px solid #C1CED9;
padding: 8px 0;
text-align: center;">
  Invoice was created on a computer and is valid without the signature and seal.
</footer>
</body>';

// output the HTML content
$pdf->writeHTML($txt, true, false, true, false, '');

// reset pointer to the last page
$pdf->lastPage();

//Close and output PDF document
$pdf->Output('example_006.pdf', 'I');
