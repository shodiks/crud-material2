@section ('js')

<script type="text/javascript">

      function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#showgambar').attr('src', e.target.result);
            }

            reader.readAsDataURL(input.files[0]);
        }
    }

    $("#inputgambar").change(function () {
        readURL(this);
    });

</script>

@stop


@extends('layouts.index')
@section ('content')
<div class="section">
	<div class="card-panel blue darken-4 white-text">
		coba add
	</div>
	<div class="section">
		<form action="{{url('store')}}" method="POST" class="">
			{!! csrf_field() !!}
			<div class="row">
				<div class="input-field col s12">
					<input type="text" name="jud" class="validate">
					<label for="title">Judul</label>
				</div>
			</div>	
				<div class="row">
					<div class="input-field col s12">
						<textarea name="isi" class="materialize-textarea" id="textarea1"></textarea>
						<label for="textarea1">isi</label>
					</div>
				</div>

			<div class="row">
				<div class=" col s6">
					<img src="http://placehold.it/100x100" id="showgambar" style="max-width:200px; max-height:200px; float:left;">
				</div>
			</div>
			<div class="row">
				<div class="input-field col s6"></div>
			</div>

			<button type="submit" class="btn waves-effect waves-light"><i class="material-icons right">send</i>kirim</button>	
			
		</form>
	</div>
</div>
@endsection