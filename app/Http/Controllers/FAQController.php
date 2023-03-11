<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FAQ;

class FAQController extends Controller
{


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $faqs = FAQ::all();
        return view('Pages.FAQ', ['faqs' => $faqs]);
    }

        // ___________________________________________________________________________
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(FAQ $faq)
    {
        return view('Pages.Admin.FAQModif',['faq'=>$faq]);
    }

    // ___________________________________________________________________________
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {
        $request->validate([
            'question' => 'required',
            'reponse' => 'required',
        ]);

        FAQ::create([
            'question' => $request->question,
            'reponse' => $request->reponse
        ]);
        return redirect()->route('admin.index')->with('status', 'La nouvelle Question/Réponse a bien été ajoutée');
    }

        // ___________________________________________________________________________
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, FAQ $faq)
    {

        $request->validate([
            'question' => 'required',
            'reponse' => 'required',
        ]);

        $faq->update([
            'question' => $request->input('question'),
            'reponse' => $request->input('reponse'),
        ]);

        $faq->save();

        return redirect()->route('admin.index')->with('status', 'La mise à jour a bien été effectuée');
    }


    // ___________________________________________________________________________
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $faq = FAQ::find($id);
        $faq->delete();
        return redirect()->route('admin.index')->with('status', 'La question/réponse a bien été supprimée');
    }
}
