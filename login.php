<!DOCTYPE html>
<html>
    <head>
        <title>Login</title>
</head>
<body>
    <h2>Form Login</h2>
    <?php if (!empty($eror)) echo "<p style= 'color:red;' >$eror</p>"; ?>
    <form method="post">
        username: <input type="text" name="username" required><br>
        password: <input type="password" required><br><br>
        <button type="submit">Login</button>
</form>
</body>
</html>