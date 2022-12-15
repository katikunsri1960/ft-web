@extends('layouts.frontend')
@section('content')

<section class="page-title" style="background-image: url({{asset('assets_front/images/background/13.jpg')}})">
    <div class="auto-container">
        <ul class="page-breadcrumb">
            <li><a href="{{route('home')}}">home</a></li>
            <li>{{__('Karyawan')}}</li>
        </ul>
        <h2>{{__('Pimpinan Staff Kepegawaian')}}</h2>
    </div>
</section>
<!-- End Page Title -->

<!-- Team Section -->
<section class="team-page-section">
    <div class="auto-container">
        <!-- Sec Title -->
        <div class="sec-title centered">
            <div class="title"><span class="separator"></span>Our Leader<span class="separator-two"></span></div>
            <h2>Staff Kepegawaian</h2>
        </div>
        <div class="row clearfix aligns-items-center justify-content-center">
            <!-- Team Block -->
            @foreach ($pegawais as $e)
                <div class="team-block col-lg-4 col-md-6 col-sm-12 ">
                    <div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="pattern-layer" style="background-image:url({{asset($e->image)}})"></div>
                        <div class="image">
                            <a href="{{route('detail-employee', ['id'=> $e->id])}}"><img src="{{asset($e->image)}}" style="height: 300px"/></a>
                            <!-- Social Box -->
                            {{-- <ul class="social-box">
								<li><a href="https://www.facebook.com/" class="fa fa-facebook-f"></a></li>
								<li><a href="https://www.twitter.com/" class="fa fa-twitter"></a></li>
								<li><a href="https://www.linkedin.com/" class="fa fa-linkedin"></a></li>
								<li><a href="https://www.instagram.com/" class="fa fa-instagram"></a></li>
								<li><a href="https://www.youtube.com/" class="fa fa-youtube-play"></a></li>
							</ul> --}}
                        </div>
                        <div class="lower-content">
                            <h4><a href="{{route('detail-employee', ['id'=> $e->id])}}">{{$e->name}}</a></h4>
                            <div class="designation">{{$e->jabatan}}</div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>


</section>
@endsection