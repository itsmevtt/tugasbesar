@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="content">
<!--                 <div class="kotakLogo">
                    <div class="logo">               
                    </div>
                </div> -->
                <div class="title m-b-md">
                    <div class="logo">
                        <img class="logo-uninus" src="images/uninus.png">
                    </div>
                    MA'QUN-QAF
                </div>
                <div class="links">
                    <a href="{{URL::to('/maqun-qaf')}}">Home</a>
                    <a href="#">Al-Qur'an</a>
                    <a href="{{URL::to('/home-artikel')}}">Artikel</a>
                    <a href="{{URL::to('/login')}}">Forum</a>
                    <a href="#">About</a>
                </div>
            </div>
        </div>
        </div>
    </div>
</div>
@endsection