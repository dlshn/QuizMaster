<?php
session_start();
if(!($_SESSION['mark']>=$_SESSION['questions']/2)){
    $_SESSION = array(); // clear all session data using empty array
    session_destroy(); //remove all session entries
    header('Location: index.php');
}
    
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LearnMore</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="../style.css">
</head>

<body>
    <nav class="navbar navbar-dark bg-dark">
        <a class="navbar-brand" href="index.php">
            <img src="src/images.png" width="30" height="30"
                class="d-inline-block align-top" alt="">
            Home
        </a>

    </nav>
    <main>
        <div class="main-container">
            <div class="content">
                <h3>Enter your accurate personal details for certificate issuance.</b></h3><br>
                <form action="certify.php" method="POST" class="mt-0">
                <label for="name">Full Name :</label>
                <input type="text" name="fullname" id="name"><br>
                <input type="submit" class="btn btn-dark mt-4" value="Generate Certificate">
                    
                </form>
                
            </div>

        </div>
    </main>

    <footer>
        <p>&copy; 2024 QuizMaster. All Rights Reserved.</p>
    </footer>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
</body>

</html>