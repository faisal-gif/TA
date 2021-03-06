@extends('layouts.lay')
@section('content')
<div class="col-12 grid-margin">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Form Link</h4>
                  <form class="form-sample" method="POST" action="/prosesLink" enctype="multipart/form-data">
                    @csrf     
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Link</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" name="link"/>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Link Perusahaan</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" name="linkPerusahaan"/>
                          </div>
                        </div>
                      </div>
                    
                    </div>
                    <input type="submit" name="save" id="save" class="btn btn-primary" value="Save" />
                   
                    </form>
        </div>
    </div>
</div>
@endsection