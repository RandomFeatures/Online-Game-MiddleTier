<?php
	
include ($_SERVER['DOCUMENT_ROOT'].'/lib/system/common/ws_purchase.class.php');

$tmplatename = 'buy_bucks.tpl.php';

//webservice object
$objPurchase=new purchase_webservice();
//get list of products into a PHP recordset
$_results = &$objPurchase->GetProductList();
$productlist = '';
$select = "checked"; 
if ($_results) 
while ($row = $_results->getRow()) 
{ //grab each row from the record set and display the results
	
	$productID = $row['productID'];
    $productName = $row['productName'];
    $price = $row['price'];
    $radID = $productName.$productID;
    $radValue = $productID.'|'.$productName.'Bucks|'.$price;
 	$productlist = $productlist.'<tr>
									<td>
										<input class="" id="'.$radID.'" name="product" type="radio" value="'.$radValue.'" '.$select.'/>
									</td>
									<td class="currency">
										<label for="'.$radID.'">'.$productName.'</label>
									</td>
									<td>
										<div class="bucks" />
									</td>
									<td class="price">
										<label for="'.$radID.'">
											<span class="total_price">$'.$price.'.00</span>
											<span class="currency_code">USD</span>
									  	</label>
									</td>
									<td class="discount">
									  	<label for="'.$radID.'">&nbsp;</label>
									</td>
								</tr>' ; 
 	$select = "unchecked"; 
    
}
//clean up	
unset($objPurchase);	
unset($_results);

?>