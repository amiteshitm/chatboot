<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>FAQ Page</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="dist/themes/default/style.css" />
<style>
body{
	margin-bottom:10px;
}
/*-----------------Start Nav bar css---------------------*/
nav{
	background-color:#333;
	
}
.active{
	background-color:#4CAF50;
}
.active a:hover{
	background-color:#4CAF50 !important;
}
a{
	color:#FFFFFF;
	font-weight:900;
}
a:hover{
	color:#000000;
}
.active a{
	color:#FFFFFF;
}
.navbar-brand{
	display:none;
	margin-top:25px !important;
	padding-top:9px !important;
}
@media (max-width: 767px)
{
	.navbar-brand{
		display:block;
	}
}
@media (min-width: 768px){
	.navbar{
		border-radius:0px !important;
	}
}

/*-----------------End Nav bar css---------------------*/
.col-md-6{
	padding-top:10px;
}
/*-----------------input file css----------*/ 
.file-box{
	display: inline-block;
    padding: 3px 3px 3px 3px;
    box-sizing: border-box;
	width:100%;
    height: 35px;
    border: 1px solid #ccc;
    border-radius: 3px;
    resize: vertical;
    background: white;
}
label{
	font-weight:normal;
}
@media (max-width: 340px){
	.file-box{
		height:70px;
	}
}
/*------------------------------------*/
@media (max-width: 321px){
	div button:nth-child(4) {
		margin-top:10px;
	}	
}
@media (max-width: 222px){
	div button:nth-child(3) {
		margin-top:10px;
	}	
}
#mobile_br{
		display:none;
	}
@media (max-width: 426px){
	#mobile_br{
		display:block;
	}
	.btn-lg{
		margin-top:10px;
	}
}	

</style>
</head>

<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="dist/jstree.min.js"></script>


<body>
<!-- Start Navbar -->
    	<nav class="navbar">
    			<div class="navbar-header">
      				<button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse" style="margin-top:25px !important;">
                         <span class="icon icon-bar" style="background-color:#FFFFFF;"></span>
                         <span class="icon icon-bar" style="background-color:#FFFFFF;"></span>
                         <span class="icon icon-bar" style="background-color:#FFFFFF;"></span>
                    </button>
                    <a class="navbar-brand" href="#"><span style="color:#FFFFFF;">MENU</span></a>
    			</div>
                <!--/.nav-collapse -->
    			<div class="collapse navbar-collapse">
                
      				<ul class="nav navbar-nav">
                    	
						<!---------page nag------------------->
       					<li class="active mar-top-10"><a href="index.php">FAQ BOT</a></li>
        				<li><a class="mar-top-10" href="qnabot.php">QNA BOT</a></li>
                       <!------------------------------------------->
      				</ul>
    			</div><!--/.nav-collapse -->
		</nav>
       
        <!--==========================================================================================================--->
        <div class="row" style="margin-right: 0px; margin-left:3px;">
<!------------------ create, delete,rename,save button------------------->
<div class="col-md-4 col-sm-8 col-xs-12">
    <button onclick="create_node();" class="btn btn-info btn-lg" type="button">Create</button>
    <button onclick="rename_node();" class="btn btn-warning btn-lg" type="button">Rename</button><br id="mobile_br">
    <button onclick="delete_node();" class="btn btn-danger btn-lg" type="button">Delete</button>
    <button onclick="save_data();" class="btn btn-success btn-lg" type="button" id="save_change">Save Change</button>
</div>
<!------------------------------------------>
</div>
<!-------------------------jstree------------------------------->
<div id="jstree" class="col-md-6">

</div>
<!----------------------------------------------------------------->
<!------------file uploade section----------->
<div class="col-md-6">
<div class="row">
<div class="col-md-6"><input type="file" name="file" id="file" class="form-control" style="display:none;">
<label for="file" style="width:100%">
      <span id="file-name" class="file-box">Click here to select a file</span> 
    </label>
</div>
<div class="col-md-6"><input type="submit" onClick="uploade_file()" value="Upload File" name="uploade-file" id="uploade-file" class="form-control" style="background-color: #4caf50; color: #fff; font-size: 17px;">
</div>
</div>
<div class="row"><div class="col-md-12">&nbsp;</div> </div>

<div class="col-md-12 chat_window " style=" padding:0px;">
	<div class="top_menu">
    	
         <div class="title">Question Answer Chat window</div>
         </div>
         <!-------------start message box------------------>
         <ul class="messages" id="message_box">
         <!-------------receive message------------------>
         <li class="message left appeared">
    			<div class="text_wrapper">
        				<div class="text">Hello amit! :)</div>
         			</div>
   		</li>
        <!-------------send message------------------>
        <li class="message right appeared">
    		<div class="text_wrapper">
        		<div class="text">Hi sumit! How are you?</div>
         	</div>
   		</li>
         <!-------------receive message------------------>
        <li class="message left appeared">
    		<div class="text_wrapper">
        		<div class="text">I\'m fine, thank you!</div>
         	</div>
   		</li>
   		</ul>
        <!-------------end message box------------------>
         <div class="bottom_wrapper clearfix">
         	<div class="message_input_wrapper">
            <!-------------message input box------------------>
         		<input class="message_input" id="message_input" onKeyUp="" placeholder="Type your message here...">
            </div>
            <div class="send_message" onClick="send_message()">
            	<div class="icon">
                </div>
                <div class="text">Send
                </div>
                
            </div>
        </div>
