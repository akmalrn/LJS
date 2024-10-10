<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Slider;
use Illuminate\Support\Facades\Storage;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function viewslider()
    {
        $slider = slider::all();
        return view('admin/tampilan/view-slider', compact('slider'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function createslider()
    {
        return view('admin/slider/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function storeSlider(Request $request)
    {
        $request->validate([
            'path' => 'required|image|mimes:jpeg,png,jpg,gif,webp,svg|max:4096',
            'description' => 'required|string|max:255',
        ]);

        $imagePath = $request->file('path')->store('sliders', 'public');
        $slider = new Slider();
        $slider->path = $imagePath;
        $slider->description = $request->description;
        $slider->save();

        return redirect()->route('viewslider')->with('success', 'Gambar uploaded successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function editSlider(Request $request, $id)
    {
        $slider = Slider::findOrFail($id);
        return view('admin/slider/edit', compact('slider'));
    }
    /**
     * Update the specified resource in storage.
     */
    public function updateSlider(Request $request, string $id)
    {
        $request->validate([
            'description' => 'required|string|max:255',
            'path' => 'image|mimes:jpeg,png,jpg,gif,webp,svg|max:2048|nullable',
        ]);

        $slider = Slider::findOrFail($id);
        if ($request->hasFile('path')) {
            // Delete old image
            Storage::disk('public')->delete($slider->path);
            // Store new image
            $imagePath = $request->file('path')->store('sliders', 'public');
            $slider->path = $imagePath;
        }

        $slider->description = $request->description;
        $slider->save();

        return redirect()->route('viewslider')->with('success', 'Slider updated successfully!');
    }


    /**
     * Remove the specified resource from storage.
     */
        public function destroySlider(string $id)
    {
        $slider = Slider::findOrFail($id);
        // Delete image from storage
        Storage::disk('sliders')->delete($slider->path);
        // Delete slider from database
        $slider->delete();

        return redirect()->route('viewslider')->with('success', 'Slider deleted successfully!');
    }
}
