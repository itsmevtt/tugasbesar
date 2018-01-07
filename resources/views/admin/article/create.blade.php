@extends('layouts.admin')

@section('content')
  <section class="content-header">
    <h1>
        Add New Article
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i>Home</a></li>
      <li class="active"><a href="{{URL::to('article/index')}}">List Article</a></li>
    </ol>
  </section>
  <section class="content">
    <div class="row">
      <div class="col-md-12"></br></br>
        {!! Form::open(['action' => 'admin\ArticleController@store']) !!}
          
          <div class='form-group clearfix'>
            {{ Form::label("title", "Title", ['class' => 'col-md-2 control-label']) }}
              <div class='col-md-4'>
                {{ Form::text("title", '',['class' => 'form-control required']) }}
                <span class="error">{{$errors->first('title')}}</span>
              </div>
          </div>

          <div class='form-group clearfix'>
            {{ Form::label("article", "Article", ['class' => 'col-md-2 control-label']) }}
              <div class='col-md-4'>
                {{ Form::textarea("article", '',['class' => 'form-control required']) }}
                <span class="error">{{$errors->first('article')}}</span>
              </div>
          </div>

          <div class='form-group clearfix'>
            {{ Form::label("category", "Category", ['class' => 'col-md-2 control-label']) }}
              <div class='col-md-4'>
                {{ Form::text("category", '',['class' => 'form-control required']) }}
                <span class="error">{{$errors->first('category')}}</span>
              </div>
          </div>

          <div class='form-group clearfix'>
            {{ Form::label("update", "Update", ['class' => 'col-md-2 control-label']) }}
              <div class='col-md-4'>
                {{ Form::date("update", '',['class' => 'form-control required']) }}
                <span class="error">{{$errors->first('update')}}</span>
              </div>
          </div>

          <div class='form-group clearfix'>
            {{ Form::label("photo", "Photo", ['class' => 'col-md-2 control-label']) }}
              <div class='col-md-4'>
                {{ Form::text("photo", '',['class' => 'form-control required']) }}
                <span class="error">{{$errors->first('photo')}}</span>
              </div>
          </div>
          
          <div class='form-group'>
            <div class='col-md-4 col-md-offset-2'>
              <button class='btn btn-primary' type='submit' name='save' id='save'><span class='glyphicon glyphicon-save'></span> Save</button>
            </div>
          </div>
        {!! Form::close() !!}    
      </div>
    </div>
  </section>
@endsection