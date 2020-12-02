@extends('layouts')
@section('content')
<br>
<br>
<br>
<br>
		<div class="container">
			<div class="col-lg-12">
				<div class="card">
					<div class="card-header">Tambah Data Penjualan</div>
					<div class="card-body">
						<form action="{{route('penjualan.store')}}" method="post">
							@csrf
						<div class="form-group">
							<label>Tgl Faktur</label>
							<input type="date" name="tgl_faktur" required class="form-control">
						</div>
						<div class="form-group">
							<label>No Faktur</label>
							<input type="text" name="no_faktur" placeholder="No Faktur" required class="form-control">
						</div>
						<div class="form-group">
							<label>Nama Konsumen</label>
							<input type="text" name="nama_konsumen" placeholder="Nama Konsumen" required class="form-control">
						</div>
						<div class="form-group">
							<label> Kode Barang</label>
							<select class="form-control" name="kode_barang" required>
								@foreach($barang as $barang)
								<option value="{{$barang->id}}">{{$barang->kode_barang}} - {{$barang->nama_barang}} - IDR.{{$barang->harga_jual}}</option>
								@endforeach
							</select>
						</div>
						<div class="form-group">
							<label>Jumlah</label>
							<input type="number" name="jumlah" required class="form-control">
						</div>
						<div class="form-group">
							<button type="submit" name="submit" class="btn btn-primary">Submit</button>
						</div>
						</form>
					</div>
				</div>
			</div>

		</div>

@endsection