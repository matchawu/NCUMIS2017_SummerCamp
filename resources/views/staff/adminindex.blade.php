@extends('layouts.layout')

@section('title', '2017資管營 | 人員介紹')
@section('css')
  <link rel="stylesheet" type="text/css" href="{{ asset('css/staff.css') }}">
@stop
@section('content')
<div >
  <div class="container-fluidd bg-1 text-center">
      <form  role="form" method="POST" action="{{ url('staff/edit/1') }}">
        {{ csrf_field() }}
        {{ method_field('PATCH') }}
        <div class="modal-dialog">
          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">墮天守護者</h4>
            </div>
            <div class="modal-body">
              <div class="form-group">
                  <textarea class="form-control" rows="5" id="comment" name="summary"> @if (isset($staff1)) @foreach($staff1 as $staffs) {{ $staffs->summary }} @endforeach @endif</textarea>
              </div>
            </div>
             <div class="modal-footer">
               <button type="submit" class="btn btn-default" >確認修改</button>
             </div>
           </div>
         </div>
      </form>
      @if (isset($staff1)) @foreach($staff1 as $staffs)
       <img src="/img/{{ $staffs->picture }}" style="width:30%;"><br>
       @endforeach @endif
      <button type="button" class="btn btn-success">
        <form  action="{{ url('image-upload/1') }}" enctype="multipart/form-data" method="POST">
          <input type="hidden" name="_token" value="{{ csrf_token() }}">
          <div class="row">
            <div class="col-md-5">
              <input type="file" name="image" />
            </div>
            <div class="col-md-2">
              <button type="submit" class="btn btn-success">Upload</button>
            </div>
          </div>
        </form></button>

      @if (count($errors) > 0)
      <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
          @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
      @endif
      @if ($message = Session::get('success1'))
      <div class="alert alert-success alert-block">
        <button type="button" class="close" data-dismiss="alert">×</button>
              <strong>{{ $message }}</strong>
      </div>
      @endif
  </div>
<div class="container-fluidd bg-2 text-center">
  <form  role="form" method="POST" action="{{ url('staff/edit/2') }}">
    {{ csrf_field() }}
    {{ method_field('PATCH') }}
    <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">暗黑大帝</h4>
        </div>
        <div class="modal-body">
          <div class="form-group">
              <textarea class="form-control" rows="5" id="comment" name="summary"> @if (isset($staff2)) @foreach($staff2 as $staffs) {{ $staffs->summary }} @endforeach @endif</textarea>
          </div>
        </div>
         <div class="modal-footer">
           <button type="submit" class="btn btn-default" >確認修改</button>
         </div>
       </div>
     </div>
  </form>
  @if (isset($staff2)) @foreach($staff2 as $staffs)
   <img src="/img/{{ $staffs->picture }}"  style="width:30%;"><br>
   @endforeach @endif
  <button type="button" class="btn btn-success">
  <form  action="{{ url('image-upload/2') }}" enctype="multipart/form-data" method="POST">
      <input type="hidden" name="_token" value="{{ csrf_token() }}">
      <div class="row">
        <div class="col-md-5">
          <input type="file" name="image" />
        </div>
        <div class="col-md-2">
          <button type="submit" class="btn btn-success">Upload</button>
        </div>
      </div>
    </form></button>

  @if (count($errors) > 0)
  <div class="alert alert-danger">
    <strong>Whoops!</strong> There were some problems with your input.<br><br>
    <ul>
      @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
      @endforeach
    </ul>
  </div>
  @endif
  @if ($message = Session::get('success2'))
  <div class="alert alert-success alert-block">
    <button type="button" class="close" data-dismiss="alert">×</button>
          <strong>{{ $message }}</strong>
  </div>
  @endif
</div>
<div class="container-fluidd bg-3 text-center">
  <form  role="form" method="POST" action="{{ url('staff/edit/3') }}">
    {{ csrf_field() }}
    {{ method_field('PATCH') }}
    <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">龍騎士</h4>
        </div>
        <div class="modal-body">
          <div class="form-group">
              <textarea class="form-control" rows="5" id="comment" name="summary"> @if (isset($staff3)) @foreach($staff3 as $staffs) {{ $staffs->summary }} @endforeach @endif</textarea>
          </div>
        </div>
         <div class="modal-footer">
           <button type="submit" class="btn btn-default" >確認修改</button>
         </div>
       </div>
     </div>
  </form>
  @if (isset($staff3)) @foreach($staff3 as $staffs)
   <img src="/img/{{ $staffs->picture }}" style="width:30%;"><br>
   @endforeach @endif
  <button type="button" class="btn btn-success">
    <form  action="{{ url('image-upload/1') }}" enctype="multipart/form-data" method="POST">
      <input type="hidden" name="_token" value="{{ csrf_token() }}">
      <div class="row">
        <div class="col-md-5">
          <input type="file" name="image" />
        </div>
        <div class="col-md-2">
          <button type="submit" class="btn btn-success">Upload</button>
        </div>
      </div>
    </form></button>
  @if (count($errors) > 0)
  <div class="alert alert-danger">
    <strong>Whoops!</strong> There were some problems with your input.<br><br>
    <ul>
      @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
      @endforeach
    </ul>
  </div>
  @endif
  @if ($message = Session::get('success3'))
  <div class="alert alert-success alert-block">
    <button type="button" class="close" data-dismiss="alert">×</button>
          <strong>{{ $message }}</strong>
  </div>
  @endif
