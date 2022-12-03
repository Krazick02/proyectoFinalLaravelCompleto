<?php

namespace App\Http\Controllers;

use App\Exports\PrimeExport;
use App\Models\Prime;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class PrimeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $primes = Prime::orderBy('id')->paginate(10);
        return view('primes.index',compact('primes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('primes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'description'=>'required',
            'weight_in_grams'=>'required|min:0',
            'amount'=>'required',
            'stock_min'=>'required',
            'stock_max'=>'required',
            'stock'=>'required',
            'cover'=>'required|image|mimes:png,jpeg,svg,jpg|max:2048',
            'product_id'=>'required',
        ]);
        $product = $request->all();
        if(
            $imagen=$request->file('cover')
            ){
            $ruta = 'img/covers/';
            $cover =  date('YmdHis').".".$imagen->guessExtension();
            $imagen->move($ruta,$cover);
            $product['cover']="$cover";
        }
        Prime::create($product);
        return redirect()->route('primes.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Prime  $prime
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $prime = Prime::find($id);

        return view('primes.show',compact('prime'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Prime  $prime
     * @return \Illuminate\Http\Response
     */
    public function edit(Prime $prime)
    {
        return view('primes.edit',compact('prime'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Prime  $prime
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {

        $prime = Prime::find($id);

        $request->validate([
            'description'=>'required',
            'weight_in_grams'=>'min:0',
            'amount'=>'',
            'stock_min'=>'required',
            'stock_max'=>'required',
            'stock'=>'required',
            'cover'=>'image|mimes:png,jpeg,svg,jpg|max:2048',
        ]);
        $product = $request->all();
        if(
            $imagen=$request->file('cover')
            ){
            $ruta = 'img/covers/';
            $cover =  date('YmdHis').".".$imagen->guessExtension();
            $imagen->move($ruta,$cover);
            $product['cover']="$cover";
        }
        $prime->update($product);
        return redirect()->route('primes.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Prime  $prime
     * @return \Illuminate\Http\Response
     */
    public function destroy(Prime $prime)
    {
        $prime->delete();
        return redirect()->route('primes.index');
    }

    public function importar(Request $entrada){
        if($entrada->hasFile('archivoenviado')){
            $path = $entrada->File('archivoenviado')->getRealPath();
            $datos = Excel::load($path,function($reader){
            })->get();

            if(!empty($datos) && $datos->count()) {
                $datos = $datos->toArray();
                for ($i=0; $i < count($datos); $i++) {
                    $datosImportar[] = $datos[$i];
                }
            }

            Prime::insert($datosImportar);
            return back();
        }
    }
    public function exportar(){
        return Excel::download(new PrimeExport, 'materiaPrima.xlsx');
    }
}
