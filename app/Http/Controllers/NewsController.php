<?php

namespace App\Http\Controllers;

use App\Category;
use App\Photo;
use App\Http\Requests\NewsRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NewsController extends Controller {
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index() {
		$user = Auth::user();
		$news = $user->news()->orderBy( 'id', 'desc' )->paginate( 10 );

		return view( 'news.index', compact( 'news' ) );
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create() {
		$categories = Category::pluck( 'name', 'id' )->all();

		return view( 'news.create', compact( 'categories' ) );
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request $request
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function store( NewsRequest $request ) {
		$this->validate( $request, $request->messages() );
		$user                = Auth::user();
		$input               = $request->all();
		$input['word_count'] = str_word_count( html_entity_decode( $request->body ) );
		$news = $user->news()->create( $input );
		if ($files = $request->file('photos'))
		{
			foreach ($files as $file){
				$name = time(). $file->getClientOriginalName();
				$file->move('images',$name);
				$photo = Photo::create([
					'news_id' => $news->id,
					'file'=>$name
				]);
			}
		}
		$request->session()->flash( 'message.level', 'success' );
		$request->session()->flash( 'message.content', 'News submitted successfully!' );

		return redirect()->back();
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int $id
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function show( $id ) {
		$user = Auth::user();
	    $news =  $user->news()->findOrFail($id);
		return view( 'news.show' , compact('news'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int $id
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function edit( $id ) {
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request $request
	 * @param  int $id
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function update( Request $request, $id ) {
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int $id
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function destroy( $id ) {
		//
	}
}
