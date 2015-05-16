<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <style>
            #doboz {
                border: 2px solid red;
                background-color: #ddd;
                padding: 20px;
                width: 200px;
            }
        </style>
    </head>
    <body>
        
        <script>
        document.write('Hello JavaScript!');
        </script>
        
        <?php echo '<p>Hello PHP!</p>'; ?>
        
        <button onclick="alert('Figyelem!')">Figyelem!</button>
        
        <br><br>
        <div id="doboz">Doboz</div>
        <button onclick="szinez()">Színez</button>
        
        <script src="script.js"></script>
    </body>
</html>
