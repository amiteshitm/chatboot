<?php
$data="
<script>
$(function() {
	
	$('#jstree').jstree({
		
	    'core' : {
	        'animation' : 0,
	        'check_callback' : true,
	        'themes' : { 'stripes' : true },
    	   'data' :
";

$data=$data.$_POST['treedata'];

$data=$data."		  
	},
	'plugins' : [ 'dnd', 'contextmenu', 'massload', 'search', 'unique']
	});
		});
	</script>
    ";
	
	$file = fopen("save.php","w");
fwrite($file,$data);
fclose($file);
?>