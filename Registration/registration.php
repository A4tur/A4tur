<!DOCTYPE html>
<?php 
    
?>
<html>
    <head>
        <meta charset="utf-8">
        <title>69421 - Registration</title>
        <link rel="stylesheet" href="styles.css">
        <script src="script.js"></script>
    </head>
        
    <body>
        <header>
            <img class="logo" src="images/logo.png">
        </header>
        <main>
            <form action="reglog.php" method="post" style="display: none;">
                <h1 style="font-size: 1.5rem;">Registration</h1><br>
                <div class="input-reg-field" onkeyup="check('reg')">
                    <div id="wrapper">
                        <input type="text" name="reg-nickname" placeholder="Nickname (at least 2 characters)" autocomplete="off" spellcheck="false">
                        <span class="neon"></span>
                    </div>
                    <div id="wrapper">
                        <input type="text" name="email" placeholder="E-Mail" autocomplete="off" spellcheck="false">
                        <span class="neon"></span>
                    </div>
                    <div id="wrapper">
                        <input type="password" name="reg-password1" placeholder="Password (at least 8 characters)" autocomplete="off" spellcheck="false">
                        <span class="neon"></span>
                        <div class="switch_button" onclick="passtoggle(document.getElementsByName('log-password1')[0], document.getElementsByClassName('switch_button')[0])">
                            <img id="close" src="images/close.svg">
                            <img id="open" src="images/open.svg">
                        </div>
                    </div>
                    <div id="wrapper">
                        <input type="password" name="reg-password2" placeholder="Password again" autocomplete="off" spellcheck="false">
                        <span class="neon"></span>
                        <div class="switch_button" onclick="passtoggle(document.getElementsByName('log-password2')[0], document.getElementsByClassName('switch_button')[1])">
                            <img id="close" src="images/close.svg">
                            <img id="open" src="images/open.svg">
                        </div>
                    </div>
                </div>
                <div class="info-wrapper" style="margin-top: 15px; width:110px;">
                    <p class="p-help">How to fill out?&ensp;<img src="images/info.png"></p>
                    <div class="info-window">Nickname should contain at least 2 characters and should have only latin latters a-Z or/and numbers 0-9<br><br>The email should be valid<br><br>Minimal length of password is 8 characters. Can only contain latin latters a-Z, numbers 0-9 or/and special characters like * or _<br><br>Maximal length of a nickname and a password is 30 characters</div>
                </div>
                <input type="submit" name="register" value="Join" disabled>
            </form>
            <form action="reglog.php" method="post">
                <h1 style="font-size: 1.5rem;">Login</h1><br>
                <div class="input-log-field" onkeyup="check('log')">
                    <div id="wrapper">
                        <input type="text" name="log-nickname" placeholder="Nickname" autocomplete="off" spellcheck="false">
                        <span class="neon"></span>
                    </div>
                    <div id="wrapper">
                        <input type="password" name="log-password" placeholder="Password (at least 8 characters)" autocomplete="off" spellcheck="false">
                        <span class="neon"></span>
                        <div class="switch_button" onclick="passtoggle(document.getElementsByName('log-password')[0], document.getElementsByClassName('switch_button')[2])">
                            <img id="close" src="images/close.svg">
                            <img id="open" src="images/open.svg">
                        </div>
                    </div>
                </div>
                <input type="submit" name="login" value="Login" disabled>
            </form>
            <p class="control-reg-log" onclick="reglogtoggle()">already registred?</p>
        </main>
        <footer>
            <div class="footer-line">
                <p>
                    Qustions or suggestions?<br>
                    Here is my support email:<br><br>
                    <b>69421memes@gmail.com</b>
                </p>
                <div class="footer-line-item">
                    <p>Powered by <b>A4tur</b></p>
                    <!-- <img src="images/logo.png" width="80px"><p>&ensp;Team</p> -->
                </div>
                <p>Version <b>1.0.0</b></p>
            </div>
        </footer>
    </body>
</html>