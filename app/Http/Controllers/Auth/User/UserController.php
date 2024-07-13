<?php

namespace App\Http\Controllers\Auth\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Repositories\UserRepository;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Spatie\Permission\Models\Role;

class UserController extends Controller
{
    public function __construct(
        protected UserRepository $userRepository,
    ) {}

    public function index(): View
    {
        $users = $this->userRepository->getAllUsersExceptCurrent();

        $roles = Role::with('permissions')
            ->orderBy('name')
            ->get();

        return view('auth.dashboard.users.index', ['users' => $users, 'roles' => $roles]);
    }

    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'role' => 'required|exists:roles,id',
        ]);

        $name = $request->name;
        $email = $request->email;
        $roleId = $request->role;

        $this->userRepository->createUser($name, $email, $roleId);

        return redirect()->back();
    }

    public function destroy(string $id): RedirectResponse
    {
        $user = User::findById($id);

        $user->delete();

        return redirect()->back();
    }
}
