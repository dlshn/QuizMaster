<?php
session_start();
$_SESSION = array(); // clear all session data using empty array
session_destroy(); //remove all session entries
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>quiz</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="../style.css"> -->
    <style>
        body {
            margin: 0;
            display: grid;
            grid-template-rows: auto 1fr auto;
            height: 100vh;
        }

        main {
            display: grid;
            place-items: center;
        }

        .content {
            max-width: 800px;
            /* height: 400px; */
            padding: 50px;
            border: 1px solid #e0e0e0;
            border-radius: 10px;
            background-color: #f8f9fa;
            box-shadow: 0px 4px 20px rgba(0, 0, 0, 0.1);
        }

        .container-quiz {
            display: flex;
            flex-direction: column;
            padding: 20px;
            margin: 10px;
            border: 1px solid black;
            
        }
        /* form {
            display: flex;
            flex-direction: column;
            

        } */

        .question {
            max-width: 80%;
            padding: 20px;
            border: 1px solid #040000;
            margin: 10px auto;
            background-color: #f8f9fa;
            box-shadow: 0px 4px 20px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            
            
        }

        .question p {
            margin-bottom: 0px;
            padding-bottom: 20px;
            border-bottom: 1px solid #040000;
        }

        .question div {
            margin-left: 25px;
            margin-bottom: 5px;
        }

        h1 {
            font-size: 36px;
            margin-bottom: 20px;
        }

        .content p {
            font-size: 15px;
            margin-bottom: 20px;
        }

        .buttons {
            display: flex;
            gap: 15px;
            justify-content: center;
        }

        footer {
            background-color: rgb(66, 66, 66);
            color: white;
            text-align: center;
            padding: 25px 0;
            font-size: 14px;


        }
    </style>
</head>

