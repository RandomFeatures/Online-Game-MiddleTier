<!DOCTYPE html PUBLIC"-// W3C//DTD XHTML 1.0 Transitional//EN"" http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <meta http-equiv="Content-type" content="text/html; charset=utf-8"/>
    <title>A Little Entertainment</title>
    <link href="public/css/buy.css" rel="stylesheet" type="text/css"/>
  </head>
  <script>
		function redirectOutput(myForm) {
			var w = window.open('about:blank','Popup_Window','width=800,height=800,toolbar=yes,location=yes,directories=yes,status=yes,menubar=yes,scrollbars=yes,copyhistory=yes,resizable=yes');
			myForm.target = 'Popup_Window';

			return true;
		}
  </script>
  <body id="MyGame" class="MyGame_bucks">
    <div class="border01-tr"> 
      <div class="border01-tl"> 
        <div class="border01-br"> 
          <div class="border01-bl"> 
            <div class="border-content"> 

              <div id="bannerBox">
                <div class="banner">
                  <img src="public/images/banner01.png"/>
                </div>
              </div>

              <div id="productlist">
                <div id="main">
                  <div id="purchase">
                    <form action="http://[var.myserver]/index.php" method="post" id="buy_bucks" target="_blank">

                      <div id="package_select_box" class="clearfix">
                        <div class="head">Bucks
                        </div>
                        <div class="content package_two_column clearfix">
                          <div class="column_outer column_bucks">
                            <div class="upsell">Purchase locked items early, get power potions and more!
                            </div>	
                            <table cellpadding="0" cellspacing="0" border="0" class="productTable">
                              [var.productlist;htmlconv=no;protect=no;noerr]
                            </table>
                          </div>
                          <div class="column_outer column_power">
                          </div>
                        </div>
                      </div>

                      <input id="paysystem" name="paysystem" type="hidden" value="1">
                      <div id="ppbutton" class="clearfix">
                        <input type="image" src="https://www.paypal.com/en_US/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
                      </div>
                    </form>
                  </div>
                  <div class="ppfooter">
                    <img src="public/images/paypal_cards.png"/>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div> 
      </div> 
    </div> 
  </div>


</body>
</html>