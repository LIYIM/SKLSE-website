@extends('layouts.blog')
@section('title')
{{$data['user']['name']}}的博客
@endsection

@section('host')
{{$data['user']['name']}}
@endsection

@section('content')
<table class="container blog-table">
		<tr class=" blog-block-dark">
			<td class="col-sm-3" style='height:60%;'>
				<div class="blog-block-box" style="padding:30px;">
					<img src="/assets/images/icon/{{$data['blog']['icon']}}" class="img-circle center-block" style="width:200px;height:200px">
					<h3 class="text-center"> <strong>{{$data['user']['name']}}</strong>
					</h3>
				</div>
				<div class="blog-block-line">
					<div class="info text-center">
						<p>性别：{{$data['blog']['sex']}}</p>
						<p>邮箱：{{$data['user']['email']}}</p>
						<p>
							{{$data['blog']['introduction']}}
						</p>
					</div>

					<div class="alert alert-danger" role="alert" style='background-color: #f9f9f9;margin-top: 0px;border-bottom: 1px solid #ddd;border-top:1px solid #ddd;'>
						<a href="/blog/{{$data['user']['id']}}/home">
							<ul>
								<span class="glyphicon glyphicon-home" aria-hidden="true">&nbsp;&nbsp;&nbsp;</span> <font style="font-family:微软雅黑; font-size:16px"><b>主页</b></font> 

							</ul>
						</a>
					</div>
					<div class="alert alert-danger" role="alert" style='background-color: #f9f9f9;margin-top: 0px;border-bottom: 1px solid #ddd;border-top:1px solid #ddd;'>
						<a href="articlelist.html">
							<ul>
								<span class="glyphicon glyphicon-tasks" aria-hidden="true">&nbsp;&nbsp;&nbsp;</span> <font style="font-family:微软雅黑; font-size:16px"><strong>文章列表</strong></font> 

							</ul>
						</a>
					</div>

					<div class="alert alert-danger" role="alert" style='background-color: #f9f9f9;margin-top: 0px;border-bottom: 1px solid #ddd;border-top:1px solid #ddd;'>

						<a href="{{URL('/blog/'.$data['user']['id'].'/home/download')}}">
							<ul>
								<span class="glyphicon glyphicon-arrow-down" aria-hidden="true">&nbsp;&nbsp;&nbsp;</span>
								<font style="font-family:微软雅黑; font-size:16px">
									<strong>下载中心</strong>
								</font>

							</ul>
						</a>
					</div>
				</div>
			</td>

			<td class="col-sm-9">
				<div class="blog-block-light" style="box-shadow: 0 0 4px #777; padding-left: 15px;">
					<h4>
						<span class="glyphicon glyphicon-bookmark" aria-hidden="true"></span>
						&nbsp;欢迎
					</h4>
				</div>

				<div class="blog-block-article">
				@if(count($data['articles'])>0)

				@foreach($data['articles'] as $singlearticle)
					<div class="bbtittle">
						<span class="glyphicon glyphicon-paperclip" aria-hidden="true"></span>
						&nbsp;{{$singlearticle->title}}
					</div>
					<div class="bbsubtittle">{{$singlearticle->created_at}}</div>
					<div class="bbabstract">
						此处应有文章摘要，然而还没做出来
					</div>
					<hr class="smaller">
						<a href="{{URL('/blog/'.$data['user']['id'].'/home/'.$singlearticle->id)}}" class="aticlemore">点击查看更多>></a>
				@endforeach

				@else
				<div class="bbtittle">
						<span class="glyphicon glyphicon-paperclip" aria-hidden="true"></span>
						&nbsp;暂无博文
					</div>

				@endif
				</div>

			</td>
		</tr>
	</table>
@endsection