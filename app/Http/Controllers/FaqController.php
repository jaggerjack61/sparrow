<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Faq;

class FaqController extends Controller
{
    public function index()
    {
        $faqs = Faq::all();
        return view('faq.index', compact('faqs'));
    }

    public function store(Request $request)
    {
        try{
            $request->validate([
                'question' => 'required|string',
                'answer' => 'required|string',
            ]);
            $faq = new Faq();
            $faq->question = $request->question;
            $faq->answer = $request->answer;
            $faq->save();
            return back()->with('success', 'FAQ added successfully');
        } catch (\Exception $e) {
            return back()->with('error', 'An error occurred');
        }

    }

    public function update(Request $request)
    {
        try {
            $request->validate([
                'id' => 'required|integer|exists:faqs,id',
                'question' => 'required|string',
                'answer' => 'required|string',
            ]);
            $faq = Faq::find($request->id);
            $faq->question = $request->question;
            $faq->answer = $request->answer;
            $faq->save();
            return back()->with('success', 'FAQ updated successfully');
        } catch (\Exception $e) {
            return back()->with('error', 'An error occurred');
        }

    }

    public function toggle(Faq $faq)
    {
        try {
            $faq->status = !$faq->status;
            $faq->save();
            return back()->with('success', 'FAQ updated successfully');
        } catch (\Exception $e) {
            return back()->with('error', 'An error occurred');
        }

    }
}
