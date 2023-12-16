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
     * Store a newly created resource in storage.
     */
    public function store( Request $request ) {
        PhoneBook::create( $request->all() );

        return redirect()->route( 'phone-book.index' );
    }

    /**
     * Display the specified resource.
     */
    public function show( $id ) {
        $contact = PhoneBook::find( $id );

        return view( 'phone-book.show', compact( 'contact' ) );
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit( $id ) {
        $contact = PhoneBook::find( $id );

        return view( 'phone-book.edit', compact( 'contact' ) );
    }

    /**
     * Update the specified resource in storage.
     */
    public function update( Request $request, $id ) {
        $contact = PhoneBook::find( $id );
        $contact->update( $request->all() );

        return redirect()->route( 'phone-book.index' );
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $id ) {
        $contact = PhoneBook::find( $id );
        $contact->delete();
        return redirect()->route( 'phone-book.index' );
    }
}
