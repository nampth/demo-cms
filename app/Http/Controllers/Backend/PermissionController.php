<?php
/**
 * Created by PhpStorm.
 * User: Nampth
 * Date: 11/6/2018
 * Time: 10:19 AM
 */

namespace App\Http\Controllers\Backend;


use App\Http\Controllers\Controller;
use App\Http\Requests\Permission\AddPermissionRequest;
use App\Http\Requests\Permission\EditPermissionRequest;
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

    public function listing(Request $request)
    {
        $draw = $request->input('draw');
        $start = $request->input('start');
        $length = $request->input('length');
        $columns = $request->input('columns');

        $search = $request->input('search');
        $keyword = $search['value'];

        $order = $request->input('order');
        $orderBy = $columns[$order[0]['column']]['data'];
        $orderType = $order[0]['dir'];

        $filteredRecords = $this->repo->listing($keyword, $start, $length, $orderBy, $orderType, true);
        $totalRecords = $this->repo->listing('', $start, $length, $orderBy, $orderType, true);
        return response()->json([
            'draw' => $draw,
            'data' => $this->repo->listing($keyword, $start, $length, $orderBy, $orderType, false),
            'recordsFiltered' => $filteredRecords ? $filteredRecords : 0,
            'recordsTotal' => $totalRecords ? $totalRecords : 0,
        ]);
    }

    public function listingAll(Request $request)
    {
        return response()->json([
            'data' => $this->repo->listingAll()
        ]);
    }

    public function add(AddPermissionRequest $request)
    {
        return response()->json([
            'code' => $this->repo->add($request->input('name'), $request->input('description')) ? SUCCESS_CODE : ERROR_CODE
        ]);
    }

    public function update(EditPermissionRequest $request)
    {
        $result = $this->repo->update(
            $request->input('id'),
            $request->input('name'),
            $request->input('description')
        );
        return response()->json([
            'code' => $result ? SUCCESS_CODE : ERROR_CODE,
        ]);
    }

    public function delete($id)
    {
        $result = $this->repo->deletePermission($id);
        return response()->json([
            'code' => $result ? SUCCESS_CODE : ERROR_CODE,
        ]);
    }
}