<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator Estetik</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f3f3f3;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .calculator {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
            padding: 20px;
            width: 300px;
        }
        .calculator-screen {
            width: 100%;
            height: 60px;
            border: none;
            font-size: 24px;
            text-align: right;
            padding-right: 20px;
            padding-left: 10px;
            margin-bottom: 10px;
            border-radius: 5px;
            outline: none;
        }
        .calculator-keys {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 10px;
        }
        .button {
            border: none;
            padding: 20px;
            font-size: 20px;
            border-radius: 5px;
            cursor: pointer;
            background-color: #f0f0f0;
            transition: background-color 0.3s ease;
        }
        .button:hover {
            background-color: #e0e0e0;
        }
        .button.operator {
            background-color: #ff9500;
            color: #fff;
        }
        .button.operator:hover {
            background-color: #e68a00;
        }
    </style>
</head>
<body>

<div class="calculator">
    <input type="text" class="calculator-screen" value="" disabled />
    <div class="calculator-keys">
        <button class="button operator" value="+">+</button>
        <button class="button operator" value="-">-</button>
        <button class="button operator" value="*">&times;</button>
        <button class="button operator" value="/">÷</button>
        <button class="button" value="7">7</button>
        <button class="button" value="8">8</button>
        <button class="button" value="9">9</button>
        <button class="button" value="4">4</button>
        <button class="button" value="5">5</button>
        <button class="button" value="6">6</button>
        <button class="button" value="1">1</button>
        <button class="button" value="2">2</button>
        <button class="button" value="3">3</button>
        <button class="button" value="0">0</button>
        <button class="button" value=".">.</button>
        <button class="button" id="clear">C</button>
        <button class="button" id="calculate">=</button>
    </div>
</div>

<script>
    const calculator = document.querySelector('.calculator');
    const keys = calculator.querySelector('.calculator-keys');
    const display = calculator.querySelector('.calculator-screen');

    keys.addEventListener('click', event => {
        if (event.target.matches('button')) {
            const key = event.target;
            const action = key.value;
            const keyContent = key.textContent;
            const displayedNum = display.value;

            if (!action) {
                if (displayedNum === '0' || calculator.dataset.previousKeyType === 'operator') {
                    display.value = keyContent;
                } else {
                    display.value = displayedNum + keyContent;
                }
            }

            if (action === '+' || action === '-' || action === '*' || action === '/') {
                const firstValue = calculator.dataset.firstValue;
                const operator = calculator.dataset.operator;
                const secondValue = displayedNum;

                if (firstValue && operator && calculator.dataset.previousKeyType !== 'operator') {
                    const calcValue = calculate(firstValue, operator, secondValue);
                    display.value = calcValue;
                    calculator.dataset.firstValue = calcValue;
                } else {
                    calculator.dataset.firstValue = displayedNum;
                }

                calculator.dataset.previousKeyType = 'operator';
                calculator.dataset.operator = action;
            }

            if (action === 'clear') {
                display.value = '';
                delete
