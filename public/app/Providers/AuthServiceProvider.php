<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;
use Illuminate\Auth\Notifications\VerifyEmail;
use Illuminate\Notifications\Messages\MailMessage;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        VerifyEmail::toMailUsing(function ($notifiable, $url) {
            return (new MailMessage)
                ->greeting('Halo,')
                ->subject('Selamat datang, dan terima kasih telah mendaftar di Jari Telunjuk')
                ->line('Akun kamu telah berhasil dibuat, untuk mengaktifkan akun kamu, silakan klik tautan berikut:')
                ->action('Verifikasi', $url)
                ->line('Setelah akun kamu aktif, kamu bisa melihat daftar rekomendasi bukumu di halaman profil.');
        });

        //
    }
}
