@extends('layouts')
@section('content')
<br>
<br>
<br>
<br>
		<div class="container">
			<div class="col-lg-12">
				<div class="card">
					<div class="card-header">Data Barang <a href="{{route('barang.create')}}" class="btn btn-primary float-right">Create</a></div>
					<div class="card-body">
						<table class="table table-inverse">
							<thead>
								<tr>
									<th>Kode Barang</th>
									<th>Nama Barang</th>
									<th>Harga Jual</th>
									<th>Harga Beli</th>
									<th>Satuan</th>
									<th>Kategori</th>
									<th>Action</th>
								</tr>
							</thead>
							<tbody>
								@foreach ($barang as $barang)
								
								<tr>
									<td>{{$barang->kode_barang}}</td>
									<td>{{$barang->nama_barang}}</td>
									<td>{{$barang->harga_jual}}</td>
									<td>{{$barang->harga_beli}}</td>
									<td>{{$barang->satuan}}</td>
									<td>{{$barang->kategori}}</td>
									<td><a href="{{route('barang.delete',$barang->id)}}" class="btn btn-danger">Delete</a> 
										<a href="{{route('barang.edit',$barang->id)}}" class="btn btn-success">Edit</a>
									</td>
								</tr>
								@endforeach
							</tbody>
						</table>
					</div>
				</div>
			</div>

		</div>

@endsection