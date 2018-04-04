@if(count($errors))
    <div class="admin-content-body">

      <div class="am-g">
        <div class="am-u-sm-12">
        
        @foreach($errors->all() as $error)
        	<p>{{$error}}</p>
        @endforeach
        </div>
      </div>
    </div>

@endif
