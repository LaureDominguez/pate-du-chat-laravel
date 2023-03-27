<script src="//cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>

<script type="text/javascript">
    CKEDITOR.replace('message', {
        filebrowserUploadUrl: "{{route('ckeditor.image-upload', ['_token' => csrf_token() ])}}",
        filebrowserUploadMethod: 'form'
    });
</script>

<script>
    ClassicEditor
        .create( document.querySelector( '#editor' ) )
		.then( editor => {
			window.editor = editor;
		} )
        .catch( error => {
            console.error( error );
        } );
</script>