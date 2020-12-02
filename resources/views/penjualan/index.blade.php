@extends('layouts')
@section('content')
<br>
<br>
<br>
<br>
		<div class="container">
			<div class="col-lg-12">
				<div class="card">
					<div class="card-header">Data Penjualan <a href="{{route('penjualan.create')}}" class="btn btn-primary float-right">Tambah Penjualan</a></div>
					<div class="card-body">
						<table class="table table-inverse">
							<thead>
								<tr>
									<th>Tgl Faktur</th>
									<th>No Faktur</th>
									<th>Nama Konsumen</th>
									<th>Kode Barang</th>
									<th>Jumlah</th>
									<th>Harga Satuan</th>
									<th>Harga Total</th>
									<th>Action</th>
								</tr>
							</thead>
							<tbody>
								@foreach ($penjualan as $penjualan)
								
								<tr>
									<td>{{ $penjualan->tgl_faktur }}</td>
									<td>{{ $penjualan->no_faktur }}</td>
									<td>{{ $penjualan->nama_konsumen }}</td>
									<td>{{ $penjualan->nama_barang }}</td>
									<td>{{ $penjualan->jumlah }}</td>
									<td>{{ $penjualan->harga_satuan }}</td>
									<td>{{ $penjualan->harga_total }}</td>
									<td><a href="{{route('penjualan.delete',$penjualan->id)}}" class="btn btn-danger">Delete</a> 
										
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
