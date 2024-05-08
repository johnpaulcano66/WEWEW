<?php
class TopNav {
    public function __construct() {
        echo '
        <nav class="top-nav">
            <div class="container">
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Loans</a></li>
                    <li><a href="#">Savings</a></li>
                    <li><a href="#">Account</a></li>
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">LogIn</a></li>
                    <li><a href="#">Register</a></li>
                  
                </ul>
            </div>
        </nav>
        ';
    }
}

// Instantiate the class to display the top navigation bar
new TopNav();
?>
