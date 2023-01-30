<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Repositories\Role\RoleRepositoryInterface;

class RoleController extends Controller
{
    /**
     * @var roleRepository
     */
    protected $roleRepository;

    /**
     * @param RoleRepositoryInterface $roleRepository
     */
    public function __construct(RoleRepositoryInterface $roleRepository)
    {
        $this->roleRepository = $roleRepository;
    }

    public function createRole(RoleRequest $request) : JsonResponse
    {

    }
}
