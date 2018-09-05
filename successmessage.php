<link rel="stylesheet" type="text/css" media="screen" href="style.css">
<script type="text/javascript" src="jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="jquery.blockUI.js"></script>
<script type="text/javascript" src="jquery.corner.js"></script>
<script type="text/javascript">
jQuery.noConflict();
jQuery(document).ready(function() 
{	

jQuery('#open_block').click(function() { 
        jQuery.blockUI({ 
            theme:     true, 
            title:    'This is your title', 
            message:  '<p>This is your message.</p>', 
            timeout:   2000
        }); 
	}); 	
});
</script>
<div id="test" style="display:none;"></div>
<div id="open_block">Show Content</div>
<div id="close_block" style="display:none">
	<div onclick="jQuery.unblockUI();">Close block</div>
		<input type="button" id="sbt" class="sbt" name="sbt" value="Save" />
</div>