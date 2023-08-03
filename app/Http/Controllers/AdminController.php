<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $news_all = News::latest()->get();

        return view('admin.news', compact('news_all'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
        return view('admin.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title_tm' => 'required',
            'title_ru' => 'required',
            'title_en' => 'required',
            'description_tm' => 'required',
            'description_ru' => 'required',
            'description_en' => 'required',
            'event_date' => 'required|date',
            'image' => 'required',
        ]);

        $news = new News();
        $news->title_tm = $request->title_tm;
        $news->title_ru = $request->title_ru;
        $news->title_en = $request->title_en;
        $news->description_tm = $request->description_tm;
        $news->description_ru = $request->description_ru;
        $news->description_en = $request->description_en;
        $news->event_date = $request->event_date;

        if($request->hasFile('image')){
            $news->image = $request->file('image')->store('uploaded_images');
        }

        $news->save();

        return redirect()->route('news.index')
            ->with('success','Product created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(News $news)
    {
        return view('admin.edit', compact('news'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'title_tm' => 'required',
            'title_ru' => 'required',
            'title_en' => 'required',
            'description_tm' => 'required',
            'description_ru' => 'required',
            'description_en' => 'required',
            'event_date' => 'required|date',
        ]);
        $selected_news = News::findOrFail($id);
        $selected_news->title_tm = $request->title_tm;
        $selected_news->title_ru = $request->title_ru;
        $selected_news->title_en = $request->title_en;
        $selected_news->description_tm = $request->description_tm;
        $selected_news->description_ru = $request->description_ru;
        $selected_news->description_en = $request->description_en;
        $selected_news->event_date = $request->event_date;


        if ($request->hasFile('image')) {
            File::delete($selected_news->image);
            $selected_news->image = $request->file('image')->store('uploaded_images');
        }

        $selected_news->save();

        return redirect()->route('news.index')
            ->with('success','Product updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $selected_news = News::findOrFail($id);
        File::delete($selected_news->image);

        $selected_news->delete();

        return redirect()->route('news.index')
            ->with('success','Product deleted successfully');
    }
}
