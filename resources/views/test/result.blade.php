<?php
	namespace App\Http\Controllers;
	
	use App\Http\Controllers\Controller;
	use Illuminate\Http\Request;
	
	class TestController extends Controller
	{
		public function form(Request $request)
		{
			// Выполнится при первом заходе:
			if ($request->isMethod('get')) {
				return view('test.form'); // представление с формой
			}
			
			// Выполнится после отправки формы:
			if ($request->isMethod('post')) {
				$text = $request->input('text');
				return view('test.result', ['text', $text]); // представление с результатом
			}
		}
	}
?>
