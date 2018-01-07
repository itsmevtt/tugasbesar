@extends('layouts.admin')

@section('content')
<section class="content-header">
	<h1>
	  	Article
	</h1>
	<ol class="breadcrumb">
		<li><a href="#"><i class="fa fa-dashboard"></i>Home</a></li>
		<li class="active"><a href="{{URL::to('article/index')}}">New Article</a></li>
	</ol>
</section>

<section class="content">
  	<div class="row">
	    <div class="col-md-12">
	    	<div class="pull-left">
				{!! Form::open(['method'=>'GET','url'=>'/searcharticle','role'=>'search'])  !!}
					<div class='form-group clearfix'>
						<div class='col-md-10'>
			                <div class="input-group custom-search-form">
			                  <input type="text" class="form-control" name="search" placeholder="Search...">
			                    <span class="input-group-btn">
			                    	<span class="input-group-btn">
				       					<button class="btn btn-default" type="submit"><i class="fa fa-search"></i>Search</button>
				     				</span>
			                    </span>
			                </div>
			            </div>
			        </div>
          		{!! Form::close() !!}
			</div>
				
			<div class='pull-right'>
				<a href="{{URL::to('article/create')}}" class="btn btn-primary"><i class="fa fa-plus-circle"></i>create</a>
			</div><br>
				
			<table class="table table-striped table-hover">
				<thead>
					<tr>
						<th>No.</th>
				       	<th><b>Title</b></th>
				       	<th><b>Article</b></th>
				       	<th><b>Category</b></th>
				       	<th><b>Update</b></th>
				       	<th><b>Photo</b></th>
				       	<th class='text-center' style='width:70px'>Actions</th>
					</tr>
				</thead>

				<tstatus>
				   @foreach($article as $i=>$articles)
				     	<tr>
				     	 <td>{{$i+1}}</td>
				         <td> {{ $articles->title }} </td>
				         <td> {{ $articles->article }} </td>
				         <td> {{ $articles->category }} </td>
				         <td> {{ $articles->update }} </td>
				         <td> {{ $articles->photo }} </td>
				         <td>
							<a href='{{URL::action("admin\ArticleController@edit",array($articles->id_article))}}'>edit</a>
							<a href='{{URL::action("admin\ArticleController@show",array($articles->id_article))}}'>show</a>
							<form id="delete_article{{$articles->id_article}}" action='{{URL::action("admin\ArticleController@destroy",array($articles->id_article))}}' method="POST">
							    <input type="hidden" name="_method" value="delete">
							    <input type="hidden" name="_token" value="{{ csrf_token() }}">
							    <a href="#" onclick="document.getElementById('delete_article{{$articles->id_article}}').submit();">delete</a>
							</form>
						</td>	         
				     	</tr>
					   @endforeach
				</tstatus>
			</table>
		</div>
	</div>
</section>
@endsection