<?php
namespace App\Models;

use CodeIgniter\Model;

class NewsModel extends Model {
	protected $table = 'news';
	/*
	* Public function getNews
	*
	*/
	//IMPORTANT : SEE WHERE THE SLUG COMES FROM AND IS USED FOR. See how this works, missing to understand this means you can't do this again. 
	public function getNews($slug = false) {
		if ($slug === false) {
			return $this -> findAll(); //returns an array of object
		}
		return $this -> asArray()
								-> where (['slug' => $slug] ) ->first();
	}

}