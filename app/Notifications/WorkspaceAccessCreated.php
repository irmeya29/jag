<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class WorkspaceAccessCreated extends Notification
{
    use Queueable;

    public function __construct(
        private readonly string $temporaryPassword
    ) {
    }

    public function via(object $notifiable): array
    {
        return ['mail'];
    }

    public function toMail(object $notifiable): MailMessage
    {
        return (new MailMessage)
            ->subject('Vos accès Mon Espace Just')
            ->greeting('Bonjour '.$notifiable->name)
            ->line('Votre accès Mon Espace Just a été créé.')
            ->line('Email : '.$notifiable->email)
            ->line('Mot de passe temporaire : '.$this->temporaryPassword)
            ->action('Se connecter', route('login'))
            ->line('Nous vous recommandons de modifier votre mot de passe après connexion.');
    }
}
