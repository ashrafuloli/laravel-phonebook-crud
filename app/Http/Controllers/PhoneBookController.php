<?php

namespace App\Http\Controllers;

use App\Models\PhoneBook;
use Illuminate\Http\Request;

class PhoneBookController extends Controller {
    /**
     * Display a listing of the resource.
     */
    public function index() {
        $contacts = PhoneBook::all();

        return view( 'phone-book.index', compact( 'contacts' ) );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create() {
        return view( 'phone-book.create' );
    }

    /**
     * @param  Request  $request
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store( Request $request ) {
        PhoneBook::create( $request->all() );

        return redirect()->route( 'phone-book.index' );
    }

    /**
     * Display the specified resource.
     */
    public function show( PhoneBook $phoneBook ) {
        return view( 'phone-book.show', compact( 'phoneBook' ) );
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit( PhoneBook $phoneBook ) {
        return view( 'phone-book.edit', compact( 'phoneBook' ) );
    }

    /**
     * @param  Request  $request
     * @param  PhoneBook  $phoneBook
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update( Request $request, PhoneBook $phoneBook ) {
        $phoneBook->update( $request->all() );

        return redirect()->route( 'phone-book.index' );
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( PhoneBook $phoneBook ) {
        $phoneBook->delete();

        return redirect()->route( 'phone-book.index' );
    }
}
