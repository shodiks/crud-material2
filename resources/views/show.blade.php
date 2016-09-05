@extends ('layouts.index')
@section ('content')
<div class="section">
</div>
	<div class="card-panel blue darken-4  white-text">show</div>
<!--- cari  /!-->
<div class="section">
	<form action="{{ url('query') }}" method="GET">
		<div class="row">
			<div class="input field col s12">
				
				<label for="title">cari<input type="text" class="validate" name="cari"></label>
<button type="submit" class="btn waves-light waves-effect right">Cari<i class="material-icons right">search</i></button>
			</div>
		</div>
	</form>
</div>

<!--- cari  /!-->

<!-- image card /!-->
<div class="row">
<div class="col m5">



`// SEKAT
<div class="card">
	<div class="card-image waves-effect waves-block waves-light">
	<!-->setting html::image</!-->
		{!! Html::image('img/background1.jpg', '', ['class' => 'activator']) !!}
	</div>

	<div class="card-content">
		<span class="card-title activator grey-text text-darken-4">card title<i class="material-icons right">more_vert</i></span>
		<p><a href="#">link</a></p>
	</div>
	<div class="card-reveal">
		<span class="card-title green-text text-darken-4">card title <i class="material-icons right">close</i></span>
		<p>here is more information</p>
	</div>
</div>
-----------------------------

`// SEKAT
<div class="card">
	<div class="card-image waves-effect waves-block waves-light">
	<!-->setting html::image</!-->
		{!! Html::image('img/background1.jpg', '', ['class' => 'activator']) !!}
	</div>

	<div class="card-content">
		<span class="card-title activator grey-text text-darken-4">card title<i class="material-icons right">more_vert</i></span>
		<p><a href="#">link</a></p>
	</div>
	<div class="card-reveal">
		<span class="card-title green-text text-darken-4">card title <i class="material-icons right">close</i></span>
		<p>here is more information</p>
	</div>
</div>
-----------------------------



</div>
</div>
<!-- ended /!-->


<div class="section">


@foreach ($datas as $data)
<div class="row">
	<div class="col s12">
		<h5>{{$data->judul}}</h5>
		<div class="divider"></div>
		<p >{!!substr($data->isi,0,200)!!}..</p>
		<a href="{{url('read',$data->id)}}" class="red darken-4 waves-effect waves-light btn "><i class="material-icons right">send</i>readmore</a>
		<a href="{{url('edit',$data->id)}}" class="light-blue waves-effect waves-light white-text btn"><i class="material-icons right">mode_edit</i>edit</a>
		<a href="{{url('delete',$data->id)}}" onclick="return confirm ('yakin mau delete ?')" class="waves-effect waves-light btn green darken-1  white-text">delete<i class="material-icons right">delete</i></a>
	</div>
</div>
@endforeach

{{$datas->render() }}
	
	

</div>
<div class="fixed-action-btn horizontal" style="bottom: 45px; right:24px;" >
<a  href="{{url('/add')}}" class="btn-floating btn-large red "><i class="material-icons">add</i></a>
</div>

@endsection