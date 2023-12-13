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

        .tree {
            position: relative;
            width: 100px;
            height: 200px;
        }

        .dot {
            position: absolute;
            width: 10px;
            height: 10px;
            background-color: #007bff; /* Warna titik */
            border-radius: 50%;
        }

        #dot-1 { top: 0; left: 50%; transform: translateX(-50%); }
        #dot-2 { top: 30px; left: 50%; transform: translateX(-50%); }
        #dot-3 { top: 60px; left: 50%; transform: translateX(-50%); }
        #dot-4 { top: 90px; left: 50%; transform: translateX(-50%); }
        #dot-5 { top: 120px; left: 50%; transform: translateX(-50%); }

        /* Cabang-cabang */
        .branch {
            position: absolute;
            width: 4px;
            height: 30px;
            background-color: #007bff; /* Warna cabang */
            top: 10px;
            left: 50%;
            transform: translateX(-2px);
        }
    </style>
</head>
<body>
    <div class="tree">
        <div class="dot" id="dot-1"></div>
        <div class="dot" id="dot-2"></div>
        <div class="dot" id="dot-3"></div>
        <div class="dot" id="dot-4"></div>
        <div class="dot" id="dot-5"></div>
        
        <!-- Cabang-cabang -->
        <div class="branch"></div>
        <div class="branch" style="transform: rotate(-30deg);"></div>
        <div class="branch" style="transform: rotate(30deg);"></div>
    </div>
</body>
</html>
