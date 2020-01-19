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
                                        <a href="/danilai" class="btn btn-primary">Kembali</a>
                    <br/>
                    <br/>
                    @foreach($danilai as $danilais)
                    <form method="post" action="/danilai/update/{{ $danilais->id }}">
 
                        {{ csrf_field() }}
                        {{ method_field('PUT') }}
                        <div class="form-group">
                            <label>Kode Mapel</label>
                            <input type="text" name="kdmapel" class="form-control" value=" {{ $danilais->kdmapel }}">
                        </div>
                        <div class="form-group">
                            <label>NISN</label>
                            <input type="text" name="nisn" class="form-control" value=" {{ $danilais->nisn }}">
                        </div>
                        <div class="form-group">
                            <label>Nilai</label>
                            <input type="text" name="nilai" class="form-control" value=" {{ $danilais->nilai}}">
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

