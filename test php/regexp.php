<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form action="#" onsubmit="return false;">
        <label for="strTest">Chuỗi cần test:</label>
        <input type="text" name="strTest" id="strTest" value="090909090">
        <br>
        <label for="strPattern">Pattern:</label>
        <input type="text" name="strPattern" id="strPattern" value="\d+">
        <label for="strModifier">Modifier</label>
        <input type="text" name="strModifier" id="strModifier" value="g">
        <button onclick="test()">Test</button>
        <p id="op"></p>
        <p id="op1"></p>
    </form>
    
    <script>
        function test(){
            // alert("hi");
            // let pat = new RegExp(/\d+,i/);
            let pat = new RegExp(document.getElementById("strPattern").value, document.getElementById("strModifier").value);
            text = document.getElementById("strTest").value;
            const output = document.getElementById("op");
            const output1 = document.getElementById("op1");
            output.innerHTML = text.match(pat);
            output1.innerHTML = pat.test(text);
            // alert(ouput);
        }
        
    </script>
</body>
</html>