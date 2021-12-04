<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Success</title>
    <link href="css/main.css" rel="stylesheet" media="screen">
</head>

<body>
    <header>
        <h1>The Last Bookstore</h1>

        <nav>
            <ul>
                <li><a class="nav-link" href="#">About Us</a></li>
                <li><a class="nav-link" href="#">Contact Us</a></li>
                <li><a class="nav-link" href="index.html">Home</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <section id="pay">
            <h2>You have successfully entered your card details.</h2>
            <h4>Debit/Credit Card <img src="images/mastercardIcon.png" class="icon" alt="mastercard icon" height="50px"
                    width="55px"></h4>

            <?php
                $x = $_POST['hidden'];
                if($x == 1) {

                    $link = new mysqli("localhost", "root", "", "creditcard");

                    if ($link->connect_errno) {
                        echo "Connect failed ".$link->connect_error;
                    exit();
                    }

                    $ccnum = $_POST['ccnum'];
                    $m = $_POST['month'];
                    $y = $_POST['year'];
                    $seccode = $_POST['secCode'];

                    $v1 = md5($ccnum);
                            
                    $date = new DateTime();
                    $date->setDate($y, $m, 1);
                    $date->modify('+1 month -1 day');
                    $v2 = $date->format('Y-m-d');

                    $v3 = $seccode;

                    $query ="INSERT INTO card(ccnum, expdate, seccode) VALUES ('$v1', '$v2', '$v3')";
                    if ($result = $link->query($query)) {
                        //successful
                    } else echo "wrong"; 

                    $link->close();

                    $masked =  str_pad(substr($ccnum, -4), strlen($ccnum), '*', STR_PAD_LEFT);
                    echo "<h5> Your card ".$masked. " has been saved </h5>";
    
                } else {
                    header('Location: pay.php');
                    }
            ?>

        </section>
    </main>
</body>

</html>