@if(count($errors)>0)
    <div class="alert alert-danger">
     <strong>Whoops!&nbsp;</strong>There were some errors with your input.<br><br>
    <ul>
        @foreach($errors->all() as $error)
            <li>{{$error}}</li>
        @endforeach
     </u>
    </div>
@endif

@if(session('success'))
    <div class="alert alert-success">
        {{session('success')}}
    </div>
@endif

@if(session('error'))
    <div class="alert alert-danger">
        {{session('error')}}
    </div>
@endif