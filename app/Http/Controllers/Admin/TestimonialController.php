<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class TestimonialController extends Controller
{
    public function index()
    {
        $testimonials = Testimonial::orderBy('sort_order')->get();
        return view('admin.testimonial.index', compact('testimonials'));
    }

    public function create()
    {
        return view('admin.testimonial.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'client_name'  => 'required|string|max:255',
            'client_title' => 'required|string|max:255',
            'comment'      => 'required|string',
            'rating'       => 'nullable|integer|min:1|max:5',
        ]);

        Testimonial::create([
            'client_name'  => $request->client_name,
            'client_title' => $request->client_title,
            'company'      => $request->company,
            'comment'      => $request->comment,
            'rating'       => $request->rating ?? 5,
            'initials'     => $request->initials,
            'project_name' => $request->project_name,
            'sort_order'   => $request->sort_order ?? 0,
            'is_active'    => $request->boolean('is_active', true),
        ]);

        return redirect()->route('admin.testimonial.index')->with('success', 'Müşteri yorumu başarıyla eklendi.');
    }

    public function edit(string $id)
    {
        $testimonial = Testimonial::findOrFail($id);
        return view('admin.testimonial.edit', compact('testimonial'));
    }

    public function update(Request $request, string $id)
    {
        $request->validate([
            'client_name'  => 'required|string|max:255',
            'client_title' => 'required|string|max:255',
            'comment'      => 'required|string',
            'rating'       => 'nullable|integer|min:1|max:5',
        ]);

        $testimonial = Testimonial::findOrFail($id);
        $testimonial->update([
            'client_name'  => $request->client_name,
            'client_title' => $request->client_title,
            'company'      => $request->company,
            'comment'      => $request->comment,
            'rating'       => $request->rating ?? 5,
            'initials'     => $request->initials,
            'project_name' => $request->project_name,
            'sort_order'   => $request->sort_order ?? 0,
            'is_active'    => $request->boolean('is_active', true),
        ]);

        return redirect()->route('admin.testimonial.index')->with('success', 'Müşteri yorumu güncellendi.');
    }

    public function destroy(string $id)
    {
        Testimonial::findOrFail($id)->delete();
        return response()->json(['status' => 'success', 'message' => 'Yorum başarıyla silindi!']);
    }
}
