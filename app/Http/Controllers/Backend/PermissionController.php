<?php
/**
 * Created by PhpStorm.
 * User: Nampth
 * Date: 11/6/2018
 * Time: 10:19 AM
 */

namespace App\Http\Controllers\Backend;


use App\Http\Controllers\Controller;
use App\Repositories\Backend\PermissionRepository;
use Illuminate\Http\Request;

class PermissionController extends Controller
{
    protected $repo;

    public function __construct(PermissionRepository $permissionRepository)
    {
        $this->repo = $permissionRepository;
    }

    public function index()
    {
        return view('backend.permission.index');
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

    public function listingAll(Request $request)
    {
        return response()->json([
            'data' => $this->repo->listingAll()
        ]);
    }
}