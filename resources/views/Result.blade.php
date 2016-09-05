@extends('layouts.index')
@section ('content')
<div class="section">
@if (count($hasil))
	<div class="card-panel cyan lighten-5 black-text">Hasil pencarian <b>{{$query}} </b> !</div>
	@foreach ($hasil as $data)
	<div class="row">
		<div class="col s12">
			<h4>{{$data->judul}}</h4>
			<div class="divider"></div>
			<p>{!!substr($data->isi,0,200)!!}...</p>
			<a href="{{url('read',$data->id)}}" class="btn waves-effect waves-light red white-text">Readmore<i class="material-icons small right">send</i></a>
			<a href="{{url('edit',$data->id)}}" class="btn waves-effect waves-light green lighten-1 white-text">edit <i class="material-icons small right">mode_edit</i></a>
			<a href="{{url('delete',$data->id)}}" class="btn waves-effect waves-light blue lighten-1 white-text">delete <i class="material-icons small right">delete</i></a>
		</div>
	</div>
	@endforeach


</div>
{{$hasil->render()}}
@else 	
	<div class="card-panel teal lighten-2 white-text">pencarian tidak ditemukan.... <b>{{$query}}</b></div> 
@endif 
@endsection