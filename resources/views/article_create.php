!DOCTYPE html>
<html>
<head>
    <title>Student Management | Add</title>
</head>
<body>
<form action = "/create_article" method = "post">
    <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
    <table>
        <tr>
            <td>Title</td>
            <td><input type='text' name='title' /></td>
        <tr>
        <tr>
            <td>Desc</td>
            <td><input type='text' name='desc' /></td>
        <tr>
        <tr>
            <td>Content</td>
            <td><input type='text' name='content' /></td>
        <tr>
            <td>Author ID</td>
            <td><input type="text" name='news_users_id'/></td>
        </tr>
        <tr>
            <td>Photo</td>
            <td><input type="text" name='photo'/></td>
        </tr>
        <tr>
            <td colspan = '2'>
                <input type = 'submit' value = "Add student"/>
            </td>
        </tr>
    </table>
</form>
</body>
</html>