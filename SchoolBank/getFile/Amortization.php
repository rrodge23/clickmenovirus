<?php
								  
$html = '
<div class="row">
 <div class="col-md-12 text-center">
	<h3>Borrower Amortization Table</h3>
 </div>
 <br>
 <div class="col-md-12">
	<table>
		<tr>
			<td colspan="3" width="100%">Name: <span style="font-weight:bold;">dfsdf</span></td>
			<td>Date Generated: <span style="font-weight:bold;">sdfsdf</span></td>
		</tr>
		<tr>
			<td colspan="3" width="100%">Loan Amount: <span style="font-weight:bold;">sdfsdf</span></td>
			<td>Interest Amount: <span style="font-weight:bold;">sdfsdf</span></td>
		</tr>
		<tr>
			<td colspan="3" width="100%">Date Granted: <span style="font-weight:bold;">sdfsdf</span></td>
			<td>Date Maturity: <span style="font-weight:bold;">sdfsdfsdf</span></td>
		</tr>
		<tr>
			<td colspan="3" width="100%">Payment Interval: <span style="font-weight:bold;">sdfsdf</span></td>
			<td>No. of Amortization: <span style="font-weight:bold;">sdfsdf</span></td>
		</tr>
		<tr>
			<td colspan="3" width="100%">Term: <span style="font-weight:bold;">sdfsdf Days</span></td>
		</tr>
	</table>
	
  <div class="col-md-12">
 <hr>
<table class="amort_table">
	<thead>
		<tr class="headerrow">
			<th>Date</th>
			<th>Principal</th>
			<th>Interest</th>
			<th>Total</th>
		</tr>
	</thead>
		<tbody>';

	$html .='	<tr class="oddrow">
			<td>sdfsdf</td>
			<td>sdfsdf</td>
			<td>sdfsdf</td>
			<td>sdfsdfsdf</td>
		</tr>';
	
	
	$html.='
	<tr>
		<th>Grand Total</th>
		<th>dfsdf</th>
		<th>sdfsdfsd</th>
		<th>sdfsdf</th>
	</tr>
	</tbody>
	</table>
	</div>
	</div>
</div>
</div>
</div>
';


//==============================================================
//==============================================================
//==============================================================

include('mpdf.php');

$mpdf=new mPDF('c'); 

$mpdf->SetDisplayMode('fullpage');
$mpdf->SetTitle('Amortization');
$mpdf->SetAuthor('MyLoan User');
// LOAD a stylesheet
$stylesheet = file_get_contents('mpdfstyleA4.css');
$mpdf->WriteHTML($stylesheet,1);	// The parameter 1 tells that this is css/style only and no body/html/text

$mpdf->WriteHTML($html);

$mpdf->Output();

exit;
//==============================================================
//==============================================================
//==============================================================

?>