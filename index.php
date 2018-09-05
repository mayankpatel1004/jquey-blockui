<script type="text/javascript" src="jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="jquery.blockUI.js"></script>
<script type="text/javascript" src="jquery.corner.js"></script>
<script type="text/javascript">
jQuery.noConflict();
jQuery(document).ready(function() 
{	
	jQuery('#open_block').click(function()
	{
		jQuery(this).corner();
		jQuery.blockUI({ message: jQuery('#close_block'), css: {position: 'absolute', width: 'auto'} }); 
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
/*.frm input{width:100px;}
#close_block{ background: none repeat scroll 0 0 #FFFFFF;border-radius: 150px 150px 150px 150px;height: 190px;padding: 70px 0 0;width: 260px;}
.blockUI{ border:0 !important; background:#F00; border-radius:0px;background-color:#A3A3A3 !important;}
.blockMsg{background-color:#C8C8C8 !important;}*/

.blockMsg{ width:350px !important; height:250px !important; padding: 100px 0px 0px 0px !important; border-radius: 150% 150% 150% 150% !important;top:10% !important;}
</style>