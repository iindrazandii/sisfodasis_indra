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
            <a href="/danilai" class="btn btn-primary">Kembali</a>
                    <br/>
                    <br/>
                    
                    <form method="post" action="/danilai/store">
 
                        {{ csrf_field() }}
 
                        <div class="form-group">
                            <label>Kode Mapel</label>
                            <input type="text" name="kdmapel" class="form-control" placeholder="Kode Mapel ..">
 
                            @if($errors->has('kdmapel'))
                                <div class="text-danger">
                                    {{ $errors->first('kdmapel')}}
                                </div>
                            @endif
                        </div>
                        <div class="form-group">
                            <label>NISN</label>
                            <input type="text" name="nisn" class="form-control" placeholder="NISN ..">
 
                            @if($errors->has('nisn'))
                                <div class="text-danger">
                                    {{ $errors->first('nisn')}}
                                </div>
                            @endif
                        </div>
                        <div class="form-group">
                            <label>Nilai</label>
                            <input type="text" name="nilai" class="form-control" placeholder="Nilai ..">
 
                            @if($errors->has('nilai'))
                                <div class="text-danger">
                                    {{ $errors->first('nilai')}}
                                </div>
                            @endif
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-success" value="Simpan">
                        </div>
 
                    </form>
 
        </div>
      </div>
    </div>
  </div>
</div>
@endsection

