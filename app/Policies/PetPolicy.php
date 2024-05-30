<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Pet;

class PetPolicy
{
    public function view(User $user, Pet $pet)
    {
        // Determinar si el usuario puede ver la mascota
        return $user->id === $pet->user_id;
    }

    public function update(User $user, Pet $pet)
    {
        // Determinar si el usuario puede actualizar la mascota
        return $user->id === $pet->user_id;
    }

    public function delete(User $user, Pet $pet)
    {
        // Determinar si el usuario puede eliminar la mascota
        return $user->id === $pet->user_id;
    }
}
