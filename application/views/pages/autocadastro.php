<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de Cadastro</title>
    <link rel = "icon" href = "/meuHotel/imagens/logo.png" type = "image/png">
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #333;
        }
        .container {
            display: flex;
            background-color: #444;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            width: 80%;
            max-width: 900px;
            overflow: hidden;
        }
        .container .info {
            flex: 1;
            padding: 30px;
            background-color: #555;
            color: #fff;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }
        .container .info img {
            max-width: 100%;
            height: auto;
            margin-bottom: 20px;
        }
        .container .info p {
            text-align: center;
        }
        .container .form-container {
            flex: 1;
            padding: 30px;
            background-color: #222;
            color: #fff;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }
        .container h2 {
            margin-bottom: 20px;
            color: #fff;
            text-align: center;
        }
        .form-group {
            margin-bottom: 15px;
        }
        .form-group label {
            display: block;
            margin-bottom: 5px;
            color: #ccc;
        }
        .form-group input {
            width: 100%;
            padding: 10px;
            border: 1px solid #666;
            border-radius: 5px;
            font-size: 16px;
            background-color: #555;
            color: #fff;
        }
        .form-group input:focus {
            border-color: #fff;
            outline: none;
        }
        .btn {
            display: inline-block;
            width: calc(50% - 10px);
            padding: 10px;
            background-color: #666;
            color: #fff;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            text-align: center;
            margin-top: 10px;
        }
        .btn:hover {
            background-color: #555;
        }
        .btn-secondary {
            background-color: #777;
            margin-left: 20px;
        }
        .btn-secondary:hover {
            background-color: #666;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="info">
            <img src="/meuHotel/imagens/fotomeulogin.png" alt="Imagem de Cadastro">
            <p>Seja Bem-Vindo, para melhor experiencia faça um cadastro</p>
        </div>
        <div class="form-container">
            <h2>Meu Login - Meu Hotel</h2>
            <form action="#">
                <div class="form-group">
                    <label for="name">Nome</label>
                    <input type="text" id="name" name="name" required>
                </div>
                <div class="form-group">
                    <label for="email">E-mail</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="password">Senha</label>
                    <input type="password" id="password" name="password" required>
                </div>
                <div class="form-group">
                    <label for="confirm-password">Confirme a Senha</label>
                    <input type="password" id="confirm-password" name="confirm-password" required>
                </div>
                <div style="display: flex; justify-content: space-between;">
                    <button type="submit" class="btn">Cadastrar</button>
                    <button type="button" class="btn btn-secondary" onclick="window.history.back()">Voltar</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
