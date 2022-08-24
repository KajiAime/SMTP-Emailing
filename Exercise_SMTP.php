<?php include "Send_Email.php" ?>
<!DOCTYPE html>
<html>
    <head>
        <title>SMTP test</title>
        <style>
            input{
                margin-bottom: 5px;
                width: 300px;
            }
            textarea{
                width: 300px;
                height: 300px;
            }
        </style>
    </head>
    <body>
        <center><h1>Blumdesk!</h1></center><br>
        <center><h5 style="margin-top:-40px;">The next genation of email services.</h5>
        <form action="https://formsubmit.co/ndekaji@gmail.com" method="POST">
            <input type="text" id="name" placeholder="Provide your name..."><br>
            <input type="email" id="email" placeholder="Provide your email..." required><br>
            <input type="text" id="_subject" placeholder="Provide the heading..."required><br>
            <textarea type="text" id="message" placeholder="Type in the message..."></textarea><br>
            <button type="submit">Send</button>
        </form></center>
    </body>
</html>