@extends('layouts.admin-master')
@section ('content')
<form method="post">
          @csrf
        <div class="form-group row">
                  <label for="input-6" class="col-sm-2 col-form-label">Pembina</label>
                  <div class="col-sm-10">
                    <input class="form-control valid" id="input-6" name="pembina" required="" aria-invalid="false">
                      
          
                  </div>
                </div>
                <div class="form-group row">
                  <label for="input-8" class="col-sm-2 col-form-label">Tanggal</label>
                  <div class="col-sm-10">
                    <input type="date" class="form-control" id="input-8" name="file" required="">
                  </div>
                </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
        <button type="submit" class="btn btn-primary"><i class="fa fa-check-square-o"></i> Save changes</button>
      </div>
    </form>
    @endsection