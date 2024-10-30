<!-- start get options from database -->
<?php // settings_fields('lcgmv_chart_plugin_options'); ?>
<?php $options = get_option('cct_gsr_chart_options'); ?>
<!-- end get options from database -->
 <?php require "formulas.php";  ?>
<div class="div_wrapper_output_page">
<div align=center>Chart Last Updated: <?php echo $options['updated']; ?></div>
<!-- start Main Spot Prices Table Top -->

<table class="table_chart_output_page" width="99%">
  <tr>
	<th>Gold Spot Price</th>
	<th>silver Spot Price</th>
	<th>Platinum Spot Price</th>
	<th>Palladium Spot Price</th>
  </tr>
  <tr>
	<td><font color="#66FF11">&#36;</font><?php echo $options['gold_spot']; ?></td>
	<td><font color="#66FF11">&#36;</font><?php echo $options['silver_spot']; ?></td>
	<td><font color="#66FF11">&#36;</font><?php echo $options['platinum_spot']; ?></td>
	<td><font color="#66FF11">&#36;</font><?php echo $options['palladium_spot']; ?></td>
  </tr>
</table>
<!-- end Main Spot Prices Table Top -->

<!-- start calculated Spot Prices Table Top -->
<table class="table_chart_output_page" width="100%">
<tbody>
  <tr style="background-color: grey;">
	<th>Gold/silver Ratio </th>
	<th>Gold/Platinum Ratio</th>
	<th>Gold/Palladium Ratio</th>
	<th>silver/Platinum Ratio</th>
	<th>silver/Palladium Ratio</th>
	<th>Platinum/Palladium Ratio</th>
  </tr>
  <tr class="table_chart_output_page">
	<td><font color="#66FF11">&#36;</font><?php print ($gold2silver_ratio); ?></td>
	<td><font color="#66FF11">&#36;</font><?php print ($gold2platinum_ratio); ?></td>
	<td><font color="#66FF11">&#36;</font><?php print ($gold2palladium_ratio); ?></td>
	<td><font color="#66FF11">&#36;</font><?php print ($silver2platinum_ratio); ?></td>
	<td><font color="#66FF11">&#36;</font><?php print ($silver2palladium_ratio); ?></td>
	<td><font color="#66FF11">&#36;</font><?php print ($platinum2palladium_ratio); ?></td>
  </tr>
</tbody>
</table>
<!-- end calculated Spot Prices Table Top -->

  <table width="100%">
   <tr><td valign="top">
  
<!-- start gold buy and sell prices -->
	 <table class="table_chart_output_page" width="100%">
<tbody>
  <th>Gold Coin Type</th><th>Buy Price</th><th>Sell Price</th>
  
  <tr class="table_chart_output_page"><td>American Eagle  1 oz.</td>
	<td><font color="#66FF11">&#36;</font><?php print ($gold_eagle_1oz_buy); ?></td>
	<td><font color="#66FF11">&#36;</font><?php print ($gold_eagle_1oz_sell); ?></td>
  </tr>
  <tr class="table_chart_output_page"><td>American Eagle 1/2 oz.</td>
	<td><font color="#66FF11">&#36;</font><?php print ($gold_eagle_halfoz_buy); ?></td>
	<td><font color="#66FF11">&#36;</font><?php print ($gold_eagle_halfoz_sell); ?></td>
  </tr>
  <tr class="table_chart_output_page"><td>American Eagle 1/4 oz.</td>
	<td><font color="#66FF11">&#36;</font><?php print ($gold_eagle_quarteroz_buy); ?></td>
	<td><font color="#66FF11">&#36;</font><?php print ($gold_eagle_quarteroz_sell); ?></td>
  </tr>
  <tr class="table_chart_output_page"><td>American Eagle 1/10 oz.</td>
	<td><font color="#66FF11">&#36;</font><?php print ($gold_eagle_tenthoz_buy); ?></td>
	<td><font color="#66FF11">&#36;</font><?php print ($gold_eagle_tenthoz_sell); ?></td>
  </tr>
  <tr class="table_chart_output_page"><td>American Buffalo 1 oz.</td>
	<td><font color="#66FF11">&#36;</font><?php print ($gold_buffalo_1oz_buy); ?></td>
	<td><font color="#66FF11">&#36;</font><?php print ($gold_buffalo_1oz_sell); ?></td>  
  </tr>
  <tr class="table_chart_output_page"><td>Maple Leaf .9999 1 oz.</td>
	<td><font color="#66FF11">&#36;</font><?php print ($gold_maple_1oz_buy); ?></td>
	<td><font color="#66FF11">&#36;</font><?php print ($gold_maple_1oz_sell); ?></td>  
  </tr>
  <tr class="table_chart_output_page"><td>Krugerrand 1 oz.</td>
	<td><font color="#66FF11">&#36;</font><?php print ($gold_krugerrand_1oz_buy); ?></td>
	<td><font color="#66FF11">&#36;</font><?php print ($gold_krugerrand_1oz_sell); ?></td>  
  </tr>
  <tr class="table_chart_output_page"><td>Gold bars in Cards 1 oz.</td>
	<td><font color="#66FF11">&#36;</font><?php print ($gold_barcard_1oz_buy); ?></td>
	<td><font color="#66FF11">&#36;</font><?php print ($gold_barcard_1oz_sell); ?></td>  
  </tr>
  <tr class="table_chart_output_page"><td>XF/AU $20.00 Liberty</td>
	<td><font color="#66FF11">&#36;</font><?php print ($gold_liberty_xfau_20_buy); ?></td>
	<td><font color="#66FF11">&#36;</font><?php print ($gold_liberty_xfau_20_sell); ?></td>  
  </tr>
  <tr class="table_chart_output_page"><td>XF/AU $20.00 St. Gaudens</td>
	<td><font color="#66FF11">&#36;</font><?php print ($gold_gaudens_xfau_20_buy); ?></td>
	<td><font color="#66FF11">&#36;</font><?php print ($gold_gaudens_xfau_20_sell); ?></td>  
  </tr></table>
  <!-- end gold buy and sell prices table -->
	 
	 
	 </td><td valign="top">
