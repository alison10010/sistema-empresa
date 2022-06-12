<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

use Illuminate\Support\Facades\Lang; // VERIFICACAO DE EMAIL

use Illuminate\Auth\Notifications\VerifyEmail; // VERIFICACAO DE EMAIL

use Illuminate\Auth\Notifications\ResetPassword; // VERIFICACAO DE EMAIL

use Illuminate\Notifications\Messages\MailMessage; // VERIFICACAO DE EMAIL

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */

    // VERIFICACAO DE EMAIL E RESET DE SENHA
    public function boot()
    {
        $this->registerPolicies();

        // VERIFICACAO DE EMAIL
        VerifyEmail::toMailUsing(function($notifiable, $url)
        {
            return (new MailMessage)
            ->subject(Lang::get('Verifique seu Email'))
            ->line(Lang::get('Clique no botão abaixo para verificar seu endereço de e-mail.'))
            ->action(Lang::get('Verificar de e-mail'), $url)
            ->line(Lang::get('Se você não criou uma conta, basta ignorar essa mensagem.'));
       
        });

         // RESET DE SENHA
         ResetPassword::toMailUsing(function($notifiable, $url)
         {
            $tempo = config('auth.passwords.'.config('auth.defaults.passwords').'.expire');

            return (new MailMessage)
            ->subject(Lang::get('Notificação de redefinição de senha'))
            ->line(Lang::get('Você está recebendo este e-mail porque recebemos uma solicitação de redefinição de senha para sua conta.'))
            ->action(Lang::get('Redefinir senha'), $url)
            ->line(Lang::get('Este link de redefinição de senha expirará em ' . $tempo . ' minutos.'))
            ->line(Lang::get('Se você não solicitou uma redefinição de senha, basta ignorar essa mensagem.'));
        
         });

    }
}
