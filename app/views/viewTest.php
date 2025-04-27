<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bài Test</title>
    <style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 20px;
        background-color: #f8f9fa;
    }

    .test-container {
        max-width: 800px;
        margin: 0 auto;
        background-color: #fff;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .test-header {
        text-align: center;
    }

    .test-title {
        font-size: 1.8rem;
        font-weight: bold;
        margin-bottom: 20px;
    }

    .progress-container {
        display: flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 20px;
    }

    .progress-bar {
        width: 100%;
        max-width: 500px;
        height: 10px;
        background-color: #e0e0e0;
        border-radius: 5px;
        margin-right: 10px;
    }

    .progress-bar-fill {
        height: 100%;
        background-color: #007bff;
        border-radius: 5px;
        transition: width 0.3s ease;
    }

    .progress-text {
        font-size: 1rem;
        color: #666;
    }

    .question {
        font-size: 1.2rem;
        font-weight: bold;
        margin-bottom: 20px;
    }

    .options {
        margin-bottom: 20px;
    }

    .option {
        margin-bottom: 10px;
    }

    .option input {
        margin-right: 10px;
    }

    .navigation {
        display: flex;
        justify-content: space-between;
    }

    .nav-button {
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        background-color: #007bff;
        color: white;
        font-weight: bold;
    }

    .nav-button:disabled {
        background-color: #cccccc;
        cursor: not-allowed;
    }

    .menu-button {
        background-color: #6c757d;
    }
    </style>
</head>

<body>
    <div class="test-container">
        <div class="test-header">
            <h1 class="test-title">Bài Test Trầm cảm BECK (BDI)</h1>
            <div class="progress-container">
                <div class="progress-bar">
                    <div class="progress-bar-fill" id="progress-bar-fill"></div>
                </div>
                <span class="progress-text" id="progress-text">1/21</span>
            </div>
        </div>

        <div id="question-container">
            <div class="question" id="question-text"></div>
            <div class="options" id="options-container"></div>
        </div>

        <div class="navigation">
            <button class="nav-button menu-button" onclick="goToMenu()">Menu</button>
            <button class="nav-button prev-button" id="prev-button" onclick="prevQuestion()" disabled>Trước đó</button>
            <button class="nav-button next-button" id="next-button" onclick="nextQuestion()" disabled>Tiếp theo</button>
        </div>
    </div>

    <!-- Sửa đường dẫn import và chỉ cần import handleQuestion.js -->
    <script type="module" src="../../services/handleQuestion.js"></script>
</body>

</html>