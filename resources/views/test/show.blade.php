{{--<!DOCTYPE html> 
<html> 
<head> 
	<title>My view</title> 
</head> 
<body>
	
	<p class="{{ $var1 }}">qqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqq</p>
	<p style="{{$col}}">fsadadadaswaaaaaaaaaaaaaaaaaaa</p>
	<a href="{{$href}}">{{$text}}</a>
	<P>первый элемент массива: {{ $arr[0] }}</P>
	<p>второй элемент массива: {{ $arr[1] }}</p>
	<p>сумма: {{ $arr[0] + $arr[1] }}</p>
	<p>Имя: {{ $name }} Фамилия: {{ $surname }} Оклад: {{ $salary }}</p>
	<p>количество элементов: {{ count($arr) }}</p>
	<P>{{ $city ?? 'Москва' }}</P>
	<p>{{ $location or 'a' }} </p>
	@if(!isset($year))
	{{date("Y")}}
	@else
	{{$year}}    
	@endif
	<p>переданный год: {{ $year ?? date('Y') }}</p>
	<p>переданный месяц: {{ $month  ?? date('M') }}</p>
	<p>переданный день: {{ $day ?? date('D') }}</p>
	<input value="{{ $var1 }}">
	<input value="{{ $var2 }}">
	<input value="{{ $var3 }}">
	<b>{{ $str }}</b>
	<br>
	@if ($age >= 18)
	вам уже есть 18 лет
	@endif
	<br>
	<br>
	@if ($num = 7)
	Воскресенье
	@endif
	<br>
	@if ($num1 = 6)
	Суббота
	@endif
	<br>
	@if ($num1 >= 7)
	Сегодня выходной
	@else
	Сегодня рабочий день
	@endif
	<br>
	@if ($month == 1)
	Зима
	@elseif ($month == 2)
	Весна
	@elseif ($month == 3)
	Лето
	@else
	Осень
	@endif
	<br>
	@unless ($age1 >= 18)
	Вы не несовершеннолетний
	@endunless
	<br>
	<br>
	@foreach ($arr1 as $elem)
	<p>{{ $elem * $elem}}</p>
	@endforeach
	<br>
	<ul>
		@foreach ($arr1 as $elem)
		<li>{{ $elem }}</li>
		@endforeach
	</ul>

	<ul>
		@foreach ($arr as $key => $elem)
		<li>{{ $key + 1 + 1 }} {{ $elem }}</li>
		@endforeach
	</ul>
	<br>
	<br>
	@if (count($arr2) > 0)
	<ul>
		@foreach ($arr2 as $elem)
		<li>{{ $elem }}</li>
		@endforeach
	</ul>
	@endif

	@if (count($arr2) > 0)
	<ul>
		@foreach ($arr2 as $data)
		<li>{{ $date }}</li>
		@endforeach
	</ul>
	@else
	<p>{{$date}}</p>
	@endif
	<br>
	<br>
	<table>
		@foreach ($usee as $subUsee)
		<tr>
			@foreach ($subUsee as $elem)
			<td>{{ $elem }}</td>
			@endforeach
		</tr>
		@endforeach
	</table>

	<table>
		@foreach ($users as $subUsers)
		<tr>
			@foreach ($subUsers as $elem)
			<td>{{ $elem }}</td>
			@endforeach
		</tr>
		@endforeach
	</table>
	<ul>
		@foreach ($users as $user)
		<li>{{ $user['name'] }} {{ $user['age'] }}</li>
		@endforeach
	</ul>
	<table>
		<tr>
			@foreach ($employees as $user)
			<td>{{ $user['name'] }} {{ $user['surname'] }} {{ $user['salary'] }}</td>
			@endforeach
		</tr>
	</table>
	<br>
	<br>
	<ul>
		@foreach ($users as $user)
		@if ($loop->first)
		@endif
		@if ($loop->last) 
		@endif
		<li>Это пользователь {{ $user['id'] }} {{ $user['name'] }}</li>
		@endforeach
	</ul>
	@forelse($arr as $elem)
	<p>{{ $elem }}</p>
	@empty
	<p>В массиве нет элементов</p>
	@endforelse
	@for ($i = 1; $i < 11; $i++)
	значение счетчика: {{ $i }}
	@endfor
--}}








<!DOCTYPE html>
<html>
<head>
@yield('title')
  <link rel="stylesheet" type="text/css" href="/public/style.css">
</head>

<body>

  <div class="container">
    <div class="header">
      <div class="logo col">
        <a href="index.html"><img src="/public/img/logo.png"></a>
      </div>
      <div class="menu col">
      	@include("test.menu")
      </div>
    </div>
@yield('contant')
  </div>
</body>
</html>
	


























{{--
<!DOCTYPE html> 
<html> 
<head> 
	<title>My view</title> 
</head> 
<body>
	@foreach($link as $l)
<ul>
<li>
	<a href="{{$l[href]}}">{{ $l["text"]}}</a>
</li>
</ul>
@endforeach
@foreach($emplo as $emp)
<table>
<tr>
<th>Имя</th>
<td>{{$emp["name"]}}</td>
<th>Фамилия</th>
<td>{{$emp["surname"]}}</td>
<th>Зарплата</th>
<td>{{$emp["salary"]}}</td>
</tr>	
</table>
@endforeach
@yield('aside')
	</body>
</html>
--}}