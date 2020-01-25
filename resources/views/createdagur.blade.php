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
            <a href="/dagur" class="btn btn-round btn-primary">Kembali</a>
                    <br/>
                    <br/>
                    
                    <form method="post" action="/dagur/store">
 
                        {{ csrf_field() }}
 
                        <div class="item form-group">
                            <label class="col-form-label col-md-3 col-sm-3">NIP</label>
                            <div class="col-md-9 col-sm-3  form-group has-feedback">
                                <input type="text" name="nip" class="form-control has-feedback-left" placeholder="NIP ..">
                                <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                            </div> 
                        </div>
                        
                        <div class="item form-group">
                            <label class="col-form-label col-md-3 col-sm-3">Nama Guru</label>
                            <div class="col-md-9 col-sm-3  form-group has-feedback">
                                <input type="text" name="namaguru" class="form-control has-feedback-left" placeholder="Nama Guru ..">
                                <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                            </div> 
                            
                        </div>
                        <div class="item form-group">
                            <label class="col-form-label col-md-3 col-sm-3">Tanggal Lahir</label>
                            <div class="col-md-9 col-sm-3  form-group has-feedback">
                            <input type="date" name="tgllhr" class="form-control has-feedback-left" required="required">
                            <span class="fa fa-calendar-o form-control-feedback left" aria-hidden="true"></span>
                            </div>
                        </div>
                        <div class="item form-group">
                            <label class="col-form-label col-md-3 col-sm-3">Tempat Lahir</label>
                            <input type="text" name="temlhr" class="form-control" placeholder="Tempat Lahir ..">
                        </div>
                        <div class="item form-group">
                            <label class="col-form-label col-md-3 col-sm-3">Golongan</label>
                            <input type="text" name="golongan" class="form-control" placeholder="Golongan ..">
                        </div>
                        <div class="item form-group">
                            <label class="col-form-label col-md-3 col-sm-3">Alamat</label>
                            <textarea name="alamat" class="form-control" placeholder="Alamat Guru .."></textarea>
                        </div>
                        <div class="item form-group">
                            <label class="col-form-label col-md-3 col-sm-3">Foto</label>
                            <input type="file"
                            id="inputgambar" name="foto" class="form-control" placeholder="Foto ..">
                        </div>
                        <div class="item form-group">
                            <input type="submit" class="btn btn-round btn-success" value="Simpan">
                        </div>
                    </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection

