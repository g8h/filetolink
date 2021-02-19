<?php

include 'lib/hexicon/hexicon.php';
include 'crueldb.php';

$log = md5('log');
if (isset($_COOKIE[$log])){
    header('Location: '. decrypt($_COOKIE[$log], 678));
}

ini_set('post_max_size', '0M')

?>
<html>

    <head>
        <title>Code zero | File to link</title>

        <meta name="viewport" content="width=device-width,initial-scale=1">
        <meta name="description"
            content="Code Zero's Uploder makes it easy to share files with a friend from far away. It's really easy, you just follow these steps:  1. Upload the file you want to send to your friend. 2. Give your file a username 3. Press the Button [Upload to the Internet] 4. Copy your files link and send it to your friend. When your friend opens the link the file will automatically download the file. Created By Bonginkosi Khumalo, Code zero" />
        <meta name="keywords"
            content="codezero,file,filesharing,code,zero,bonginkosi,khumalo,extension,bonginkosikhumalo,file,to,link,filetolink,file to link,send,a,file,sed a file,online" />

        <!-- CSS -->
        <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
        <?php echo "<link rel=\"stylesheet\" href=\"lib/themify-icons/themify-icons.css\" />\n"; ?>
        <?php echo "<link rel=\"stylesheet\" href=\"src/css/main.css\"/>\n"; ?>
        <style>
        body {
            margin: 0;
            padding: 0;
            background-image: url('../../src/img/bg.jpg');
            background-size: cover;
            font-family: sans-serif;
        }

        </style>

    </head>

    <body>

        <?php

$arr = ['A', 'a', 'B', '12', 'b', 'L', 'y', 'Y', 'z', 'Z'];
$objec = [random_r($arr), randomN(1, 10)];

$folder = random_r($arr) . randomN(1, 99) . random_r($arr) . random_r($objec);

    if (isset($_POST['pass'])) {
        $db = new crdb;
        if (!$db->db_exists('form')) {
            $db->newdb('form', 1234);
        }
        $db->opendb('form', 1234);
        $user = "u" . md5($_POST['user']);
        $pass = "p" . md5($_POST['pass']);
        $name = "p" . md5($_POST['name']);
        $folde = $folder;

        $db->set($user, "['password' => '$pass', 'folder' => '$folde', 'name' => '$name']");
        include 'set/create.php';
    }
    if (!isset($_POST['pass'])) { ?>
        <br />
        <br />
        <br />
        <form method='post' class="loginbox" action='signup.php'>

            <img src="Code ZERO.png" class="avatar">

            <h1 hed>Create an account</h1>

            <p class="p">Name and surname</p>

            <input type="text" name="name" placeholder="Name & surname" required>

            <p class="p">Usercil (@#$%^*!#) are not allowed)</p>

            <input type="password" name="user" placeholder="(Make sure no one knows it)" required>

            <p class="p">Password</p>

            <input type="password" name="pass" placeholder="Enter Password" required>

            <input type="submit" name="" value="Go!">

        </form>


        <!-- Explainer -->

        <div class="loginex">
            <h1>What will be new once you Sign Up?</h1>
            <hr />
            <p center>
                Once you create an account, you'll get <b> more features</b> like a url shortner,
                theme changer (e.g change your theme to <b>dark mode</b>.), file opener, faster file deleter,
                fetch files (e.g fetch a file from a link to your account), file encrypter, write files . How cool is
                that!
            </p>
        </div>


        </div>

        <!-- JS -->
        <?php echo '<script src="lib/jquery/jquery.min.js"></script>' . "\n"; ?>
        <?php echo '<script src="lib/bootstrap/js/bootstrap.min.js"></script>' . "\n"; ?>
        <?php echo '<script src="src/js/main.js"></script>' . "\n"; ?>

        <script>
        // Example starter JavaScript for disabling form submissions if there are invalid fields
        (function() {
            'use strict';

            window.addEventListener('load', function() {
                // Fetch all the forms we want to apply custom Bootstrap validation styles to
                var forms = document.getElementsByClassName('needs-validation');

                // Loop over them and prevent submission
                var validation = Array.prototype.filter.call(forms, function(form) {
                    form.addEventListener('submit', function(event) {
                        if (form.checkValidity() === false) {
                            event.preventDefault();
                            event.stopPropagation();
                        }
                        form.classList.add('was-validated');
                    }, false);
                });
            }, false);
        })();
        </script>
        </form>
        <?php
    }
    echo "</body>\n</html>";
