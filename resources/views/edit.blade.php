@extends('index')

@section('content')
	

<form action="{{ route('update', $instruction->id ) }}" method="POST">
	
	 {!! method_field('PUT') !!}
	

	<label for="name">Name of the instruction</label>
 	<input type="text" name="name" value="{{ $instruction->name }}"><br>
	<label for="category" >Category</label>
 	<select name="category">


 		

 			<option></option>
	 		<option {{ ($instruction->category == "Slider" ? "selected" : "") }} >Slider</option>
	 		<option {{ ($instruction->category== "Pages" ? "selected" : "") }} >Pages</option>
      <option {{ ($instruction->category== "Testimonials" ? "selected" : "") }} >Testimonials</option>


 	</select>


	<div class="form-group">
		<label for="input">Your input</label>
		<textarea class="form-control" name="content" id="input">{!! $instruction->content !!}</textarea>
	</div>
 {{ csrf_field() }}

 

	<button type="submit" class="btn btn-primary">Submit</button>


</form>


<script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
<script type="text/javascript">
var editor_config = {
    path_absolute : "/",
    selector: "textarea",
    plugins: [
      "advlist autolink lists link image charmap print preview hr anchor pagebreak",
      "searchreplace wordcount visualblocks visualchars code fullscreen",
      "insertdatetime media nonbreaking save table contextmenu directionality",
      "emoticons template paste textcolor colorpicker textpattern"
    ],
    toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image media",
    relative_urls: false,
    file_browser_callback : function(field_name, url, type, win) {
      var x = window.innerWidth || document.documentElement.clientWidth || document.getElementsByTagName('body')[0].clientWidth;
      var y = window.innerHeight|| document.documentElement.clientHeight|| document.getElementsByTagName('body')[0].clientHeight;

      var cmsURL = editor_config.path_absolute + 'laravel-filemanager?field_name=' + field_name;
      if (type == 'image') {
        cmsURL = cmsURL + "&type=Images";
      } else {
        cmsURL = cmsURL + "&type=Files";
      }

      tinyMCE.activeEditor.windowManager.open({
        file : cmsURL,
        title : 'Filemanager',
        width : x * 0.8,
        height : y * 0.8,
        resizable : "yes",
        close_previous : "no"
      });
    }
  };

  tinymce.init(editor_config);


	
</script>

@stop