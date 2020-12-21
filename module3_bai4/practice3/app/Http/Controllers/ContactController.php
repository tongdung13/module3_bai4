<?php

namespace App\Http\Controllers;

use App\Models\ContactModel;
use Cassandra\Session;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contacts = ContactModel::all();

        return view('index', compact('contacts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $contacts = new ContactModel();
        $contacts->name = $request->name;
        $contacts->fullName = $request->fullName;
        $contacts->email = $request->email;

        if (!$request->hasFile('nameFile')) {
            $contacts->image = $request->nameFile;
        } else {
            $file = $request->file('nameFile');

            $fileEx = $file->getClientOriginalExtension();
            $finame = $request->fileName;

            $newFiname = "$finame.$fileEx";

            $request->file('nameFile')->storeAs('public/images', $newFiname);

            $contacts->image = $newFiname;
        }
        $contacts->save();
        $message = "tao $request->nameFile thanh cong";
        Session::class;

        return redirect()->route('contacts.index', compact('message'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function edit($id)
    {
        $contacts = ContactModel::findOrFail($id);
        return view('edit', compact('contacts'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, $id)
    {
        $contacts = ContactModel::findOrFail($id);
        $contacts->fill($request->all());
        $contacts->save();
        return redirect()->route('contacts.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $contacts = ContactModel::findOrFail($id);
        $contacts->delete();
        return redirect()->route('contacts.index');
    }
}
