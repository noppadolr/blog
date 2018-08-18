
@extends('layouts.admin_template')
@section('title', 'Dashboard')
@section('content')
{{--
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="{{route('home')}}"><i class="fa fa-home"></i> Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
      </ol>
    </nav>
    --}}

    <div class="row">

      {{-- รายใหม่ --}}
      <div class="col-sm-3 col-xs-6">
        <div class="info-box bg-green text-right">
            <span class="info-box-icon"><i class="fa fa-comments-o"></i></span>
            <div class="info-box-content ">
                <span class="info-box-text">ตั้งครรภ์รายใหม่</span>
                <span class="info-box-number">
                @foreach ($newcase as $k)
                    {{ $k->c }}
                @endforeach
                </span>
    <!-- The progress section is optional -->
                <div class="progress">
                    <div class="progress-bar" style="width: 100%"></div>
                </div>
                <span class="progress-description">
                  จำนวนหญิงตั้งครรภ์รายใหม่(คน)
                </span>
            </div>
        </div>
      </div>

      {{-- คลอด --}}
      <div class="col-sm-3 col-xs-6">
        <div class="info-box bg-aqua text-right">
            <span class="info-box-icon"><i class="fa fa-envelope-o"></i></span>
            <div class="info-box-content">
                <span class="info-box-text">คลอดทั้งหมด</span>
                <span class="info-box-number">215</span>
    <!-- The progress section is optional -->
                <div class="progress">
                    <div class="progress-bar" style="width: 100%"></div>
                </div>
                <span class="progress-description">
                  จำนวนหญิงคลอดทั้งหมด(คน)
                </span>
            </div>
        </div>
      </div>


    {{-- เหลือ --}}
    <div class="col-sm-3 col-xs-6">
      <div class="info-box bg-yellow text-right">
          <span class="info-box-icon"><i class="fa fa-calendar" aria-hidden="true"></i></span>
          <div class="info-box-content">
              <span class="info-box-text">ยังไม่คลอด</span>

              <span class="info-box-number"> 215 </span>


  <!-- The progress section is optional -->
              <div class="progress">
                  <div class="progress-bar" style="width: 100%"></div>
              </div>
              <span class="progress-description">
              หญิงตั้งครรภ์ที่ยังไม่คลอด(คน)
              </span>
          </div>
      </div>
    </div>


  {{-- แท้ง --}}
  <div class="col-sm-3 col-xs-6">
    <div class="info-box bg-red text-right">
        <span class="info-box-icon"><i class="fa fa-thumbs-o-down" aria-hidden="true"></i></span>
        <div class="info-box-content">
            <span class="info-box-text">แท้ง</span>
            <span class="info-box-number">215</span>
<!-- The progress section is optional -->
            <div class="progress">
                <div class="progress-bar" style="width: 100%"></div>
            </div>
            <span class="progress-description">
            หญิงตั้งครรภ์แท้งในปี
            </span>
        </div>
    </div>
  </div>
</div>


 <div class="row">
   <div class="col-xs-8">

        <div class="card">
        <div class="card-header bg-primary">
          Quote
        </div>
        <div class="card-body">

        </div>
      </div>
      
    </div>

   <div class="col-xs-4">
     <div class="panel panel-primary">
       <div class="panel-heading">
           Test Form
       </div>
       <div class="panel-body">

       </div>
       <div class="panel-footer">
          เรียนจากธีรภัทร
       </div>
     </div>
   </div>{{-- col --}}
</div>



@foreach ($newcase as $k)
    {{ $k->c }}
@endforeach

@foreach ($pc as $p)
    {{ $p->pc }}
@endforeach






@endsection
