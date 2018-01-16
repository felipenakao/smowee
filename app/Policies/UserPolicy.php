<?php

namespace App\Policies;

use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class UserPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    private function isOverAge(User $user) {
        // verificar se o usuário é maior de idade
    }

    public function accessClube(User $user) {
        // verificar se o usuário tem acesso ao club
        // verifica se o usuário é maior de idade

        return true;
    }

    public function accessAdmin(User $user) {
        // verificar permissão do usuário
        dd($user);
    }
}
