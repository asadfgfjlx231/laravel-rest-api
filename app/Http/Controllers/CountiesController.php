<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\County;
class CountiesController extends Controller
{
    public function index()
{
    $counties = County::with('cities')->get();
    return response()->json([
        'counties' => $counties,
    ]);
}
public function store(Request $request)
{
    $request->validate([
        'mnev' => 'required|string|max:255',
        'megyecimer' => 'required|string|max:255',
    ]);

    $county = County::create($request->all());

    return response()->json([
        'county' => $county,
    ]);
}
public function update(Request $request, $id)
{
    $county = County::findOrFail($id);
    $county->update($request->all());

    return response()->json([
        'county' => $county,
    ]);
}
public function destroy($id)
{
    $county = County::findOrFail($id);
    $county->delete();

    return response()->json([
        'message' => 'County deleted',
    ]);
}
public function show($id)
{
    $county = County::with('cities')->findOrFail($id);

    return response()->json([
        'county' => $county,
    ]);
}
}
