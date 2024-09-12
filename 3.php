<!DOCTYPE html>
<html>
    <head>
        <title>Calculator</title>
        <style>
            body {
                font-family: Arial, sans-serif;
                margin: 0;
                padding: 0;
                display: flex;
                justify-content: center;
                align-items: center;
                height: 100vh;
                background-image: linear-gradient(white, pink);
                flex-direction:column;
            }

            form {
                background-color: #212121;
                padding: 20px;
                border-radius: 5px;
                box-shadow: 0 0 10px rgba(25, 25, 25, 0.1);
                width: 300px;
            }

            label {
                display: block;
                margin-bottom: 10px;
            }

            input[type="number"] {
                width: 100%;
                padding: 10px;
                border-radius: 5px;
                border: 1px solid #ccc;
                box-sizing: border-box;
                margin-bottom: 10px;
            }

            select {
                width: 100%;
                padding: 10px;
                border-radius: 5px;
                border: 1px solid #ccc;
                box-sizing: border-box;
                margin-bottom: 10px;
            }

            input[type="submit"] {
                background-color: #4CAF50;
                color: #fff;
                border: none;
                border-radius: 5px;
                padding: 10px;
                cursor: pointer;
                width: 100%;
            }

            h1{
                padding:auto;
                margin:10px; 
                text-align:center; 
                font-size:24px; 
                font-weight:bold; 
                background-color: white;
                border: 3.5px solid pink;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            }

            h2{
                /* text-shadow: 0 0 10px rgba(0, 0, 0, 0.1); */
                color: white;
            }

            h4{
                margin:10px;
                color:white; 
            }

            .outer{
                background-color: black;
                padding:35px 50px;
                border: solid 2px  black;
                border-radius:25px;
            }

            .simple{
                color:white;
            }
            .calculator{
                color:pink;
            }
        </style>    
    </head>
    <body>

        <div class="outer">
            <h2><span class="simple">Simple</span> <span class="calculator">Calculator</span></h2>
                <div>
                    <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
                        <h4>Angka Pertama:</h4> <input type="number" name="angka1" required><br>
                        <h4>Operator:</h4>
                        <select name="operator">
                            <option value="+">+</option>
                            <option value="-">-</option>
                            <option value="*">*</option>
                            <option value="/">/</option>
                        </select><br>
                        <h4>Angka Kedua:</h4> <input type="number" name="angka2" required><br>
                        <input type="submit" name="submit" value="CEK HASIL">
                    </form>
                </div>

            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $angka1 = $_POST['angka1'];
                $angka2 = $_POST['angka2'];
                $operator = $_POST['operator'];
            
                switch ($operator) {
                    case '+':
                        $hasil = $angka1 + $angka2;
                        break;
                    case '-':
                        $hasil = $angka1 - $angka2;
                        break;
                    case '*':
                        $hasil = $angka1 * $angka2;
                        break;
                    case '/':
                        if ($angka2 == 0) {
                            echo "Error: Cannot divide by zero.";
                            return;
                        }
                        $hasil = $angka1 / $angka2;
                        break;
                    default:
                        echo "Error: Invalid operator.";
                        return;
                }
                echo "<h1> Hasil: $hasil </h1>";
            }
            ?>            
        </div>
    </body>
</html>