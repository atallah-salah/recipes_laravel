@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row allRecipes">
            <div class="col-md-8">
                <div class="panel panel-default recipesPost">
                    <b>{{$recipe->name}}</b><br>
                    By : {{$recipe->author}}
                    <hr/>
                    <img src="../{{$recipe->image}}" alt="" width="80%"><br>
                    <hr/>
                    {{$recipe->disc}}<br><br>
                </div>
            </div>
          <div class="col-md-4">
              <div class="panel panel-default recipesPost">
                  <div><br>
                      <form method="POST" action="{{route('recipePost',$recipe->id)}}">
                          {{ csrf_field() }}
                          <input name="comment" type="text" placeholder="Type your comment...">
                          <input type="submit" value="send">
                      </form>
                  </div>
                  <hr/>
                  {{--show all comments--}}
                  @foreach($comments as $comment)
                      <div class="comment">
                          {{$comment->user_name}} :
                        {{$comment->comment}}<br>
                          {{$comment->created_at}}
                     </div>
                      @endforeach

              </div>
        </div>
    </div>
</div>
<div align="center">
</div>
@endsection