<table class="table_chart_output_page">
    <tr style="background-color: grey;">
	<th>silver Coin Type</th><th>Buy Price</th><th>Sell Price</th>
  </tr>
  <!-- start silver buy and sell prices table -->
  <tr class="table_chart_output_page"><td>2013 American silver Eagle 1 oz. 1-19 pcs.</td>
	<td><font color="#66FF11">&#36;</font><?php print ($d2013_usa_silver_eagle_1oz_buy); ?></td>
	<td><font color="#66FF11">&#36;</font><?php print ($d2013_usa_silver_eagle_1oz_sell); ?></td>    
  </tr>  
  <tr class="table_chart_output_page"><td>2013 American silver Eagle 1 oz. 20-500 pcs.</td>
	<td><font color="#66FF11">&#36;</font><?php print ($d2013_usa_silver_eagle_1oz_20_500_buy); ?></td>
	<td><font color="#66FF11">&#36;</font><?php print ($d2013_usa_silver_eagle_1oz_20_500_sell); ?></td>    
  </tr>
  <tr class="table_chart_output_page"><td>Common back date silver Eagle 1 oz. 1-19 pcs</td>
	<td><font color="#66FF11">&#36;</font><?php print ($cbd_usa_silver_eagle_1oz_buy); ?></td>
	<td><font color="#66FF11">&#36;</font><?php print ($cbd_usa_silver_eagle_1oz_sell); ?></td>    
  </tr>
  <tr class="table_chart_output_page"><td>Common back date silver Eagle 1 oz. 20-500 pcs.</td>
	<td><font color="#66FF11">&#36;</font><?php print ($cbd_usa_silver_eagle_1oz_20_500_buy); ?></td>
	<td><font color="#66FF11">&#36;</font><?php print ($cbd_usa_silver_eagle_1oz_20_500_sell); ?></td>    
  </tr>
  <tr class="table_chart_output_page"><td>2013 Maple Leaf 1 oz. 1-19 pcs.</td>
	<td><font color="#66FF11">&#36;</font><?php print ($maple_2013_silver_1oz_buy); ?></td>
	<td><font color="#66FF11">&#36;</font><?php print ($maple_2013_silver_1oz_sell); ?></td>    
  </tr>
  <tr class="table_chart_output_page"><td>2013 Maple Leaf 1 oz. 20-500 pcs.</td>
	<td><font color="#66FF11">&#36;</font><?php print ($maple_2013_silver_1oz_20_500_buy); ?></td>
	<td><font color="#66FF11">&#36;</font><?php print ($maple_2013_silver_1oz_20_500_sell); ?></td>    
  </tr>
  <tr class="table_chart_output_page"><td>Maple Leaf back dates when available</td>
	<td><font color="#66FF11">&#36;</font><?php print ($cbd_silver_maple_1oz_buy); ?></td>
	<td><font color="#66FF11">&#36;</font><?php print ($cbd_silver_maple_1oz__sell); ?></td>    
  </tr>
  <tr class="table_chart_output_page"><td>Maple Leaf back dates when available 20-500 pcs.</td>
	<td><font color="#66FF11">&#36;</font><?php print ($cbd_silver_maple_1oz_20_500_buy); ?></td>
	<td><font color="#66FF11">&#36;</font><?php print ($cbd_silver_maple_1oz_20_500_sell); ?></td>    
  </tr>
  <tr class="table_chart_output_page"><td>U.S. 90 percent silver Coin</td>
	<td><font color="#66FF11">&#36;</font><?php print ($usa_90percent_silver_coin_buy); ?></td>
	<td><font color="#66FF11">&#36;</font><?php print ($usa_90percent_silver_coin_sell); ?></td>    
  </tr>
  <tr class="table_chart_output_page"><td>1000.00 face value bag</td>
	<td><font color="#66FF11">&#36;</font><?php print ($d1000_dollar_face_value_bag_buy); ?></td>
	<td><font color="#66FF11">&#36;</font><?php print ($d1000_dollar_face_value_sell); ?></td>    
  </tr>
  <tr class="table_chart_output_page"><td>100-500.00 face value</td>
	<td><font color="#66FF11">&#36;</font><?php print ($d100_500_dollar_face_value_buy); ?></td>
	<td><font color="#66FF11">&#36;</font><?php print ($d100_500_dollar_face_value_sell); ?></td>    
  </tr>
  <tr class="table_chart_output_page"><td>1.00 - 99.95 face value</td>
	<td><font color="#66FF11">&#36;</font><?php print ($d1_99_dollar_face_value_buy); ?></td>
	<td><font color="#66FF11">&#36;</font><?php print ($d1_99_dollar_face_value_sell); ?></td>
  </tr></table>
