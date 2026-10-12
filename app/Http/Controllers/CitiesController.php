<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\City;
class CitiesController extends Controller
{
    public function index()
{
    $cities = City::with('county')->get();
    return response()->json([
        'cities' => $cities,
    ]);
}
public function store(Request $request)
{
    $request->validate([
        'vnev' => 'required|string|max:255',
        'megyeid' => 'required|exists:counties,id',
        'nepesseg' => 'required|integer',
        'iranyitoszam' => 'nullable|string|max:10',
    ]);

    $city = City::create($request->all());

    return response()->json([
        'city' => $city,
    ]);
}
public function update(Request $request, $id)
{
    $city = City::findOrFail($id);
    $city->update($request->all());

    return response()->json([
        'city' => $city,
    ]);
}
public function destroy($id)
{
    $city = City::findOrFail($id);
    $city->delete();

    return response()->json([
        'message' => 'City deleted',
    ]);
}
public function show($id)
{
    $city = City::with('county')->findOrFail($id);

    return response()->json([
        'city' => $city,
    ]);
}
public function search(Request $request)
{
    $needle = $request->query('needle');

    $cities = City::where('vnev', 'LIKE', '%' . $needle . '%')->get();

    return response()->json([
        'cities' => $cities,
    ]);
}

}
