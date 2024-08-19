<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Key Generator</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            overflow: hidden;
            position: relative;
        }
        .container {
            text-align: center;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            position: relative;
            z-index: 1;
        }
        h1 {
            font-size: 2em;
            margin-bottom: 20px;
            color: #333;
        }
        p {
            font-size: 1.2em;
            margin-bottom: 10px;
        }
        .key {
            font-size: 1.5em;
            font-weight: bold;
            color: #007bff;
        }
        footer {
            margin-top: 20px;
            font-size: 0.9em;
            color: #777;
        }
        footer a {
            color: #007bff;
            text-decoration: none;
        }
        footer a:hover {
            text-decoration: underline;
        }
        /* Tuyết rơi */
        .snowflake {
            position: absolute;
            color: #fff;
            font-size: 1.5em;
            user-select: none;
            pointer-events: none;
            z-index: 0;
        }
        .snowflake:nth-of-type(1) { animation: snow 10s linear infinite; }
        .snowflake:nth-of-type(2) { animation: snow 12s linear infinite; }
        .snowflake:nth-of-type(3) { animation: snow 15s linear infinite; }
        /* Thêm các quy tắc cho các lớp snowflake khác nếu cần */
        @keyframes snow {
            0% { transform: translateY(-100vh); }
            100% { transform: translateY(100vh); }
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Cảm Ơn Bạn!</h1>
        <p>Chúc bạn ngày mới tốt lành!</p>
        <?php
            // Phần cố định của mã key
            $fixedPart = 'jandepzai';
            // Phần thay đổi theo ngày
            $datePart = date('Ymd'); // Ví dụ: 20240820
            // Tạo mã key
            $key = $fixedPart . '-' . $datePart;
            echo "<p>API Key ngày " . date('d/m/Y') . " là:</p>";
            echo "<p class='key'>" . $key . "</p>";
        ?>
    </div>
    <!-- Hiệu ứng tuyết rơi -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const snowflakes = ['❄', '❆', '✶', '✵'];
            for (let i = 0; i < 100; i++) {
                const snowflake = document.createElement('div');
                snowflake.classList.add('snowflake');
                snowflake.style.left = `${Math.random() * 100}vw`;
                snowflake.style.fontSize = `${Math.random() * 20 + 10}px`;
                snowflake.textContent = snowflakes[Math.floor(Math.random() * snowflakes.length)];
                document.body.appendChild(snowflake);
            }
        });
    </script>
</body>
</html>
