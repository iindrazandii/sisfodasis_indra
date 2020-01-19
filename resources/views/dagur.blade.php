@extends('templates/default')
@section('content')
<div class="x_panel">
  <div class="x_title">
    <h2>Data Guru | <a href="/dagur/tambah" class="btn btn-outline-secondary btn-sm"> + Tambah Data Guru</a></h2>
    <div class="clearfix"></div>
  </div>
  <div class="x_content">
    <div class="row">
      <div class="col-sm-12">
        <div class="card-box table-responsive">
          <p class="text-muted font-13 m-b-30">
            Responsive is an extension for DataTables that resolves that problem by optimising the table's layout for different screen sizes through the dynamic insertion and removal of columns from the table.
          </p>
          <table id="datatable-responsive" class="table table-striped table-hover table-dark table-bordered dt-responsive" cellspacing="0" width="100%">
            <thead>
              <tr>
               	<th>NIP</th>
				<th>Nama Guru</th>
				<th>Tanggal Lahir</th>
				<th>Tempat Lahir</th>
				<th>Golongan</th>
				<th>Alamat</th>
				<th>Foto</th>
				<th>Opsi</th>
              </tr>
            </thead>
            <tbody>
                @foreach($dagur as $p)
				<tr>
					<td>{{ $p->nip }}</td>
					<td>{{ $p->namaguru }}</td>
					<td>{{ $p->tgllhr }}</td>
					<td>{{ $p->temlhr }}</td>
					<td>{{ $p->golongan }}</td>
					<td>{{ $p->alamat }}</td>
					<td>{{ $p->foto }}</td>
					<td>
						<a class="btn btn-info btn-sm" href="/dagur/edit/{{ $p->id }}">Edit</a>
						|
						<a class="btn btn-dark btn-sm" href="/dagur/hapus/{{ $p->id }}">Hapus</a>
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
@endsection

