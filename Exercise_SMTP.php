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
            h5{
                margin-top:-40px;
            }
        </style>
    </head>
    <body>
        <center><h1>Blumdesk!</h1></center><br>
        <center><h5>The next genation of email services.</h5>
        <form action="https://formsubmit.co/youremail@website.com" method="POST"> <!--Replace youremail@website.com with the email you will use to receive the emails.-->
            <input type="email" name="email" placeholder="Provide your email..." required><br>
            <input type="text" name="_subject" placeholder="Provide the heading..."required><br>
            <textarea type="text" name="message" placeholder="Type in the message..."></textarea><br>
            <button type="submit">Send</button>
        </form></center>
    </body>
</html>
