<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\View\View;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $events = Event::latest()->paginate(5);
        return view('events.index', compact('events'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('events.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([
            'img_banner' => 'required|image|mimes:jpeg,jpg,png|max:2048',
            'title' => 'required|min:5',
            'description' => 'required|min:10',
            'location' => 'required|min:5',
            'price' => 'required|numeric',
            'start_time' => 'required',
            'end_time' => 'required',
            'max_participants' => 'required|numeric',
        ]);

        //upload image
        $img_banner = $request->file('img_banner');
        $img_banner->storeAs('public/events', $img_banner->hashName());

        Event::create(
            [
                "img_banner" => $img_banner->hashName(),
                'title' => $request->title,
                'description' => $request->description,
                'location' => $request->location,
                'start_time' => $request->start_time,
                'end_time' => $request->end_time,
                'max_participants' => $request->max_participants,
                'location' => $request->location,
                'created_by' => 1,
            ]
        );
        return redirect()->route('events.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }

    /**
     * Display the specified resource.
     */
    public function show(Event $event)
    {
        //
        return "show";
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Event $event)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Event $event)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Event $event)
    {
        return "destroy";
    }
}
