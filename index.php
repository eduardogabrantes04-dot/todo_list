<!DOCTYPE html>
<html lang = "pt-br">
    <head>
        <meta charset = "UTF-8">
        <title> to_do_list </title>
        <link rel = "stylesheet" href = "style.css">
    </head>
    <body>
        <h1> Minha To_Do_List </h1>
        <form action = "add_task.php" method = "POST">
        <input type = "text" name = "title" placeholder = "nova tarefa..." required>
        <button type = "submit"> Adicionar </button>
        </form>
    </body>
</html>