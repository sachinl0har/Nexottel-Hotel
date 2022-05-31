<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Feedback Form</title>

</head>

<body>
    <div class="main">
        <form action="sendResumeViaEmail.php" method="post" enctype="multipart/form-data">
            <input type="text" name="firstname" placeholder="Enter your first name"> <br>
            <input type="text" name="lastname" placeholder="Enter your last name"> <br>
            <input type="tel" name="phoneno" placeholder="Enter your contact no"> <br>
            <input type="email" name="email" placeholder="Enter email"> <br>
            <input type="text" name="department" placeholder="F & B Service"> <br>
            <input type="text" name="jobtitle" placeholder="Guest Service Associate - Radisson Hotel Kandla"> <br>
            <input type="text" name="joblocation" placeholder="Mahabaleshwar"> <br>
            <input type="file" name="file"> <br>
            <input type="text" name="message" placeholder="Message"> <br>

            <input type="submit" value="Submit">
        </form>
    </div>
</body>

</html>