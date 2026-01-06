<?php

namespace App\Filament\Pages\Auth;

use Filament\Forms\Components\Component;
use Filament\Forms\Components\TextInput;
use Filament\Auth\Pages\Login as BaseLogin;
use Illuminate\Support\HtmlString;

class CustomLogin extends BaseLogin
{
    /**
     * Mengatur skema form login
     */
    protected function getForms(): array
    {
        return [
            'form' => $this->makeForm()
                ->schema([
                    $this->getEmailFormComponent(),
                    $this->getPasswordFormComponent(),
                    $this->getRememberFormComponent(),
                ]),
        ];
    }

    /**
     * Kustomisasi field Email
     */
    protected function getEmailFormComponent(): TextInput
    {
        return TextInput::make('email')
            ->label('Alamat Email')
            ->email()
            ->required()
            ->autocomplete()
            ->autofocus()
            ->placeholder('contoh: admin@sigma.com');
    }

    /**
     * Kustomisasi field Password
     */
    protected function getPasswordFormComponent(): TextInput
    {
        return TextInput::make('password')
            ->label('Kata Sandi')
            ->hint(new HtmlString('<a href="/sigma/password-reset" class="text-sm text-primary-600">Lupa Sandi?</a>'))
            ->password()
            ->revealable() // Fitur show/hide password
            ->required();
    }

    public function getHeading(): string
{
    return "Sistem Integrasi Mutu Akademik";
}

public function getSubheading(): string | HtmlString | null
{
    return "Silakan masuk untuk mengelola data akreditasi";
}
}