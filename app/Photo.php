<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model {
	public $uploads = '/images/';

	protected $fillable = [ 'file', 'news_id' ];

	public function getFileAttribute( $photo ) {
		return $this->uploads . $photo;
	}

	public function news(){
		return $this->belongsTo('App\News');
	}
}
