<div class="form-group">
      @csrf
    {!!Form::text('title',null,['class'=>'form-control texto','placeholder'=>'Título de la diapositiva'])!!}
</div>
<div class="form-group" d="divMain">
	<div id="divInputLoad">
	    <small class="note texto"><strong>Escoge una imágen:</strong>El nombre de la imágen no debe contener tíldes.</small>
		{!!Form::file('url_img',['class'=>'form-control texto', 'id'=>'url_img', 'accept'=>'image/*'])!!}

		<div class="form-group text-center img-prev"  id="file-preview-zone">
		</div>
	</div>
</div>
<div class="form-group">
   
	{!!Form::label('Descripción')!!}
	{!!Form::textarea('body',null,['class'=>'form-control texto','placeholder'=>'Descripción de la diapositiva','rows'=>'3'])!!}
</div>
<script>
    function readFile(input) {
    	document.getElementById('file-preview-zone').innerHTML="";

        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                var filePreview = document.createElement('img');
                filePreview.id = 'file-preview';
                filePreview.src = e.target.result;
                console.log(e.target.result);
 
                var previewZone = document.getElementById('file-preview-zone');
                previewZone.appendChild(filePreview);
            }
 
            reader.readAsDataURL(input.files[0]);
        }
    }
 
    var fileUpload = document.getElementById('url_img');
    fileUpload.onchange = function (e) {
        readFile(e.srcElement);
    }
 
</script>

