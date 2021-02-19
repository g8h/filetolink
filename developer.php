<?php

include 'lib/hexicon/hexicon.php';

ini_set('post_max_size', '0M')

?>
<html>

<head>
    <title>Code zero Uploader</title>

    <meta name="description" content="Code Zero's Uploder makes it easy to share files with a friend from far away. It's really easy, you just follow these steps:  1. Upload the file you want to send to your friend. 2. Give your file a username 3. Press the Button [Upload to the Internet] 4. Copy your files link and send it to your friend. When your friend opens the link the file will automatically download the file. Created By Bonginkosi Khumalo, Code zero" />
    <meta name="keywords" content="codezero,file,filesharing,code,zero,bonginkosi,khumalo,extension,bonginkosikhumalo,file,to,link,filetolink,file to link,send,a,file,sed a file,online" />

    <!-- CSS -->
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
    <?php echo "<link rel=\"stylesheet\" href=\"lib/hexicon/css/hexicon.css\"/>\n"; ?>
    <?php echo "<link rel=\"stylesheet\" href=\"lib/bootstrap/css/bootstrap.min.css\"/>\n"; ?>
    <?php echo "<link rel=\"stylesheet\" href=\"lib/themify-icons/themify-icons.css\" />\n"; ?>
    <?php echo "<link rel=\"stylesheet\" href=\"src/css/main.css\"/>\n"; ?>
</head>

<body center>
    <!-- Top image -->

    <img topheading src="Code ZERO.png" />

    <!-- Nav -->
    <div class="dd">
        <button class="dd-btn ti-menu"></button>
        <div class="dd-content">
            <a b mark class="a" href="index.php"> <i class="home-icon ti-rocket"></i> Uploder </a>
            <a b class="a" href="#">
                <i class="dashboard-icon ti-desktop"></i> Developer
            </a>
            <a b class="a" href="#">
                <i class="envelope-icon ti-comments-smiley"></i> How to use
            </a>
            <a b class="a" href="options">
                <i class="bell-icon ti-settings"></i> Delete a file
            </a>
        </div>
    </div>

    <div>
        <img src="src/img/b.jpg" topico rel='Bonginkosi Khumalo' />
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
    echo "</body>\n</html>";
