<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="footer.css">
</head>

<body>
    <!-- footer.php -->
    <footer class="footer">
        <div class="footer-top">
            <div class="footer-container">
                <div class="footer-logo">
                    <h1>MyLogo</h1>
                </div>
                <ul class="footer-menu">
                    <li><a href="#">Privacy Policy</a></li>
                    <li><a href="#">Terms of Service</a></li>
                    <li><a href="#">FAQ</a></li>
                    <li><a href="#">Careers</a></li>
                </ul>
                <div class="footer-socials">
                    <a href="#" class="social-icon">FB</a>
                    <a href="#" class="social-icon">TW</a>
                    <a href="#" class="social-icon">IG</a>
                    <a href="#" class="social-icon">LN</a>
                </div>
            </div>
        </div>
        <div class="footer-middle">
            <div class="footer-container">
                <div class="footer-contact">
                    <h2>Contact Us</h2>
                    <p>Email: info@mywebsite.com</p>
                    <p>Phone: +123 456 7890</p>
                    <p>Address: 1234 Street, City, Country</p>
                </div>
                <div class="footer-newsletter">
                    <h2>Subscribe to Our Newsletter</h2>
                    <form action="#" method="post">
                        <input type="email" name="email" placeholder="Enter your email" required>
                        <button type="submit">Subscribe</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="footer-container">
                <p>&copy; <?php echo date("Y"); ?> MyWebsite. All rights reserved.</p>
            </div>
        </div>
    </footer>

</body>

</html>