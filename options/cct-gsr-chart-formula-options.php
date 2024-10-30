			<div class="wrap">
		<!-- Display Plugin Icon, Header, and Description -->
	  <table style="width:100%;">
		<tr>
		  <td><div class="icon32" id="icon-options-general"></div><h2><?php _e('CCT GSR Chart Formula Options Settings', 'cct_gsr_chart'); ?> 
		  </h2></td>
		  <td width="49%" align="right"><h2>Version : <?php echo CCT_GSR_CHART_VERSION; ?>  Developed by:<a href="http://calicotek.com/">calicotek.Com</a></h2></td>
		</tr>
	  </table><hr />
	  <!-- Start Donation Plugin Info Heml -->
	  <table class="table_settings_page" style="width:100%;border:1;  ">
			<tr>
			  <td style="background-color:#FFFF99;">		  
			  
		   
		    <!-- End Donation Plugin Info Heml -->

		<!-- Beginning of the Plugin Options Form -->
		<form method="post" action="options.php">
			<?php settings_fields('cct_gsr_chart_plugin_options'); ?>
			<?php $options = get_option('cct_gsr_chart_options'); ?>
		  
			<!-- Each Plugin Option Defined on a New Table Row -->
		  <table class="table_settings_page">

	<!-- Textbox Control -->
<tr><th style="background-color:yellow;">Configure Spot Prices</th><th style="background-color:yellow;">Ratio Formulas</th></tr>
<tr><th scope="row" align=right><?php _e('Todays Date', 'cct_gsr_chart'); ?></th><td><input type="datetime" size="35" name="cct_gsr_chart_options[updated]" value="<?php echo date("l M j, Y - g:i:a"); ?>" /></td></tr>
<tr><th scope="row" align=right><?php _e('Gold Spot', 'cct_gsr_chart'); ?></th><td><input type="text" size="10" name="cct_gsr_chart_options[gold_spot]" value="<?php echo $options['gold_spot']; ?>" required="Yes" /></td></tr>
<tr><th scope="row" align=right><?php _e('Silver Spot', 'cct_gsr_chart'); ?></th><td><input type="text" size="10" name="cct_gsr_chart_options[silver_spot]" value="<?php echo $options['silver_spot']; ?>" required="Yes" /></td></tr>
<tr><th scope="row" align=right><?php _e('Platinum Spot', 'cct_gsr_chart'); ?></th><td><input type="text" size="10" name="cct_gsr_chart_options[platinum_spot]" value="<?php echo $options['platinum_spot']; ?>" required="Yes" /></td></tr>			
<tr><th scope="row" align=right><?php _e('Palladium Spot', 'cct_gsr_chart'); ?></th><td><input type="text" size="10" name="cct_gsr_chart_options[palladium_spot]" value="<?php echo $options['palladium_spot']; ?>" required="Yes" /></td></tr>


			<!-- Ratio Formulas Setting Field Row -->
<tr><th style="background-color:yellow;">Ratio Type</th><th style="background-color:yellow;">Ratio Formulas</th></tr>
<tr><th scope="row" align=right>gold2silver_ratio&nbsp;</th><td><input type="text" size="40" name="cct_gsr_chart_options[gold2silver_ratio]" value="<?php echo $options['gold2silver_ratio']; ?>" /></td></tr>
 <tr><th scope="row" align=right>gold2platinum_ratio&nbsp;</th><td><input type="text" size="40" name="cct_gsr_chart_options[gold2platinum_ratio]" value="<?php echo $options['gold2platinum_ratio']; ?>" /></td></tr>
 <tr><th scope="row" align=right>gold2palladium_ratio&nbsp;</th><td><input type="text" size="40" name="cct_gsr_chart_options[gold2palladium_ratio]" value="<?php echo $options['gold2palladium_ratio']; ?>" /></td></tr>
 <tr><th scope="row" align=right>silver2platinum_ratio&nbsp;</th><td><input type="text" size="40" name="cct_gsr_chart_options[silver2platinum_ratio]" value="<?php echo $options['silver2platinum_ratio']; ?>" /></td></tr>
 <tr><th scope="row" align=right>silver2palladium_ratio&nbsp;</th><td><input type="text" size="40" name="cct_gsr_chart_options[silver2palladium_ratio]" value="<?php echo $options['silver2palladium_ratio']; ?>" /></td></tr>
 <tr><th scope="row" align=right>platinum2palladium_ratio&nbsp;</th><td><input type="text" size="40" name="cct_gsr_chart_options[platinum2palladium_ratio]" value="<?php echo $options['platinum2palladium_ratio']; ?>" /></td></tr>

			<!-- Gold Formulas Setting Field Row -->
