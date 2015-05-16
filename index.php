<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>JavaScript példa</title>
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
        
        <h1>JavaScript példa</h1>
        
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
