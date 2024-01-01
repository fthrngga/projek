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
        <h3>Pertanyaan</h3>
        <p>Jurusan apa anda ketika di SMA</p>
        <button class="btn" onclick="showNextQuestion(true)">IPA</button>
        <button class="btn" onclick="showNextQuestion(false)">IPS</button>
    </div>

    <div class="question" id="question2">
        <h3>Pertanyaan</h3>
        <p>Apakah Anda lebih suka mata pelajaran sains dan matematika?</p>
        <button class="btn" onclick="showNextQuestion(true)">Yes</button>
        <button class="btn" onclick="showNextQuestion(false)">No</button>
    </div>

    <div class="question" id="question3">
        <h3>Pertanyaan</h3>
        <p>Apakah minat Anda lebih ke arah eksperimen atau pemecahan masalah matematika?</p>
        <button class="btn" onclick="showNextQuestion(true)">Eksperimen</button>
        <button class="btn" onclick="showNextQuestion(false)">Matematika</button>
    </div>

    <div class="question" id="question4">
        <h3>Pertanyaan</h3>
        <p>Apakah Anda tertarik pada organisme hidup dan lingkungan?</p>
        <button class="btn" onclick="showNextQuestion(true)">Yes</button>
        <button class="btn" onclick="showNextQuestion(false)">No</button>
    </div>

    <div class="question" id="question5">
        <h3>Pertanyaan</h3>
        <p>Apakah Anda tertarik pada aplikasi matematika dalam pemrograman dan teknologi?</p>
        <button class="btn" onclick="showNextQuestion(true)">Yes</button>
        <button class="btn" onclick="showNextQuestion(false)">No</button>
    </div>

    <div class="question" id="question6">
    <h3>Thank You</h3>
        <p>Jurusan yang disarankan untuk anda adalah jurusan Biologi</p>
        <a href="{{route('home.index')}}"><button type="submit" class="btn btn-
        primary"><i class="fa fa-plus"></i> Kembali</button></a>
    </div>
    <div class="question" id="question7">
        <h3>Pertanyaan</h3>
        <h3>Thank You</h3>
        <p>Jurusan yang disarankan untuk anda adalah jurusan Fisika atau Kimia</p>
        <a href="{{route('home.index')}}"><button type="submit" class="btn btn-
        primary"><i class="fa fa-plus"></i> Kembali</button></a>
    </div>
    <div class="question" id="question8">
        <h3>Thank You</h3>
        <p>Jurusan yang disarankan untuk anda adalah jurusan Teknik Informatika atau Matematika Terapan </p>
        <a href="{{route('home.index')}}"><button type="submit" class="btn btn-
        primary"><i class="fa fa-plus"></i> Kembali</button></a>
    </div>
    <div class="question" id="question9">
        <h3>Thank You</h3>
        <p>Jurusan yang disarankan untuk anda adalah jurusan Matematika Murni</p>
        <a href="{{route('home.index')}}"><button type="submit" class="btn btn-
        primary"><i class="fa fa-plus"></i> Kembali</button></a>
    </div>
    <div class="question" id="question10">
        <h3>Pertanyaan</h3>
        <p>Apakah minat Anda lebih ke arah kesehatan atau lingkungan dan teknologi?</p>
        <button class="btn" onclick="showNextQuestion(true)">Kesehatan</button>
        <button class="btn" onclick="showNextQuestion(false)">Lingkungan/TI</button>
    </div>
    <div class="question" id="question11">
        <h3>Pertanyaan</h3>
        <p>Apakah Anda bercita-cita menjadi dokter atau bekerja di bidang kesehatan?</p>
        <button class="btn" onclick="showNextQuestion(true)">Yes</button>
        <button class="btn" onclick="showNextQuestion(false)">No</button>
    </div>
    <div class="question" id="question12">
        <h3>Pertanyaan</h3>
        <p>Apakah Anda lebih tertarik pada masalah lingkungan atau teknologi?</p>
        <button class="btn" onclick="showNextQuestion(true)">Lingkungan</button>
        <button class="btn" onclick="showNextQuestion(false)">Teknologi</button>
    </div>
    <div class="question" id="question13">
    <h3>Thank You</h3>
        <p>Jurusan yang disarankan untuk anda adalah jurusan Kedokteran atau Kesehatan Masyarakat</p>
        <a href="{{route('home.index')}}"><button type="submit" class="btn btn-
        primary"><i class="fa fa-plus"></i> Kembali</button></a>
    </div>
    <div class="question" id="question14">
    <h3>Thank You</h3>
        <p>Jurusan yang disarankan untuk anda adalah jurusan kesehatan yang lebih sesuai lainnya</p>
        <a href="{{route('home.index')}}"><button type="submit" class="btn btn-
        primary"><i class="fa fa-plus"></i> Kembali</button></a>
    </div>
    <div class="question" id="question15">
    <h3>Thank You</h3>
        <p>Jurusan yang disarankan untuk anda adalah jurusan Jurusan Lingkungan Hidup</p>
        <a href="{{route('home.index')}}"><button type="submit" class="btn btn-
        primary"><i class="fa fa-plus"></i> Kembali</button></a>
    </div>
    <div class="question" id="question16">
    <h3>Thank You</h3>
        <p>Jurusan yang disarankan untuk anda adalah jurusan Teknik Elektro atau Teknik Mesin</p>
        <a href="{{route('home.index')}}"><button type="submit" class="btn btn-
        primary"><i class="fa fa-plus"></i> Kembali</button></a>
    </div>
    <div class="question" id="question17">
        <h3>Pertanyaan</h3>
        <p>Apakah Anda lebih suka mata pelajaran sosial dan humaniora?</p>
        <button class="btn" onclick="showNextQuestion(true)">Yes</button>
        <button class="btn" onclick="showNextQuestion(false)">No</button>
    </div>
    <div class="question" id="question18">
        <h3>Pertanyaan</h3>
        <p>Apakah lebih tertarik pada Sejarah dan Budaya?</p>
        <button class="btn" onclick="showNextQuestion(true)">Yes</button>
        <button class="btn" onclick="showNextQuestion(false)">No</button>
    </div>
    <div class="question" id="question19">
        <h3>Pertanyaan</h3>
        <p>Apakah Anda lebih suka Seni, Sastra, dan Kreativitas?</p>
        <button class="btn" onclick="showNextQuestion(true)">Yes</button>
        <button class="btn" onclick="showNextQuestion(false)">No</button>
    </div>
    <div class="question" id="question20">
    <h3>Thank You</h3>
    <h3>Thank You</h3>
        <p>Jurusan yang disarankan untuk anda adalah jurusan Sejarah atau Antropologi</p>
        <a href="{{route('home.index')}}"><button type="submit" class="btn btn-
        primary"><i class="fa fa-plus"></i> Kembali</button></a>
    </div>
    </div>
    <div class="question" id="question21">
    <h3>Thank You</h3>
        <p>Jurusan yang disarankan untuk anda adalah jurusan Ekonomi atau Sosiologi</p>
        <a href="{{route('home.index')}}"><button type="submit" class="btn btn-
        primary"><i class="fa fa-plus"></i> Kembali</button></a>
    </div>
    </div>
    <div class="question" id="question22">
    <h3>Thank You</h3>
    <h3>Thank You</h3>
        <p>Jurusan yang disarankan untuk anda adalah jurusan Jurusan Sastra atau Seni Rupa</p>
        <a href="{{route('home.index')}}"><button type="submit" class="btn btn-
        primary"><i class="fa fa-plus"></i> Kembali</button></a>
    </div>
    </div>
    <div class="question" id="question23">
    <h3>Thank You</h3>
    <h3>Thank You</h3>
        <p>Jurusan yang disarankan untuk anda adalah jurusan Akuntansi atau Manajemen Bisnis</p>
        <a href="{{route('home.index')}}"><button type="submit" class="btn btn-
        primary"><i class="fa fa-plus"></i> Kembali</button></a>
    </div>
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
            } else if (answer && currentQuestion === 2) {
                currentQuestion = 3;
            } else if (answer && currentQuestion === 3) {
                currentQuestion = 4;
            } else if (!answer && currentQuestion === 3) {
                currentQuestion = 5;
            } else if (answer && currentQuestion === 4) {
                currentQuestion = 6;
            } else if (!answer && currentQuestion === 4) {
                currentQuestion = 7;
            } else if (answer && currentQuestion === 5) {
                currentQuestion = 8;
            } else if (!answer && currentQuestion === 5) {
                currentQuestion = 9;
            } else if (!answer && currentQuestion === 2) {
                currentQuestion = 10;
            } else if (answer && currentQuestion === 10) {
                currentQuestion = 11;
            } else if (!answer && currentQuestion === 10) {
                currentQuestion = 12;
            } else if (answer && currentQuestion === 11) {
                currentQuestion = 13;
            } else if (!answer && currentQuestion === 11) {
                currentQuestion = 14;
            } else if (answer && currentQuestion === 12) {
                currentQuestion = 15;
            } else if (!answer && currentQuestion === 12) {
                currentQuestion = 16;
            } else if (!answer && currentQuestion === 1) {
                currentQuestion = 17;
            } else if (answer && currentQuestion === 17) {
                currentQuestion = 18;
            } else if (!answer && currentQuestion === 17) {
                currentQuestion = 19;
            } else if (answer && currentQuestion === 18) {
                currentQuestion = 20;
            } else if (!answer && currentQuestion === 18) {
                currentQuestion = 21;
            } else if (answer && currentQuestion === 19) {
                currentQuestion = 22;
            } else if (!answer && currentQuestion === 19) {
                currentQuestion = 23;
            }        

            // Show next question or final message with fadeIn animation
            if (currentQuestion < 24 ) {
                document.getElementById('question' + currentQuestion).style.display = 'block';
                document.getElementById('question' + currentQuestion).style.animation = 'fadeIn 0.5s ease-in-out forwards';
            } else if (currentQuestion < 13 || currentQuestion > 16) {
                document.getElementById('question' + currentQuestion).style.display = 'block';
                document.getElementById('question' + currentQuestion).style.animation = 'fadeIn 0.5s ease-in-out forwards';
            } else if (currentQuestion > 16 && currentQuestion < 20) {
                document.getElementById('question' + currentQuestion).style.display = 'block';
                document.getElementById('question' + currentQuestion).style.animation = 'fadeIn 0.5s ease-in-out forwards';
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


