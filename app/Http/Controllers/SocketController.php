<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;
use SebastianBergmann\RecursionContext\Exception;
use Symfony\Component\HttpFoundation\Response;

class SocketController extends Controller 
{

    public function __construct() {
        $this->middleware('guest');
    }

    public function index() {
        return view('socket.socket');
    }

    public function writeMessage() {
        return view('socket.writemessage');
    }

    public function sendMessage(Request $request) {
        try {
            $redis = Redis::connection();
            $redis->publish('message', $request->get('message'));
            return redirect('writemessage');
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create() {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store() {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id) {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id) {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id) {
        //
    }

}
