<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=initial-scale=1.0">
    <title>calculator</title>
    <link rel="stylesheet" href="calcstyle.css" ></link>
</head>
<body>
<h1>Calculator Design</h1>
<div class="container">
      <div class="header">Calculator </div>
      <form name="form">
        <input type="text" class="result" name="textview">
      </form>
      <div class="first-row">
        <input type="button" name="" value="&radic;" class="global" onclick="insert('/')">
        <input type="button" name="" value="(" class="global" onclick="insert('(')">
        <input type="button" name="" value=")" class="global" onclick="insert(')')">
        <input type="button" name="" value="%" class="global" onclick="insert('%')">
      </div>
      <div class="second-row">
        <input type="button" name="" value="7" class="global" onclick="insert('7')">
        <input type="button" name="" value="8" class="global" onclick="insert('8')">
        <input type="button" name="" value="9" class="global" onclick="insert('9')">
        <input type="button" name="" value="/" class="global" onclick="insert('/')">
      </div>
      <div class="third-row">
        <input type="button" name="" value="4" class="global" onclick="insert('4')">
        <input type="button" name="" value="5" class="global" onclick="insert('5')">
        <input type="button" name="" value="6" class="global" onclick="insert('6')">
        <input type="button" name="" value="X" class="global" onclick="insert('*')">
      </div>
      <div class="fourth-row">
        <input type="button" name="" value="1" class="global" onclick="insert('1')">
        <input type="button" name="" value="2" class="global" onclick="insert('2')">
        <input type="button" name="" value="3" class="global" onclick="insert('3')">
        <input type="button" name="" value="-" class="global" onclick="insert('-')">
      </div>
      <div class="conflict">
        <div class="left">
          <input type="button" name="" value="0" class=" big" onclick="insert('0')">
          <input type="button" name="" value="." class=" small" onclick="insert('.')">
          <input type="button" name="" value="Del" class=" red small white-text top-margin" onclick="clean()">
          <input type="button" name="" value="back" class=" blue white-text small top-margin" onclick="back()">
          <input type="button" name="" value="=" class=" green white-text small top-margin" onclick="equal()">
        </div>
        <div class="right">
          <input type="button" name="" value="+" class="global grey plus" onclick="insert('+')">
        </div>
      </div>
    <!-- <h1>hello hello hello </h1> -->
      <script src="calc.js"></script>
</body>
</html>