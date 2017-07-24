<?php
namespace App\Http\Controllers;
use App\Post;  
/**
* 
*/
class PagesController extends Controller
{
	
	
	public function getIndex()
	{
		$posts = Post::orderBy('created_at','desc')->limit(4)->get();
		return view('pages.welcome')->withPosts($posts);
	}
	public function getAbout()
	{
		$first="Shariq";
		$last="Dar!";
		$fullname=$first." ".$last;
		$email="dshariq8@gmail.com";
		$city="Srinagar";
		//$data=[];
		//$data['name'] = $fullname;
		//$data['email'] = $email;
		//$data['city'] =$city;
		$data=[
			'name' => $fullname,
			'email' =>$email,
			'city' =>$city   
		];
		return view('pages/about')->withData($data);
		//return view('pages/about')->withFullname($fullname)->withEmail($email)->withCity($city);
	}
	public function getContact()   
	{  
		return view('pages/Contact');
	}
	public function getComments()
	{
		return view('pages/comments');
	}
}