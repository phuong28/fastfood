<?php 

require_once('app/Controllers/Web/WebController.php');
require_once('app/Models/User.php');
require_once('core/Flash.php');
require_once('core/Auth.php');
require_once('app/Models/Cart.php');
require_once('app/Requests/AuthenticationRequest.php');

class AuthenticationController extends WebController
{
    private $user;

    private $key = 'user';

    public function __construct()
    {
        $this->user = new User();
    }
    
    public function index()
    {
        return $this->view('authentication/index.php');
    }

    public function login()
    {
        $authenticationRequest = new AuthenticationRequest();
        $authenticationRequest->validateLogin($_POST);

        if ($authenticationRequest->countErrors() == 0) {
            $loggedUser = $this->user->where(['email' => $_POST['email'], 'password' => md5($_POST['password'])])->first();
            if ($loggedUser) {
                isset($_POST['remember_me']) ? Auth::setUser($this->key, $loggedUser, true) : Auth::setUser($this->key, $loggedUser);
                return redirect('homepage/index');
            }
            Flash::set('signin_error', 'Login failed');
            return redirect('authentication/index');
        }

        return $this->view('authentication/index.php', ['loginErrors' => $authenticationRequest->getErrors()]);
    }

    public function signUp()
    {
        $authenticationRequest = new AuthenticationRequest();
        $authenticationRequest->validateRegister($_POST);
        if ($authenticationRequest->countErrors() == 0) {
            $user = new User();
            $foundUser = $this->user->where(['email' => $_POST['email']])->get();
            if (count($foundUser) == 0) {
                $_POST['password'] = md5($_POST['password']);
                $isCreated = $user->create($_POST);
                if ($isCreated) {
                    return back();
                }
            }
            Flash::set('signup_error', 'Email exist');
            return redirect('authentication/index');
        }

        return $this->view('authentication/index.php', ['registerErrors' => $authenticationRequest->getErrors()]);
    }

    public function logout()
    {
        Auth::logout($this->key);
        Cart::clearCartSession();
        return redirect('homepage/index');
    }
}