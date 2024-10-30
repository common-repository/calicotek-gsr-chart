<!-- start get options from database -->
<?php // settings_fields('lcgmv_chart_plugin_options'); ?>
<?php $options = get_option('cct_gsr_chart_options'); ?>
<!-- end get options from database -->

<!-- start convert values to variables for calculation -->
<?php $goldspot = $options['gold_spot']; ?>
<?php $silverspot = $options['silver_spot']; ?>
<?php $platinumspot = $options['platinum_spot']; ?>
<?php $palladiumspot = $options['palladium_spot']; ?>

<!-- Start Calculation formulas-->
<?php
//ratio's
$gold2silver_ratio = $goldspot / $silverspot;
$gold2platinum_ratio = $goldspot / $platinumspot; 
$gold2palladium_ratio = $goldspot / $palladiumspot; 
$silver2platinum_ratio = $silverspot / $platinumspot; 
$silver2palladium_ratio = $silverspot / $palladiumspot; 
$platinum2palladium_ratio = $platinumspot / $palladiumspot; 
// gold
$gold_eagle_1oz_buy = $goldspot + 8;
$gold_eagle_1oz_sell = $goldspot + 88;
$gold_eagle_halfoz_buy = $goldspot * 0.5+2;
$gold_eagle_halfoz_sell = $goldspot * 0.5+2; 
$gold_eagle_quarteroz_buy = $goldspot *0.25-6.5;
$gold_eagle_quarteroz_sell = $goldspot *0.25+45.5;
$gold_eagle_tenthoz_buy = $goldspot *0.1-8;
$gold_eagle_tenthoz_sell = $goldspot *0.1+32; 
$gold_buffalo_1oz_buy = $goldspot +8;
$gold_buffalo_1oz_sell = $goldspot +88; 
$gold_maple_1oz_buy = $goldspot -7;
$gold_maple_1oz_sell = $goldspot +80; 
$gold_krugerrand_1oz_buy = $goldspot -10;
$gold_krugerrand_1oz_sell = $goldspot +78; 
$gold_barcard_1oz_buy = $goldspot -32;
$gold_barcard_1oz_sell = $goldspot +45; 
$gold_liberty_xfau_20_buy = $goldspot *0.9675-20;
$gold_liberty_xfau_20_sell = $gold_liberty_xfau_20_buy +220; 
$gold_gaudens_xfau_20_buy = $goldspot *0.9675-20;
$gold_gaudens_xfau_20_sell = $gold_gaudens_xfau_20_buy +220; 
//silver
$d2013_usa_silver_eagle_1oz_buy = $silverspot +0;
$d2013_usa_silver_eagle_1oz_sell = $silverspot +12.25;
$d2013_usa_silver_eagle_1oz_20_500_buy = $silverspot +1.25;
$d2013_usa_silver_eagle_1oz_20_500_sell = $silverspot +5.25;
$cbd_usa_silver_eagle_1oz_buy = $silverspot ;
$cbd_usa_silver_eagle_1oz_sell = $silverspot +10.75; 
$cbd_usa_silver_eagle_1oz_20_500_buy = $silverspot +1.25;
$cbd_usa_silver_eagle_1oz_20_500_sell = $silverspot +4.75; 
$maple_2013_silver_1oz_buy = $silverspot ;
$maple_2013_silver_1oz_sell = $silverspot +10;
$maple_2013_silver_1oz_20_500_buy = $silverspot +0.8;
$maple_2013_silver_1oz_20_500_sell = $silverspot +5;
$cbd_silver_maple_1oz_buy = $silverspot ;
$cbd_silver_maple_1oz_sell = $silverspot +10;
$cbd_silver_maple_1oz_20_500_buy = $silverspot +0.8;
$cbd_silver_maple_1oz_20_500_sell = $silverspot +4.5;
$usa_90percent_silver_coin_buy = $silverspot ;
$usa_90percent_silver_coin_sell = $silverspot ; 
$d1000_dollar_face_value_bag_buy = $silverspot -0.5*715;
$d1000_dollar_face_value_bag_sell = $silverspot -0.5*715;
$d100_500_dollar_face_value_buy = $silverspot -1*715; 
$d100_500_dollar_face_value_sell = $silverspot +5*715; 
$d1_99_dollar_face_value_buy = $silverspot -1.5*715;
$d1_99_dollar_face_value_buy = $silverspot +5.5*715;
$d100_oz_engelhard_JM_999_bar_buy = $silverspot -0.8*100;
$d100_oz_engelhard_JM_999_bar_sell = $silverspot +1.5*100;
$d100_oz_999_generic_silver_bar_buy = $silverspot -1.75*100;
$d100_oz_999_generic_silver_bar_sell = $silverspot +1.4*100;
$d10_oz_999_generic_silver_bar_under_20_oz_buy = $silverspot -1.45*10;
$d10_oz_999_generic_silver_bar_under_20_oz_sell = $silverspot +8*10;
$d999_generic_silver_bar_oz_or_more_buy = $silverspot -0.75*10;
$d999_generic_silver_bar_oz_or_more_sell = $silverspot +3*10;
$d1_oz_999_generic_rounds_bars_1_19_buy = $silverspot -1.45;
$d1_oz_999_generic_rounds_bars_1_19_sell = $silverspot +8;
$d20_plus_oz_buy = $silverspot -0.75;
$d20_plus_oz_sell = $silverspot +3;
?>
<!-- end Calculation formulas-->