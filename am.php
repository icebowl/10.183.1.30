<?php
		echo "AM <br />";
		for ($i = 1; $i< 21; $i++){
			$r = rand(0, 11);
				$link  = "<span style='padding:1px 5px 1px 5px;background-color:".$ncolor[$r]."; color:".$fcolor[$r]."'><b>$i</b></span>";
				echo "<a href = 'http:10.183.1.".$i."' target = '_blank'>$link</a>";
				if ($i == 6) echo "<br />";
				if ($i == 12) echo "<br />";
				if ($i == 16) echo "<br />";
				
		}
		?>
