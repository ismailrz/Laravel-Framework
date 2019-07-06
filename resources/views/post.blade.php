@extends('master')

@section('content')

  <div class="content">
    <div class="row">
      <div class="col-md-8 col-md-offset-2">


          <?php if (auth::check()): ?>
            <div class="alert alert-success">
              form - {{auth::user() }}
            </div>
          <?php endif; ?>




        <?php foreach ($posts as $post): ?>
          <div class="panel panel-default">

            <div class="panel-body">

              <h3>{{$post->title}}</h3>
              <p> {{$post->category->name }}</p>
              <div class="">
                <h3>{{$post->description}}</h3>
              </div>
            </div>

          </div>
        <?php endforeach; ?>

      </div>

    </div>

  </div>


@endsection
