tinymce.init ({
	/*replace textarea.tinymce with WYSIWYG Editor*/
	selector: "textarea.tinymce",

	/* theme of editor */
	theme: "modern",
	skin: "lightgray",

	/* size of Editor */
	width: "100%",
	height: 250,

	/* display statusbar */
	statusbar: true,

	/* plugins */
	plugins: [
		"advlist autolink link image lists charmap print preview hr anchor pagebreak",
		"searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
		"save table contextmenu directionality emoticons template paste textcolor"
	],

	menubar: "edit",

	paste_as_text: true,

	/* toolbar */
	toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | print preview media fullpage | forecolor backcolor emoticons | paste"
});