</div>
<div class="container-fluidd bg-4 text-center">
  <form  role="form" method="POST" action="{{ url('staff/edit/4') }}">
    {{ csrf_field() }}
    {{ method_field('PATCH') }}
    <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">古靈精怪</h4>
        </div>
        <div class="modal-body">
          <div class="form-group">
              <textarea class="form-control" rows="5" id="comment" name="summary"> @if (isset($staff4)) @foreach($staff4 as $staffs) {{ $staffs->summary }} @endforeach @endif</textarea>
          </div>
        </div>
         <div class="modal-footer">
           <button type="submit" class="btn btn-default" >確認修改</button>
         </div>
       </div>
     </div>
  </form>
  @if (isset($staff4)) @foreach($staff4 as $staffs)
   <img src="/img/{{ $staffs->picture }}" style="width:30%;"><br>
   @endforeach @endif
  <button type="button" class="btn btn-success">
    <form  action="{{ url('image-upload/4') }}" enctype="multipart/form-data" method="POST">
      <input type="hidden" name="_token" value="{{ csrf_token() }}">
      <div class="row">
        <div class="col-md-5">
          <input type="file" name="image" />
        </div>
        <div class="col-md-2">
          <button type="submit" class="btn btn-success">Upload</button>
        </div>
      </div>
    </form></button>
  @if (count($errors) > 0)
  <div class="alert alert-danger">
    <strong>Whoops!</strong> There were some problems with your input.<br><br>
    <ul>
      @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
      @endforeach
    </ul>
  </div>
  @endif
  @if ($message = Session::get('success4'))
  <div class="alert alert-success alert-block">
    <button type="button" class="close" data-dismiss="alert">×</button>
          <strong>{{ $message }}</strong>
  </div>
  @endif
</div>
<div class="container-fluidd bg-5 text-center">
  <form  role="form" method="POST" action="{{ url('staff/edit/5') }}">
    {{ csrf_field() }}
    {{ method_field('PATCH') }}
    <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">吟遊詩人</h4>
        </div>
        <div class="modal-body">
          <div class="form-group">
              <textarea class="form-control" rows="5" id="comment" name="summary"> @if (isset($staff5)) @foreach($staff5 as $staffs) {{ $staffs->summary }} @endforeach @endif</textarea>
          </div>
        </div>
         <div class="modal-footer">
           <button type="submit" class="btn btn-default" >確認修改</button>
         </div>
       </div>
     </div>
  </form>
  @if (isset($staff5)) @foreach($staff5 as $staffs)
   <img src="/img/{{ $staffs->picture }}" style="width:30%;"><br>
   @endforeach @endif
  <button type="button" class="btn btn-success">
    <form  action="{{ url('image-upload/5') }}" enctype="multipart/form-data" method="POST">
      <input type="hidden" name="_token" value="{{ csrf_token() }}">
      <div class="row">
        <div class="col-md-5">
          <input type="file" name="image" />
        </div>
        <div class="col-md-2">
          <button type="submit" class="btn btn-success">Upload</button>
        </div>
      </div>
    </form></button>
  @if (count($errors) > 0)
  <div class="alert alert-danger">
    <strong>Whoops!</strong> There were some problems with your input.<br><br>
    <ul>
      @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
      @endforeach
    </ul>
  </div>
  @endif
  @if ($message = Session::get('success5'))
  <div class="alert alert-success alert-block">
    <button type="button" class="close" data-dismiss="alert">×</button>
          <strong>{{ $message }}</strong>
  </div>
  @endif
