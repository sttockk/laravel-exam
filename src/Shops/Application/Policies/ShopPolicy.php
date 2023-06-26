<?php

namespace Shops\Application\Policies;

use Accounts\Domain\Models\User;
use Shops\Domain\Models\Shop;
use Illuminate\Auth\Access\HandlesAuthorization;

class ShopPolicy
{
    use HandlesAuthorization;

    public function viewAny(User $authUser)
    {
        // Пока что могут только админы
        return ($authUser->role === 'admin');
    }

    public function view(User $authUser)
    {
        // Может, если админ, или просматривает себя
        return ($authUser->role === 'admin');
    }

    public function create(User $authUser)
    {
        // Пока что могут только админы
        return ($authUser->role === 'admin');
    }

    public function update(User $authUser)
    {
        // Пока что могут только админы
        return ($authUser->role === 'admin');
    }

    public function delete(User $authUser)
    {
        // Пока что могут только админы
        return ($authUser->role === 'admin');
    }
}
