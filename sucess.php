<?php
// Fetching Values from URL
$name=$_POST['name'];
$email=$_POST['email'];
?>
    <!DOCTYPE html>
    <html>

    <head>
        <title>Javascript Set Form Action Example</title>
        <!-- Include CSS File Here -->
        <link rel="stylesheet" href="style.css" />
    </head>

    <body>
        <div class="container">
            <div class="main">
                <h2>Form Data Received Here</h2>
                <form>
                    <label>Name : </label>
                    <label>
                        <?php echo $name; ?>
                    </label>
                    <label>Email : </label>
                    <label>
                        <?php echo $email; ?>
                    </label>
                    <a href="index.php" class="back">Back</a>
                </form>
            </div>
        </div>
    </body>

    </html>
