<!doctype html>
<html>
<!-- Load an icon library to show a hamburger menu (bars) on small screens --><head>
<meta name="viewport" content="width=device-width, initial-scale=1">

<script>

function uploadFile(target) {
    document.getElementById("file-name").innerHTML = target.files[0].name;
}
</script>
<!-- load css files -->
<link rel="stylesheet" href="form.css">
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="css/bootstrap.min.css">
<script type = "text/javascript" src="js/jquery.min.js"></script>
<script type = "text/javascript" src="js/bootstrap.min.js"></script>
</head>
<style>
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
@media (min-width: 768px){
	.navbar{
		border-radius:0px !important;
	}
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
/*-----------------End Nav bar css---------------------*/
/* to design input file box */

.file-box{
	display: inline-block;
	width: 107%;
    padding: 3px 3px 3px 3px;
    box-sizing: border-box;
	width:100%;
    height: 45px;
    border: 1px solid #ccc;
    border-radius: 3px;
    resize: vertical;
    background: white;
    font-size: 13px;
	font-family: inherit;
    font-size: inherit;
    line-height: inherit;
}
.messages {
	height:315px !important;
}
.row .col-md-2{
	margin-top:10px;
}
.topnav a:hover{
	background-color:#ffffff;
	text-decoration:none;
}
.topnav{
	background:#333;
}
.top_menu{
	background:#333;
}
</style>
<body>

<!-- start nav bar -->
<nav class="navbar" style="margin-bottom: 0px;">
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
                    	

       					<li class="mar-top-10"><a href="index.php">FAQ BOT</a></li>
        				<li class="active"><a class="mar-top-10" href="qnabot.php">QNA BOT</a></li>
                       
      				</ul>
    			</div><!--/.nav-collapse -->
		</nav>
<!-- end nav bar -->
<!-- start body -->
<div style="background-color:#F2F2F2 !important;">
<div class="container">
  <form action="">
  <div class="row">
  <!-- start input box -->
    
    <div class="col-md-1" >&nbsp;</div>
      <div class="col-md-2" >
      <select id="businessSegment" name="businessSegment">
        <option value="Retail">Retail</option>
        <option value="Heath Care/">Heath Care/</option>
        <option value="Financial Services">Financial Services/</option>
      </select>
      </div>
      <div class="col-md-2">
 <select id="businessVertical" name="businessVertical">
        <option value="Sales">Sales</option>
        <option value="Support">Support</option>
        <option value="Complaint">Complaint</option>
        <option value="Offers">Offers</option>
      </select>
      </div>
      <div class="col-md-2">
 <select id="Brand" name="Brand" >
        <option value="Samsung">Samsung</option>
        <option value="Apple">Apple</option>
        <option value="Sony">Sony</option>
      </select>
      </div>
      <div class="col-md-2">
      <input type="text" id="productType" name="productType" placeholder="Product Type" style="line-height: normal !important;">
      </div>
      <div class="col-md-2">
      <input type="text" id="productModel" name="productModel" placeholder="Product Model" style="line-height: normal !important;">
      </div>
      <div class="col-md-1" >&nbsp;</div>
      </div>
       <div class="row"><div class="col-md-12"> &nbsp;</div>
       </div>
      <!-- end input box -->
      <div class="row">
<!-- file browse section -->
  <div class="col-md-2"> &nbsp;</div>
<div class="inputfile-box col-md-4">
  <input type="file" accept="application/*" name="file" id="file" onChange="uploade_file()" class="form-control" style="display:none;">
<label for="file" style="padding-top:0px !important; width:100%;padding-right: 0px; font-weight:normal">
      <span id="file-name" class="file-box">Click here to select a file</span> 
    
    <!--span class="file-button">
      <i class="fa fa-upload" aria-hidden="true"></i>
      Select File
    </span-->
  </label>
</div>


<div class="col-md-4">
    <input type="submit" onClick="uploade_file()" value="Upload File" name="uploade-file" id="uploade-file" class="form-control" style="background-color: #4caf50; color: #fff; font-size: 17px; height: 45px; margin-top: 0px;">
    </div>
    <div class="col-md-2"> &nbsp;</div>
    </div>
    <!-- End file browse section -->
    <!-- chat box section -->
        <div class="row"></div>
        <div class="col-md-1"> &nbsp;</div>
    <div class="chat_window col-md-10" style="padding-left:0px; padding-right:0px;">
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
</form>
  </div>
  </div>
  <script>
  //-----------------message send function------------
  function send_message(){
	  //------------received message in message input box
	  var message=$('#message_input').val();
	  //-----------check message empty or not---------
	  if(message==''){
		  alert('Please enter message !');
		  return false;
	  }
	  //---------received old message in message box (message window)
	  var old_message=$('#message_box').html();
	  //---------put new message display in message box (message window)
	  $('#message_box').html(old_message+ '<li class="message right appeared"><div class="text_wrapper"><div class="text">' + message +'</div></div>   		</li>');
	  //----------message input  box is empty-------
	  $('#message_input').val('');
	  //------------delay function for received function
	  setTimeout(function(){
		  //---------received old message in message box (message window)
		   var old_message=$('#message_box').html();
		    //------------received message for receiver end
		   var rec_message='hello';
	  $('#message_box').html(old_message+ '<li class="message left appeared"><div class="text_wrapper"><div class="text">'+ rec_message +'</div></div>   		</li>');
	  //---------------scroll bor fix buttom----------
	  $("#message_box").animate({ scrollTop: $(document).height() }, "slow");
  
}, 2000);
//---------------scroll bor fix buttom----------
	$("#message_box").animate({ scrollTop: $(document).height() }, "slow");
  	
  }
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

