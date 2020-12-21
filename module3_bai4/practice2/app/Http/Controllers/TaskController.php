<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;
use function Symfony\Component\Translation\t;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index()
    {
        $tasks = Task::all();

        return view('index', compact('tasks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function create()
    {
        return view('add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       // dd($request->all());
        $tasks = new Task();
        $tasks->title = $request->inputTitle;
        $tasks->content = $request->inputContent;
        $tasks->create_at = $request->inputCreate;
        $tasks->due_date = $request->inputDueDate;

       // dd($tasks);
        if (!$request->hasFile('inputFile')){
            $tasks->image = $tasks->inputFile;
        } else {
            $file = $request->file('inputFile');

            $fileExtension = $file->getClientOriginalExtension();
            $fileName = $request->inputFileName;

            $newFilename = "$fileName.$fileExtension";

            $request->file('inputFile')->storeAs('public/images', $newFilename);

            $tasks->image = $newFilename;

        }
        $tasks->save();

        $message = "tao task $request->inputTitle thanh cong";
        Session::flash('create-success', $message);
        return redirect()->route('tasks.index', compact('message'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tasks = Task::findOrFail($id);
        $tasks->delete();
        return redirect()->route('tasks.index');
    }
}
