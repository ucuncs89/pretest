@extends('layouts')
@section('content')
<br>
<br>
<br>
<br>
		<div class="container">
			<div class="col-lg-12">
				<div class="card">
					<div class="card-header">Data Barang <a href="" class="btn btn-primary float-right">Create</a></div>
					<div class="card-body">
						<form action="{{route('barang.update',$barang->id)}}" method="post">
							@csrf
						<div class="form-group">
							<label>Kode Barang</label>
							<input type="text" name="kode_barang" value="{{ $barang->kode_barang }}" required class="form-control">
						</div>
						<div class="form-group">
							<label>Nama Barang</label>
							<input type="text" name="nama_barang" value="{{ $barang->nama_barang }}" required class="form-control">
						</div>
						<div class="form-group">
							<label>Harga Jual</label>
							<input type="number" name="harga_jual" value="{{ $barang->harga_jual }}" required class="form-control">
						</div>
						<div class="form-group">
							<label>Harga Beli</label>
							<input type="number" name="harga_beli" value="{{ $barang->harga_beli }}" required class="form-control">
						</div>
						<div class="form-group">
							<label>Satuan</label>
							<select class="form-control" name="satuan" required>
								
								<option value="Pax" {{ $barang->satuan == "Pax" ? "selected" : "" }}>Pax</option>
								<option value="Unit" {{ $barang->satuan == "Unit" ? "selected" : "" }}>Unit</option>
							</select>
						</div>
						<div class="form-group">
							<label>Kategori</label>
							<select class="form-control" name="kategori" required>
								<option value="Buku" {{ $barang->kategori == "Buku" ? "selected" : "" }}>Buku</option>
								<option value="Pensil" {{ $barang->kategori == "Pensil" ? "selected" : "" }}>Pensil</option>
								<option value="Solasi" {{ $barang->kategori == "Solasi" ? "selected" : "" }}>Solasi</option>
							</select>
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