<script type="text/javascript" src="jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="jquery.blockUI.js"></script>
<script type="text/javascript" src="jquery.corner.js"></script>
<script type="text/javascript">
jQuery.noConflict();
jQuery(document).ready(function() 
{	
	jQuery("#submit").click(function(){
		alert("form submit");
		return false;
	});
	
	jQuery('#open_block').click(function()
	{
		jQuery(this).corner();
		
		jQuery("#txtName").val('');
		
		jQuery.blockUI({ message: jQuery('#close_block'), css: {position: 'absolute', width: '500px', height:'300px',top: '20%'} }); 
		jQuery('.blockOverlay').attr('title','Click to unblock').click(jQuery.unblockUI);
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
				<td><input type="text" name="txtName" id="txtName" /></td>
			</tr>
			<tr>
				<td><input type="submit" id="submit" name="submit" value="Save" /></td>
				<td><input type="reset" name="reset" value="Cancel" /></td>
			</tr>
		</table>
	</form>
</div>