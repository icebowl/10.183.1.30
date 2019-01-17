
<?php
	$amurl = array('icebowl.ioe','zulu.ioe');
	$pmurl = array('icebowl.ioe','zulu.ioe');
	//				  red       green     blue       yellow     cyan     magenta   orange     green2   violet    magenta2   blue2     green3   dark gray  light gray   tan     tan2
	$ncolor = array('#B35050','#50B350' ,'#5050B3' ,'#B3B350','#50B3B3','#B350B3','#DC7F32','#32DC7F','#7F32DC' ,'#DC327F','#327FDC','#7FDC32','#505050','#B3B3B3','#FDF6E3' ,'#FFEDBF');
	$fcolor = array('#fff','#fff','#fff','#fff','#fff','#fff','#fff','#fff','#fff','#fff','#fff','#fff','#fff','#fff','#000',	'#000');
	
	?>
<div class="row">
		<div class="col-2">
		<img src = "img/droidtocat.png" width = "100px">
	</div>
	<div class="col-3">
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
	</div>
	<div class="col-3">
		<?php
		echo "PM <br />";
		for ($i = 1; $i< 21; $i++){
			$r = rand(0, 11);
				$link  = "<span style='padding:1px 5px 1px 5px;background-color:".$ncolor[$r]."; color:".$fcolor[$r]."'><b>$i</b></span>";
				echo "<a href = 'http:10.183.2.".$i."' target = '_blank'>$link</a>";
				if ($i == 6) echo "<br />";
				if ($i == 12) echo "<br />";
				if ($i == 16) echo "<br />";
				
		}
		?>
	</div>
	
</div>
<?php
echo"<center>";
		$r = rand(0, 11); $link1  = "<span style='padding:1px 5px 1px 5px;background-color:".$ncolor[$r]."; color:".$fcolor[$r]."'><b>tritechsc.org</b></span>";
				echo "<a href = 'http://tritechsc.org' target = '_blank'>$link1</a>";
		$r = rand(0, 11); $link1  = "<span style='padding:1px 5px 1px 5px;background-color:".$ncolor[$r]."; color:".$fcolor[$r]."'><b>tritech-cyber.github.io</b></span>";
				echo "<a href = 'https://tritech-cyber.github.io' target = '_blank'>$link1</a>";
		$r = rand(0, 11); 	$link2  = "<span style='padding:1px 5px 1px 5px;background-color:".$ncolor[$r]."; color:".$fcolor[$r]."'><b>tritechsc.ksd.org/cyber/</b></span>";
				echo "<a href = 'http://tritechsc.ksd.org/cyber/' target = '_blank'>$link2</a>";
?>
	<br />
	<div class = "bbox"><a href = "https://10.183.3.1" target = "_blank"> Cyber DNS Register </a></div><br />
	<div class = "bbox"><a href = "https://www.nitrotype.com/" target = "_blank"> nitrotype.com </a></div><br />
	<div class = "bbox"><a href = "http://thetypingcat.com/" target = "_blank"> the typing cat </a></div><br />
	<div class = "bbox"><a href = "python/" target = "_blank"> python </a></div><br />
	<div class = "bbox"><a href = "https://www.netacad.com/courses/packet-tracer-download/" target = "_blank">Packet Tracer Register</a></div>

</center>	


<script>
function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
    }
}
</script>

