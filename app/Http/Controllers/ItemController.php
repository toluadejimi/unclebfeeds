<?php

namespace App\Http\Controllers;

use App\Models\BsFormation;
use App\Models\CmFormation;
use App\Models\Formation;
use App\Models\GmFormation;
use App\Models\Item;
use App\Models\LmFormation;
use App\Models\OnetoncmFormations;
use App\Models\Output;
use App\Models\OutputTransaction;
use App\Models\StockAdjust;
use App\Models\Transaction;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ItemController extends Controller
{



    public function index(request $request)
    {


        $output = Output::select('name',  'id', 'sn', 'qty')->get();
        $gmesh = Output::where('id', 2)->first()->qty;
        $cmesh = Output::where('id', 1)->first()->qty;
        $lmesh = Output::where('id', 3)->first()->qty;
        $bs = Output::where('id', 4)->first()->qty;
        $bf = Output::where('id', 5)->first()->qty;
        $pl = Output::where('id', 6)->first()->qty;

        $user = Auth::user()->role ?? null;







        return view('welcome', compact('output', 'user', 'gmesh', 'pl', 'cmesh', 'lmesh', 'bs', 'bf'));
    }



     public function adjust_stock(Request $request)
    {

        $user = Auth::user()->role ?? null;
        $outputs = Output::all();
        $items = Item::all();
        $adjusts = StockAdjust::all();



        return view('adjust-stock', compact('user', 'adjusts', 'outputs', 'items'));


    }


        public function add_to_stock(Request $request)
    {


        $user = Auth::user()->role ?? null;
        Output::where('id', $request->id)->increment('qty', $request->quantity);

        return back()->with('message', 'Stock has been adjusted successfully');






    }



     public function register(Request $request)
    {
        // Validate the user input
        $validatedData = $request->validate([
            'fullname' => 'required|string|max:255',
            'email' => 'required|string|email|unique:users|max:255',
            'password' => 'required|string|min:4|confirmed',
        ]);

        // Create a new user
        $user = User::create([
            'fullname' => $validatedData['fullname'],
            'email' => $validatedData['email'],
            'password' => Hash::make($validatedData['password']),
        ]);

        // Log in the user after registration (optional)
        auth()->login($user);

        // Redirect the user to a protected route or dashboard
        return redirect('/');
    }


    public function logout(Request $request)
    {

        Auth::logout();
        return redirect('/');
    }

     public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {


            $output = Output::select('name',  'id', 'sn', 'qty')->get();
            $gmesh = Output::where('id', 2)->first()->qty;
            $cmesh = Output::where('id', 1)->first()->qty;
            $lmesh = Output::where('id', 3)->first()->qty;
            $bs = Output::where('id', 4)->first()->qty;
            $bf = Output::where('id', 5)->first()->qty;
            $pl = Output::where('id', 6)->first()->qty;

            $user = Auth::user()->role ?? null;

            return redirect('/');

        }

        return back()->with('error', "Email or Password Incorrect");
    }


    public function ton_produce(request $request)
    {

        $final_item = $request->item;
        $ton = $request->tons;

        //Grower's Mesh Formation 1 TON
        if ($final_item == 2 && $ton == 1) {

            $cm = GmFormation::where('id', 1)->first();

            //Maize
            $maize = Item::where('id', 1)->first()->qty;
            if ($maize < $cm->maize) {
                return back()->with('error', 'MAIZE is insufficient to produce Growers Mash');
            }
            $soya = Item::where('id', 2)->first()->qty;
            if ($soya < $cm->soya) {
                return back()->with('error', 'SOYA is insufficient to produce Growers Mash');
            }

            $weathofful = Item::where('id', 5)->first()->qty;
            if ($weathofful < $cm->weathofful) {
                return back()->with('error', 'WHEATOFFUL is insufficient to produce Growers Mash');
            }

            $bonemeal = Item::where('id', 3)->first()->qty;
            if ($bonemeal < $cm->bonemeal) {
                return back()->with('error', 'BONE MEAL is insufficient to produce Growers Mash');
            }

            $limestone = Item::where('id', 4)->first()->qty;
            if ($limestone < $cm->limestone) {
                return back()->with('error', 'LIME STONE is insufficient to produce Growers Mash');
            }

            $salt = Item::where('id', 12)->first()->qty;
            if ($salt < $cm->salt) {
                return back()->with('error', 'SALT is insufficient to produce Growers Mash');
            }

            $lysine = Item::where('id', 17)->first()->qty;
            if ($lysine < $cm->lysine) {
                return back()->with('error', 'LYSINE is insufficient to produce Growers Mash');
            }

            $methionine = Item::where('id', 18)->first()->qty;
            if ($methionine < $cm->methionine) {
                return back()->with('error', 'METHIONINE is insufficient to produce Growers Mash');
            }

            $fulzyme = Item::where('id', 19)->first()->qty;
            if ($fulzyme < $cm->fulzyme) {
                return back()->with('error', 'FULZYME is insufficient to produce Growers Mash');
            }

            $zerotox = Item::where('id', 20)->first()->qty;
            if ($zerotox < $cm->zerotox) {
                return back()->with('error', 'ZEROTOX is insufficient to produce Growers Mash');
            }

            $gprmix = Item::where('id', 8)->first()->qty;
            if ($gprmix < $cm->gprmix) {
                return back()->with('error', "GROWER'S PREMIX is insufficient to produce Growers Mash");
            }




            //Deduction
            $maize = Item::where('id', 1)->decrement('qty', $cm->maize);
            $soya = Item::where('id', 2)->decrement('qty', $cm->soya);
            $weathofful = Item::where('id', 5)->decrement('qty', $cm->weathofful);
            $bonemeal = Item::where('id', 3)->decrement('qty', $cm->bonemeal);
            $limestone = Item::where('id', 4)->decrement('qty', $cm->limestone);
            $salt = Item::where('id', 12)->decrement('qty', $cm->salt);
            $lysine = Item::where('id', 17)->decrement('qty', $cm->lysine);
            $methionine = Item::where('id', 18)->decrement('qty', $cm->methionine);
            $fulzyme = Item::where('id', 19)->decrement('qty', $cm->fulzyme);
            $zerotox = Item::where('id', 20)->decrement('qty', $cm->zerotox);
            $gprmix = Item::where('id', 8)->decrement('qty', $cm->gprmix);


            //history
            $balance = Item::where('id', 1)->first()->qty;
            $trx = new Transaction();
            $trx->item_id = 1;
            $trx->issued_qty = $cm->maize;
            $trx->type = 'debit';
            $trx->balance = $balance;
            $trx->save();

            $balance = Item::where('id', 2)->first()->qty;
            $trx = new Transaction();
            $trx->item_id = 2;
            $trx->issued_qty = $cm->soya;
            $trx->type = 'debit';
            $trx->balance = $balance;
            $trx->save();

            $balance = Item::where('id', 5)->first()->qty;
            $trx = new Transaction();
            $trx->item_id = 5;
            $trx->issued_qty = $cm->weathofful;
            $trx->type = 'debit';
            $trx->balance = $balance;
            $trx->save();

            $balance = Item::where('id', 3)->first()->qty;
            $trx = new Transaction();
            $trx->item_id = 3;
            $trx->issued_qty = $cm->bonemeal;
            $trx->type = 'debit';
            $trx->balance = $balance;
            $trx->save();

            $balance = Item::where('id', 4)->first()->qty;
            $trx = new Transaction();
            $trx->item_id = 4;
            $trx->issued_qty = $cm->limestone;
            $trx->type = 'debit';
            $trx->balance = $balance;
            $trx->save();

            $balance = Item::where('id', 12)->first()->qty;
            $trx = new Transaction();
            $trx->item_id = 12;
            $trx->issued_qty = $cm->salt;
            $trx->type = 'debit';
            $trx->balance = $balance;
            $trx->save();

            $balance = Item::where('id', 17)->first()->qty;
            $trx = new Transaction();
            $trx->item_id = 17;
            $trx->issued_qty = $cm->lysine;
            $trx->type = 'debit';
            $trx->balance = $balance;
            $trx->save();


            $balance = Item::where('id', 18)->first()->qty;
            $trx = new Transaction();
            $trx->item_id = 18;
            $trx->issued_qty = $cm->methionine;
            $trx->type = 'debit';
            $trx->balance = $balance;
            $trx->save();

            $balance = Item::where('id', 19)->first()->qty;
            $trx = new Transaction();
            $trx->item_id = 19;
            $trx->type = 'debit';
            $trx->issued_qty = $cm->fulzyme;
            $trx->balance = $balance;
            $trx->save();

            $balance = Item::where('id', 20)->first()->qty;
            $trx = new Transaction();
            $trx->item_id = 20;
            $trx->issued_qty = $cm->zerotox;
            $trx->type = 'debit';
            $trx->balance = $balance;
            $trx->save();

            $balance = Item::where('id', 8)->first()->qty;
            $trx = new Transaction();
            $trx->item_id = $cm->gprmix;
            $trx->type = 'debit';
            $trx->issued_qty = 9;
            $trx->balance = $balance;
            $trx->save();



            $output = Output::where('id', $final_item)->increment('qty', 40);
            $balance = Output::where('id', $final_item)->first()->qty;

            $trx = new OutputTransaction();
            $trx->item_id = $final_item;
            $trx->type = 'credit';
            $trx->issued_qty = 1;
            $trx->balance = $balance;
            $trx->user_id = Auth::id();
            $trx->save();



            return back()->with('message', "40 bags of Growser's Mash Restock successful");
        }

         //Grower's Mesh Formation 1.5 TON
        if ($final_item == 2 && $ton == 2) {

            $cm5 = GmFormation::where('id', 2)->first();

            //Maize
            $maize = Item::where('id', 1)->first()->qty;
            if ($maize < $cm5->maize) {
                return back()->with('error', 'MAIZE is insufficient to produce Growers Mash');
            }
            $soya = Item::where('id', 2)->first()->qty;
            if ($soya < $cm5->soya) {
                return back()->with('error', 'SOYA is insufficient to produce Growers Mash');
            }

            $weathofful = Item::where('id', 5)->first()->qty;
            if ($weathofful < $cm5->weathofful) {
                return back()->with('error', 'WHEATOFFUL is insufficient to produce Growers Mash');
            }

            $bonemeal = Item::where('id', 3)->first()->qty;
            if ($bonemeal < $cm5->bonemeal) {
                return back()->with('error', 'BONE MEAL is insufficient to produce Growers Mash');
            }

            $limestone = Item::where('id', 4)->first()->qty;
            if ($limestone < $cm5->limestone) {
                return back()->with('error', 'LIME STONE is insufficient to produce Growers Mash');
            }

            $salt = Item::where('id', 12)->first()->qty;
            if ($salt < $cm5->salt) {
                return back()->with('error', 'SALT is insufficient to produce Growers Mash');
            }

            $lysine = Item::where('id', 17)->first()->qty;
            if ($lysine < $cm5->lysine) {
                return back()->with('error', 'LYSINE is insufficient to produce Growers Mash');
            }

            $methionine = Item::where('id', 18)->first()->qty;
            if ($methionine < $cm5->methionine) {
                return back()->with('error', 'METHIONINE is insufficient to produce Growers Mash');
            }

            $fulzyme = Item::where('id', 19)->first()->qty;
            if ($fulzyme < $cm5->fulzyme) {
                return back()->with('error', 'FULZYME is insufficient to produce Growers Mash');
            }

            $zerotox = Item::where('id', 20)->first()->qty;
            if ($zerotox < $cm5->zerotox) {
                return back()->with('error', 'ZEROTOX is insufficient to produce Growers Mash');
            }

            $gprmix = Item::where('id', 8)->first()->qty;
            if ($gprmix < $cm5->gprmix) {
                return back()->with('error', "GROWER'S PREMIX is insufficient to produce Growers Mash");
            }




            //Deduction
            $maize = Item::where('id', 1)->decrement('qty', $cm5->maize);
            $soya = Item::where('id', 2)->decrement('qty', $cm5->soya);
            $weathofful = Item::where('id', 5)->decrement('qty', $cm5->weathofful);
            $bonemeal = Item::where('id', 3)->decrement('qty', $cm5->bonemeal);
            $limestone = Item::where('id', 4)->decrement('qty', $cm5->limestone);
            $salt = Item::where('id', 12)->decrement('qty', $cm5->salt);
            $lysine = Item::where('id', 17)->decrement('qty', $cm5->lysine);
            $methionine = Item::where('id', 18)->decrement('qty', $cm5->methionine);
            $fulzyme = Item::where('id', 19)->decrement('qty', $cm5->fulzyme);
            $zerotox = Item::where('id', 20)->decrement('qty', $cm5->zerotox);
            $gprmix = Item::where('id', 8)->decrement('qty', $cm5->gprmix);


            //history
            $balance = Item::where('id', 1)->first()->qty;
            $trx = new Transaction();
            $trx->item_id = 1;
            $trx->issued_qty = $cm5->maize;
            $trx->type = 'debit';
            $trx->balance = $balance;
            $trx->save();

            $balance = Item::where('id', 2)->first()->qty;
            $trx = new Transaction();
            $trx->item_id = 2;
            $trx->issued_qty = $cm5->soya;
            $trx->type = 'debit';
            $trx->balance = $balance;
            $trx->save();

            $balance = Item::where('id', 5)->first()->qty;
            $trx = new Transaction();
            $trx->item_id = 5;
            $trx->issued_qty = $cm5->weathofful;
            $trx->type = 'debit';
            $trx->balance = $balance;
            $trx->save();

            $balance = Item::where('id', 3)->first()->qty;
            $trx = new Transaction();
            $trx->item_id = 3;
            $trx->issued_qty = $cm5->bonemeal;
            $trx->type = 'debit';
            $trx->balance = $balance;
            $trx->save();

            $balance = Item::where('id', 4)->first()->qty;
            $trx = new Transaction();
            $trx->item_id = 4;
            $trx->issued_qty = $cm5->limestone;
            $trx->type = 'debit';
            $trx->balance = $balance;
            $trx->save();

            $balance = Item::where('id', 12)->first()->qty;
            $trx = new Transaction();
            $trx->item_id = $cm5->salt;
            $trx->issued_qty = 3;
            $trx->type = 'debit';
            $trx->balance = $balance;
            $trx->save();

            $balance = Item::where('id', 17)->first()->qty;
            $trx = new Transaction();
            $trx->item_id = $cm5->lysine;
            $trx->issued_qty = 1;
            $trx->type = 'debit';
            $trx->balance = $balance;
            $trx->save();


            $balance = Item::where('id', 18)->first()->qty;
            $trx = new Transaction();
            $trx->item_id = $cm5->methionine;
            $trx->issued_qty = 1;
            $trx->type = 'debit';
            $trx->balance = $balance;
            $trx->save();

            $balance = Item::where('id', 19)->first()->qty;
            $trx = new Transaction();
            $trx->item_id = $cm5->fulzyme;
            $trx->type = 'debit';
            $trx->issued_qty = 0.3;
            $trx->balance = $balance;
            $trx->save();

            $balance = Item::where('id', 20)->first()->qty;
            $trx = new Transaction();
            $trx->item_id = $cm5->zerotox;
            $trx->issued_qty = 0.3;
            $trx->type = 'debit';
            $trx->balance = $balance;
            $trx->save();

            $balance = Item::where('id', 8)->first()->qty;
            $trx = new Transaction();
            $trx->item_id = $cm5->gprmix;
            $trx->type = 'debit';
            $trx->issued_qty = 2.5;
            $trx->balance = $balance;
            $trx->save();



            $output = Output::where('id', $final_item)->increment('qty', 45);
            $balance = Output::where('id', $final_item)->first()->qty;

            $trx = new OutputTransaction();
            $trx->item_id = $final_item;
            $trx->type = 'credit';
            $trx->issued_qty = 1.5;
            $trx->balance = $balance;
            $trx->save();



            return back()->with('message', "45 bags of Growser's Mash Restock successful");
        }


         //Chick's Mesh Formation 1 TON
         if ($final_item == 1 && $ton == 1) {

            $cm = CmFormation::where('id', 1)->first();

            //Maize
            $maize = Item::where('id', 1)->first()->qty;
            if ($maize < $cm->maize) {
                return back()->with('error', 'MAIZE is insufficient to produce Chicks Mash');
            }
            $soya = Item::where('id', 2)->first()->qty;
            if ($soya < $cm->soya) {
                return back()->with('error', 'SOYA is insufficient to produce Chicks Mash');
            }

            $weathofful = Item::where('id', 5)->first()->qty;
            if ($weathofful < $cm->weathofful) {
                return back()->with('error', 'WHEATOFFUL is insufficient to produce Chicks Mash');
            }

            $bonemeal = Item::where('id', 3)->first()->qty;
            if ($bonemeal < $cm->bonemeal) {
                return back()->with('error', 'BONE MEAL is insufficient to produce Chicks Mash');
            }

            $limestone = Item::where('id', 4)->first()->qty;
            if ($limestone < $cm->limestone) {
                return back()->with('error', 'LIME STONE is insufficient to produce Chicks Mash');
            }

            $ckprmix = Item::where('id', 7)->first()->qty;
            if ($ckprmix < $cm->ckprmix) {
                return back()->with('error', "Chick'S PREMIX is insufficient to produce Chicks Mash");
            }

            $enzyme = Item::where('id', 10)->first()->qty;
            if ($enzyme < $cm->enzyme) {
                return back()->with('error', 'ENZYME is insufficient to produce Chicks Mash');
            }

            $tbinder = Item::where('id', 11)->first()->qty;
            if ($tbinder < $cm->tbinder) {
                return back()->with('error', 'Toxin Binder is insufficient to produce Chicks Mash');
            }


            $lysine = Item::where('id', 17)->first()->qty;
            if ($lysine < $cm->lysine) {
                return back()->with('error', 'LYSINE is insufficient to produce Chicks Mash');
            }

            $methionine = Item::where('id', 18)->first()->qty;
            if ($methionine < $cm->methionine) {
                return back()->with('error', 'METHIONINE is insufficient to produce Chicks Mash');
            }

            $salt = Item::where('id', 12)->first()->qty;
            if ($salt < $cm->salt) {
                return back()->with('error', 'SALT is insufficient to produce Chicks Mash');
            }





            //Deduction
            $maize = Item::where('id', 1)->decrement('qty', $cm->maize);
            $soya = Item::where('id', 2)->decrement('qty', $cm->soya);
            $weathofful = Item::where('id', 5)->decrement('qty', $cm->weathofful);
            $bonemeal = Item::where('id', 3)->decrement('qty', $cm->bonemeal);
            $limestone = Item::where('id', 4)->decrement('qty', $cm->limestone);
            $ckprmix = Item::where('id', 7)->decrement('qty', $cm->ckprmix);
            $enzyme = Item::where('id', 10)->decrement('qty', $cm->enzyme);
            $tbinder = Item::where('id', 11)->decrement('qty', $cm->tbinder);
            $lysine = Item::where('id', 17)->decrement('qty', $cm->lysine);
            $methionine = Item::where('id', 18)->decrement('qty', $cm->methionine);
            $salt = Item::where('id', 12)->decrement('qty', $cm->salt);



            //history
            $balance = Item::where('id', 1)->first()->qty;
            $trx = new Transaction();
            $trx->item_id = 1;
            $trx->issued_qty = $cm->maize;
            $trx->type = 'debit';
            $trx->balance = $balance;
            $trx->save();

            $balance = Item::where('id', 2)->first()->qty;
            $trx = new Transaction();
            $trx->item_id = 2;
            $trx->issued_qty = $cm->soya;
            $trx->type = 'debit';
            $trx->balance = $balance;
            $trx->save();

            $balance = Item::where('id', 5)->first()->qty;
            $trx = new Transaction();
            $trx->item_id = 5;
            $trx->issued_qty = $cm->weathofful;
            $trx->type = 'debit';
            $trx->balance = $balance;
            $trx->save();

            $balance = Item::where('id', 3)->first()->qty;
            $trx = new Transaction();
            $trx->item_id = 3;
            $trx->issued_qty = $cm->bonemeal;
            $trx->type = 'debit';
            $trx->balance = $balance;
            $trx->save();

            $balance = Item::where('id', 4)->first()->qty;
            $trx = new Transaction();
            $trx->item_id = 4;
            $trx->issued_qty = $cm->limestone;
            $trx->type = 'debit';
            $trx->balance = $balance;
            $trx->save();




            $balance = Item::where('id', 7)->first()->qty;
            $trx = new Transaction();
            $trx->item_id = 7;
            $trx->issued_qty = $cm->ckprmix;
            $trx->type = 'debit';
            $trx->balance = $balance;
            $trx->save();


            $balance = Item::where('id', 10)->first()->qty;
            $trx = new Transaction();
            $trx->item_id = 10;
            $trx->type = 'debit';
            $trx->issued_qty = $cm->enzyme;
            $trx->balance = $balance;
            $trx->save();


            $balance = Item::where('id', 11)->first()->qty;
            $trx = new Transaction();
            $trx->item_id = 11;
            $trx->issued_qty = 0.3;
            $trx->type = 'debit';
            $trx->balance = $balance;
            $trx->save();



            $balance = Item::where('id', 17)->first()->qty;
            $trx = new Transaction();
            $trx->item_id = 17;
            $trx->issued_qty = $cm->lysine;
            $trx->type = 'debit';
            $trx->balance = $balance;
            $trx->save();



            $balance = Item::where('id', 12)->first()->qty;
            $trx = new Transaction();
            $trx->item_id = 12;
            $trx->issued_qty = $cm->salt;
            $trx->type = 'debit';
            $trx->balance = $balance;
            $trx->save();



            $balance = Item::where('id', 18)->first()->qty;
            $trx = new Transaction();
            $trx->item_id = 18;
            $trx->issued_qty = $cm->methionine;
            $trx->type = 'debit';
            $trx->balance = $balance;
            $trx->save();





            $output = Output::where('id', $final_item)->increment('qty', 40);
            $balance = Output::where('id', $final_item)->first()->qty;

            $trx = new OutputTransaction();
            $trx->item_id = $final_item;
            $trx->type = 'credit';
            $trx->issued_qty = 1;
            $trx->balance = $balance;
            $trx->save();



            return back()->with('message', "40 bags of Chick's Mash Restock successful");
        }



        //Layer's Mesh Formation 1 TON
        if ($final_item == 3 && $ton == 1) {

            $cm = LmFormation::where('id', 1)->first();

            //Maize
            $maize = Item::where('id', 1)->first()->qty;
            if ($maize < $cm->maize) {
                return back()->with('error', 'MAIZE is insufficient to produce Layers Mash');
            }
            $soya = Item::where('id', 2)->first()->qty;
            if ($soya < $cm->soya) {
                return back()->with('error', 'SOYA is insufficient to produce Layers Mash');
            }

            $weathofful = Item::where('id', 5)->first()->qty;
            if ($weathofful < $cm->weathofful) {
                return back()->with('error', 'WHEATOFFUL is insufficient to produce Layers Mash');
            }

            $bonemeal = Item::where('id', 3)->first()->qty;
            if ($bonemeal < $cm->bonemeal) {
                return back()->with('error', 'BONE MEAL is insufficient to produce Layers Mash');
            }

            $limestone = Item::where('id', 4)->first()->qty;
            if ($limestone < $cm->limestone) {
                return back()->with('error', 'LIME STONE is insufficient to produce Layers Mash');
            }

            $lysine = Item::where('id', 17)->first()->qty;
            if ($lysine < $cm->lysine) {
                return back()->with('error', 'LYSINE is insufficient to produce Layers Mash');
            }


            $methionine = Item::where('id', 18)->first()->qty;
            if ($methionine < $cm->methionine) {
                return back()->with('error', 'METHIONINE is insufficient to produce Layers Mash');
            }


            $lprmix = Item::where('id', 9)->first()->qty;
            if ($lprmix < $cm->lprmix) {
                return back()->with('error', "Layer's PREMIX is insufficient to produce Layers Mash");
            }

            $fulzyme = Item::where('id', 10)->first()->qty;
            if ($fulzyme < $cm->fulzyme) {
                return back()->with('error', 'FULZYME is insufficient to produce Layers Mash');
            }

            $zerotox = Item::where('id', 20)->first()->qty;
            if ($zerotox < $cm->zerotox) {
                return back()->with('error', 'ZEROTOX is insufficient to produce Layers Mash');
            }


            $salt = Item::where('id', 12)->first()->qty;
            if ($salt < $cm->salt) {
                return back()->with('error', 'SALT is insufficient to produce Layers Mash');
            }





            //Deduction
            $maize = Item::where('id', 1)->decrement('qty', $cm->maize);
            $soya = Item::where('id', 2)->decrement('qty', $cm->soya);
            $weathofful = Item::where('id', 5)->decrement('qty', $cm->weathofful);
            $bonemeal = Item::where('id', 3)->decrement('qty', $cm->bonemeal);
            $limestone = Item::where('id', 4)->decrement('qty', $cm->limestone);
            $lysine = Item::where('id', 17)->decrement('qty', $cm->lysine);
            $methionine = Item::where('id', 18)->decrement('qty', $cm->methionine);
            $lprmix = Item::where('id', 9)->decrement('qty', $cm->lprmix);
            $fulzyme = Item::where('id', 19)->decrement('qty', $cm->fulzyme);
            $zerotox = Item::where('id', 20)->decrement('qty', $cm->zerotox);
            $salt = Item::where('id', 12)->decrement('qty', $cm->salt);





            $balance = Item::where('id', 1)->first()->qty;
            $trx = new Transaction();
            $trx->item_id = 1;
            $trx->issued_qty = $cm->maize;
            $trx->type = 'debit';
            $trx->balance = $balance;
            $trx->save();

            $balance = Item::where('id', 2)->first()->qty;
            $trx = new Transaction();
            $trx->item_id = 2;
            $trx->issued_qty = $cm->soya;
            $trx->type = 'debit';
            $trx->balance = $balance;
            $trx->save();

            $balance = Item::where('id', 5)->first()->qty;
            $trx = new Transaction();
            $trx->item_id = 5;
            $trx->issued_qty = $cm->weathofful;
            $trx->type = 'debit';
            $trx->balance = $balance;
            $trx->save();

            $balance = Item::where('id', 3)->first()->qty;
            $trx = new Transaction();
            $trx->item_id = 3;
            $trx->issued_qty = $cm->bonemeal;
            $trx->type = 'debit';
            $trx->balance = $balance;
            $trx->save();

            $balance = Item::where('id', 4)->first()->qty;
            $trx = new Transaction();
            $trx->item_id = 4;
            $trx->issued_qty = $cm->limestone;
            $trx->type = 'debit';
            $trx->balance = $balance;
            $trx->save();

            $balance = Item::where('id', 12)->first()->qty;
            $trx = new Transaction();
            $trx->item_id = 12;
            $trx->issued_qty = $cm->salt;
            $trx->type = 'debit';
            $trx->balance = $balance;
            $trx->save();

            $balance = Item::where('id', 17)->first()->qty;
            $trx = new Transaction();
            $trx->item_id = 17;
            $trx->issued_qty = $cm->lysine;
            $trx->type = 'debit';
            $trx->balance = $balance;
            $trx->save();


            $balance = Item::where('id', 18)->first()->qty;
            $trx = new Transaction();
            $trx->item_id = 18;
            $trx->issued_qty = $cm->methionine;
            $trx->type = 'debit';
            $trx->balance = $balance;
            $trx->save();

            $balance = Item::where('id', 19)->first()->qty;
            $trx = new Transaction();
            $trx->item_id = 19;
            $trx->type = 'debit';
            $trx->issued_qty = $cm->fulzyme;
            $trx->balance = $balance;
            $trx->save();

            $balance = Item::where('id', 20)->first()->qty;
            $trx = new Transaction();
            $trx->item_id = 20;
            $trx->issued_qty = $cm->zerotox;
            $trx->type = 'debit';
            $trx->balance = $balance;
            $trx->save();

            $balance = Item::where('id', 9)->first()->qty;
            $trx = new Transaction();
            $trx->item_id = $cm->lprmix;
            $trx->type = 'debit';
            $trx->issued_qty = 9;
            $trx->balance = $balance;
            $trx->save();



            $output = Output::where('id', $final_item)->increment('qty', 40);
            $balance = Output::where('id', $final_item)->first()->qty;

            $trx = new OutputTransaction();
            $trx->item_id = $final_item;
            $trx->type = 'credit';
            $trx->issued_qty = 1;
            $trx->balance = $balance;
            $trx->save();



            return back()->with('message', "40 bags of Layer's Mash Restock successful");
        }




        //Broiler's Starter Formation 1 TON
        if ($final_item == 4 && $ton == 1) {

            $cm = BsFormation::where('id', 1)->first();

            //Maize
            $maize = Item::where('id', 1)->first()->qty;
            if ($maize < $cm->maize) {
                return back()->with('error', 'MAIZE is insufficient to produce Broilers Stater');
            }
            $soya = Item::where('id', 2)->first()->qty;
            if ($soya < $cm->soya) {
                return back()->with('error', 'SOYA is insufficient to produce Broilers Stater');
            }

            $weathofful = Item::where('id', 5)->first()->qty;
            if ($weathofful < $cm->weathofful) {
                return back()->with('error', 'WHEATOFFUL is insufficient to produce Broilers Stater');
            }

            $bonemeal = Item::where('id', 3)->first()->qty;
            if ($bonemeal < $cm->bonemeal) {
                return back()->with('error', 'BONE MEAL is insufficient to produce Broilers Stater');
            }

            $limestone = Item::where('id', 4)->first()->qty;
            if ($limestone < $cm->limestone) {
                return back()->with('error', 'LIME STONE is insufficient to produce Broilers Stater');
            }

            $lysine = Item::where('id', 17)->first()->qty;
            if ($lysine < $cm->lysine) {
                return back()->with('error', 'LYSINE is insufficient to produce Broilers Stater');
            }


            $methionine = Item::where('id', 18)->first()->qty;
            if ($methionine < $cm->methionine) {
                return back()->with('error', 'METHIONINE is insufficient to produce Broilers Stater');
            }


            $lprmix = Item::where('id', 9)->first()->qty;
            if ($lprmix < $cm->lprmix) {
                return back()->with('error', "Layer's PREMIX is insufficient to produce Broilers Stater");
            }

            $fulzyme = Item::where('id', 10)->first()->qty;
            if ($fulzyme < $cm->fulzyme) {
                return back()->with('error', 'FULZYME is insufficient to produce Broilers Stater');
            }

         


            $salt = Item::where('id', 12)->first()->qty;
            if ($salt < $cm->salt) {
                return back()->with('error', 'SALT is insufficient to produce Broilers Stater');
            }



            $zerotox = Item::where('id', 20)->first()->qty;
            if ($zerotox < $cm->zerotox) {


                $t_binder = Item::where('id', 11)->first()->qty;
if($t_binder < $cm->t_binder) {

    return back()->with('error', 'ZeroTox and Toxin binder is insufficient to produce Broilers Stater');

}

            }





            //Deduction
            $maize = Item::where('id', 1)->decrement('qty', $cm->maize);
            $soya = Item::where('id', 2)->decrement('qty', $cm->soya);
            $weathofful = Item::where('id', 5)->decrement('qty', $cm->weathofful);
            $bonemeal = Item::where('id', 3)->decrement('qty', $cm->bonemeal);
            $limestone = Item::where('id', 4)->decrement('qty', $cm->limestone);
            $lysine = Item::where('id', 17)->decrement('qty', $cm->lysine);
            $methionine = Item::where('id', 18)->decrement('qty', $cm->methionine);
            $lprmix = Item::where('id', 9)->decrement('qty', $cm->lprmix);
            $fulzyme = Item::where('id', 19)->decrement('qty', $cm->fulzyme);
            $zerotox = Item::where('id', 20)->decrement('qty', $cm->zerotox);
            $salt = Item::where('id', 12)->decrement('qty', $cm->salt);





            $balance = Item::where('id', 1)->first()->qty;
            $trx = new Transaction();
            $trx->item_id = 1;
            $trx->issued_qty = $cm->maize;
            $trx->type = 'debit';
            $trx->balance = $balance;
            $trx->save();

            $balance = Item::where('id', 2)->first()->qty;
            $trx = new Transaction();
            $trx->item_id = 2;
            $trx->issued_qty = $cm->soya;
            $trx->type = 'debit';
            $trx->balance = $balance;
            $trx->save();

            $balance = Item::where('id', 5)->first()->qty;
            $trx = new Transaction();
            $trx->item_id = 5;
            $trx->issued_qty = $cm->weathofful;
            $trx->type = 'debit';
            $trx->balance = $balance;
            $trx->save();

            $balance = Item::where('id', 3)->first()->qty;
            $trx = new Transaction();
            $trx->item_id = 3;
            $trx->issued_qty = $cm->bonemeal;
            $trx->type = 'debit';
            $trx->balance = $balance;
            $trx->save();

            $balance = Item::where('id', 4)->first()->qty;
            $trx = new Transaction();
            $trx->item_id = 4;
            $trx->issued_qty = $cm->limestone;
            $trx->type = 'debit';
            $trx->balance = $balance;
            $trx->save();

            $balance = Item::where('id', 12)->first()->qty;
            $trx = new Transaction();
            $trx->item_id = 12;
            $trx->issued_qty = $cm->salt;
            $trx->type = 'debit';
            $trx->balance = $balance;
            $trx->save();

            $balance = Item::where('id', 17)->first()->qty;
            $trx = new Transaction();
            $trx->item_id = 17;
            $trx->issued_qty = $cm->lysine;
            $trx->type = 'debit';
            $trx->balance = $balance;
            $trx->save();


            $balance = Item::where('id', 18)->first()->qty;
            $trx = new Transaction();
            $trx->item_id = 18;
            $trx->issued_qty = $cm->methionine;
            $trx->type = 'debit';
            $trx->balance = $balance;
            $trx->save();

            $balance = Item::where('id', 19)->first()->qty;
            $trx = new Transaction();
            $trx->item_id = 19;
            $trx->type = 'debit';
            $trx->issued_qty = $cm->fulzyme;
            $trx->balance = $balance;
            $trx->save();

            $balance = Item::where('id', 20)->first()->qty;
            $trx = new Transaction();
            $trx->item_id = 20;
            $trx->issued_qty = $cm->zerotox;
            $trx->type = 'debit';
            $trx->balance = $balance;
            $trx->save();

            $balance = Item::where('id', 9)->first()->qty;
            $trx = new Transaction();
            $trx->item_id = $cm->lprmix;
            $trx->type = 'debit';
            $trx->issued_qty = 9;
            $trx->balance = $balance;
            $trx->save();



            $output = Output::where('id', $final_item)->increment('qty', 40);
            $balance = Output::where('id', $final_item)->first()->qty;

            $trx = new OutputTransaction();
            $trx->item_id = $final_item;
            $trx->type = 'credit';
            $trx->issued_qty = 1;
            $trx->balance = $balance;
            $trx->save();



            return back()->with('message', "40 bags of Broiler's Stater Restock successful");
        }











        return back()->with('error', "No formation present");
    }



    public function history(request $request)
    {


        $item_history = OutputTransaction::latest()->get();
        $material_history = Transaction::latest()->get();


        return view('history', compact('item_history', 'material_history'));




    }





    public function add_new_stock(request $request)
    {

        $id = $request->item;
        $qty = $request->qty;

        $get_qty = Item::where('id', $id)->first()->qty;


        Item::where('id', $id)->increment('qty', $qty);
        $trx = new Transaction();
        $trx->item_id = $id;
        $trx->issued_qty = (int)$qty;
        $trx->type = "credit";
        $trx->balance = (int)$get_qty + (int)$qty;
        $trx->save();

        return back()->with('message', "Item has been successfully Added ");
    }

    public function add_major_stock(request $request)
    {

        $id = $request->item;
        $qty = $request->qty;

        $get_qty = Item::where('id', $id)->first()->qty;


        Output::where('id', $id)->increment('qty', $qty);
        $trx = new Transaction();
        $trx->item_id = $id;
        $trx->issued_qty = (int)$qty;
        $trx->type = "credit";
        $trx->balance = (int)$get_qty + (int)$qty;
        $trx->save();

        return back()->with('message', "Item has been successfully Added ");
    }






    public function issue_material_stock(request $request)
    {
        $id = $request->item;
        $qty = $request->qty;

        $get_qty = Item::where('id', $id)->first()->qty;

        if ($get_qty < $qty) {
            return back()->with('error', "Insufficient Stock, Kindly restock and try again");
        } else {
            Item::where('id', $id)->decrement('qty', $qty);
            $trx = new Transaction();
            $trx->item_id = $id;
            $trx->issued_qty = (int)$qty;
            $trx->balance = (int)$get_qty - (int)$qty;
            $trx->type = "debit";
            $trx->save();
            return back()->with('message', "Item has been successfully Issued Out");
        }
    }






    public function item(request $request)
    {


        $items = Item::select('name',  'id', 'qty')->get();
        $major = Output::select('name',  'id', 'qty')->get();


        return view('items', compact('items', 'major'));
    }

    public function add_stock(request $request)
    {

        $name = $request->name;

        $new = new Item();
        $new->name = $name;
        $new->save();

        return back()->with('message', "Item added successfully");
    }


    public function issue_now(request $request)
    {


        $id = $request->item;
        $qty = $request->qty;

        $get_qty = Output::where('id', $id)->first()->qty;

        if ($get_qty < $qty) {
            return back()->with('error', "Insufficient Stock, Kindly restock and try again");
        } else {


            Output::where('id', $id)->decrement('qty', $qty);

            $trx = new OutputTransaction();
            $trx->item_id = $id;
            $trx->issued_qty = $qty;
            $trx->balance = $get_qty - $qty;
            $trx->type = 'debit';
            $trx->save();

            return back()->with('message', "Item has been successfully Issued Out");
        }





        $output = Output::select('name', 'sn', 'qty')->get();

        return view('welcome', compact('output'));
    }



    public function formation_view(){


        $formation_title = null;

        return view('formular', compact('formation_title'));




    }

	public function search(request $request)
	{



        $name = $request->name;
        $ton = $request->ton;

        if($name == 'gm' && $ton == 1 ){


            $formation = GmFormation::where('id', 1)->first();
            $formation_title = $formation->title ?? null;
            $fm_code = "gm1";


            return view ('formular', compact('formation','fm_code','formation_title'));


         }

         if($name == 'gm' && $ton == 15 ){


            $formation = GmFormation::where('id', 2)->first();
            $formation_title = $formation->title ?? null;
            $fm_code = "gm15";


            return view ('formular', compact('formation','fm_code','formation_title'));


         }




        if($name == 'cm' && $ton == 1 ){


           $formation = CmFormation::where('id', 1)->first();
           $formation_title = $formation->title ?? null;
           $formation_note = null;
           $fm_code = "cm1";

           return view('formular', compact('formation', 'formation_note', 'fm_code', 'formation_title'));

        }


        if($name == 'lm' && $ton == 1 ){


            $formation = LmFormation::where('id', 1)->first();
            $formation_title = $formation->title ?? null;
            $formation_note = null;
            $fm_code = "lm1";

            return view('formular', compact('formation', 'formation_note', 'fm_code', 'formation_title'));

         }


         if($name == 'bs' && $ton == 1 ){


            $formation = BsFormation::where('id', 1)->first();
            $formation_title = $formation->title ?? null;
            $formation_note = null;
            $fm_code = "bs1";

            return view('formular', compact('formation', 'formation_note', 'fm_code', 'formation_title'));

         }




        $formation_note = "No Formation Found";
        $formation_title = null;

        return view('formular', compact('formation_title', 'formation_note'));









	}

	public function update_formation(request $request)
	{



        if($request->fm_code == 'gm1'){


            dd($request->all());


            GmFormation::where('id', 1)->update([

                'maize' => $request->maize,
                'soya' => $request->soya,
                'weathofful' => $request->weathofful,
                'bonemeal' => $request->bonemeal,
                'limestone' => $request->limestone,
                'salt' => $request->salt,
                'fulzyme' => $request->fulzyme,
                'zerotox' => $request->zerotox,
                'gprmix' => $request->gprmix,
                'lprmix' => $request->lprmix,


            ]);

            return back()->with('message', 'Chick Mash Formation has been updated');
        }




        if($request->fm_code == 'gm15'){


            GmFormation::where('id', 2)->update([

                'maize' => $request->maize,
                'soya' => $request->soya,
                'weathofful' => $request->weathofful,
                'bonemeal' => $request->bonemeal,
                'limestone' => $request->limestone,
                'salt' => $request->salt,
                'fulzyme' => $request->fulzyme,
                'zerotox' => $request->zerotox,
                'gprmix' => $request->gprmix,
                'lprmix' => $request->lprmix,


            ]);

            return back()->with('message', 'Chick Mash Formation has been updated');
        }


        if($request->fm_code == 'cm1'){


            CmFormation::where('id', 2)->update([

                'maize' => $request->maize,
                'soya' => $request->soya,
                'weathofful' => $request->weathofful,
                'bonemeal' => $request->bonemeal,
                'limestone' => $request->limestone,
                'ckprmix' => $request->ckprmix,
                'enzyme' => $request->enzyme,
                'tbinder' => $request->tbinder,
                'lysine' => $request->lysine,
                'methionine' => $request->methionine,
                'salt' => $request->salt,


            ]);

            return back()->with('message', 'Chick Mash Formation has been updated');
        }


        if($request->fm_code == 'lm1'){


            LmFormation::where('id', 1)->update([

                'maize' => $request->maize,
                'soya' => $request->soya,
                'weathofful' => $request->weathofful,
                'bonemeal' => $request->bonemeal,
                'limestone' => $request->limestone,
                'salt' => $request->salt,
                'fulzyme' => $request->fulzyme,
                'zerotox' => $request->zerotox,
                'lprmix' => $request->lprmix,


            ]);

            return back()->with('message', 'Chick Mash Formation has been updated');
        }

        if($request->fm_code == 'bs1'){


            BsFormation::where('id', 1)->update([

                'maize' => $request->maize,
                'soya' => $request->soya,
                'weathofful' => $request->weathofful,
                'bonemeal' => $request->bonemeal,
                'limestone' => $request->limestone,
                'salt' => $request->salt,
                'fulzyme' => $request->fulzyme,
                'zerotox' => $request->zerotox,
                'lprmix' => $request->lprmix,
                't_binder' => $request->t_binder,



            ]);

            return back()->with('message', 'Broilers Stater Formation has been updated');
        }


	}





}









