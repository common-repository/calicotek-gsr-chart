		<div class="wrap">
		<!-- Display Plugin Icon, Header, and Description -->
	  <table style="width:100%;">
		<tr>
		  <td><div class="icon32" id="icon-options-general"></div><h2><?php _e('CCT GSR Chart Options Settings', 'cct-gsr-chart'); ?> 
		  </h2></td>
		  <td width="49%" align="right"><h2>Version : <?php echo CCT_GSR_CHART_VERSION; ?> ~ Developed by: <a href="http://calicotek.com/">CaliCoTek</a></h2></td>
		</tr>
	  </table><hr />

<!-- Beginning of the Plugin Options Form -->
<form method="post" action="options.php">
	<?php settings_fields('cct_gsr_chart_plugin_options'); ?>
	<?php $options = get_option('cct_gsr_chart_options'); ?>
		  
			<!-- Table Structure Containing Form Controls -->
			<!-- Each Plugin Option Defined on a New Table Row -->
		  
			

  <table><tr>
	    <td>		
		  <table class="table_chart_settings_page" style="width:500px; height:350px;">
<th colspan="2"><strong>Configure Spot Prices</strong></th>
				<!-- Textbox Control -->
			<tr>
			  <th scope="row" align=right><?php _e('Todays Date', 'cct_gsr_chart'); ?></th>
					<td>
					  <input type="datetime" size="35" name="cct_gsr_chart_options[updated]" value="<?php echo date("l M j, Y - g:i:a"); ?>" />
						<span style="color:#666666;margin-left:2px;"><?php _e('this field is auto populated', 'cct_gsr_chart'); ?></span>
					</td>
				</tr>
  <!-- Textbox Control -->
  <tr>
					<th scope="row"align=right><?php _e('Gold Spot', 'cct_gsr_chart'); ?><font size="+1" color="red"> *</font></th>
					<td>
						<input type="text" size="10" name="cct_gsr_chart_options[gold_spot]" value="<?php echo $options['gold_spot']; ?>" required="Yes" />
					  <span style="color:#666666;margin-left:2px;"><?php _e('Add the current gold spot price (example:78.62)', 'cct_gsr_chart'); ?></span>
					</td>
				</tr>
  <!-- Textbox Control -->
  <tr>
					<th scope="row"align=right><?php _e('Silver Spot', 'cct_gsr_chart'); ?><font size="+1" color="red"> *</font></th>
					<td>
						<input type="text" size="10" name="cct_gsr_chart_options[silver_spot]" value="<?php echo $options['silver_spot']; ?>" required="Yes" />
						<span style="color:#666666;margin-left:2px;"><?php _e('Add the current silver spot price (example:78.62)', 'cct_gsr_chart'); ?></span>
					</td>
				</tr>
  <!-- Textbox Control -->
  <tr>
					<th scope="row"align=right><?php _e('Platinum Spot', 'cct_gsr_chart'); ?><font size="+1" color="red"> *</font></th>
					<td>
						<input type="text" size="10" name="cct_gsr_chart_options[platinum_spot]" value="<?php echo $options['platinum_spot']; ?>" required="Yes" />
						<span style="color:#666666;margin-left:2px;"><?php _e('Add the current platinum spot price (example:78.62)', 'cct_gsr_chart'); ?></span>
					</td>
				</tr>
    <!-- Textbox Control -->
  <tr>
					<th scope="row"align=right><?php _e('Palladium Spot', 'cct_gsr_chart'); ?><font size="+1" color="red"> *</font></th>
					<td>
						<input type="text" size="10" name="cct_gsr_chart_options[palladium_spot]" value="<?php echo $options['palladium_spot']; ?>" required="Yes" />
						<span style="color:#666666;margin-left:2px;"><?php _e('Add the current palladium spot price (example:78.62)', 'cct_gsr_chart'); ?></span>
					</td>
				</tr>
    <!-- Textbox Control -->

				<tr valign="top" style="border-top:#dddddd 1px solid;">
				  <th scope="row"><hr/><?php _e('Database Options', 'cct_gsr_chart'); ?></th>
					<td><hr/>
						<label><input name="cct_gsr_chart_options[chk_default_options_db]" type="checkbox" value="1" <?php if (isset($options['chk_default_options_db'])) { checked('1', $options['chk_default_options_db']); } ?> /> <?php _e('Restore defaults upon plugin deactivation/reactivation', 'cct_gsr_chart'); ?></label>
					  <br /><span style="color:#666666;margin-left:2px;"><?php _e('Only check this if you want to reset plugin settings upon Plugin reactivation', 'cct_gsr_chart'); ?></span>
					</td>
				</tr>
  <tr><td colspan="2">
		    <p class="submit" align="center">
			<input type="submit" class="button-primary" value="<?php _e('Save Settings', 'cct_gsr_chart') ?>" />
		    <input type="submit" class="button-primary" value="<?php _e('GoTo Chart Page', 'cct_gsr_chart') ?>" />
  </p>  </td></tr>
		</table>
		  </td>
    <td>
	  <table class="table_chart_settings_page" height="300px">
        <th><strong>Current Spot</strong></th>
         <tr><td> <iframe src="http://www.coininfo.com/TickerWidgets/Narrow24HourWhite.html" style="border:0px #FFFFFF none;" name="coinInfoNarrow24HourWhiteTicker" scrolling="no" frameborder="0" marginheight="0px" marginwidth="0px" height="200px" width="130px"></iframe>
		   <hr/>
		  <A HREF="http://www.kitco.com/connecting.html"><IMG SRC="http://www.kitconet.com/charts/metals/gold/t24_au_en_usoz_2.gif" BORDER="0" ALT="[Most Recent Quotes from www.kitco.com]"></A>	  
	 </td></tr> </table></td>
	
	<td Width=99%>
	  <div  class="div_chart_settings_scroller">
		<strong>KitCo News Feed</strong><br/>
		<script id="feed-1380698067462501" type="text/javascript" src="http://rss.bloople.net/?url=http%3A%2F%2Fnews.kitco.com%2Frss%2F&limit=20&showtitle=false&striphtml=true&type=js&id=1380698067462501"></script>
	  </div>
	  
	</td></tr></table>
  
				</form>
	<hr/>
		  <h1 align=center>Chart Preview</h1>
		  <?php require "cct-gsr-chart-options-output.php";  ?>
		  
  </div> <!-- End Wrapper -->
  <hr/>
  <h1>Developed and Maintained by CaliCoTek at <a href="http://calicotek.com">CaliCoTek.Com</a></h1>
  <strong>Please Donate Allot Of Work Goes Into Developing This Great Tool... Help Support Us <a href="http://calicotek.com/donate">Click Here to Donate</a></strong>
