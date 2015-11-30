<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Consuming Twitter Webserver</title>
    <script>
        window.onload = function() {
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
                if (xhttp.readyState == 4 && xhttp.status == 200) {
                    var tweets = JSON.parse(xhttp.responseText);
                    var tweetstring = "";
                    for (var i =0; i< tweets.length ; i++)
                    {
                        tweetstring += "<h3>" + tweets[i].name + "</h3> </br>";
                        tweetstring += "<p>"  + tweets[i].text + "</p>"
                    }
                    document.getElementById("twitter").innerHTML = tweetstring;

                }
            };
            xhttp.open("GET", "http://1204848-nodeapp.azurewebsites.net/", true);
            xhttp.send();
        }

    </script>


</head>
<body>
<header>
    <h1>Header Div</h1>
</header>
<main>
    <h2> Main content </h2>
</main>
<aside id="twitter" >

</aside>
</body>
</html>


<?php
/**
 * Created by PhpStorm.
 * User: 1204848
 * Date: 30/11/2015
 * Time: 14:20
 */
