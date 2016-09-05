@extends ('layouts.index')
@section ('content')

<div class="section">
	<div class="card-panel cyan lighten-1 white-text">
		tampil data lengkap 
	</div>
	<div class="section">
		<div class="row">
			<div class="col s12">
				<h5>{{ $tampilkan->judul }}</h5>
				<div class="divider"></div>
				<p>{!! $tampilkan->isi !!}</p>
			</div>
		</div>
	</div>
</div>

@endsection