<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>Link Preview</title>
		<link rel="stylesheet" class="cssStatics" type="text/css" href="css/stylesheet.css" />
		<link rel="stylesheet" class="cssButtons" type="text/css" href="css/linkPreview.css" />
		<script type="text/javascript" src="js/jquery.js" ></script>
		<script type="text/javascript" src="js/linkPreview.js" ></script>
		<script>
			$(document).ready(function() {
				$('.linkPreview').linkPreview();
				// setting max number of images $('.linkPreview').linkPreview({imageQuantity: "put here the number"});
				// e.g. $('.linkPreview').linkPreview({imageQuantity: 15});
			});
		</script>
	</head>
	<body >
		
		<div class="center">
			<div class="linkPreview">
				<div id="previewLoading"></div>
				<div style="float: left;">
					<textarea type="text" id="text" style="text-align: left" placeholder="What's in your mind"/>
					</textarea>
					<div style="clear: both"></div>
				</div>
				<div id="preview">
					<div id="previewImages">
						<div id="previewImage"><img src="img/loader.gif" style="margin-left: 43%; margin-top: 39%;" ></img>
						</div>
						<input type="hidden" id="photoNumber" value="0" />
					</div>
					<div id="previewContent">
						<div id="closePreview" title="Remove" ></div>
						<div id="previewTitle"></div>
						<div id="previewUrl"></div>
						<div id="previewDescription"></div>
						<div id="hiddenDescription"></div>
					
					</div>
					<div style="clear: both"></div>
				</div>
				<div style="clear: both"></div>
			</div>
		</div>
	</body>
</html>
