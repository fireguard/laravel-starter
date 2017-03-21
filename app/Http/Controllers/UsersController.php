<?php

namespace App\Http\Controllers;


use App\Forms\Users\ProfileForm;
use App\Forms\Users\UserForm;
use App\Http\Requests\ProfileRequest;
use App\Http\Requests\UserRequest;
use App\Models\User;
use App\Services\UserService;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    /**
     * @var array
     */
    protected $filesForRemove = [];
    /**
     * @var UserService
     */
    private $service;


    /**
     * UsersController constructor.
     * @param UserService $service
     */
    public function __construct(UserService $service)
    {

        $this->service = $service;
    }

    /**
     * Show the application dashboard.
     *
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index(Request $request)
    {
        $users = $this->service->getListForUsers($request);
        return view('manager.users.index')->with(compact('users'));
    }

    public function profile()
    {
        $form = ProfileForm::create(\Auth::user(), [
            'action' => route('manager.users.profile.update'),
            'method' => 'PUT',
            'id' => 'form-user-profile',
            'enctype' => 'multipart/form-data'
        ]);
        return view('manager.users.profile')->with(compact('form'));
    }

    public function profileUpdate(ProfileRequest $request)
    {
        $user = \Auth::user();
        if($this->service->update($request, $user)) {
            return response()->json(['status' => 'success', 'data' => ['id' => $user->id]]);
        }
        return response()->json(['status' => 'error', 'message' => 'Não foi possível atualizar seu Perfil']);
    }

    public function create()
    {
        $form = UserForm::create(null, [
            'id' => 'form-user-create',
            'action' => route('manager.users.store'),
            'enctype' => 'multipart/form-data'
        ]);
        return view('manager.users.add')->with(compact('form'));
    }

    public function store(UserRequest $request)
    {
        $user = $this->service->create($request);
        if ($user instanceof User){
            return response()->json(['status' => 'success', 'data' => ['id' => $user->id]]);
        }
        return response()->json(['status' => 'error'], 500);
    }

    public function edit($id)
    {
        $user = User::find($id);
        $form = UserForm::create($user, [
            'id' => 'form-user-update',
            'method' => 'PUT',
            'action' => route('manager.users.update', ['id' => $id]),
            'enctype' => 'multipart/form-data'
        ]);
        return view('manager.users.edit')->with(compact('user', 'form'));
    }

    public function update($id, UserRequest $request)
    {
        $user = User::find($id);
        if($this->service->update($request, $user)) {
            return response()->json(['status' => 'success', 'data' => ['id' => $user->id]]);
        }
        return response()->json(['status' => 'error'], 500);
    }

    public function remove($id)
    {
        if($this->service->remove($id)) {
            return response()->json(['status' => 'success', 'data' => ['id' => $id]]);
        }
        return response()->json(['status' => 'error'], 500);
    }



}
