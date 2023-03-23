<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css
">

</head>
<body class="container">
    <h1>Adicionar novo usuário</h1>

    <form action="{{route('usuarios.store')}}" method="POST">
        @csrf

        <label for="name">Digite o nome do usuário</label>
        <input type="text" id="name" name="name">

        <label for="email">Digite o email do usuário</label>
        <input type="email" id="email" name="email">

        <label for="password">Digite a password do usuário</label>
        <input type="password" id="password" name="password">

        <button type="submit"> Salvar</button>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>