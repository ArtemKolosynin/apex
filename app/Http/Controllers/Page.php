<?php 
namespace App\Http\Controllers; 
use App\Http\Controllers\Controller; 
class Page extends Controller 
{ 
public function show($param1 = 2, $param2 = 1) 
{
 return $param1 . ' ' . $param2; 
} 
}
?>