<body>
    <nav class="navbar navbar-dark bg-dark">
        <a class="navbar-brand" href="index.php">
            <img src="src/exit.svg" width="30" height="30" class="d-inline-block align-top" alt="">
            Exit
        </a>
    </nav>

    <!--start content -->
    <div class="container-quiz">
        <form action="quiz_process.php" method="POST">
            <div class="question">
                <p><b>Question 01</b><br>What is the capital city of Sri Lanka?</p><br>
                <div>
                    <input class="form-check-input" type="radio" name="1" value="1" required>
                    <label>1. Sri Jayawardenepura Kotte</label><br>
                </div>
                <div>
                    <input class="form-check-input" type="radio" name="1" value="2">
                    <label>2. Colombo</label><br>
                </div>
                <div>
                    <input class="form-check-input" type="radio" name="1" value="3">
                    <label>3. Galle</label><br>
                </div>
            </div>

            <div class="question">
                <p><b>Question 02</b><br>What is the national sport of Sri Lanka?</p><br>
                <div>
                    <input class="form-check-input" type="radio" name="2" value="1" required>
                    <label>1. Cricket</label><br>
                </div>
                <div>
                    <input class="form-check-input" type="radio" name="2" value="2">
                    <label>2. Football</label><br>
                </div>
                <div>
                    <input class="form-check-input" type="radio" name="2" value="3">
                    <label>3. Volleyball</label><br>
                </div>
            </div>

            <div class="question">
                <p><b>Question 03</b><br>What is the currency used in Sri Lanka?</p><br>
                <div>
                    <input class="form-check-input" type="radio" name="3" value="1" required>
                    <label>1. Dollar</label><br>
                </div>
                <div>
                    <input class="form-check-input" type="radio" name="3" value="2">
                    <label>2. Rupee</label><br>
                </div>
                <div>
                    <input class="form-check-input" type="radio" name="3" value="3">
                    <label>3. Pound</label><br>
                </div>
            </div>

            <div class="question">
                <p><b>Question 04</b><br>What is the highest mountain in Sri Lanka?</p><br>
                <div>
                    <input class="form-check-input" type="radio" name="4" value="1" required>
                    <label>1. Pidurutalagala</label><br>
                </div>
                <div>
                    <input class="form-check-input" type="radio" name="4" value="2">
                    <label>2. Kirigalpotta</label><br>
                </div>
                <div>
                    <input class="form-check-input" type="radio" name="4" value="3">
                    <label>3. Thotupola Kanda</label><br>
                </div>
            </div>

            <div class="question">
                <p><b>Question 05</b><br>What is the longest river in Sri Lanka?</p><br>
                <div>
                    <input class="form-check-input" type="radio" name="5" value="1" required>
                    <label>1. Kelani River</label><br>
                </div>
                <div>
                    <input class="form-check-input" type="radio" name="5" value="2">
                    <label>2. Mahaweli River</label><br>
                </div>
                <div>
                    <input class="form-check-input" type="radio" name="5" value="3">
                    <label>3. Kalu River</label><br>
                </div>
            </div>

            <div class="question">
                <p><b>Question 06</b><br>Who is considered the Father of Free Education in Sri Lanka?</p><br>
                <div>
                    <input class="form-check-input" type="radio" name="6" value="1" required>
                    <label>1. D.S. Senanayake</label><br>
                </div>
                <div>
                    <input class="form-check-input" type="radio" name="6" value="2">
                    <label>2. C.W.W. Kannangara</label><br>
                </div>
                <div>
                    <input class="form-check-input" type="radio" name="6" value="3">
                    <label>3. Ponnambalam Ramanathan</label><br>
                </div>
            </div>

            <div class="question">
                <p><b>Question 07</b><br>What is the national flower of Sri Lanka?</p><br>
                <div>
                    <input class="form-check-input" type="radio" name="7" value="1" required>
                    <label>1. Jasmine</label><br>
                </div>
                <div>
                    <input class="form-check-input" type="radio" name="7" value="2">
                    <label>2. Orchid</label><br>
                </div>
                <div>
                    <input class="form-check-input" type="radio" name="7" value="3">
                    <label>3. Blue Water Lily</label><br>
                </div>
            </div>

            <div class="question">
                <p><b>Question 08</b><br>What is the ancient name of Sri Lanka?</p><br>
                <div>
                    <input class="form-check-input" type="radio" name="8" value="1" required>
                    <label>1. Ceylon</label><br>
                </div>
                <div>
                    <input class="form-check-input" type="radio" name="8" value="2">
                    <label>2. India</label><br>
                </div>
                <div>
                    <input class="form-check-input" type="radio" name="8" value="3">
                    <label>3. Malaya</label><br>
                </div>
            </div>

            <div class="question">
                <p><b>Question 09</b><br>Who is the first Prime Minister of Sri Lanka?</p><br>
                <div>
                    <input class="form-check-input" type="radio" name="9" value="1" required>
                    <label>1. D.S. Senanayake</label><br>
                </div>
                <div>
                    <input class="form-check-input" type="radio" name="9" value="2">
                    <label>2. Sirimavo Bandaranaike</label><br>
                </div>
                <div>
                    <input class="form-check-input" type="radio" name="9" value="3">
                    <label>3. J.R. Jayewardene</label><br>
                </div>
            </div>

            <div class="question">
                <p><b>Question 10</b><br>What is the national bird of Sri Lanka?</p><br>
                <div>
                    <input class="form-check-input" type="radio" name="10" value="1" required>
                    <label>1. Eagle</label><br>
                </div>
                <div>
                    <input class="form-check-input" type="radio" name="10" value="2">
                    <label>2. Parrot</label><br>
                </div>
                <div>
                    <input class="form-check-input" type="radio" name="10" value="3">
                    <label>3. Sri Lankan Junglefowl</label><br>
                </div>
            </div>
            <div class="text-center">
                <input class="btn btn-primary " type="submit" value="Submit Quiz">
            </div>
            
        </form>



        


    </div>
    



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