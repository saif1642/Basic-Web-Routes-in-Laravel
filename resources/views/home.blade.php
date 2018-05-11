@extends('layouts.app')

@section('content')
  <h1>Home</h1>
  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut delectus perspiciatis porro quam dolor commodi beatae placeat libero ea eveniet!
     Quae eligendi, quod ducimus unde amet consequatur veritatis ex mollitia!Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut delectus perspiciatis porro quam dolor commodi beatae placeat libero ea eveniet!
     Quae eligendi, quod ducimus unde amet consequatur veritatis ex mollitia!</p>
@endsection

@section('sidebar')
  @parent
  <div>This is after sidebar</div>
@endsection
