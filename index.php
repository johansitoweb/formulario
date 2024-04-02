<?php

// Process submitted data
require_once('process-form.php');

?>

<!-- Contact Form -->

<div class="contact-form">
    <form action="" method="post">
        <div>       
            <input type="text" name="cname" placeholder="Your name">
        </div>
        <div>       
            <input type="text" name="email" placeholder="Your email">
        </div>   
        <div>       
            <input type="text" name="phone" placeholder="Your phone">
        </div>   
        <div>   
            <input type="text" name="website" placeholder="Your website">
        </div>
        <div>       
            <textarea name="msg" rows="5" placeholder="Write a message..."></textarea>
        </div>
        <div>
            <button>Submit</button>
        </div>
        <input type="hidden" name="submitted" value="1">
    </form>
</div>



