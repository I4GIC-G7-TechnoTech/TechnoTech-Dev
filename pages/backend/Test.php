<textarea id="my_editor"></textarea>

<iframe id="form_target" name="form_target" style="display:none"></iframe>

<form id="my_form" action="/upload/" target="form_target" method="post" enctype="multipart/form-data" style="width:0px;height:0;overflow:hidden">

	
	
	<input name="image" type="file" onchange="$('#my_form').submit();this.value='';">

</form>


<?php require_once('footer-backend.php') ?>

<script type="text/javascript">
	tinymce.init({
    selector: '#my_editor',
    plugins: ["image"],
    file_browser_callback: function(field_name, url, type, win) {
        if(type=='image') $('#my_form input').click();
    }
});
</script>