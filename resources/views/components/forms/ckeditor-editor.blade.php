<form method="post" action="{{ route('news.store')}}" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <textarea id="editor" class="ckeditor form-control" name="message"></textarea>
        <button type="submit" class="btn">Envoyer</button>
    </div>
</form>