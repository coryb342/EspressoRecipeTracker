<?php

namespace App\Notifications;

use App\Models\Recipe;
use Illuminate\Bus\Queueable;
use Illuminate\Support\Str;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class NewRecipe extends Notification
{
    use Queueable;

    /**
     * Create a new notification instance.
     */
    public function __construct(public Recipe $recipe)
    {
        //
    }

    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */
    public function via(object $notifiable): array
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     */
    public function toMail(object $notifiable): MailMessage
    {
        return (new MailMessage)
                    ->subject("New Recipe from {$this->recipe->user->name}")
                    ->greeting("New Recipe from {$this->recipe->user->name}")
                    ->line(Str::limit($this->recipe->brand, 50))
                    ->line(Str::limit($this->recipe->blend, 50))
                    ->action('Go to EspressoMe', url('/'));
    }

    /**
     * Get the array representation of the notification.
     *
     * @return array<string, mixed>
     */
    public function toArray(object $notifiable): array
    {
        return [
            //
        ];
    }
}
