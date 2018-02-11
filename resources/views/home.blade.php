@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row allRecipes">
        @foreach($items as $item)
            <div class="col-md-3 ">
                <div class="panel panel-default recipesPosts">
                    <b>{{$item->name}}</b>
                    <div class="panel-body">
                        <br>
                        <img src="{{$item->image}}" width="200" height="200" alt=""><br>
                        <br>
                        <a class="btn btn-primary" href="{{ route('recipePost',$item->id) }}">Show more</a>
                        <hr/>
                        By: {{$item->author}}<br>
                        {{$item->created_at}}
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
<div align="center">
    {{--pagintation link--}}
    {{ $items->links() }}
</div>
@endsection
