<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{

    public function getAll(Request $request){

        $productos = [];

        if($request->input('limit')){

            if($request->input('offset')){
                $productos = DB::table('productos')
                            ->limit($request->input('limit'))
                            ->offset($request->input('offset'))
                            ->get();
            }else{
                $productos = DB::table('productos')
                ->limit($request->input('limit'))
                ->get();
            }
        }else{
            $productos = Producto::all();
        }

        return response()->json(['productos' => $productos], '200');

    }

    public function getOne($id){

        $producto = Producto::findOrFail($id);

        return response()->json($producto, '200');

    }

    public function create(Request $request){

        $rules = [
            'nombre' => ['required', 'string'],
            'descripcion' => ['required','string'],
            'precio' => ['required', 'numeric'],
            'imagen' => ['nullable', 'string']
        ];

        $messages = [
            'nombre' => 'El nombre es obligatorio',
            'descripcion' => 'La descripción es obligatoria',
            'precio.required' => 'El precio es obligatorio',
            'precio.numeric' => 'El precio debe ser numérco',
            'imagen' => 'La imagen debe ser un texto'
        ];

        $validator = Validator::make($request->all(), $rules, $messages);

        if($validator->fails()){

            $mensajes = $validator->getMessageBag();
            return response()->json(['errors' => $mensajes], 400);

        }else{

            $producto = new Producto;

            $producto->nombre = $request->nombre;
            $producto->descripcion = $request->descripcion;
            $producto->precio = $request->precio;
            $producto->imagen = $request->imagen;

            $producto->save();

            return response()->json([

                'mensaje '=> 'El producto ha sido creado satisfactoriamente',
                'data' => $producto

            ], 201);

        }

    }

    public function delete($id){

        $producto = Producto::findOrFail($id);

        $producto->delete();

        return response()->json(null, 204);

    }

    public function update($id, Request $request){

        $producto = Producto::findOrFail($id);

        if(!isset($request->name) && !isset($request->descripcion) && !isset($request->precio) && !isset($request->imagen)){
            return response()->json(null, 204);
        }

        $rules = [
            'nombre' => ['nullable','string'],
            'descripcion' => ['nullable','string'],
            'precio' => ['nullable','numeric'],
            'imagen' => ['nullable', 'string']
        ];

        $messages = [
            'nombre' => 'El nombre debe ser un texto',
            'descripcion' => 'La descripción debe ser un texto',
            'precio.numeric' => 'El precio debe ser numérco',
            'imagen' => 'La imagen debe ser un texto'
        ];

        $validator = Validator::make($request->all(), $rules, $messages);

        if($validator->fails()){

            $mensajes = $validator->getMessageBag();
            return response()->json(['errors' => $mensajes], 400);

        }else{

            if( isset($request->name) ){
                $producto->name = $request->name;
            }
            if( isset($request->descripcion) ){
                $producto->descripcion = $request->descripcion;
            }
            if( isset($request->precio) ){
                $producto->precio = $request->precio;
            }
            if( isset($request->imagen) ){
                $producto->imagen = $request->imagen;
            }

            $producto->save();

            return response()->json([

                'mensaje '=> 'El producto ha sido actualizado satisfactoriamente',
                'data' => $producto

            ], 200);

        }

    }

}
