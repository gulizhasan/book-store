<header>
    <h1>The Last Bookstore</h1>
    <title>Payment</title>
    <link href="css/main.css" rel="stylesheet" media="screen">
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
        <h2>Payment Options</h1>
            <h4>Debit/Credit Card <img src="images/mastercardIcon.png" class="icon" alt="mastercard icon" height="50px"
                    width="55px"></h4>
            <form method="POST" action="success.php">

                Card Number:
                <input type="number" size=16 id="card" name="ccnum">
                <br> <br>

                Expiration Date:
                <select type="number" id="month" name="month">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                    <option value="11">11</option>
                    <option value="12">12</option>
                </select>

                <select type="number" id="year" name="year">
                    <option value="2021">2021</option>
                    <option value="2022">2022</option>
                    <option value="2023">2023</option>
                    <option value="2024">2024</option>
                    <option value="2025">2025</option>
                    <option value="2026">2026</option>
                    <option value="2027">2027</option>
                    <option value="2028">2028</option>
                    <option value="2029">2029</option>
                    <option value="2030">2030</option>
                </select>
                <br> <br>

                Security Code:
                <input type="number" size="4" id="security" name="secCode">
                <h5>(3-4 digit code normally on the back of your card.)</h5>

                <input type="submit" id="send" value="Continue">

                <input type="hidden" id="hidden" name="hidden">

            </form>

            <script src="js/validation.js"></script>
    </section>
</main>
</body>

</html>