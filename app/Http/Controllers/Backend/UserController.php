<?php
/**
 * Created by PhpStorm.
 * User: Nampth
 * Date: 10/18/2018
 * Time: 2:50 PM
 */

namespace App\Http\Controllers\Backend;


use App\Http\Controllers\Controller;
use App\Http\Requests\User\AddUserRequest;
use App\Http\Requests\User\EditUserRequest;
use App\Repositories\Backend\UserRepository;
use Illuminate\Http\Request;

class UserController extends Controller
{

    protected $repo;

    public function __construct(UserRepository $userRepository)
    {
        $this->repo = $userRepository;
    }

    public function index()
    {
        return view('backend.user.index');
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

    public function add(AddUserRequest $request)
    {
        return response()->json([
            'code' => $this->repo->add(
                $request->input('username'),
                $request->input('password'),
                $request->input('fullname'),
                $request->input('email'),
                $request->input('role')
            ) ? SUCCESS_CODE : ERROR_CODE
        ]);
    }

    public function status($id)
    {
        $result = $this->repo->status($id);
        return response()->json([
            'code' => $result ? SUCCESS_CODE : ERROR_CODE,
        ]);
    }

    public function update(EditUserRequest $request)
    {
        $result = $this->repo->edit(
            $request->input('id'),
            $request->input('password'),
            $request->input('fullname'),
            $request->input('email'),
            $request->input('role')
        );
        return response()->json([
            'code' => $result ? SUCCESS_CODE : ERROR_CODE,
        ]);
    }

    public function delete($id)
    {
        $result = $this->repo->deleteUser($id);
        return response()->json([
            'code' => $result ? SUCCESS_CODE : ERROR_CODE,
        ]);
    }
}