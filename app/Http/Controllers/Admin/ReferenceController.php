<?php

namespace App\Http\Controllers\Admin;

use App\Helpers\SlugHelper;
use App\Http\Controllers\Controller;
use App\Models\Reference;
use Illuminate\Http\Request;

class ReferenceController extends Controller
{
    public function index()
    {
        $references = Reference::orderBy('sort_order')->get();
        return view('admin.reference.index', compact('references'));
    }

    public function create()
    {
        $categories = Reference::categories();
        return view('admin.reference.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $categoryKeys = implode(',', array_keys(Reference::categories()));
        $request->validate([
            'name'     => 'required|string|max:255',
            'category' => 'required|in:' . $categoryKeys,
            'url'      => 'nullable|string|max:255',
            'badge'    => 'nullable|string|max:100',
        ]);

        $reference = Reference::create([
            'name'         => $request->name,
            'location'     => $request->location,
            'category'     => $request->category,
            'description'  => $request->description,
            'url'          => $request->url,
            'badge'        => $request->badge,
            'technologies' => $request->technologies,
            'gradient'     => $request->gradient,
            'sort_order'   => $request->sort_order ?? 0,
            'is_active'    => $request->boolean('is_active', true),
        ]);

        if ($request->hasFile('image')) {
            $reference->clearMediaCollection('image');
            $reference->addMedia($request->image)
                ->usingFileName(SlugHelper::imageSlugName($request->image))
                ->toMediaCollection('image');
        }

        return redirect()->route('reference.index')->with('success', 'Referans eklendi.');
    }

    public function edit(string $id)
    {
        $reference  = Reference::findOrFail($id);
        $categories = Reference::categories();
        return view('admin.reference.edit', compact('reference', 'categories'));
    }

    public function update(Request $request, string $id)
    {
        $categoryKeys = implode(',', array_keys(Reference::categories()));
        $request->validate([
            'name'     => 'required|string|max:255',
            'category' => 'required|in:' . $categoryKeys,
            'url'      => 'nullable|string|max:255',
            'badge'    => 'nullable|string|max:100',
        ]);

        $reference = Reference::findOrFail($id);
        $reference->update([
            'name'         => $request->name,
            'location'     => $request->location,
            'category'     => $request->category,
            'description'  => $request->description,
            'url'          => $request->url,
            'badge'        => $request->badge,
            'technologies' => $request->technologies,
            'gradient'     => $request->gradient,
            'sort_order'   => $request->sort_order ?? 0,
            'is_active'    => $request->boolean('is_active', true),
        ]);

        if ($request->hasFile('image')) {
            $reference->clearMediaCollection('image');
            $reference->addMedia($request->image)
                ->usingFileName(SlugHelper::imageSlugName($request->image))
                ->toMediaCollection('image');
        }

        return redirect()->route('reference.index')->with('success', 'Referans güncellendi.');
    }

    public function destroy(string $id)
    {
        Reference::findOrFail($id)->delete();
        return response()->json(['status' => 'success', 'message' => 'Silme Başarılı!']);
    }
}