<tr><th style="background-color:yellow;">Gold Type</th><th style="background-color:yellow;">Gold Formulas</th></tr>
 <tr><th scope="row" align=right>gold_eagle_1oz_buy&nbsp;</th><td><input type="text" size="40" name="cct_gsr_chart_options[gold_eagle_1oz_buy]" value="<?php echo $options['gold_eagle_1oz_buy']; ?>" /></td>
 <tr><th scope="row" align=right>gold_eagle_1oz_sell&nbsp; </th><td><input type="text" size="40" name="cct_gsr_chart_options[gold_eagle_1oz_sell]" value="<?php echo $options['gold_eagle_1oz_sell']; ?>" /></td></tr>
 <tr><th scope="row" align=right>gold_eagle_halfoz_buy&nbsp;</th><td><input type="text" size="40" name="cct_gsr_chart_options[gold_eagle_halfoz_buy]" value="<?php echo $options['gold_eagle_halfoz_buy']; ?>" /></td></tr>
 <tr><th scope="row" align=right>gold_eagle_halfoz_sell&nbsp;</th><td><input type="text" size="40" name="cct_gsr_chart_options[gold_eagle_halfoz_sell]" value="<?php echo $options['gold_eagle_halfoz_sell']; ?>" /></td></tr>
 <tr><th scope="row" align=right>gold_eagle_quarteroz_buy&nbsp;</th><td><input type="text" size="40" name="cct_gsr_chart_options[gold_eagle_quarteroz_buy]" value="<?php echo $options['gold_eagle_quarteroz_buy']; ?>" /></td></tr>
 <tr><th scope="row" align=right>gold_eagle_quarteroz_sell&nbsp;</th><td><input type="text" size="40" name="cct_gsr_chart_options[gold_eagle_quarteroz_sell]" value="<?php echo $options['gold_eagle_quarteroz_sell']; ?>" /></td></tr>
 <tr><th scope="row" align=right>gold_eagle_tenthoz_buy&nbsp;</th><td><input type="text" size="40" name="cct_gsr_chart_options[gold_eagle_tenthoz_buy]" value="<?php echo $options['gold_eagle_tenthoz_buy']; ?>" /></td></tr>
 <tr><th scope="row" align=right>gold_eagle_tenthoz_sell&nbsp;</th><td><input type="text" size="40" name="cct_gsr_chart_options[gold_eagle_tenthoz_sell]" value="<?php echo $options['gold_eagle_tenthoz_sell']; ?>" /></td></tr>
 <tr><th scope="row" align=right>gold_buffalo_1oz_buy&nbsp;</th><td><input type="text" size="40" name="cct_gsr_chart_options[gold_buffalo_1oz_buy]" value="<?php echo $options['gold_buffalo_1oz_buy']; ?>" /></td></tr>
 <tr><th scope="row" align=right>gold_buffalo_1oz_sell&nbsp;</th><td><input type="text" size="40" name="cct_gsr_chart_options[gold_buffalo_1oz_sell]" value="<?php echo $options['gold_buffalo_1oz_sell']; ?>" /></td></tr>
 <tr><th scope="row" align=right>gold_maple_1oz_buy&nbsp;</th><td><input type="text" size="40" name="cct_gsr_chart_options[gold_maple_1oz_buy]" value="<?php echo $options['gold_maple_1oz_buy']; ?>" /></td></tr>
 <tr><th scope="row" align=right>gold_maple_1oz_sell&nbsp;</th><td><input type="text" size="40" name="cct_gsr_chart_options[gold_maple_1oz_sell]" value="<?php echo $options['gold_maple_1oz_sell']; ?>" /></td></tr>
 <tr><th scope="row" align=right>gold_krugerrand_1oz_buy&nbsp;</th><td><input type="text" size="40" name="cct_gsr_chart_options[gold_krugerrand_1oz_buy]" value="<?php echo $options['gold_krugerrand_1oz_buy']; ?>" /></td></tr>
 <tr><th scope="row" align=right>gold_krugerrand_1oz_sell&nbsp;</th><td><input type="text" size="40" name="cct_gsr_chart_options[gold_krugerrand_1oz_sell]" value="<?php echo $options['gold_krugerrand_1oz_sell']; ?>" /></td></tr>
 <tr><th scope="row" align=right>gold_barcard_1oz_buy&nbsp;</th><td><input type="text" size="40" name="cct_gsr_chart_options[gold_barcard_1oz_buy]" value="<?php echo $options['gold_barcard_1oz_buy']; ?>" /></td></tr>
 <tr><th scope="row" align=right>gold_barcard_1oz_sell&nbsp;</th><td><input type="text" size="40" name="cct_gsr_chart_options[gold_barcard_1oz_sell]" value="<?php echo $options['gold_barcard_1oz_sell']; ?>" /></td></tr>
 <tr><th scope="row" align=right>gold_liberty_xfau_20_buy&nbsp;</th><td><input type="text" size="40" name="cct_gsr_chart_options[gold_liberty_xfau_20_buy]" value="<?php echo $options['gold_liberty_xfau_20_buy']; ?>" /></td></tr>
 <tr><th scope="row" align=right>gold_liberty_xfau_20_sell&nbsp;</th><td><input type="text" size="40" name="cct_gsr_chart_options[gold_liberty_xfau_20_sell]" value="<?php echo $options['gold_liberty_xfau_20_sell']; ?>" /></td></tr>
 <tr><th scope="row" align=right>gold_gaudens_xfau_20_buy&nbsp;</th><td><input type="text" size="40" name="cct_gsr_chart_options[gold_gaudens_xfau_20_buy]" value="<?php echo $options['gold_gaudens_xfau_20_buy']; ?>" /></td></tr>
 <tr><th scope="row" align=right>gold_gaudens_xfau_20_sell&nbsp;</th><td><input type="text" size="40" name="cct_gsr_chart_options[gold_gaudens_xfau_20_sell]" value="<?php echo $options['gold_gaudens_xfau_20_sell']; ?>" /></td></tr>

			<!-- Silver Formulas Setting Field Row  -->
			<tr><th style="background-color:yellow;">Silver Type</th><th style="background-color:yellow;">Silver Formulas</th></tr>
 <tr><th scope="row" align=right>d2013_usa_silver_eagle_1oz_buy&nbsp; </th><td><input type="text" size="40" name="cct_gsr_chart_options[d2013_usa_silver_eagle_1oz_buy]" value="<?php echo $options['d2013_usa_silver_eagle_1oz_buy']; ?>" /></td></tr>
 <tr><th scope="row" align=right>d2013_usa_silver_eagle_1oz_sell&nbsp; </th><td><input type="text" size="40" name="cct_gsr_chart_options[d2013_usa_silver_eagle_1oz_sell]" value="<?php echo $options['d2013_usa_silver_eagle_1oz_sell']; ?>" /></td></tr>
 <tr><th scope="row" align=right>d2013_usa_silver_eagle_1oz_20_500_buy&nbsp;</th><td><input type="text" size="40" name="cct_gsr_chart_options[d2013_usa_silver_eagle_1oz_20_500_buy]" value="<?php echo $options['d2013_usa_silver_eagle_1oz_20_500_buy']; ?>" /></td></tr>
 <tr><th scope="row" align=right>d2013_usa_silver_eagle_1oz_20_500_sell&nbsp;</th><td><input type="text" size="40" name="cct_gsr_chart_options[d2013_usa_silver_eagle_1oz_20_500_sell]" value="<?php echo $options['d2013_usa_silver_eagle_1oz_20_500_sell']; ?>" /></td></tr>
 <tr><th scope="row" align=right>cbd_usa_silver_eagle_1oz_buy&nbsp;</th><td><input type="text" size="40" name="cct_gsr_chart_options[cbd_usa_silver_eagle_1oz_buy]" value="<?php echo $options['cbd_usa_silver_eagle_1oz_buy']; ?>" /></td></tr>
 <tr><th scope="row" align=right>cbd_usa_silver_eagle_1oz_sell&nbsp;</th><td><input type="text" size="40" name="cct_gsr_chart_options[cbd_usa_silver_eagle_1oz_sell]" value="<?php echo $options['cbd_usa_silver_eagle_1oz_sell']; ?>" /></td></tr>
 <tr><th scope="row" align=right>cbd_usa_silver_eagle_1oz_20_500_buy&nbsp;</th><td><input type="text" size="40" name="cct_gsr_chart_options[cbd_usa_silver_eagle_1oz_20_500_buy]" value="<?php echo $options['cbd_usa_silver_eagle_1oz_20_500_buy']; ?>" /></td></tr>
 <tr><th scope="row" align=right>cbd_usa_silver_eagle_1oz_20_500_sell&nbsp;</th><td><input type="text" size="40" name="cct_gsr_chart_options[cbd_usa_silver_eagle_1oz_20_500_sell]" value="<?php echo $options['cbd_usa_silver_eagle_1oz_20_500_sell']; ?>" /></td></tr>
 <tr><th scope="row" align=right>maple_2013_silver_1oz_buy&nbsp;</th><td><input type="text" size="40" name="cct_gsr_chart_options[maple_2013_silver_1oz_buy]" value="<?php echo $options['maple_2013_silver_1oz_buy']; ?>" /></td></tr>
 <tr><th scope="row" align=right>maple_2013_silver_1oz_sell&nbsp;</th><td><input type="text" size="40" name="cct_gsr_chart_options[maple_2013_silver_1oz_sell]" value="<?php echo $options['maple_2013_silver_1oz_sell']; ?>" /></td></tr>
 <tr><th scope="row" align=right>maple_2013_silver_1oz_20_500_buy&nbsp; </th><td><input type="text" size="40" name="cct_gsr_chart_options[maple_2013_silver_1oz_20_500_buy]" value="<?php echo $options['maple_2013_silver_1oz_20_500_buy']; ?>" /></td></tr>
 <tr><th scope="row" align=right>maple_2013_silver_1oz_20_500_sell&nbsp;</th><td><input type="text" size="40" name="cct_gsr_chart_options[maple_2013_silver_1oz_20_500_sell]" value="<?php echo $options['maple_2013_silver_1oz_20_500_sell']; ?>" /></td></tr>
 <tr><th scope="row" align=right>cbd_silver_maple_1oz_buy&nbsp;</th><td><input type="text" size="40" name="cct_gsr_chart_options[cbd_silver_maple_1oz_buy]" value="<?php echo $options['cbd_silver_maple_1oz_buy']; ?>" /></td></tr>
 <tr><th scope="row" align=right>cbd_silver_maple_1oz_sell&nbsp;</th><td><input type="text" size="40" name="cct_gsr_chart_options[cbd_silver_maple_1oz_sell]" value="<?php echo $options['cbd_silver_maple_1oz_sell']; ?>" /></td></tr>
 <tr><th scope="row" align=right>cbd_silver_maple_1oz_20_500_buy&nbsp;</th><td><input type="text" size="40" name="cct_gsr_chart_options[cbd_silver_maple_1oz_20_500_buy]" value="<?php echo $options['cbd_silver_maple_1oz_20_500_buy']; ?>" /></td></tr>
 <tr><th scope="row" align=right>cbd_silver_maple_1oz_20_500_sell&nbsp;</th><td><input type="text" size="40" name="cct_gsr_chart_options[cbd_silver_maple_1oz_20_500_sell]" value="<?php echo $options['cbd_silver_maple_1oz_20_500_sell']; ?>" /></td></tr>
 <tr><th scope="row" align=right>usa_90percent_silver_coin_buy&nbsp; </th><td><input type="text" size="40" name="cct_gsr_chart_options[usa_90percent_silver_coin_buy]" value="<?php echo $options['usa_90percent_silver_coin_buy']; ?>" /></td></tr>
 <tr><th scope="row" align=right>usa_90percent_silver_coin_sell&nbsp;</th><td><input type="text" size="40" name="cct_gsr_chart_options[usa_90percent_silver_coin_sell]" value="<?php echo $options['usa_90percent_silver_coin_sell']; ?>" /></td></tr>
 <tr><th scope="row" align=right>d1000_dollar_face_value_bag_buy&nbsp; </th><td><input type="text" size="40" name="cct_gsr_chart_options[d1000_dollar_face_value_bag_buy]" value="<?php echo $options['d1000_dollar_face_value_bag_buy']; ?>" /></td></tr>
 <tr><th scope="row" align=right>d1000_dollar_face_value_bag_sell&nbsp;</th><td><input type="text" size="40" name="cct_gsr_chart_options[d1000_dollar_face_value_bag_sell]" value="<?php echo $options['d1000_dollar_face_value_bag_sell']; ?>" /></td></tr>
 <tr><th scope="row" align=right>d100_500_dollar_face_value_buy&nbsp; </th><td><input type="text" size="40" name="cct_gsr_chart_options[d100_500_dollar_face_value_buy]" value="<?php echo $options['d100_500_dollar_face_value_buy']; ?>" /></td></tr>
 <tr><th scope="row" align=right>d100_500_dollar_face_value_sell&nbsp;</th><td><input type="text" size="40" name="cct_gsr_chart_options[d100_500_dollar_face_value_sell]" value="<?php echo $options['d100_500_dollar_face_value_sell']; ?>" /></td></tr>
 <tr><th scope="row" align=right>d1_99_dollar_face_value_buy&nbsp;</th><td><input type="text" size="40" name="cct_gsr_chart_options[d1_99_dollar_face_value_buy]" value="<?php echo $options['d1_99_dollar_face_value_buy']; ?>" /></td></tr>
 <tr><th scope="row" align=right>d1_99_dollar_face_value_sell&nbsp;</th><td><input type="text" size="40" name="cct_gsr_chart_options[d1_99_dollar_face_value_sell]" value="<?php echo $options['d1_99_dollar_face_value_sell']; ?>" /></td></tr>
 <tr><th scope="row" align=right>d100_oz_engelhard_JM_999_bar_buy&nbsp;</th><td><input type="text" size="40" name="cct_gsr_chart_options[d100_oz_engelhard_JM_999_bar_buy]" value="<?php echo $options['d100_oz_engelhard_JM_999_bar_buy']; ?>" /></td></tr>
 <tr><th scope="row" align=right>d100_oz_engelhard_JM_999_bar_sell&nbsp;</th><td><input type="text" size="40" name="cct_gsr_chart_options[d100_oz_engelhard_JM_999_bar_sell]" value="<?php echo $options['d100_oz_engelhard_JM_999_bar_sell']; ?>" /></td></tr>
 <tr><th scope="row" align=right>d100_oz_999_generic_silver_bar_buy&nbsp;</th><td><input type="text" size="40" name="cct_gsr_chart_options[d100_oz_999_generic_silver_bar_buy]" value="<?php echo $options['d100_oz_999_generic_silver_bar_buy']; ?>" /></td></tr>
 <tr><th scope="row" align=right>d100_oz_999_generic_silver_bar_sell&nbsp;</th><td><input type="text" size="40" name="cct_gsr_chart_options[d100_oz_999_generic_silver_bar_sell]" value="<?php echo $options['d100_oz_999_generic_silver_bar_sell']; ?>" /></td></tr>
 <tr><th scope="row" align=right>d10_oz_999_generic_silver_bar_under_20_oz_buy&nbsp;</th><td><input type="text" size="40" name="cct_gsr_chart_options[d10_oz_999_generic_silver_bar_under_20_oz_buy]" value="<?php echo $options['d10_oz_999_generic_silver_bar_under_20_oz_buy']; ?>" /></td></tr>
 <tr><th scope="row" align=right>d10_oz_999_generic_silver_bar_under_20_oz_sell&nbsp;</th><td><input type="text" size="40" name="cct_gsr_chart_options[d10_oz_999_generic_silver_bar_under_20_oz_sell]" value="<?php echo $options['d10_oz_999_generic_silver_bar_under_20_oz_sell']; ?>" /></td></tr>
 <tr><th scope="row" align=right>d999_generic_silver_bar_oz_or_more_buy&nbsp;</th><td><input type="text" size="40" name="cct_gsr_chart_options[d999_generic_silver_bar_oz_or_more_buy]" value="<?php echo $options['d999_generic_silver_bar_oz_or_more_buy']; ?>" /></td></tr>
 <tr><th scope="row" align=right>d999_generic_silver_bar_oz_or_more_sell&nbsp;</th><td><input type="text" size="40" name="cct_gsr_chart_options[d999_generic_silver_bar_oz_or_more_sell]" value="<?php echo $options['d999_generic_silver_bar_oz_or_more_sell']; ?>" /></td></tr>
 <tr><th scope="row" align=right>d1_oz_999_generic_rounds_bars_1_19_buy&nbsp;</th><td><input type="text" size="40" name="cct_gsr_chart_options[d1_oz_999_generic_rounds_bars_1_19_buy]" value="<?php echo $options['d1_oz_999_generic_rounds_bars_1_19_buy']; ?>" /></td></tr>
 <tr><th scope="row" align=right>d1_oz_999_generic_rounds_bars_1_19_sell&nbsp;</th><td><input type="text" size="40" name="cct_gsr_chart_options[d1_oz_999_generic_rounds_bars_1_19_sell]" value="<?php echo $options['d1_oz_999_generic_rounds_bars_1_19_sell']; ?>" /></td></tr>
 <tr><th scope="row" align=right>d20_plus_oz_buy&nbsp;</th><td><input type="text" size="40" name="cct_gsr_chart_options[d20_plus_oz_buy]" value="<?php echo $options['d20_plus_oz_buy']; ?>" /></td></tr>
 <tr><th scope="row" align=right>d20_plus_oz_sell&nbsp;</th><td><input type="text" size="40" name="cct_gsr_chart_options[d20_plus_oz_sell]" value="<?php echo $options['d20_plus_oz_sell']; ?>" /></td></tr>
			
			</table>
			<p class="submit">
			<input type="submit" class="button-primary" value="<?php _e('Save Settings', 'cct_gsr_chart') ?>" />
			</p>
				</form>
			  </td><td width="99%" style="vertical-align:top;">
			  
			  <div class="cct_gsr_chart_formulas_info" width="100%">
				
				 <table class="table_chart_settings_page" height="250px">
        <th><strong>Current Spot</strong></th>
         <tr><td> <iframe src="http://www.coininfo.com/TickerWidgets/Narrow24HourWhite.html" style="border:0px #FFFFFF none;" name="coinInfoNarrow24HourWhiteTicker" scrolling="no" frameborder="0" marginheight="0px" marginwidth="0px" height="200px" width="130px"></iframe>
		  <A HREF="http://www.kitco.com/connecting.html"><IMG SRC="http://www.kitconet.com/charts/metals/gold/t24_au_en_usoz_2.gif" BORDER="0" ALT="[Most Recent Quotes from www.kitco.com]"></A>	  
	 </td></tr> </table>
	
	
	  <div  class="div_chart_settings_scroller">
		<strong>KitCo News Feed</strong><br/>
		<script id="feed-1380698067462501" type="text/javascript" src="http://rss.bloople.net/?url=http%3A%2F%2Fnews.kitco.com%2Frss%2F&limit=20&showtitle=false&striphtml=true&type=js&id=1380698067462501"></script>
	  </div>
				<hr/>
							
				<b><i>Formula Tips: </i></b><?php _e('<br/>&nbsp; * Star Charachter is for X Multiplication<br/>&nbsp; + Plus Charachter is for + addition<br/>&nbsp; - Minus Caharacter is for - Subtraction .<br/>&nbsp; / Slash Charachter is for / Devision<hr/>&nbsp; $goldspot <br/>&nbsp;$silverspot<br/>&nbsp;$platinumspot<br/>&nbsp;$palladiumspot<br/>&nbsp; These Shortcodes will pull and replace with the current gold spot price configured in the plugin.;', 'cct_gsr_chart'); ?>
<hr/> 
				<p>Version 			  
			 <?php echo CCT_GSR_CHART_VERSION; ?>  by CaliCoTek</p> <hr/>Like this Plugin? Please <a href="http://calicotek.com/donate">Donate!</a><hr/>
				Help its Creator Create more great plugins and Updates<a href="http://calicotek.com/donate">Donate Now!</a><hr />Need Help or Installition Instructions?... <a href="http://calicotek.com/donate">Try here</a>
				
				<hr/>Other Great Plugins<br> by CaliCoTek
			  <ul>
				<li>CaliCoTek Floating Social Slider</li>
				<li>Calicotek Membership Dashboard</li>
			  </ul>
			  </div>
			  </td>
			
			  </tr>
		  </table>

	  
<!-- End Plugin Options Page -->