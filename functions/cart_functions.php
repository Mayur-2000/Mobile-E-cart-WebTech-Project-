<?php
	
	function total_price($cart){
		$prices = 0.0;
	
		if(is_array($cart)){
		  	foreach($cart as $mod_num => $qty){
		  		$price = getdevprice($mod_num);
		  		if($price){
		  			$prices += $price * $qty;
		  		}
		  	}
		}
		return $prices;
	}

	function total_items($cart){
		$items = 0;
		if(is_array($cart)){
			foreach($cart as $mod_num => $qty){
				$items += $qty;
			}
		}
		return $items;
	}
?>