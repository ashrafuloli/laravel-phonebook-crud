<?php

namespace App\Http\Controllers;

use App\Http\Requests\PhoneBookRequest;
use App\Models\PhoneBook;
use Illuminate\Http\RedirectResponse;
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
     * @param  PhoneBookRequest  $request
     *
     * @return RedirectResponse
     */
    public function store( PhoneBookRequest $request ) {
        //$this->validate( $request, [
        //    'name'  => 'required|min:3|max:50',
        //    'phone' => 'required|digits:11|numeric',
        //] );

        PhoneBook::create( $request->all() );
        session()->flash( 'msg', 'Contact Created Successfully' );
        session()->flash( 'class', 'success' );

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
     * @param  PhoneBookRequest  $request
     * @param  PhoneBook  $phoneBook
     *
     * @return RedirectResponse
     */
    public function update( Request $request, PhoneBook $phoneBook ) {
        $this->validate( $request, [
            'name'  => 'required|min:3|max:50',
            'phone' => 'required|digits:11|numeric|unique:phone_books,phone,' . $phoneBook->id,
        ] );

        $phoneBook->update( $request->all() );
        session()->flash( 'msg', 'Contact Updated Successfully' );
        session()->flash( 'class', 'info' );

        return redirect()->route( 'phone-book.index' );
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( PhoneBook $phoneBook ) {
        $phoneBook->delete();
        session()->flash( 'msg', 'Contact Deleted Successfully' );
        session()->flash( 'class', 'danger' );

        return redirect()->route( 'phone-book.index' );
    }
}
