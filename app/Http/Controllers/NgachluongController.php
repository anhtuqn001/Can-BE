<?php

namespace App\Http\Controllers;

use App\Models\Ngachluong;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class NgachLuongController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ngachluong = Ngachluong::all();

        if($ngachluong->count() > 0) {
            return response([
                'status' =>200,
                'ngachluong'=> $ngachluong
            ],200);
        }else{
            return response([
                'status' =>404,
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
            'mangach'=> 'required|string|max:191',
            'tenmangach'=>'required|string|max:191',
            'id_nhomngach'=>'required|integer|max:191',
        ]);

        if($validator->fails())
        {
            return response()->json([
                'status'=>422,
                'errors'=>$validator->messages()
            ]);
        }else{
            $ngachluong = Ngachluong::create([
                'mangach'=> $request->mangach,
                'tenmangach'=>$request->tenmangach,
                'id_nhomngach'=>$request->id_nhomngach,
            ]);

            if ($ngachluong) {
                return response()->json([
                    'status'=> 200,
                    'message'=> "Ngach luong Created Successfully"
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
     * @param  \App\Models\NgachLuong  $ngachLuong
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $ngachluong = Ngachluong::find($id);
        if ($ngachluong) {
            return response()->json([
                'status' => 200,
                'ngachluong' => $ngachluong
            ],200);
        }else{
            return response()->json([
                'status' => 404,
                'message' => "No such Ngach luong found!"
            ],404);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\NgachLuong  $ngachLuong
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'mangach'=> 'required|string|max:191',
            'tenmangach'=>'required|string|max:191',
            'id_nhomngach'=>'required|integer|max:191',
        ]);

        if($validator->fails())
        {
            return response()->json([
                'status'=>422,
                'errors'=>$validator->messages()
            ]);
        }else{
            $ngachluong = Ngachluong::find($id);

            if ($ngachluong) {
                $ngachluong -> update([
                    'mangach'=> $request->mangach,
                    'tenmangach'=>$request->tenmangach,
                    'id_nhomngach'=>$request->id_nhomngach,
                ]);

                return response()->json([
                    'status'=> 200,
                    'message'=> "Ngach luong Updated Successfully"
                ], 200);
            }else{
                return response()->json([
                    'status'=> 404,
                    'message'=> "No such Ngachluong found"
                ], 500);
            }
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\NgachLuong  $ngachLuong
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ngachluong = Ngachluong::find($id);
        if($ngachluong)
        {
            $ngachluong->delete();
            return response()->json([
                'status'=>200,
                'message'=>'Ngachluong Deleted Successfully.'
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