</div>
<div class="container-fluidd bg-6 text-center">
  <form  role="form" method="POST" action="{{ url('staff/edit/6') }}">
    {{ csrf_field() }}
    {{ method_field('PATCH') }}
    <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">煉金術師</h4>
        </div>
        <div class="modal-body">
          <div class="form-group">
              <textarea class="form-control" rows="5" id="comment" name="summary"> @if (isset($staff6)) @foreach($staff6 as $staffs) {{ $staffs->summary }} @endforeach @endif</textarea>
          </div>
        </div>
         <div class="modal-footer">
           <button type="submit" class="btn btn-default" >確認修改</button>
         </div>
       </div>
     </div>
  </form>
  @if (isset($staff6)) @foreach($staff6 as $staffs)
   <img src="/img/{{ $staffs->picture }}" style="width:30%;"><br>
   @endforeach @endif
  <button type="button" class="btn btn-success">
    <form  action="{{ url('image-upload/6') }}" enctype="multipart/form-data" method="POST">
      <input type="hidden" name="_token" value="{{ csrf_token() }}">
      <div class="row">
        <div class="col-md-5">
          <input type="file" name="image" />
        </div>
        <div class="col-md-2">
          <button type="submit" class="btn btn-success">Upload</button>
        </div>
      </div>
    </form></button>
  @if (count($errors) > 0)
  <div class="alert alert-danger">
    <strong>Whoops!</strong> There were some problems with your input.<br><br>
    <ul>
      @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
      @endforeach
    </ul>
  </div>
  @endif
  @if ($message = Session::get('success6'))
  <div class="alert alert-success alert-block">
    <button type="button" class="close" data-dismiss="alert">×</button>
          <strong>{{ $message }}</strong>
  </div>
  @endif
</div>
<div class="container-fluidd bg-7 text-center">
  <form  role="form" method="POST" action="{{ url('staff/edit/7') }}">
    {{ csrf_field() }}
    {{ method_field('PATCH') }}
    <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">熾天使</h4>
        </div>
        <div class="modal-body">
          <div class="form-group">
              <textarea class="form-control" rows="5" id="comment" name="summary"> @if (isset($staff7)) @foreach($staff7 as $staffs) {{ $staffs->summary }} @endforeach @endif</textarea>
          </div>
        </div>
         <div class="modal-footer">
           <button type="submit" class="btn btn-default" >確認修改</button>
         </div>
       </div>
     </div>
  </form>
  @if (isset($staff7)) @foreach($staff7 as $staffs)
   <img src="/img/{{ $staffs->picture }}" style="width:30%;"><br>
   @endforeach @endif
  <button type="button" class="btn btn-success">
    <form  action="{{ url('image-upload/7') }}" enctype="multipart/form-data" method="POST">
      <input type="hidden" name="_token" value="{{ csrf_token() }}">
      <div class="row">
        <div class="col-md-5">
          <input type="file" name="image" />
        </div>
        <div class="col-md-2">
          <button type="submit" class="btn btn-success">Upload</button>
        </div>
      </div>
    </form></button>
  @if (count($errors) > 0)
  <div class="alert alert-danger">
    <strong>Whoops!</strong> There were some problems with your input.<br><br>
    <ul>
      @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
      @endforeach
    </ul>
  </div>
  @endif
  @if ($message = Session::get('success7'))
  <div class="alert alert-success alert-block">
    <button type="button" class="close" data-dismiss="alert">×</button>
          <strong>{{ $message }}</strong>
  </div>
  @endif
</div>
<div class="container-fluidd bg-8 text-center">
  <form  role="form" method="POST" action="{{ url('staff/edit/8') }}">
    {{ csrf_field() }}
    {{ method_field('PATCH') }}
    <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">半獸人</h4>
        </div>
        <div class="modal-body">
          <div class="form-group">
              <textarea class="form-control" rows="5" id="comment" name="summary"> @if (isset($staff8)) @foreach($staff8 as $staffs) {{ $staffs->summary }} @endforeach @endif</textarea>
          </div>
        </div>
         <div class="modal-footer">
           <button type="submit" class="btn btn-default" >確認修改</button>
         </div>
       </div>
     </div>
  </form>
  @if (isset($staff8)) @foreach($staff8 as $staffs)
   <img src="/img/{{ $staffs->picture }}" style="width:30%;"><br>
   @endforeach @endif
  <button type="button" class="btn btn-success">
    <form  action="{{ url('image-upload/8') }}" enctype="multipart/form-data" method="POST">
      <input type="hidden" name="_token" value="{{ csrf_token() }}">
      <div class="row">
        <div class="col-md-5">
          <input type="file" name="image" />
        </div>
        <div class="col-md-2">
          <button type="submit" class="btn btn-success">Upload</button>
        </div>
      </div>
    </form></button>
  @if (count($errors) > 0)
  <div class="alert alert-danger">
    <strong>Whoops!</strong> There were some problems with your input.<br><br>
    <ul>
      @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
      @endforeach
    </ul>
  </div>
  @endif
  @if ($message = Session::get('success8'))
  <div class="alert alert-success alert-block">
    <button type="button" class="close" data-dismiss="alert">×</button>
          <strong>{{ $message }}</strong>
  </div>
  @endif

</div>


@endsection
