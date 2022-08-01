<?php
    session_start();
    if (isset($_POST["btnCadastrarContato"])){
        
        cadastrar();
        
    }
        function cadastrar(){
            
            require_once "../Model/User.php";
            
            require_once "../Model/UserService.php";
            

            $user = new User;
            $service = new UserService;

            $user->name = $_POST["nome"];
            $user->email = $_POST["email"];
            $user->senha = $_POST["senha"];

  
            $service->confirmCadastre($user);
            
            session_unset();
    }

    session_start();
    if else (isset($_POST["btnLogarUsuario"])){

        login();
    }
    
    
        public function login()
        {
            $validator = Validator::make(Input::all(), array(
                'nome' => 'required',
                'senha' => 'required'
            ));
    
            if ($validator->passes()) {
    
                $credentials = array(
                    'nome' => Input::get('nome'),
                    'senha' => Input::get('senha')
                );
    
                if (Auth::attempt($credentials)) {
                    return Redirect::route('page.home');
                }
    
                $user = User::where('nome', Input::get('nome'))->first();
                if (isset($user)) {
                    if ($user->senha == sha1(Input::get('senha'))) { // If their senha is still SHA1
                        $user->senha = Hash::make(Input::get('senha')); // Convert to new format
                        $user->save();
                        Auth::login(Input::get('nome'));
                    }
                }
            }
    
            $data['errors'] = new MessageBag(array(
                'senha' => array(
                    'Login failed.'
                )
            ));
    
            return Redirect::route('user.login.view')->withInput($data);
        }
        
        public function logout()
        {
            Auth::logout();
            return Redirect::route('user.login.view');
        }
    }

