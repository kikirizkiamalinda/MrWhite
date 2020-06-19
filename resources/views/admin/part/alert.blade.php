@if(Session::has('error'))
<div class = "row">
  <div class = "col-md-12 text-center">
    <div class="alert alert-danger" alert-{{
      Session::get('message.alert') }}>
      <button type="button" class="close" data-dismiss="alert">X</button>
      <strong>{{
        Session::get('error')
      }}
      </strong>
    </div>
  </div>
</div>
@endif