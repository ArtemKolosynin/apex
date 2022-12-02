@extends('test.show')


@section('contant')
<div class="contant">
  <img src="/public/img/Rectangle6.png" class="main-pic" alt="Улица">
  <div class="main-text col">
  </div>
  <div class="info">
  @foreach($product['products'] as $prod )
  <p>
      {{$prod['name']}}
    </p>
    <p>
      {{$prod['cost']}}
    </p>
  </div>
  <div class="text">
   <p> 
    {{$prod['inStock']}}
  </p>
</div>
<div class="more">
{{$prod['desc']}}
</div>
@endforeach
</div>
@endsection
@section('aside')
<aside>{{ $aside }}</aside>
@endsection









































{{--
  @foreach($posts as $post)
  <div class="main-text col">
    <h2>{{$post['title']}}</h2>
  </div>
  <div class="info">
    <p>
      {{$post['author']}}
    </p>
    <p>
      {{$post['date']}}
    </p>
  </div>
  <div class="text">
   <p> 
    {{$post['teaser']}}
  </p>
</div>
<div class="more">
 <a href="posts/1">подробнее...</a>
</div>
</div>
@endforeach
@endsection
@section('aside')
<aside>{{ $aside }}</aside>
@endsection
--}}