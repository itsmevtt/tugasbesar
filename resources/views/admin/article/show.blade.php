@extends('layouts.admin')

@section('content')
  <section class="content-header">
    <h1>
      Article
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active"><a href="{{URL::to('article/index')}}">List Article</a></li>
    </ol>
  </section></br></br>

  <section class="content">
    <div class="row">
      <div class="col-md-12">
        <table class="table table-striped table-hover">
          
          <tr>
            <td>Title</td>
            <td>
              {{{$article->title}}}
            </td>
          </tr>

          <tr>
            <td>Article</td>
            <td>
              {{{$article->article}}}
            </td>
          </tr>

          <tr>
            <td>Category</td>
            <td>
              {{{$article->category}}}
            </td>
          </tr>

          <tr>
            <td>Update</td>
            <td>
              {{{$article->update}}}
            </td>
          </tr>

          <tr>
            <td>Photo</td>
            <td>
              {{{$article->photo}}}
            </td>
          </tr>

        </table>

        <p align="center">
          <a href="{{URL::to('article/index')}}" class="btn btn-primary" role="button">kembali</a>
        </p>
      
      </div>
    </div>
  </section>
@endsection