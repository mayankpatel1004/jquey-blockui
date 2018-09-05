<script type="text/javascript" src="jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="jquery.blockUI.js"></script>
<script type="text/javascript">
jQuery.noConflict();
jQuery(document).ready(function() { 
    jQuery('#open_block').click(function() { 
        jQuery.blockUI({ 
            message: jQuery('#displayBox'), 
            css: { 
                top:  (jQuery(window).height() - 400) /2 + 'px', 
                left: (jQuery(window).width() - 400) /2 + 'px', 
                width: '400px' 
            } 
        }); 
        //setTimeout(jQuery.unblockUI, 10000);
		var isBlocked = jQuery('#elementId').data('blockUI.isBlocked'); 
		if(isBlocked == true)
		{
			jQuery.unblockUI();
		}
    }); 
}); </script>
<div onClick="">
    <div id="open_block">Show Content</div>
    <div id="displayBox" style="display:none;">
        <img src="Chrysanthemum.jpg" width="400" /><div onClick="jQuery.unblockUI();">Close</div>
    </div>
</div>
<style type="text/css">
.frm input{width:100px;}
</style>