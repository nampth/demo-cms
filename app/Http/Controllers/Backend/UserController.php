<?php
/**
 * Created by PhpStorm.
 * User: Nampth
 * Date: 10/18/2018
 * Time: 2:50 PM
 */

namespace App\Http\Controllers\Backend;


use App\Http\Controllers\Controller;
use App\Repositories\Backend\UserRepository;
use Illuminate\Http\Request;

class UserController extends Controller
{

    protected $repo;
    public function __construct(UserRepository $userRepository)
    {
        $this->repo  = $userRepository;
    }

    public function index(){
        return view('backend.user.index');
    }

    public function listing(Request $request){
        $draw = $request->input('draw');
        $start = $request->input('start');
        $length = $request->input('length');
        $columns = $request->input('columns');

        $search = $request->input('search');
        $keyword = $search['value'];

        $order = $request->input('order');
        $orderBy = $columns[$order[0]['column']]['data'];
        $orderType = $order[0]['dir'];


        return response()->json([
            'draw' => $draw,
            'data' => $this->repo->listing($keyword, $start, $length, $orderBy, $orderType, false),
            'recordsFiltered' => $this->repo->listing($keyword, $start, $length, $orderBy, $orderType, true),
            'recordsTotal' => $this->repo->listing('', $start, $length, $orderBy, $orderType, true),
        ]);
    }
}