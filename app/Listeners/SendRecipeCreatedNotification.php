<?php

namespace App\Listeners;

use App\Models\User;
use App\Notifications\NewRecipe;
use App\Events\RecipeCreated;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class SendRecipeCreatedNotification implements ShouldQueue
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(RecipeCreated $event): void
    {
        foreach (User::whereNot('id', $event->recipe->user_id)->cursor() as $user) {
            $user->notify(new NewRecipe($event->recipe));
        }
    }
}
