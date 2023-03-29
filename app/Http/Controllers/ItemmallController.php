<?php

namespace App\Http\Controllers;

use App\Models\AHTransactions;
use App\Models\AHCategoryItems;
use App\Models\TItem;
use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ItemmallController extends Controller
{
    public function index()
    {
        return view('dashboard.mall.itemmall.index', [
            'TCategoryItems' => AHCategoryItems::orderBy('category', 'ASC')->paginate(7)->withQueryString()
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'qty' => 'required|integer|max:25',
            'itemID' => 'required|integer'
        ]);
        if ($validatedData['qty'] > 0) {
            $selectpoint = User::select('point')->where('user_id', '=', auth()->user()->user_id)->get();
            $selectprice = AHCategoryItems::select('price', 'type', 'name', 'img')->where('id', '=', $validatedData['itemID'])->get();

            $points = collect($selectpoint)->sum('point');
            $price = collect($selectprice)->sum('price');
            $type = collect($selectprice)->first()->type;
            $name = collect($selectprice)->first()->name;
            $img = collect($selectprice)->first()->img;

            $total = $price * $validatedData['qty'];

            if ($points <= $total) {
                return redirect('/itemmall')->with('failed', 'Your rps is not sufficient to purchase the item..');
            }

            $dataItemmall = [
                'type' => $type,
                'stack' => $validatedData['qty'],
                'attr' => DB::raw("CONVERT(VARBINARY(MAX), '0x00')"),
                'rank' => 0,
                'equip_level' => 0,
                'equip_strength' => 0,
                'equip_dexterity' => 0,
                'equip_intelligence' => 0,
                'user_id' => auth()->user()->user_id,
                'date'  => date('Y-m-d H:i:s'),
                'checkup' => 1,

            ];
            $dataTransaction = [
                'img' => $img,
                'item_name' => $name,
                'type' => $type,
                'stack' => $validatedData['qty'],
                'message' => 'You purchased ' . $validatedData['qty'] . ' pcs ' . $name . ' with the amount of ' . $total . ' Rps. [ITEM MALL]',
                'points' => $total,
                'login_id' => auth()->user()->login_id,
                'date' => date("Y-m-d h:i:s")
            ];
            $order = TItem::create($dataItemmall);

            if ($order) {
                User::where('user_id', auth()->user()->user_id)->decrement('point', $total);
                AHTransactions::where('user_id', auth()->user()->user_id)->create($dataTransaction);
            }
            return redirect('/itemmall')->with('success', 'You have been successfully purchase an item..');
        }
    }
}
