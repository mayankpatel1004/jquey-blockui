<script type="text/javascript" src="jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="jquery.blockUI.js"></script>
<script type="text/javascript">
jQuery.noConflict();
jQuery(document).ready(function() 
{
	
    jQuery('#open_block').click(function() { 
	
		//var height = (jQuery(window).height() - 400) /2 + 'px';
		//alert(jQuery(window).height());
	
        jQuery.blockUI({ 
            message: jQuery('<img src="http://farm6.static.flickr.com/5295/5512310721_23a4f5c6fe.jpg" />'), 
            css: { 
                //top:  (jQuery(window).height() - 400) /2 + 'px',
                //left: (jQuery(window).width() - 400) /2 + 'px', 
                //width: '400px' 
            } 
        }); 
		jQuery('.blockOverlay').attr('title','Click to unblock').click(jQuery.unblockUI);
 
        //setTimeout(jQuery.unblockUI, 2000); 
    }); 
});
</script>
<div id="open_block">Show Content</div>
<div id="close_block" style="display:none">
	<div onclick="jQuery.unblockUI();">Close block</div>
	<form name="frm" method="post" action="#" class="frm">
		<table align="center" cellpadding="0" cellspacing="0" border="1">
			<tr>
				<td>Name</td>
				<td><input type="text" name="txtName" /></td>
			</tr>
			<tr>
				<td><input type="submit" name="submit" value="Save" /></td>
				<td><input type="reset" name="reset" value="Cancel" /></td>
			</tr>
		</table>
	</form>
</div>
<style type="text/css">
.frm input{width:100px;}
</style>