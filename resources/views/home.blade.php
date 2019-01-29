@extends('baselayout')


@section ('content')

    @include ('parts.content')
      
@endsection

@section ('inner_title')
      <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
     
        <h1 class="display-5 font-weight-normal">Közelgő események</h1>
          
      </div>
@if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif
@endsection

