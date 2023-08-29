
<?php
    session_start();
    require("blocks/header.php");
?>
<div class="container mt-2">
    <h1> Форма </h1>
    <form action="check_post.php" method="post">
        <input type="text" name="username"  placeholder="Введите имя пользователя" class="form-control">
        <div class="text-danger"><?=$_SESSION['error_username']?></div><br>
        <input type="email" name="email"  placeholder="Введите электронную почту" class="form-control"><br>
        <div class="text-danger"><?=$_SESSION['error_email']?></div><br>
        <textarea name="message"  placeholder="Введите сообщение" class="form-control"></textarea><br>
        <div class="text-danger"><?=$_SESSION['error_message']?></div><br>
        <input type="submit" value="Отправить" class="btn btn-success">

    </form>
</div>
<?php
    require("blocks/footer.php")
?>
