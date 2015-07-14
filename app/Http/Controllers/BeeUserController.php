<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\BeeUser;

class BeeUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $users = BeeUser::all();
        return response()->json([
            'status' => true,
            'data' => $this->transformCollectionForReturn($users)
        ], 200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $selectedUser = BeeUser::find($id);

        if(!$selectedUser){
            return response()->json([
                'status' => false,
                'error' => [
                    'message' => 'Selected User(id: '.$id.') does not exist.'
                ]
            ], 404);
        }

        return response()->json([
            'status' => true,
            'data' =>   $this->transformForReturn($selectedUser)
        ], 200);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }

    protected function transformCollectionForReturn($allData){
        return array_map([$this, 'transformForReturn'], $allData->toArray());
    }

    protected function transformForReturn($data)
    {
        return [
            'username' => $data['USERNAME'],
            'firstName' => $data['FIRST_NAME'],
            'lastName' => $data['LAST_NAME'],
            'email' => $data['EMAIL'],
            'phoneNumber' => $data['PHONE'],
            'statusActive' => $data['STATUS']
        ];
    }

}
