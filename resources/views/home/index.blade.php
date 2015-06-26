{{-- Created at 2015/05/27 03:44 htien Exp $ --}}
@extends('layouts.home.main_page')

@section('page_title', 'Trang Chủ')
@section('page_body_attributes')
id="home-page"
@stop

@section('content_before')

@include('partials.home.activity_section')

@include('partials.home.dreams_section')

{{--@include('partials.home.featured_section')--}}

@stop

@section('content')

<div class="cuztom-row">
  <div class="col-sm-3">
    <div style="margin-bottom:10px;padding:10px;color:#fff;background-color:#1b837b;border:0 solid #1b837b;border-radius:2px;
      background-image:linear-gradient(to top, #3b817e, #49b860);">
    <h4>
      <img src="img/florish-left.png" alt="" width="45" />
      Giới Thiệu
      <img src="img/florish-right.png" alt="" width="45" /><br />
      Nhà Thiếu Nhi Gò Vấp
    </h4>
    In hac habitasse platea dictumst. Curabitur eu leo sit amet ante sollicitudin pharetra et id ex. Ut sit amet tortor at lectus laoreet ullamcorper.
    </div>

    <div style="margin-bottom:10px;padding:10px;background-color:#f8a22f;border:1px solid #f8a22f;border-radius:2px;
      background-image:linear-gradient(to top, #f8a22f, #fcddb2)">
      <h4>Học tập và làm theo tấm gương đạo đức Hồ Chí Minh</h4>
      <img src="img/demo/hcm.jpg" alt="" />
    </div>

    <div style="margin-bottom:10px;padding:10px;background-color:#f3d3f4;border:0 solid #eaaeae;border-radius:2px">
      <h4>Hỗ Trợ Trực Tuyến</h4>
    </div>
  </div>
  <div class="col-sm-6">
    <div>
      <h2 class="text-center" style="margin-top:5px">
        <img src="img/florish-left.png" alt="" />
        Tin Tức Hoạt Động
        <img src="img/florish-right.png" alt="" />
      </h2>
    </div>
    @forelse ($actNews as $key => $p)
    @if ($key == 0)
    <div class="clearfix" style="margin-top:5px;padding:10px;background-color:#fff;border:2px dashed #84cdc7">
      <h3 style="margin-top:0">{{ $p->post_title }}</h3>
      <img src="{{ empty($p->post_avatar) ? 'img/blank.gif' : $p->post_avatar }}" alt="" style="float:left;margin-right:7px;max-width:100px;max-height:100px" />
      {{ $p->post_excerpt }}
    </div>
    @else
    <div class="clearfix" style="margin-top:5px;padding:10px;background-color:#fff;border:2px dotted #84cdc7">
      <h3 style="margin-top:0">{{ $p->post_title }}</h3>
      <img src="{{ empty($p->post_avatar) ? 'img/blank.gif' : $p->post_avatar }}" alt="" style="float:left;margin-right:7px;max-width:100px;max-height:100px" />
      {{ $p->post_excerpt }}
    </div>
    @endif
    @empty
    <div class="clearfix" style="margin-top:5px;padding:10px;background-color:#fff;border:2px dashed #84cdc7">
      <h3 style="margin-top:0">Chưa có tin tức.</h3>
      <img src="img/demo/demo_100x100_thumbnail_1.jpg" alt="" style="float:left;margin-right:7px" />
      Hãy cập nhật thêm Tin tức Hoạt động trong hệ thống quản lý!
    </div>
    @endforelse
  </div>
  <div class="col-sm-3">
    <div style="margin-bottom:10px;padding:10px;background-color:#fff;border:1px solid #e2e2e2;border-radius:2px">
      <h4>Slide hình</h4>
      <ul class="no-bullets">
        @for ($i = 0; $i < 12; $i++)
        <li>&nbsp;</li>
        @endfor
      </ul>
    </div>

    <div style="margin-bottom:10px;padding:10px;background-color:#c3d339;border:3px solid #c3d339;border-radius:2px">
      <h4>Phòng Chiếu Phim 3D</h4>
      @for ($i = 0; $i < 5; $i++)
      <br />
      @endfor
    </div>

    <div style="margin-bottom:10px;padding:10px;background-color:#f0f2b6;border:1px solid #c3d339;border-radius:2px">
      <h4>Đặt quảng cáo nhà tài trợ</h4>
      @for ($i = 0; $i < 5; $i++)
      <br />
      @endfor
    </div>
  </div>
</div>
@stop

@section('detail_after')

<div id="addition-wrapper">
  <div class="cuztom-row">
    <div class="col-xs-12 col-sm-6 col-md-3">
      <h4>Văn Nghệ Thiếu Nhi</h4>
      <ul class="no-bullets with-arrow">
        <li><a href="javascript:void(0)">Donec ut vestibulum nunc</a></li>
        <li><a href="javascript:void(0)">Ut malesuada suscipit augue accumsan rutrum</a></li>
        <li><a href="javascript:void(0)">Suspendisse non est ut augue dapibus pulvinar</a></li>
      </ul>
    </div>
    <div class="col-xs-12 col-sm-6 col-md-3">
      <h4>Nuôi Dưỡng Tâm Hồn Trẻ Thơ</h4>
      <p>Aliquam erat volutpat. Sed at egestas libero, ac venenatis odio. Integer in tortor eu lacus ornare mattis. Aliquam at dolor ut lorem mollis accumsan eget sed sem.</p>
      <a class="peekaboo-btn"  href="javascript:void(0)">Xem chi tiết...</a>
    </div>
    <div class="col-xs-12 col-sm-6 col-md-3">
      <h4>Truyện Cười, Thư Giãn</h4>
      <img src="img/demo/chu_he_ngo_nghinh.jpg" alt="" />
    </div>
    <div class="col-xs-12 col-sm-6 col-md-3">
      <h4>Liên Hệ</h4>
      <img src="img/demo/ads.jpg" alt="" />
    </div>
  </div>
</div>

@stop