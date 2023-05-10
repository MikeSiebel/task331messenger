<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chat</title>

    <link rel="stylesheet" href="style/style.css" />
    
</head>
<body>
<header>
    <nav>
        <div>
            <ul id="menu">
                <a href="/">Home</a>
                <a href="/chekauth.php">Chat for trusted users</a>
                <a href="/logout.php">Выйти</a>
            </ul>
        </div>
    </nav>
</header>
<form action="" id="chat">
<div class="chat-result" id="chat-result"></div>
<div class="chat-label">Type your message</div>
<input type="text" name="chat-user" id="chat-user" placeholder="Name">
<input type="text" name="chat-message" id="chat-message" placeholder="Message">
<input type="submit" value="Send" >
</form>

<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script src="script/script.js"></script> 
</body>
</html>