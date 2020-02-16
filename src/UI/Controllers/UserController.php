<?php

namespace Demo\UI\Controllers;

use Demo\UI\Resources\UserResource;
use Demo\Application\UseCase\UserUseCase;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;

class UserController extends ApiController
{

    private $usecase;
    private $resouce;

    public function __construct(UserUseCase $articleUseCase, UserResource $articleResource)
    {
        $this->usecase = $articleUseCase;
        $this->resouce = $articleResource;
    }

    public function index(Request $request)
    {
        $limit = $request->get('limit', Config::get('app.list_limit_default'));
        $users = $this->usecase->findAll();
        $data = $this->resouce->collection($users);
        return $this->respondSuccess($data, [
            'limit'        => $limit,
        ]);
    }

    public function show(Request $request, string $id)
    {
        $user = $this->usecase->find($id);
        $data = $this->resouce->toArray($user);
        return $this->respondSuccess($data);
    }
}
