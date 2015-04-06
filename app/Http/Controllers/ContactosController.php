<?php namespace App\Http\Controllers;

use Input;
use Redirect;
use App\Contacto;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class ContactosController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$contactos = Contacto::all();
		return view('contactos.index', compact('contactos'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('contactos.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::all();
		Contacto::create( $input );
 
		return Redirect::route('contactos.index')->with('message', 'Contacto creado.');

	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show(Contacto $contacto)
	{
		return view('contactos.show', compact('contacto'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit(Contacto $contacto)
	{
		return view('contactos.edit', compact('contacto'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(Contacto $contacto)
	{
		$input = array_except(Input::all(), '_method');
		$contacto->update($input);
 
		return Redirect::route('contactos.show', $contacto->id)->with('message', 'Contacto modificado.');

	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy(Contacto $contacto)
	{
		$contacto->delete();
 
		return Redirect::route('contactos.index')->with('message', 'Contacto borrado.');
}	

}
