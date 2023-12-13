<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dynamic Question Page with Transition</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: #f5f5f5;
        }
        .question-container {
            max-width: 400px; /* Tentukan lebar maksimum yang diinginkan */
            width: 100%; /* Agar tetap responsif */
            text-align: center;
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .question {
            margin: 10px;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            opacity: 0;
            animation: fadeIn 0.5s ease-in-out forwards;
            display: none; /* Default hide all questions */
        }
        .btn {
            padding: 10px;
            cursor: pointer;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 16px;
        }
        .btn:hover {
            background-color: #45a049;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }

        @keyframes fadeOut {
            from {
                opacity: 1;
            }
            to {
                opacity: 0;
            }
        }
    </style>
</head>
<body>

<div class="question-container">
    <div class="question" id="question1">
        <h3>Question 1</h3>
        <p>Jurusan apa anda ketika di SMA</p>
        <button class="btn" onclick="showNextQuestion(true)">IPA</button>
        <button class="btn" onclick="showNextQuestion(false)">IPS</button>
    </div>

    <div class="question" id="question2">
        <h3>Question 2</h3>
        <p>Apakah Anda lebih suka mata pelajaran sains dan matematika?</p>
        <button class="btn" onclick="showNextQuestion(true)">Ya</button>
        <button class="btn" onclick="showNextQuestion(false)">Tidak</button>
    </div>

    <div class="question" id="question3">
        <h3>Question 3</h3>
        <p>Apakah Anda lebih tertarik pada Eksperimen dan Ilmu Alam?</p>
        <button class="btn" onclick="showNextQuestion(true)">Yes</button>
        <button class="btn" onclick="showNextQuestion(false)">No</button>
    </div>

    <div class="question" id="question4">
        <h3>Question 4</h3>
        <p>Apakah anda lebih suka </p>
        <button class="btn" onclick="showNextQuestion('Biologi')">Biologi</button>
        <button class="btn" onclick="showNextQuestion(Kimia)">Kimia</button>
        <button class="btn" onclick="showNextQuestion(Fisika)">Fisika</button>
    </div>

    <div class="question" id="question5">
        <h3>Question 5</h3>
        <p>This is the third question. Do you want to proceed?</p>
        <button class="btn" onclick="showNextQuestion(true)">Yes</button>
        <button class="btn" onclick="showNextQuestion(false)">No</button>
    </div>

    <div class="question" id="question6">
        <h3>Question 6</h3>
        <p>This is the third question. Do you want to proceed?</p>
        <button class="btn" onclick="showNextQuestion(true)">Yes</button>
        <button class="btn" onclick="showNextQuestion(false)">No</button>
    </div>

    <div class="question" id="finalMessageBiologi">
        <h3>Thank You</h3>
        <p>Jurusan yang disarankan untuk anda adalah jurusan Biologi</p>
        <a href="{{route('home.index')}}"><button type="submit" class="btn btn-
primary"><i class="fa fa-plus"></i> Kembali</button></a>
    </div>

    <div class="question" id="finalMessage">
        <h3>Thank You</h3>
        <p>Thank you for answering the questions.</p>
    </div>
</div>

<script>
    let currentQuestion = 1;

    function showNextQuestion(answer) {
        // Hide current question with fadeOut animation
        document.getElementById('question' + currentQuestion).style.animation = 'fadeOut 0.5s ease-in-out forwards';

        // Delay to allow fadeOut animation to complete
        setTimeout(() => {
            // Reset animation and hide current question
            document.getElementById('question' + currentQuestion).style.animation = '';
            document.getElementById('question' + currentQuestion).style.display = 'none';

            // Determine next question based on the answer
            if (answer && currentQuestion === 1) {
                currentQuestion = 2;
            } else if (!answer && currentQuestion === 1) {
                currentQuestion = 3;
            } else if (answer && currentQuestion === 2) {
                currentQuestion = 3;
            } else if (answer && currentQuestion === 3) {
                currentQuestion = 4;
            } else if (answer === "Biologi" && currentQuestion === 4) {
                currentQuestion = 7;
            }

            // Show next question or final message with fadeIn animation
            if (currentQuestion <= 6) {
                document.getElementById('question' + currentQuestion).style.display = 'block';
                document.getElementById('question' + currentQuestion).style.animation = 'fadeIn 0.5s ease-in-out forwards';
            } else if (currentQuestion === 7) {
                document.getElementById('finalMessageBiologi').style.display = 'block';
                document.getElementById('finalMessageBiologi').style.animation = 'fadeIn 0.5s ease-in-out forwards';
            } else {
                document.getElementById('finalMessage').style.display = 'block';
                document.getElementById('finalMessage').style.animation = 'fadeIn 0.5s ease-in-out forwards';
            }

            
        }, 500); // Delay time in milliseconds
    }

    // Show the first question initially with fadeIn animation
    document.getElementById('question1').style.display = 'block';
    document.getElementById('question1').style.animation = 'fadeIn 0.5s ease-in-out forwards';
</script>

</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Colored Dot Tree</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #f0f0f0; /* Warna latar belakang */
        }

        

        
    </style>
</head>
<body>
    
</body>
</html>


