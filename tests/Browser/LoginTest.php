<?php

namespace Tests\Browser;

use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class LoginTest extends DuskTestCase
{
    /**
     * Проверка функционала формы входа.
     */
    public function testLoginFunctionality()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/login')
                    ->assertSee('Log In') // Проверка наличия текста на странице
                    ->type('email', 'user@example.com') // Ввод почты
                    ->type('password', 'secret') // Ввод пароля
                    ->check('remember') // Установка галочки "Remember me"
                    ->press('Log In') // Нажатие на кнопку отправки формы
                    ->assertPathIs('/your-redirect-url-after-login'); // Проверка URL после входа
        });
    }

    /**
     * Проверка наличия ссылок на регистрацию и админ панель.
     */
    public function testLinksPresence()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/login')
                    ->assertSeeLink('Register') // Проверка наличия ссылки на регистрацию
                    ->assertSeeLink('Admin Panel'); // Проверка наличия ссылки на админ панель
        });
    }
}
