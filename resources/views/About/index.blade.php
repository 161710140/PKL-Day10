@extends('layouts.admin')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
			  <div class="panel-heading"><h2><center>Traveler Database</h2></center>
			  	</div>
				</div>
		<br>
			  <div class="row">
          <div class="col-lg-9">
         <h2 class="title-1 s-b-2"><a href="{{ route('about.create') }}">Tambah</a></h2>
      <div class="table-responsive m-b-40">
             <table class="table table-striped table-bordered table-hover table-condensed table-earning">
              <thead>
							<tr class="success">
			  		  <th>No</th>
					  <th>Tentang saya</th>
					  <th colspan="3">Action</th>
			  		</tr>
				  	</thead>
				  	<tbody>
				  		<?php $nomor = 1; ?>
				  		@php $no = 1; @endphp
				  		@foreach($about as $data)
				  	  <tr>
				    	<td>{{ $no++ }}</td>
				    	<td>{{ $data->deskripsi }}</td>
</td>
<td>
	<form method="post" action="{{ route('about.destroy',$data->id) }}">
		<input name="_token" type="hidden" value="{{ csrf_token() }}">
		<input type="hidden" name="_method" value="DELETE">
		<button type="submit" class="btn btn-danger">Delete</button>
		<a class="btn btn-warning" href="{{ route('about.edit',$data->id) }}">Edit</a>
	</form>
</td>
<td>
</td>
				      </tr>
				      @endforeach	
				  	</tbody>
				  </table>
				</div>
			  </div>
			</div>	
		</div>
	</div>
</div>
@endsection