<?php
include "templates/header.php"
?>


<?php
include "templates/nav.php"
?>



<div class="containercontact">

    <div   class="p-md-5" style="max-width: 880px ; margin-left: auto; margin-right: auto">
        <h5 style = "text-align: justify ; display: block"  >
            Wir freuen uns über Dein Interesse an unserem Verein und stehen Dir gerne zur Verfügung. Bitte nutze
            das untenstehende Formular, um mit uns in Kontakt zu treten. Teile uns Deine Fragen, Anregungen, oder
            sonstige Anliegen mit. Unser Team wird sich bemühen, Deine Nachricht so schnell wie möglich zu bearbeiten
            und Dir zu antworten. Bitte fülle alle erforderlichen Felder aus, damit wir Dir bestmöglich helfen können.
            Vielen Dank für Deine Kontaktaufnahme und Dein Engagement für den RAMAN e.V.!
        </h5>
    </div>







        <form action="https://api.web3forms.com/submit" method="POST" class="p-md-5" style="max-width: 900px ; margin-left: auto; margin-right: auto">
            <input type="hidden" name="access_key" value="288de46a-1b7b-435e-9ef5-15e788ec9871">

            <input type="hidden" name="subject" value="Anfrage">
            <input type="hidden" name="Kontaktform" value="Anfrage">


        <label>
            <select name="title" required
                    onfocus="this.size=8;"
                    onblur="this.size=0;"
                    onchange="this.size=1;
                        this.blur()">
                <option>Titel auswählen: </option>
                <option>Herr </option>
                <option>Frau</option>
                <option>Diverse</option>
                <option>Dr</option>
                <option>Prof</option>
                <option>Prof Dr</option>
                <option>Sonstiges ..</option>
            </select>
        </label>
        <br>

        <label for="fname">First Name</label>
    <input type="text" id="fname" name="firstname" placeholder="Hier Vorname eingeben .." required>

    <label for="lname">Last Name</label>
    <input type="text" id="lname" name="lastname" placeholder="Hier Nachname eingeben .." required>

    <label for="tele">Phone</label>
    <input type="text" id="tele" name="tele" placeholder="Hier Telefonnummer eingeben .." required>

    <label for="email">E-Mail</label>
    <input type="text" id="email" name="email" placeholder="In der Form Test@testmail.com eingeben .." required>

    <label for="address">Address</label>
    <input type="text" id="address" name="address" placeholder="Hier Adresse eingeben ..">

    <label for="Nachricht">Subject</label>
    <textarea id="Nachricht" name="Mitteilung" placeholder="Teile uns bitte Deine Nachricht/ Dein Anliegen bei Bedarf mit .." style="height:250px" required></textarea>

    <input type="submit" value="Absenden" ">


</div>

<?php
include "templates/footer.php"
?>