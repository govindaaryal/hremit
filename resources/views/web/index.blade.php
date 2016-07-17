@extends('web.layouts.master')
@section('title')
Hulas Remittance
@endsection
@section('content')
	<section id="banner">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 banner-container">
				<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 company-name">
					<h1>HULAS</h1>
					<h1 class="margin-left">Remittance</h1>
					<p class="quote">
						"a must trusted, secure<br/>
						<span class="p-margin-left">simple and flexible"</span>
					</p>
					<center>
						<a href="#" class="btn btn-primary btn-signup btn-login">Sign Up
							<img src="{{url('assets/front/images/loginicon.png')}}">
						</a>
						<a href="#" class="btn btn-primary btn-signup btn-login">Learn More
							<img src="{{url('assets/front/images/loginicon.png')}}">
						</a>
					</center>
				</div>
				<div class="col-xs-12 col-sm-8 col-md-8 col-lg-8 banner-image pull-right">
					<img src="{{url('assets/front/images/banner1.png')}}" class="img-responsive">
				</div>
			</div>
	</section>
	<section id="forex">
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 div-forex">
				<span class="pull-left">
					<h1>FOREX</h1>
				</span>
				<!-- <marquee>
					<p>US Dollar: Rs107 ,  Eu Euro: Rs 119 , UK Pound: Rs 139, Swiss Franc: Rs 110, AUD: Rs 80 , CAD : Rs 83</p>
				</marquee> -->
				<marquee behavior="scroll" scrollamount="3" direction="left" style="width: 96%;" class="pull-right">
					US Dollar: Rs107 ,  Eu Euro: Rs 119 , UK Pound: Rs 139, Swiss Franc: Rs 110, AUD: Rs 80 , CAD : Rs 83
				</marquee>
			</div>
	</section>
@endsection