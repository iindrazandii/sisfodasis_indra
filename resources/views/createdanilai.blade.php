@extends('templates/default')
@section('content')
<div class="x_panel">
  <div class="x_title">
    <h2>Data Nilai</h2>
    <div class="clearfix"></div>
  </div>
  <div class="x_content">
    <div class="row">
      <div class="col-sm-12">
        <div class="card-box table-responsive card-body">
            <a href="/danilai" class="btn btn-round btn-primary">Kembali</a>
                    <br/>
                    <br/>
                    
                    <form method="post" action="/danilai/store">
 
                        {{ csrf_field() }}
 
                        <div class="item form-group">
                            <label class="col-form-label col-md-3 col-sm-3">Kode Mapel</label>
                            <input type="text" name="kdmapel" class="form-control" placeholder="Kode Mapel ..">
                        </div>
                        <div class="item form-group">
                            <label class="col-form-label col-md-3 col-sm-3">NISN</label>
                            <input type="text" name="nisn" class="form-control" placeholder="NISN ..">
                        </div>
                        <div class="item form-group">
                            <label class="col-form-label col-md-3 col-sm-3">Nilai</label>
                            <input type="text" name="nilai" class="form-control" placeholder="Nilai ..">
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-round btn-success" value="Simpan">
                        </div>
 
                    </form>
 
        </div>
      </div>
    </div>
  </div>
</div>
@endsection

