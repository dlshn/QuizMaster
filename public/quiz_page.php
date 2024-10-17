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

        .main-container {
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
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

        .question {
            max-width: 100%;
            padding: 20px;
            border: 1px solid #040000;
            margin: 10px 0;
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
            <img src="src/images.png" width="30" height="30" class="d-inline-block align-top" alt="">
            Home
        </a>
    </nav>

    <!--start content -->
    <div class="container-quiz">
        <form action="quiz_page.php" method="POST">

            <div class="question">

                <p><b>Question 01</b><br>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eligendi, nisi?</p>
                <br>

                <div>
                    <input class="form-check-input " type="radio" name="q1" value="">
                    <label>1.sol01</label><br>
                </div>

                <div>
                    <input class="form-check-input " type="radio" name="q1" value="">
                    <label>2.sol02</label>
                </div>

                <div>
                    <input class="form-check-input " type="radio" name="q1" value="">
                    <label>3.sol03</label>
                </div>

            </div>

            <div class="question">

                <p><b>Question 02</b><br>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eligendi, nisi? Lorem
                    ipsum, dolor sit amet consectetur adipisicing elit. Iure omnis voluptate exercitationem vitae
                    dolorem animi quasi, reiciendis, quos, quibusdam aliquid expedita quod magni similique placeat!</p>
                <br>

                <div>
                    <input class="form-check-input " type="radio" name="q2" value="">
                    <label>1.sol01</label><br>
                </div>

                <div>
                    <input class="form-check-input " type="radio" name="q2" value="">
                    <label>2.sol02</label>
                </div>

                <div>
                    <input class="form-check-input " type="radio" name="q2" value="">
                    <label>3.sol03</label>
                </div>

            </div>

            <div class="question">

                <p><b>Question 03</b><br>Lorem ipsum dolorem animi quasi, reiciendis, quos, quibusdam aliquid expedita
                    quod magni similique placeat! Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque, culpa.</p>
                <br>

                <div>
                    <input class="form-check-input " type="radio" name="q3" value="">
                    <label>1.sol01</label><br>
                </div>

                <div>
                    <input class="form-check-input " type="radio" name="q3" value="">
                    <label>2.sol02</label>
                </div>

                <div>
                    <input class="form-check-input " type="radio" name="q3" value="">
                    <label>3.sol03</label>
                </div>

            </div>

            <div class="question">

                <p><b>Question 04</b><br>Lorem ipsum dolorem animi quasi, reiciendis, quos, quibusdam aliquid expedita
                    quod magni similique placeat! Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sunt, harum.
                </p>
                <br>

                <div>
                    <input class="form-check-input " type="radio" name="q4" value="">
                    <label>1.sol01</label><br>
                </div>

                <div>
                    <input class="form-check-input " type="radio" name="q4" value="">
                    <label>2.sol02</label>
                </div>

                <div>
                    <input class="form-check-input " type="radio" name="q4" value="">
                    <label>3.sol03</label>
                </div>

            </div>

            <div class="question">

                <p><b>Question 05</b><br>Lorem ipsum dolorem Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Delectus aut pariatur dolor illum labore itaque, tenetur alias cum soluta esse, inventore, harum
                    provident? Unde nobis velit repellendus veniam, ullam veritatis! animi quasi, reiciendis, quos,
                    quibusdam aliquid expedita
                    quod magni similique placeat! Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sunt, harum.
                </p>
                <br>

                <div>
                    <input class="form-check-input " type="radio" name="q5" value="">
                    <label>1.sol01</label><br>
                </div>

                <div>
                    <input class="form-check-input " type="radio" name="q5" value="">
                    <label>2.sol02</label>
                </div>

                <div>
                    <input class="form-check-input " type="radio" name="q5" value="">
                    <label>3.sol03</label>
                </div>

            </div>

            <div class="question">

                <p><b>Question 06</b><br>Lorem ipsum dolorem animi quasi, reiciendis, quos, quibusdam aliquid expedita
                    quod magni similique placeat! Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sunt, harum.
                </p>
                <br>

                <div>
                    <input class="form-check-input " type="radio" name="q6" value="">
                    <label>1.sol01</label><br>
                </div>

                <div>
                    <input class="form-check-input " type="radio" name="q6" value="">
                    <label>2.sol02</label>
                </div>

                <div>
                    <input class="form-check-input " type="radio" name="q6" value="">
                    <label>3.sol03</label>
                </div>

            </div>

            <div class="question">

                <p><b>Question 07</b><br>Lorem ipsum dolorem animi quasi, reiciendis, quos, quibusdam aliquid expedita
                    quod magni similique placeat! Lorem, ipsum dolor sit Lorem ipsum dolor, sit amet consectetur
                    adipisicing elit. Officia repellendus in illum recusandae iste atque? amet consectetur adipisicing
                    elit. Sunt, harum.
                </p>
                <br>

                <div>
                    <input class="form-check-input " type="radio" name="q7" value="">
                    <label>1.sol01</label><br>
                </div>

                <div>
                    <input class="form-check-input " type="radio" name="q7" value="">
                    <label>2.sol02</label>
                </div>

                <div>
                    <input class="form-check-input " type="radio" name="q7" value="">
                    <label>3.sol03</label>
                </div>

            </div>

            <div class="question">

                <p><b>Question 08</b><br>Lorem ipsum dolorem animi quasi, reiciendis, quos, quibusdam aliquid expedita
                    quod magni similique placeat! Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sunt, harum.
                </p>
                <br>

                <div>
                    <input class="form-check-input " type="radio" name="q8" value="">
                    <label>1.sol01</label><br>
                </div>

                <div>
                    <input class="form-check-input " type="radio" name="q8" value="">
                    <label>2.sol02</label>
                </div>

                <div>
                    <input class="form-check-input " type="radio" name="q8" value="">
                    <label>3.sol03</label>
                </div>

            </div>

            <div class="question">

                <p><b>Question 09</b><br>Lorem ipsum dolorem animi quasi, reiciendis, quos, quibusdam aliquid expedita
                    quod magni similique placeat! Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sunt, harum.
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Accusamus excepturi blanditiis ipsum
                    veritatis. Amet fugit vel eos consectetur quo! Nesciunt.</p>
                <br>

                <div>
                    <input class="form-check-input " type="radio" name="q9" value="">
                    <label>1.sol01</label><br>
                </div>

                <div>
                    <input class="form-check-input " type="radio" name="q9" value="">
                    <label>2.sol02</label>
                </div>

                <div>
                    <input class="form-check-input " type="radio" name="q9" value="">
                    <label>3.sol03</label>
                </div>

            </div>

            <div class="question">

                <p><b>Question 10</b><br>Lorem ipsum dolorem animi quasi, reiciendis, quos, quibusdam aliquid
                    expeditam.?</p>
                <br>

                <div>
                    <input class="form-check-input " type="radio" name="q10" value="">
                    <label>1.sol01</label><br>
                </div>

                <div>
                    <input class="form-check-input " type="radio" name="q10" value="">
                    <label>2.sol02</label>
                </div>

                <div>
                    <input class="form-check-input " type="radio" name="q10" value="">
                    <label>3.sol03</label>
                </div>

            </div>

            <input class="btn btn-primary" type="submit" value="Submit Quiz">


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