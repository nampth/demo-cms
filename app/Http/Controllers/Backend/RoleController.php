<?php
/**
 * Created by PhpStorm.
 * User: Nampth
 * Date: 10/26/2018
 * Time: 2:43 PM
 */

namespace App\Http\Controllers\Backend;


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
    }

    public function listingAll(Request $request)
    {
        return response()->json([
            'data' => $this->repo->listingAll()
        ]);
    }
}