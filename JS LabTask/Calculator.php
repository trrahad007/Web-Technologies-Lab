<!DOCTYPE html>
<html>
<head>
<title>Calculator</title>
<style>
body {
    background-color: beige;
    font-family: Arial, Helvetica, sans-serif;
}
h1 {
    text-align: center;
    color: blue;
}
.calculator {
    width: 350px;      
    margin: auto;
    background-color: #16213e;
    padding: 30px;      
    border: 10px solid black;
}

#display {
    width: 340px;       
    height: 50px;      
    font-size: 24px;    
    margin-bottom: 15px;
}

button {
    height: 60px;       
    font-size: 22px;   
    font-weight: bold;
    border-radius: 10px;
}
.buttons {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 5px;
}

</style>
<script>
function addValue(val) {
    document.getElementById("display").value += val;
}

function calculate() {
    var input = document.getElementById("display").value;

    if (input === "") {
        alert("Please enter something!");
        return;
    }

    if (!(input.includes("+") || input.includes("-") || input.includes("*") || input.includes("/"))) {
        alert("No arithmetic operation found!");
        return;
    }

    var last = input[input.length - 1];
    if (last == "+" || last == "-" || last == "*" || last == "/") {
        alert("Expression cannot end with an operator!");
        return;
    }

    for (var i = 0; i < input.length - 1; i++) {
        var a = input[i];
        var b = input[i + 1];
        if ((a == "+" || a == "-" || a == "*" || a == "/") &&
            (b == "+" || b == "-" || b == "*" || b == "/")) {
            alert("Two operators together are not allowed!");
            return;
        }
    }

    for (var i = 0; i < input.length; i++) {
        var code = input[i].charCodeAt(0); 
        if (!((code >= 48 && code <= 57) || code == 43 || code == 45 || code == 42 || code == 47 || code == 46)) {
            alert("Only numbers and operators are allowed!");
            return;
        }
    }

    try {
        document.getElementById("display").value = eval(input);
    } catch {
        alert("Invalid expression!");
    }
}

function clearDisplay() {
    document.getElementById("display").value = "";
}
</script>
</head>
<body>
<h1>Calculator</h1>
<div class="calculator">
    <input type="text" id="display">
    <div class="buttons">
        <button onclick="addValue('7')">7</button>
        <button onclick="addValue('8')">8</button>
        <button onclick="addValue('9')">9</button>
        <button onclick="addValue('/')">/</button>
        <button onclick="addValue('4')">4</button>
        <button onclick="addValue('5')">5</button>
        <button onclick="addValue('6')">6</button>
        <button onclick="addValue('*')">*</button>
        <button onclick="addValue('1')">1</button>
        <button onclick="addValue('2')">2</button>
        <button onclick="addValue('3')">3</button>
        <button onclick="addValue('-')">-</button>
        <button onclick="addValue('0')">0</button>
        <button onclick="clearDisplay()">Clear</button>
        <button onclick="calculate()">=</button>
        <button onclick="addValue('+')">+</button>
    </div>
</div>
</body>
</html>