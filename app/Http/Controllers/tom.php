<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class tom extends Controller
{
	public function form()
	{
		return view('test.form');
	}

	public function result(Request $request)
	{

		if ($request->isMethod('get')) {
			$text = $request->input('text');
			return view('test.result' ,['text' => $text]);
		}
	}
}


















/*
	class tom extends Controller
	{
		public function form()
		{
			return view('test.form');
		}
		
		public function result(Request $request)
		{
			$text = $request->input('text');
			$text1 = $request->input('text1');
			$text2 = $request->input('text2');
			return view('test.result', ['text' => $text,
										'text1' => $text1,
										'text2' => $text2

		]);
		}
	}
*/
	/*
	class tom extends Controller
	{
		public function form(Request $request)
		{
			// Если форма была отправлена и есть поле text:
			if ($request->has('num')) 
			{
				$text = $request->input('num') + $request->input('num1');
				return view('test.form' , ['text' => $text]);
			}
			return view('test.form', ['text' => '']);
			
		}
	}
	*/
	?>

