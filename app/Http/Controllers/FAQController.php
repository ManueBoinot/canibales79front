<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Faq;
use Auth;

class FaqController extends Controller
{


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $faqs = Faq::all();
        return view('PageFAQ', ['faqs' => $faqs]);
    }

    // ___________________________________________________________________________
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Faq $faq)
    {
        if (Auth::user()->isAdmin()) {
            return view('backOffice.FAQModif', ['faq' => $faq]);
        }
        abort(403);
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
        if (Auth::user()->isAdmin()) {
            $request->validate([
                'question' => 'required|min:25|max:1000',
                'reponse' => 'required|min:25|max:1000',
            ], [
                'question.required' => 'Merci de taper une question ou d\'annuler l\'action.',
                'question.min' => 'La question doit comporter au moins 25 caractères.',
                'question.max' => 'La question doit comporter maximum 1000 caractères.',
                'reponse.required' => 'Merci de taper une réponse ou d\'annuler l\'action.',
                'reponse.min' => 'La réponse doit comporter au moins 25 caractères.',
                'reponse.max' => 'La réponse doit comporter maximum 1000 caractères.'
            ]);

            Faq::create([
                'question' => $request->question,
                'reponse' => $request->reponse
            ]);
            return redirect()->route('admin.index')->with('status', 'La nouvelle Question/Réponse a bien été ajoutée');
        }
        abort(403);
    }

    // ___________________________________________________________________________
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Faq $faq)
    {
        if (Auth::user()->isAdmin()) {
            $request->validate([
                'question' => 'required|min:25|max:1000',
                'reponse' => 'required|min:25|max:1000',
            ], [
                'question.required' => 'Merci de taper une question ou d\'annuler l\'action.',
                'question.min' => 'La question doit comporter au moins 25 caractères.',
                'question.max' => 'La question doit comporter maximum 1000 caractères.',
                'reponse.required' => 'Merci de taper une réponse ou d\'annuler l\'action.',
                'reponse.min' => 'La réponse doit comporter au moins 25 caractères.',
                'reponse.max' => 'La réponse doit comporter maximum 1000 caractères.'
            ]);

            $faq->update([
                'question' => $request->input('question'),
                'reponse' => $request->input('reponse'),
            ]);

            $faq->save();

            return redirect()->route('admin.index')->with('status', 'La mise à jour a bien été effectuée');
        }
        abort(403);
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
        if (Auth::user()->isAdmin()) {
            $faq = Faq::find($id);
            $faq->delete();
            return redirect()->route('admin.index')->with('status', 'La question/réponse a bien été supprimée');
        }
        abort(403);
    }
}
