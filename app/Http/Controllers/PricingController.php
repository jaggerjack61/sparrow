<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pricing;
use App\Models\PricingItem;

class PricingController extends Controller
{
    public function index()
    {
        $pricings = Pricing::with('items')->get(); // Eager load items
        return view('pricing.index', compact('pricings'));
    }

    public function store(Request $request)
    {
        try {
             $request->validate([
                'name' => 'required|string',
                'description' => 'required|string',
                'price' => 'required|numeric',
                'period' => 'required|in:day,week,month,year',
            ]);
        if (Pricing::where('status', true)->count() >= 4) {
            $request->merge(['status' => false]);
        }
        $pricing = Pricing::create($request->all());
        $pricing->save();
            return back()->with('success', 'Pricing added successfully');
        } catch (\Exception $e) {
            return back()->with('error', 'An error occurred');
        }
    }

     public function update(Request $request)
    {
        try {
             $request->validate([
                'id' => 'required|integer|exists:pricings,id',
                 'name' => 'required|string',
                'description' => 'required|string',
                'price' => 'required|numeric',
                'period' => 'required|in:day,week,month,year',
            ]);

            $pricing = Pricing::find($request->id);
             $pricing->update($request->all());

            return back()->with('success', 'Pricing updated successfully');
        } catch (\Exception $e) {
           return back()->with('error', 'An error occurred');
        }
    }
    public function toggle(Pricing $pricing)
    {
          try {

            if ($pricing->status == false && Pricing::where('status', true)->count() >= 4) {
                return back()->with('error', 'You can only have a maximum of 4 active price listings');
            }
            $pricing->status = !$pricing->status;
            $pricing->save();
            return back()->with('success', 'Pricing status updated successfully');
        } catch (\Exception $e) {
             return back()->with('error', 'An error occurred');
        }
    }

   public function select(Pricing $pricing)
    {
        try {
           Pricing::where('selected', true)->update(['selected' => false]);
           $pricing->selected = true;
           $pricing->save();

            return back()->with('success', 'Pricing selected successfully');
        } catch (\Exception $e) {
              return back()->with('error', 'An error occurred');
        }
    }
    public function storeItem(Request $request, Pricing $pricing)
    {
        try {
            $request->validate([
                'description' => 'required|string',
            ]);
            $pricing->items()->create($request->all());

            return back()->with('success', 'Pricing item added successfully');
        } catch (\Exception $e) {
             return back()->with('error', 'An error occurred');
        }
    }

     public function updateItem(Request $request, PricingItem $pricingItem)
    {
        try {
           $request->validate([
                'description' => 'required|string',
                'id' => 'required|integer|exists:pricing_items,id',
            ]);
           $pricingItem->update($request->all());

            return back()->with('success', 'Pricing item updated successfully');
        } catch (\Exception $e) {
               return back()->with('error', 'An error occurred');
        }
    }

    public function deleteItem(PricingItem $pricingItem){
        try {
            $pricingItem->delete();
            return back()->with('success', 'Pricing Item deleted successfully');
         } catch (\Exception $e) {
             return back()->with('error', 'An error occurred');
        }
    }
}