</div>

</div>
<!-------------------------------------------->
        <!--==========================================================================================================--->
        <!---------------------jstree data and create function----------------->
		<?php include'save.php'; ?>
<!------------------------------------------------------------->

<script>

<!----======================Start File Uploade Function===================================-->
function uploade_file(){
		  $('#uploade-file').val('Please Wait...');
  		  var name = document.getElementById("file").files[0].name;
		  var a='abc';
		  var form_data = new FormData();
		  var ext = name.split('.').pop().toLowerCase();
		  if(jQuery.inArray(ext, ['pdf' , 'doc' , 'ppt']) == -1) 
		  {
			    $('#uploade-file').val('Upload File');
		   		alert("Invalid File");
		   		return false;
		  }
		  var oFReader = new FileReader();
		  oFReader.readAsDataURL(document.getElementById("file").files[0]);
		  var f = document.getElementById("file").files[0];
		  var fsize = f.size||f.fileSize;
		  if(fsize > 20000000)
		  {
			   $('#uploade-file').val('Upload File');
		   		alert("Image File Size is very big");
				return false;
		  }
				  else
		  {
		   			form_data.append("file", document.getElementById('file').files[0]);
					
					var ref = $('#jstree').jstree(true),
    				sel = ref.get_selected();
					//form_data.append('sel', sel);
		   			$.ajax({	
						url:"upload.php",
						method:"POST",
						data:form_data,
						contentType: false,
						cache: false,
						processData: false,
						beforeSend:function(){
						$('#uploade-file').val('Please Wait...');
						},   
						success:function(data)
						{
							$('#uploade-file').val('Upload File');
							alert('File Uploaded Success.'+data);
						},
						fail: function(xhr, textStatus, errorThrown){
							alert('request failed');
							$('#uploade-file').val('Upload File');
						}
		  		 	});
		 }
}
<!-------------------------------------------------------------->
<!----======================Start File Save Function===================================-->
function save_data(){
	//get id selected node
	var ref = $('#jstree').jstree(true),
    sel = ref.get_selected();
	//deselect selected node
	$('#jstree').jstree(true).deselect_node('#'+sel);
	//close all node
	$("#jstree").jstree('close_all');
	//show message on save button
	$('#save_change').text('Please Wait...');
    //get tree data
	var v = $('#jstree').jstree(true).get_json();
	var mytext = JSON.stringify(v);
    //update tree data in save.php using ajax
	$.ajax({
          type: 'POST',
          url: "test.php",
          data: {treedata: mytext},
          dataType: "text",
          success: function(resultData) {
			  alert("Save Complete") ;
			  $("#jstree").jstree("open_node", $('#'+sel));
			  $('#save_change').text('Save Change');
		  //data successfully saved message store in variable resultData
		  }
    });
	
    
    return true;
}
<!-----------------------------end save function------------------------------------------>
</script>
<!----=======================End File Save Function===============================-->
<script>

<!----======================Start Create node Function===================================-->
function create_node() {
var ref = $('#jstree').jstree(true),
    sel = ref.get_selected();
if(!sel.length) { return false; }
sel = sel[0];
sel = ref.create_node(sel, {"type":"file"});
if(sel) {
   ref.edit(sel);
}

};
<!----======================End Create node Function===================================-->
<!----======================Start Rename node Function===================================-->
function rename_node() {
var ref = $('#jstree').jstree(true),
    sel = ref.get_selected();
if(!sel.length) { return false; }
sel = sel[0];
ref.edit(sel);
};
<!----======================end Rename node Function===================================-->
<!----======================Start Delete node Function===================================-->
function delete_node() {
	var ref = $('#jstree').jstree(true),
    sel = ref.get_selected();
	if(!sel.length) { return false; }
	ref.delete_node(sel);
	$("#jstree").jstree('close_all');
	var v = $('#jstree').jstree(true).get_json();
    var mytext = JSON.stringify(v);
    $.ajax({
          type: 'POST',
          url: "test.php",
          data: {treedata: mytext},
          dataType: "text",
          success: function(resultData) {//alert(resultData);alert("Save Complete")
		  }
    });
    //alert(mytext);
    return true;
};
<!----======================End Delete node Function===================================-->
$(function () {  
var to = false;
$('#jstree').keyup(function () {
if(to) { clearTimeout(to); }
to = setTimeout(function () {
  var v = $('#jstree').val();
  $('#jstree').jstree(true).search(v);
}, 250);
});
});


$(function () {
$("#jstree").jstree({
"core" : {
  "check_callback" : function (op, node, par, pos, more) {
        if(more && more.dnd) {                
           return true;
        }
    }
 },  
"plugins" : [ "contextmenu", "dnd", "search", "state", "types", "wholerow", "contextmenubtn" ]
 });
//-------------------node move function and save--------------- 
 $('#jstree').on("move_node.jstree", function (e, data) {
    	var v = $('#jstree').jstree(true).get_json();
   		var mytext = JSON.stringify(v);
    	$.ajax({
          type: 'POST',
          url: "test.php",
          data: {treedata: mytext},
          dataType: "text",
          success: function(resultData) {
			  //alert(resultData);alert("Save Complete") 
		  }
    	});
    
    return true;
 });  
});
</script>
<script type="text/javascript">
    $(document).ready(function(){
        $('input[type="file"]').change(function(e){
            var fileName = e.target.files[0].name;
            $('#file-name').text(fileName);
        });
    });
</script>
</body>
</html>
