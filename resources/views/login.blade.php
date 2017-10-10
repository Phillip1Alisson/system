<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>IBRC - Login</title>
    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style_login.css">
</head>
<body>
<div class="bg">
    <div class="logo"></div>
    <div class="login-block">
        <h1>Login</h1>
        <form action="{{route('login/logar')}}">
            <input type="text" placeholder="Usuário" id="username" required>
            <input type="password" placeholder="Senha" id="password" required>
        </form>
        <button>Conectar</button>
    </div>
</div>
</body>
</html>