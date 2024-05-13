<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="stylesheet.css" rel="stylesheet">
    <link rel="icon" href="assets/icon.png">
    <title>Congratulations!</title>
</head>
<body>
    <section id="landing_page">
        <div class="bg"></div>
        <div class="landing_title" id="acknowledge">
            <h1>Congratulations!</h1>
            <p>you are now a constituent of our sublime coalition.</p>
            <input type="button" value="Back to Home" onclick="redirectPage();">
        </div>
    </section>
    <script>
        function redirectPage(){
            window.location.replace("http://localhost/RegistrationForm/index.php");
        }
    </script>
</body>
</html>