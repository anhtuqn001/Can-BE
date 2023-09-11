<?php

namespace App\Http\Controllers;

use App\Models\Nhomngach;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class NhomngachController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Nhomngach::all();

        if($data->count() > 0) {
            return response([
                'status' =>200,
                'ngachluong'=> $data
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
            'manhomngach'=> 'required|string|max:191',
            'tennhomngach'=>'required|string|max:191',
            'sothangnangluong'=>'required|integer|max:191',
            'bac1'=>'required',
            'bac2'=>'required',
            'bac3'=>'required',
            'bac4'=>'required',
            'bac5'=>'required',
            'bac6'=>'required',
            'bac7'=>'required',
            'bac8'=>'required',
            'bac9'=>'required',
            'bac10'=>'required',
            'bac11'=>'required',
            'bac12'=>'required',
        ]);

        if($validator->fails())
        {
            return response()->json([
                'status'=>422,
                'errors'=>$validator->messages()
            ]);
        }else{
            $data = Nhomngach::create([
                'manhomngach'=> $request->manhomngach,
                'tennhomngach'=>$request->tennhomngach,
                'sothangnangluong'=>$request->sothangnangluong,
                'bac1'=> $request->bac1,
                'bac2'=> $request->bac2,
                'bac3'=> $request->bac3,
                'bac4'=> $request->bac4,
                'bac5'=> $request->bac5,
                'bac6'=> $request->bac6,
                'bac7'=> $request->bac7,
                'bac8'=> $request->bac8,
                'bac9'=> $request->bac9,
                'bac10'=> $request->bac10,
                'bac11'=> $request->bac11,
                'bac12'=> $request->bac12,
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
     * @param  \App\Models\Nhomngach  $nhomngach
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Nhomngach::find($id);
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
     * @param  \App\Models\Nhomngach  $nhomngach
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'manhomngach'=> 'required|string|max:191',
            'tennhomngach'=>'required|string|max:191',
            'sothangnangluong'=>'required|integer|max:191',
            'bac1'=>'required',
            'bac2'=>'required',
            'bac3'=>'required',
            'bac4'=>'required',
            'bac5'=>'required',
            'bac6'=>'required',
            'bac7'=>'required',
            'bac8'=>'required',
            'bac9'=>'required',
            'bac10'=>'required',
            'bac11'=>'required',
            'bac12'=>'required',
        ]);

        if($validator->fails())
        {
            return response()->json([
                'status'=>422,
                'errors'=>$validator->messages()
            ]);
        }else{
            $data = Nhomngach::find($id);

            if ($data) {
                $data -> update([
                    'manhomngach'=> $request->manhomngach,
                    'tennhomngach'=>$request->tennhomngach,
                    'sothangnangluong'=>$request->sothangnangluong,
                    'bac1'=> $request->bac1,
                    'bac2'=> $request->bac2,
                    'bac3'=> $request->bac3,
                    'bac4'=> $request->bac4,
                    'bac5'=> $request->bac5,
                    'bac6'=> $request->bac6,
                    'bac7'=> $request->bac7,
                    'bac8'=> $request->bac8,
                    'bac9'=> $request->bac9,
                    'bac10'=> $request->bac10,
                    'bac11'=> $request->bac11,
                    'bac12'=> $request->bac12,
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
     * @param  \App\Models\Nhomngach  $nhomngach
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Nhomngach::find($id);
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
