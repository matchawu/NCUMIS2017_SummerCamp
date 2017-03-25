@extends('layouts.layout')

@section('title', '2017資管營 | 人員介紹')
@section('css')
  <link rel="stylesheet" type="text/css" href="{{ asset('/css/staff.css') }}">
  <link rel="stylesheet" href="{{asset('css/jquery.fullPage.css')}}">
@stop

@section('content')
<div>
<div class=" container-fluidd bg-1 text-center " >
    <h3 class="margin">Who Am I?</h3><a data-toggle="tab" data-toggle="tooltip" title="我想看執行組">
    <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal1"><img src="{{asset('/img/2.jpg')}}" class="img-responsive img-circle margin" style="display:inline ;width:350px;height:350px" alt="Bird"></button>
  </a><h3>墮天守護者</h3>
</div>
<div class="container-fluidd bg-2 text-center " >
    <h3 class="margin">Who Am I?</h3><a data-toggle="tab" data-toggle="tooltip" title="我想看值星官">
    <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal2"><img src="{{asset('/img/1.jpg')}}" class="img-responsive img-circle margin" style="display:inline ;width:350px;height:350px" alt="Bird"></button>
    </a><h3>暗黑大帝</h3>
</div>
<div class="container-fluidd bg-3 text-center ">
    <h3 class="margin">Who Am I?</h3><a data-toggle="tab" data-toggle="tooltip" title="我想看課程組">
    <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal3"><img src="{{asset('/img/4.png')}}" class="img-responsive img-circle margin" style="display:inline ;width:350px;height:350px" alt="Bird"></button>
    </a><h3>龍騎士</h3>
</div>
<div class="container-fluidd bg-4 text-center ">
    <h3 class="margin">Who Am I?</h3><a data-toggle="tab" data-toggle="tooltip" title="我想看活動組">
    <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal4"><img src="{{asset('/img/3.png')}}" class="img-responsive img-circle margin" style="display:inline ;width:350px;height:350px" alt="Bird"></button>
    </a><h3>古靈精怪</h3>
</div>
<div class="container-fluidd bg-5 text-center">
    <h3 class="margin">Who Am I?</h3><a data-toggle="tab" data-toggle="tooltip" title="我想看生關組">
    <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal5"><img src="{{asset('/img/3.jpg')}}" class="img-responsive img-circle margin" style="display:inline ;width:350px;height:350px" alt="Bird"></button>
    </a><h3>吟遊詩人</h3>
</div>
<div class="container-fluidd bg-6 text-center">
    <h3 class="margin">Who Am I?</h3><a data-toggle="tab" data-toggle="tooltip" title="我想看宣訪組">
    <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal6"><img src="{{asset('/img/4.jpg')}}" class="img-responsive img-circle margin" style="display:inline ;width:350px;height:350px" alt="Bird"></button>
    </a><h3>煉金術師</h3>
</div>
<div class="container-fluidd bg-7 text-center">
    <h3 class="margin">Who Am I?</h3><a data-toggle="tab" data-toggle="tooltip" title="我想看輔員組">
    <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal7"><img src="{{asset('/img/5.jpg')}}" class="img-responsive img-circle margin" style="display:inline ;width:350px;height:350px" alt="Bird"></button>
    </a><h3>熾天使</h3>
</div>
<div class="container-fluidd bg-8 text-center">
    <h3 class="margin">Who Am I?</h3><a data-toggle="tab" data-toggle="tooltip" title="我想看招器組">
    <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal8"><img src="{{asset('/img/6.png')}}" class="img-responsive img-circle margin" style="display:inline ;width:350px;height:350px" alt="Bird"></button>
    </a><h3>半獸人</h3>
</div>

<div class="modal fade" id="myModal1" role="dialog">
    <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">墮天守護者</h4>
        </div>
        <div class="modal-body">
          @if (isset($staff1)) @foreach($staff1 as $staffs)
          <p> {{ $staffs->summary }} </p>
          <img src="/img/{{ $staffs->picture }}" style="width:100%; align:center;">
          @endforeach @endif
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>

    </div>
  </div>
  <div class="modal fade" id="myModal2" role="dialog">
      <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">暗黑大帝</h4>
          </div>
          <div class="modal-body">
            @if (isset($staff2)) @foreach($staff2 as $staffs)
            <p> {{ $staffs->summary }} </p>
            <img src="/img/{{ $staffs->picture }}" style="width:100%; align:center;">
            @endforeach @endif
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
        </div>

      </div>
    </div>
    <div class="modal fade" id="myModal3" role="dialog">
        <div class="modal-dialog">
          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title">龍騎士</h4>
            </div>
            <div class="modal-body">
              @if (isset($staff3)) @foreach($staff3 as $staffs)
              <p> {{ $staffs->summary }} </p>
              <img src="/img/{{ $staffs->picture }}" style="width:100%; align:center;">
              @endforeach @endif            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
          </div>

        </div>
      </div>
      <div class="modal fade" id="myModal4" role="dialog">
          <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">古靈精怪</h4>
              </div>
              <div class="modal-body">
                @if (isset($staff4)) @foreach($staff4 as $staffs)
                <p> {{ $staffs->summary }} </p>
                <img src="/img/{{ $staffs->picture }}" style="width:100%; align:center;">
                @endforeach @endif              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              </div>
            </div>

          </div>
        </div>
        <div class="modal fade" id="myModal5" role="dialog">
            <div class="modal-dialog">
              <!-- Modal content-->
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h4 class="modal-title">吟遊詩人</h4>
                </div>
                <div class="modal-body">
                  @if (isset($staff5)) @foreach($staff5 as $staffs)
                  <p> {{ $staffs->summary }} </p>
                  <img src="/img/{{ $staffs->picture }}" style="width:100%; align:center;">
                  @endforeach @endif                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
              </div>

            </div>
          </div>
          <div class="modal fade" id="myModal6" role="dialog">
              <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">煉金術師</h4>
                  </div>
                  <div class="modal-body">
                    @if (isset($staff6)) @foreach($staff6 as $staffs)
                    <p> {{ $staffs->summary }} </p>
                    <img src="/img/{{ $staffs->picture }}" style="width:100%; align:center;">
                    @endforeach @endif                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                  </div>
                </div>

              </div>
            </div>
            <div class="modal fade" id="myModal7" role="dialog">
                <div class="modal-dialog">
                  <!-- Modal content-->
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                      <h4 class="modal-title">熾天使</h4>
                    </div>
                    <div class="modal-body">
                      @if (isset($staff7)) @foreach($staff7 as $staffs)
                      <p> {{ $staffs->summary }} </p>
                      <img src="/img/{{ $staffs->picture }}" style="width:100%; align:center;">
                      @endforeach @endif                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                  </div>

                </div>
              </div>
              <div class="modal fade" id="myModal8" role="dialog">
                  <div class="modal-dialog">
                    <!-- Modal content-->
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">半獸人</h4>
                      </div>
                      <div class="modal-body">
                        @if (isset($staff8)) @foreach($staff8 as $staffs)
                        <p> {{ $staffs->summary }} </p>
                        <img src="/img/{{ $staffs->picture }}" style="width:100%; align:center;">
                        @endforeach @endif                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                      </div>
                    </div>

                  </div>
                </div>

</div>

@endsection
