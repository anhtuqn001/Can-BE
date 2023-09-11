<?php

namespace App\Http\Controllers;

use App\Models\Donvi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class DonviController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Donvi::all();

        if($data->count() > 0) {
            return response([
                'status' =>200,
                'data'=> $data
            ],200);
        }else{
            return response([
                'status' =>404,
                'data'=> $data,
                'message'=> 'No Record found',
            ],200);
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'tendonvi'=> 'required|string|max:191',
            'id_tructhuoc'=>'required|integer|max:191',
            'tinh'=>'required|integer|max:191',
            'huyen'=>'required',
            'xa'=>'required',
            'captruong'=>'required',
            'phanloai'=>'required',
            'khoiquanly'=>'required',
            'thutruong'=>'required',
        ]);

        if($validator->fails())
        {
            return response()->json([
                'status'=>422,
                'errors'=>$validator->messages()
            ]);
        }else{
            $data = Donvi::create([
                'tendonvi'=> $request->tendonvi,
                'id_tructhuoc'=>$request->id_tructhuoc,
                'tinh'=> $request->tinh,
                'huyen'=> $request->huyen,
                'xa'=> $request->xa,
                'captruong'=> $request->captruong,
                'phanloai'=> $request->phanloai,
                'khoiquanly'=> $request->khoiquanly,
                'thutruong'=> $request->thutruong,
            ]);

            if ($data) {
                return response()->json([
                    'status'=> 200,
                    'message'=> "Created Successfully"
                ], 200);
            }else{
                return response()->json([
                    'status'=> 500,
                    'message'=> "Something went wrong"
                ], 500);
            }
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Donvi  $donvi
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Donvi::find($id);
        if ($data) {
            return response()->json([
                'status' => 200,
                'data' => $data
            ],200);
        }else{
            return response()->json([
                'status' => 404,
                'message' => "No such found!"
            ],404);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Donvi  $donvi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'tendonvi'=> 'required|string|max:191',
            'id_tructhuoc'=>'required|integer|max:191',
            'tinh'=>'required|integer|max:191',
            'huyen'=>'required',
            'xa'=>'required',
            'captruong'=>'required',
            'phanloai'=>'required',
            'khoiquanly'=>'required',
            'thutruong'=>'required',
        ]);

        if($validator->fails())
        {
            return response()->json([
                'status'=>422,
                'errors'=>$validator->messages()
            ]);
        }else{
            $data = Donvi::find($id);

            if ($data) {
                $data -> update([
                    'tendonvi'=> $request->tendonvi,
                    'id_tructhuoc'=>$request->id_tructhuoc,
                    'tinh'=> $request->tinh,
                    'huyen'=> $request->huyen,
                    'xa'=> $request->xa,
                    'captruong'=> $request->captruong,
                    'phanloai'=> $request->phanloai,
                    'khoiquanly'=> $request->khoiquanly,
                    'thutruong'=> $request->thutruong,
                ]);

                return response()->json([
                    'status'=> 200,
                    'message'=> "Updated Successfully"
                ], 200);
            }else{
                return response()->json([
                    'status'=> 404,
                    'message'=> "No such found"
                ], 500);
            }
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Donvi  $donvi
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Donvi::find($id);
        if($data)
        {
            $data->delete();
            return response()->json([
                'status'=>200,
                'message'=>'Deleted Successfully.'
            ]);
        }
        else
        {
            return response()->json([
                'status'=>404,
                'message'=>'Not Found.'
            ]);
        }
    }
}
