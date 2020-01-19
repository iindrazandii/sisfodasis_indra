@extends('templates/default')
@section('content')
<div class="x_panel">
  <div class="x_title">
    <h2>Data Siswa</h2>
    <div class="clearfix"></div>
  </div>
  <div class="x_content">
    <div class="row">
      <div class="col-sm-12">
        <div class="card-box table-responsive card-body">
                    <a href="/dasis" class="btn btn-primary">Kembali</a>
                    <br/>
                    <br/>
                    @foreach($dasis as $dasises)
                    <form method="post" action="/dasis/update/{{ $dasises->id }}">
 
                        {{ csrf_field() }}
                        {{ method_field('PUT') }}
                        <div class="form-group">
                            <label>NISN</label>
                            <input type="text" name="nisn" class="form-control"  value=" {{ $dasises->nisn }}">
                        </div>
                        <div class="form-group">
                            <label>Nama Siswa</label>
                            <input type="text" name="nama" class="form-control"  value=" {{ $dasises->nama }}">
                        </div>
                        <div class="form-group">
                            <label>Tanggal Lahir</label>
                            <input type="date" name="tgllhr" class="form-control"  value="{{ $dasises->tgllhr }}">
                        </div>
                        <div class="form-group">
                            <label>Tempat Lahir</label>
                            <input type="text" name="temlhr" class="form-control"  value=" {{ $dasises->temlhr }}">
                        </div>
                        <div class="form-group">
                            <label>Kelas</label>
                            <input type="text" name="kelas" class="form-control"  value=" {{ $dasises->kelas }}">
                        </div>
                        <div class="form-group">
                            <label>Alamat</label>
                            <textarea name="alamat" class="form-control">{{ $dasises->alamat }}</textarea>
                        </div>
                        <div class="form-group">
                            <label>Foto</label>
                            <input type="text" name="foto" class="form-control" value=" {{ $dasises->foto }}">
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-success" value="Simpan">
                        </div>
 
                    </form>
                    @endforeach
        </div>
      </div>
    </div>
  </div>
</div>
@endsection

