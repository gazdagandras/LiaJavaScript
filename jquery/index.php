<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>jQuery példa</title>

        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script src="script.js"></script>

        <style type="text/css">
            #box {
                border: 2px solid red;
                background: #ddd;
                width: 100px;
                padding: 15px;
                text-align: center;
            }
            .fejezetcim { color: darkred; }
            .fejezetszoveg { border: 1px dashed #ddd; padding: 15px; }
        </style>

    </head>
    <body>

        <h1>jQuery példa</h1>

        <button id="showBox">Mutat</button>
        <button id="hideBox">Elrejt</button>

        <div id="box">Doboz!</div>
        
        <h2>Fejezetek</h2>
        
        <h3 class="fejezetcim">Lorem ipsum</h3>
        <div class="fejezetszoveg">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc sed ex eu sem tristique bibendum ut quis ex. Pellentesque eget pulvinar mauris, et tristique sapien. Quisque lectus sapien, ornare eu facilisis eu, mollis vestibulum lacus. In eu porttitor nunc, a volutpat mi. Vivamus efficitur dapibus justo, sed iaculis sem efficitur non. Ut justo magna, ornare aliquam arcu vitae, fringilla condimentum libero. Ut feugiat metus ac condimentum accumsan. Praesent lorem odio, ultrices vel tempor in, finibus tincidunt risus. Duis sit amet erat aliquam, suscipit nisi eget, faucibus velit. Sed eget arcu ut risus pretium molestie. Phasellus dictum elit lacinia, placerat felis eu, dignissim ante. Nulla et faucibus ex. </div>

        <h3 class="fejezetcim">Pellentesque placerat</h3>
        <div class="fejezetszoveg">Pellentesque placerat, ante at sodales facilisis, libero justo ultrices felis, eget porttitor lacus magna sed elit. Phasellus volutpat id lacus vitae convallis. Etiam molestie gravida diam. Nulla facilisi. Nulla gravida eleifend turpis, vitae lacinia enim fringilla vitae. Phasellus bibendum arcu condimentum porta semper. Suspendisse potenti. Aenean nisi libero, rhoncus vitae turpis id, congue convallis ligula. Sed finibus sagittis eros sodales vehicula. Vestibulum a pulvinar purus. Nulla erat dui, rhoncus non mollis convallis, pulvinar in odio. Phasellus dictum felis at imperdiet finibus. </div>
        
        <h3 class="fejezetcim">Quisque vel felis non</h3>
        <div class="fejezetszoveg">Quisque vel felis non felis accumsan bibendum. Donec consectetur feugiat ante sed accumsan. Praesent vehicula pellentesque dapibus. Phasellus vitae volutpat sem. In aliquam lacinia urna, eu interdum dolor mollis vitae. Integer eget odio nec dui pharetra placerat. Integer volutpat lacus id metus dignissim maximus vitae eu nunc. Nullam accumsan at erat in ultrices. Maecenas convallis dictum elit ac pulvinar. Sed convallis quam at lorem elementum mattis. Aliquam viverra scelerisque suscipit.</div>
        
        <h2>Összeadás:</h2>
        
        a: <input type="text" id="a">
        <br>
        b: <input type="text" id="b">
        <br>
        a+b= <input type="text" id="eredmeny" disabled="disabled">
        <br>
        <button id="osszead">Számol</button>
        
    </body>
</html>
