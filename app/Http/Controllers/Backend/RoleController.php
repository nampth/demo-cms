<?php
/**
 * Created by PhpStorm.
 * User: Nampth
 * Date: 10/26/2018
 * Time: 2:43 PM
 */

namespace App\Http\Controllers\Backend;


use App\Http\Requests\Role\AddRoleRequest;
use App\Http\Requests\Role\EditRoleRequest;
use App\Repositories\Backend\RoleRepository;
use Illuminate\Http\Request;

class RoleController
{
    protected $repo;

    public function __construct(RoleRepository $roleRepository)
    {
        $this->repo = $roleRepository;
    }

    public function index()
    {
        return view('backend.role.index');
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

    public function add(AddRoleRequest $request){
        return response()->json([
            'code' => $this->repo->add(
                $request->input('name'),
                $request->input('description'),
                $request->input('default_redirect'),
                $request->input('permissions')
            ) ? SUCCESS_CODE : ERROR_CODE
        ]);
    }

    public function deleteRole($id){
        $result = $this->repo->deleteRole($id);
        return response()->json([
            'code' => $result ? SUCCESS_CODE : ERROR_CODE,
        ]);
    }

    public function update(EditRoleRequest $request){
        return response()->json([
            'code' => $this->repo->update(
                $request->input('id'),
                $request->input('name'),
                $request->input('description'),
                $request->input('default_redirect'),
                $request->input('permissions')
            ) ? SUCCESS_CODE : ERROR_CODE
        ]);
    }
}