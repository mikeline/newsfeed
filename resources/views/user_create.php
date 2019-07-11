!DOCTYPE html>
<html>
<head>
    <title>Student Management | Add</title>
</head>
<body>
<form action = "/create_user" method = "post">
    <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
    <table>
        <tr>
            <td>Email</td>
            <td><input type='text' name='email' /></td>
        <tr>
        <tr>
            <td>Username</td>
            <td><input type='text' name='username' /></td>
        <tr>
        <tr>
            <td>First Name</td>
            <td><input type='text' name='first_name' /></td>
        <tr>
            <td>Last Name</td>
            <td><input type="text" name='last_name'/></td>
        </tr>
        <tr>
            <td>Middle Name</td>
            <td><input type="text" name='middle_name'/></td>
        </tr>
        <tr>
            <td>Password</td>
            <td><input type="text" name='password'/></td>
        </tr>
        <tr>
            <td>Birth Date</td>
            <td><input type="text" name='birth_date'/></td>
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