<!-- end silver buy and sell prices table -->
	 
	 
  </td><td valign="top">
	 <table class="table_chart_output_page" width="100%">
    <tr style="background-color: grey;">
	<th>bars &amp; rounds Type</th><th>Buy Price</th><th>Sell Price</th>
  </tr>
<!-- start bars and rounds prices table -->  
  <tr class="table_chart_output_page"><td>100 oz. engelhard/JM .999 bar</td>
	<td><font color="#66FF11">&#36;</font><?php print ($d100_oz_engelhard_JM_999_bar_buy); ?></td>
	<td><font color="#66FF11">&#36;</font><?php print ($d100_oz_engelhard_JM_999_bar_sell); ?></td>    
  </tr>
  <tr class="table_chart_output_page"><td>100 oz. .999 generic silver bar</td>
	<td><font color="#66FF11">&#36;</font><?php print ($d100_oz_999_generic_silver_bar_buy); ?></td>
	<td><font color="#66FF11">&#36;</font><?php print ($d100_oz_999_generic_silver_bar_sell); ?></td>    
  </tr>
  <tr class="table_chart_output_page"><td>.999 generic silver bar less then 20 oz |10oz|</td>
	<td><font color="#66FF11">&#36;</font><?php print ($d10_oz_999_generic_silver_bar_under_20_oz_buy); ?></td>
	<td><font color="#66FF11">&#36;</font><?php print ($d10_oz_999_generic_silver_bar_under_20_oz_sell); ?></td>    
  </tr>
  <tr class="table_chart_output_page"><td>.999 generic silver bar 20 oz or more</td>
	<td><font color="#66FF11">&#36;</font><?php print ($d999_generic_silver_bar_oz_or_more_buy); ?></td>
	<td><font color="#66FF11">&#36;</font><?php print ($d999_generic_silver_bar_oz_or_more_sell); ?></td>    
  </tr>
  <tr class="table_chart_output_page"><td>1 oz .999 generic rounds/bars 1-19 oz.</td>
	<td><font color="#66FF11">&#36;</font><?php print ($d1_oz_999_generic_rounds_bars_1_19_buy); ?></td>
	<td><font color="#66FF11">&#36;</font><?php print ($d1_oz_999_generic_rounds_bars_1_19_sell); ?></td>    
  </tr>
  <tr class="table_chart_output_page"><td>20 + oz.</td>
	<td><font color="#66FF11">&#36;</font><?php print ($d20_plus_oz_buy); ?></td>
	<td><font color="#66FF11">&#36;</font><?php print ($d20_plus_oz_sell); ?></td>    
  </tr>
</table>

	 </td></table>
<!-- end bars and rounds prices table -->