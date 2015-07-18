<?php namespace App\Http\Controllers;

use App\Item;
use App\User;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Carbon\Carbon;
use App\Http\Requests\ItemsRequest;

use Illuminate\Http\Request;

use App\Http\Controllers\Auth;

class ItemsController extends Controller {

	public function __construct() {
		$this->middleware('auth', ['only' => 'create']);
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$user = \Auth::user();

	    $items=Item::where('user_id',$user->id)->get();
		
		return view('tasks.index', compact('items'));
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$item = Item::findOrFail($id);

		return view('tasks.show', compact('item'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('tasks.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(ItemsRequest $request)
	{
		$item = new Item($request->all());

		\Auth::user()->item()->save($item);

		return redirect('tasks');
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$item = Item::findOrFail($id);

		return view('tasks.edit', compact('item'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id, Request $request)
	{
		$item = Item::findOrFail($id);

		$item->done = $item->done == 0 ? 1 : 0;

		$item -> update($request->all());

		return redirect('tasks');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$item = Item::findOrFail($id);

		$item->delete();

		return redirect('tasks');
	}

}
