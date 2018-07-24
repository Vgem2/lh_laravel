@extends('innerlayout')



@section ('content')

    @include ('Event.content')
      
@endsection

@section ('inner_title')
      <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
     
        <h1 class="display-5 font-weight-normal">
            <?php echo $event->title ?>
        </h1>
          
      </div>
@endsection