<?php
include 'db.php'; // Inclui a conexão com o banco de dados
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro - Sabor 2024</title>
    <style>
        /* Estilos gerais */
        body {
            background-color: #f3f3f3;
            font-family: Arial, sans-serif;
            padding: 20px;
        }

        /* Estilo do formulário */
        form {
            max-width: 600px;
            margin: 0 auto;
            background-color: white;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }

        /* Estilo dos campos de texto */
        input[type="text"],
        input[type="email"],
        input[type="date"],
        select {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 2px solid blue;
            border-radius: 5px;
            box-sizing: border-box;
        }

        /* Botões de ação */
        button {
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            color: white;
            cursor: pointer;
            margin-right: 10px;
        }

        /* Estilo dos botões específicos */
        #salvar {
            background-color: green;
        }

        #limpar {
            background-color: red;
        }

        /* Estilo das labels */
        label {
            font-weight: bold;
            margin-top: 10px;
            display: block;
        }

        /* Mensagens de erro */
        .error {
            color: red;
            font-size: 0.9em;
            margin-top: -5px;
        }
    </style>
</head>

<body>
    <h1>Formulário de Cadastro - Sabor 2024</h1>
    <form id="cadastroForm">
        <!-- Nome -->
        <label for="nome">Nome Completo:</label>
        <input type="text" id="nome" name="nome" required>
        <div id="errorNome" class="error"></div>

        <!-- E-mail -->
        <label for="email">Digite seu E-mail:</label>
        <input type="email" id="email" name="email" required>
        <div id="errorEmail" class="error"></div>

        <!-- Data de Nascimento -->
        <label for="dataNascimento">Data de Nascimento:</label>
        <input type="date" id="dataNascimento" name="dataNascimento" required>
        <div id="errorDataNascimento" class="error"></div>

        <!-- Residência -->
        <label for="residencia">Informe o endereço da sua residência:</label>
        <input type="text" id="residencia" name="residencia" required>
        <div id="errorResidencia" class="error"></div>

        <!-- Preferências de Alimentação -->
        <label for="preferencias">Preferências de Alimentação:</label>
        <select id="preferencias" name="preferencias" required>
            <option value="">Selecione...</option>
            <option value="vegetariana">Vegetariana</option>
            <option value="vegana">Vegana</option>
            <option value="onívora">Onívora</option>
            <option value="low-carb">Low-Carb</option>
        </select>
        <div id="errorPreferencias" class="error"></div>

        <!-- Botões -->
        <button type="submit" id="salvar">Salvar</button>
        <button type="reset" id="limpar">Limpar</button>
    </form>
</body>

</html>