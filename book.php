<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,800&display=swap"
        rel="stylesheet" />

    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/book-style.css">
    <title>Booking</title>
</head>

<body>
<div class="overlay" id="overlay"></div>
    <header>
        <div class="header-container">
            <h1> <a href="index.html" style="color: white;text-decoration:none;"><span class="green"> D</span>OUR.</a></h1>
        <nav class="nav">
        <a href="index.html">Go back home</a>
      </nav>
        </div>
    </header>
<section class="booking">
    <h1 class="heading-title">Book Your Trip Now !!</h1>

    <form action="booking.php" method="post">
        <div class="container">
            <div class="box">
                <label for="name">name:</label>
                <input type="text" name="name" placeholder="Enter name" required>
            </div>
            <div class="box">
                <label for="email">Email:</label>
                <input type="email" name="email" placeholder="Enter Your Email" required>
            </div>
            <div class="box">
                <label for="phone">Phone Numbe:r</label>
                <input type="tel" name="phone" id="" required maxlength="10" placeholder="06-xxxxxxxx">
            </div>
            <div class="box">
                <label for="Adress">Adress:</label>
                <input type="text" name="adress" placeholder="Enter Your Adress " required>
            </div>
            <div class="box">
                <label for="destination">Destination:</label>
                <input type="text" name="destination" placeholder="Destination" required>
            </div>
            <div class="box">
                <label for="guests">Number of Guests</label>
                <input type="number" name="guests" placeholder="Number Of Guests" required>
            </div>
            <div class="box">
                <label for="arrival_date">Arrival Date</label>
                <input type="date" name="arrival_date" min="2022-03-20" required>
            </div>
            <div class="box">
                <label for="leaving_date">Arrival Date</label>
                <input type="date" name="leaving_date" required>
            </div>
        </div>
        <button type="submit" id="submit" name="send">submit</button>
    </form>
    </section>
    <footer>
        <div class="footer">
            <section>
                <h3>LINKS</h3>
                <a href="#">Home</a>
                <a href="#">About Us</a>
                <a href="#">Contact Us</a>
            </section>
            <section>
                <h3>OTHER</h3>
                <a href="#">Privacy Policy</a>
                <a href="#">Terms & Conditions</a>
                <a href="#">Cookie Policy</a>
            </section>
            <section>
                <h3>ANY QUESTIONS?</h3>
                <a href="emailto:zakariae.mourid@gmail.com"><span><i
                            class="fa fa-envelope"></i></span><span>zakariae.mourid@gmail.com</span></a>
                <a href="tel:+212-663-054819"><span><i class="fa fa-phone"></i></span><span>+212-663-054819</span></a>
            </section>
            <section>
                <h3>Follow Us</h3>
                <a href="instagram"><span><i class="fab fa-instagram"></i></i></span><span>instagram</span></a>
                <a href="facebook"><span><i class="fab fa-facebook-square"></i></span><span>Facebook</span></a>
            </section>
        </div>
        <div class="sub-footer">
            Created By Mr. Mourid zakaria | All Rights Reserved!
        </div>
    </footer>
    <script src="js/book.js"></script>
</body>

</html>