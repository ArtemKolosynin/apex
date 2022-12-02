<ul>
@foreach($products as $k=> $l)
          <li><a href="/public/posts/{{$k}}">{{$l["name"]}}</a></li>
@endforeach
</ul>
