<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title> Shout It! </title>
        <link rel="stylesheet" href="style/style.css" type="text/css" />
    </head>
    <body>
        <div id="container">
            <header>
                <h1>Shout It! Shoutbox</h1>
            </header>
            <div id="shouts">
                <ul>
                    <li class="shout"><span>10:15PM - </span> Brad: What are you up to? </li>
                    <li class="shout"><span>10:15PM - </span> Brad: What are you up to? </li>
                    <li class="shout"><span>10:15PM - </span> Brad: What are you up to? </li>
                    <li class="shout"><span>10:15PM - </span> Brad: What are you up to? </li>
                    <li class="shout"><span>10:15PM - </span> Brad: What are you up to? </li>
                </ul>
            </div>
            <div id="input">
                <form method="post" action="process.php">
                    <input type="text" name="user" placeholder="Enter Your Name" />
                    <input type="text" name="message" placeholder="Enter a Message" />
                    <br />
                    <input class="shout-btn" type="submit" name="submit" value="Shout It Out" />
                </form>
            </div>
        </div>
    </body>
</html>