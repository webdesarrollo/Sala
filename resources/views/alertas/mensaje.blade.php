@if(Session::has('message'))
   <div class="row">    
        <div class="col-xs-8 col-xs-offset-2">
            <div class="alert alert-success alert-dismissible" role="alert" style="list-style:none">
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  {{Session::get('message')}}
            </div>
        </div>
    </div>
@endif