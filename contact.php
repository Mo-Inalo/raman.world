

<?php

include "templates/header.php";
?>


<?php
include "templates/nav.php"
?>




<div class="containercontact">
    <form action="action_page.php" class="p-md-5">

        <label for="fname">First Name</label>
        <input type="text" id="fname" name="firstname" placeholder="Your name..">

        <label for="lname">Last Name</label>
        <input type="text" id="lname" name="lastname" placeholder="Your last name..">

        <label for="country">Phone</label>
        <input type="text" id="lname" name="lastname" placeholder="Your phone number..">

        <label for="subject">Subject</label>
        <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>

        <input type="submit" value="Submit">

    </form>
</div>

<?php
include "templates/footer.php"
?>

