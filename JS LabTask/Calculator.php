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