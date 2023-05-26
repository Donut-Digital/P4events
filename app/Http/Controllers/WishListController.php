<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Statamic\Facades\Entry;

class WishListController extends Controller
{
    public function create(Request $request)
    {
        $products = [];

        foreach(json_decode($request->get('products')) as $product)
        {
            $products[] = array('product' => $product->id, 'quantity' => $product->quantity);
        }

        $entry = Entry::make()
            ->collection('wish_list_submissions')
            ->data([
                'wish_list_status'=>'todo',
                'title' => $request->get('name'),
                'email' => $request->get('email'),
                'phone' => $request->get('number'),
                'event_location' => $request->get('location'),
                'event_date' => $request->get('date'),
                'message' => $request->get('message'),
                'products' => $products
            ]);

        $entry->save();
    }
}