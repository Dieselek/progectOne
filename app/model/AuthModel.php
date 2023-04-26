<?php
namespace App\model;
use Delight\Auth\Auth;
class AuthModel
{
    private $auth;
public function __construct(Auth $auth)
    {
        $this->auth=$auth;
    }
    public function registration()
    {
        try {
            $userid = $this->auth->register($_POST['email'], $_POST['password'], $_POST['username']);
            echo "$userid";

        }
        catch (\Delight\Auth\InvalidEmailException $e) {
            die('Не вірна адресса електронної пошти');
        }
        catch (\Delight\Auth\InvalidPasswordException $e) {
            die('Не вірний пароль');
        }
        catch (\Delight\Auth\UserAlreadyExistsException $e) {
            die('Користувач вже існує');
        }
        catch (\Delight\Auth\TooManyRequestsException $e) {
            die('Дуже багато запитів');
        }
    }
}