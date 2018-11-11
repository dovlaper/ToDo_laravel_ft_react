<?php

namespace App\Policies;

use App\Model\User;
use App\Card;
use Illuminate\Auth\Access\HandlesAuthorization;

class CardPolicy
{
    use HandlesAuthorization;

    private function isCardCreator(User $user, Card $card)
    {
        return $card->user_id === $user->id;
    }

    /**
     * Determine whether the user can view the card.
     *
     * @param  \App\Model\User  $user
     * @param  \App\Card  $card
     * @return mixed
     */
    public function view(User $user, Card $card)
    {
        return $this->isCardCreator($user, $card);
    }

    /**
     * Determine whether the user can update the card.
     *
     * @param  \App\Model\User  $user
     * @param  \App\Card  $card
     * @return mixed
     */
    public function update(User $user, Card $card)
    {
        return $this->isCardCreator($user, $card);
    }

    /**
     * Determine whether the user can delete the card.
     *
     * @param  \App\Model\User  $user
     * @param  \App\Card  $card
     * @return mixed
     */
    public function delete(User $user, Card $card)
    {
        return $this->isCardCreator($user, $card);
    }

    /**
     * Determine whether the user can restore the card.
     *
     * @param  \App\Model\User  $user
     * @param  \App\Card  $card
     * @return mixed
     */
    public function restore(User $user, Card $card)
    {
        return $this->isCardCreator($user, $card);
    }

    /**
     * Determine whether the user can permanently delete the card.
     *
     * @param  \App\Model\User  $user
     * @param  \App\Card  $card
     * @return mixed
     */
    public function forceDelete(User $user, Card $card)
    {
        return $this->isCardCreator($user, $card);
    }
}
