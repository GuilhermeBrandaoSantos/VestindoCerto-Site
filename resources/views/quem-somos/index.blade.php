@extends('layout.master')

@section('head')
	<script type="text/javascript" src="{{asset('js/nav-pages.js')}}"></script>
	<link rel="stylesheet" type="text/css" href="{{asset('css/quem-somos.css')}}">
@stop

@section('content')
<div class="container-fluid vestindo-certo quemSomos" id="sobre">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<ol class="breadcrumb">
					<li><a href="{{url('/#home')}}">Home</a></li>
					<li class="active">Quem Somos</li>
				</ol>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-offset-2 col-sm-8">
				<h1>Selecionar a melhor roupa nunca foi tão fácil</h1>
				<ul class="fa-ul">
					<li><i class="fa-li fa fa-clock-o"></i><br class="visible-xs"> Otimize o seu tempo;</li>
					<li><i class="fa-li fa fa-tags"></i><br class="visible-xs"> Evite repetir as mesmas roupas;</li>
					<li><i class="fa-li fa fa-comment-o"></i><br class="visible-xs"> Saiba qual roupa você não usa;</li>
					<li><i class="fa-li fa fa-eye"></i><br class="visible-xs"> Combine as melhores peças do seu <i>closet</i>;</li>
					<li><i class="fa-li fa fa-star"></i><br class="visible-xs"> Destaque-se !</li>
				</ul>
				<!-- <p>Dependendo de onde você está indo, pense sobre o que outras pessoas lá deverão usar.<br>Você quer se destacar, mas não quer ser o centro das atenções<br>(mantenha algum mistério sobre você).</p> -->
			</div>
			</div>
	</div>
</div>
@stop

@section('script')
	<script type="text/javascript"  src="{{asset('js/nav-pages.js')}}"></script>
@stop
