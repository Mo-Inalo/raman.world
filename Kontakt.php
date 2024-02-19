<?php
include "templates/header.php"
?>


<?php
include "templates/nav.php"
?>



<div class="containercontact">

    <div   class="p-md-5" style="max-width: 880px ; margin-left: auto; margin-right: auto">
        <h4 style = "text-align: justify ; display: block"  >
            Wir freuen uns über Ihr Interesse an unserem Verein und stehen Ihnen gerne zur Verfügung. Bitte nutzen Sie
            das untenstehende Formular, um mit uns in Kontakt zu treten. Teilen Sie uns Ihre Fragen, Anregungen, oder
            sonstige Anliegen mit. Unser Team wird sich bemühen, Ihre Nachricht so schnell wie möglich zu bearbeiten
            und Ihnen zu antworten.  Bitte füllen Sie alle erforderlichen Felder aus, damit wir Ihnen bestmöglich helfen können.
            Vielen Dank für Ihre Kontaktaufnahme und Ihr Engagement für den RAMAN e.V.!
        </h4>
    </div>

    <form action="https://formsubmit.co/m.inalo@hotmail.com" method="POST" class="p-md-5" style="max-width: 900px ; margin-left: auto; margin-right: auto">

    <select name="title" required
            onfocus="this.size=8;"
            onblur="this.size=0;"
            onchange="this.size=1;
                this.blur()">
        <option>Bitte wählen Sie einen Titel aus: </option>
        <option>Herr </option
        <option>Frau</option>
        <option>Diverse</option>
        <option>Dr</option>
        <option>Prof</option>
        <option>Prof Dr</option>
        <option>Sonstiges ..</option>
    </select>



    <label for="fname">First Name</label>
    <input type="text" id="fname" name="firstname" placeholder="Geben Sie bitte Ihren Vornamen ein .." required>

    <label for="lname">Last Name</label>
    <input type="text" id="lname" name="lastname" placeholder="Geben Sie bitte Ihren Nachnamen ein.." required>

    <label for="tele">Phone</label>
    <input type="text" id="tele" name="tele" placeholder="Geben Sie bitte Ihre Telefonnummer ein.." required>

    <label for="email">E-Mail</label>
    <input type="text" id="email" name="email" placeholder="Geben Sie bitte Ihre E-Mail ein.." required>

    <label for="address">Address</label>
    <input type="text" id="address" name="address" placeholder="Geben Sie bitte Ihre Adresse ein..">

    <label for="subject">Subject</label>
    <textarea id="subject" name="subject" placeholder="Teilen Sie uns bitte Ihr Anliegen mit.." style="height:250px" required></textarea>

    <input type="submit" value="Submit" ">


</div>

<?php
include "templates/footer.php"
?>