<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>
	<?php
	// add javascripts
	foreach($js as $j){
		echo '<script type="text/javascript" src="'.base_url($j).'"></script>';
	}
	
	//add styles
	foreach($css as $c){
    	echo '<link rel="stylesheet" type="text/css" href="'.base_url($c).'" />';
	}
	?>
    <script type="text/javascript">
    	$(document).ready(function()
		{
			//var upload_path = $('#upload_path').val();
			$("#file_upload").uploadify({
				'uploader'		: '<?=base_url()?>assets/uploadify/uploadify.swf',
				'script'		: '<?=site_url('welcome/uploadify')?>',
				'cancelImg'		: '<?=base_url()?>assets/uploadify/cancel.png',
				'folder'		: 'assets/uploads/',
				'fileDesc'		: 'Image Files',
				'fileExt'		: '*.jpg;*.jpeg;*.gif;*.png',
				'sizeLimit'		: 100 * 1024 * 1024,
				'multi'			: false,	
				'auto'			: true,
				'onError'		: function(a, b, c, d){
					if(d.status=404)
						alert('Could not find upload script');
					else if(d.type === "HTTP")
						alert('error'+d.type+": "+d.info);
					else if(d.type === "File Size")
						alert(c.name+' '+d.type+' Limit: '+Math.round(d.sizeLimit/1024)+'KB');
					else
						alert('error'+d.type+": "+d.text);
				},
				'onComplete'	: function(event, ID, fileObj, response, data){
					$("#uploaded_preview").html("<img src=\'<?=base_url()?>assets/uploads/thumbs/" +response+ "\' height=\'100px\' />");
					$("input:hidden.photograph").val(response);
				}
			});
		});
    </script>
	<style type="text/css">

	::selection{ background-color: #E13300; color: white; }
	::moz-selection{ background-color: #E13300; color: white; }
	::webkit-selection{ background-color: #E13300; color: white; }

	body {
		background-color: #fff;
		margin: 40px;
		font: 13px/20px normal Helvetica, Arial, sans-serif;
		color: #4F5155;
	}

	a {
		color: #003399;
		background-color: transparent;
		font-weight: normal;
	}

	h1 {
		color: #444;
		background-color: transparent;
		border-bottom: 1px solid #D0D0D0;
		font-size: 19px;
		font-weight: normal;
		margin: 0 0 14px 0;
		padding: 14px 15px 10px 15px;
	}

	code {
		font-family: Consolas, Monaco, Courier New, Courier, monospace;
		font-size: 12px;
		background-color: #f9f9f9;
		border: 1px solid #D0D0D0;
		color: #002166;
		display: block;
		margin: 14px 0 14px 0;
		padding: 12px 10px 12px 10px;
	}

	#body{
		margin: 0 15px 0 15px;
	}
	
	p.footer{
		text-align: right;
		font-size: 11px;
		border-top: 1px solid #D0D0D0;
		line-height: 32px;
		padding: 0 10px 0 10px;
		margin: 20px 0 0 0;
	}
	
	#container{
		margin: 10px;
		border: 1px solid #D0D0D0;
		-webkit-box-shadow: 0 0 8px #D0D0D0;
	}
	</style>
</head>
<body>

<div id="container">
	<h1>Select image to upload</h1>

	<div id="body">
   		<div style="padding:15px 0;">
            <div style="width:300px;float:left;">
                <input id="file_upload" name="file_upload" type="file"/>
            </div>
            <div style="float:left;" id="uploaded_preview">
            </div>
            <div style="clear:both;"></div>
        </div>
	</div>

	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds</p>
</div>

</body>
</html>