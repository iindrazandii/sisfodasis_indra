@extends('templates/default')
@section('content')
<div class="x_panel">
  <div class="x_title">
    <h2>Data Guru</h2>
    <div class="clearfix"></div>
  </div>
  <div class="x_content">
    <div class="row">
      <div class="col-sm-12">
        <div class="card-box table-responsive card-body">
            <a href="/dagur" class="btn btn-primary">Kembali</a>
                    <br/>
                    <br/>
                    
                    <form method="post" action="/dagur/store">
 
                        {{ csrf_field() }}
 
                        <div class="form-group">
                            <label>NIP</label>
                            <input type="text" name="nip" class="form-control" placeholder="NIP ..">
                        </div>
                        
                        <div class="form-group">
                            <label>Nama Guru</label>
                            <input type="text" name="namaguru" class="form-control" placeholder="Nama Guru ..">
                        </div>
                        <div class="form-group">
                            <label>Tanggal Lahir</label>
                            <input type="date" name="tgllhr" class="form-control" required="required">
                        </div>
                        <div class="form-group">
                            <label>Tempat Lahir</label>
                            <input type="text" name="temlhr" class="form-control" placeholder="Tempat Lahir ..">
                        </div>
                        <div class="form-group">
                            <label>Golongan</label>
                            <input type="text" name="golongan" class="form-control" placeholder="Golongan ..">
                        </div>
                        <div class="form-group">
                            <label>Alamat</label>
                            <textarea name="alamat" class="form-control" placeholder="Alamat Guru .."></textarea>
                        </div>
                        <div class="form-group">
                            <label>Foto</label>
                            <input type="text" name="foto" class="form-control" placeholder="Foto ..">
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

