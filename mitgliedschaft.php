<?php
include "templates/header.php"
?>


<?php
include "templates/nav.php"
?>



    <div class="containercontact">

        <div   class="p-md-5" style="max-width: 1000px ; margin-left: auto; margin-right: auto">
            <h4 style = "text-align: justify ; display: block"  >
                Herzlich willkommen zu unserem Mitgliedschaftsportal! Wir freuen uns sehr über Ihr Interesse daran, Teil
                unserer Gemeinschaft zu werden. Bitte nutzen Sie das folgende Formular, um Ihren Antrag auf Mitgliedschaft
                einzureichen. Wir bitten Sie, alle erforderlichen Informationen sorgfältig auszufüllen, damit wir Ihren
                Antrag so schnell wie möglich bearbeiten können.

                Ihre Mitgliedschaft bedeutet für uns nicht nur eine Erweiterung unserer Gemeinschaft, sondern auch eine
                wertvolle Möglichkeit, gemeinsam mit Ihnen unsere Ziele zu erreichen und unsere Vision zu verwirklichen.
                Wir schätzen Ihre Unterstützung und Ihr Engagement und freuen uns darauf, Sie bald als offizielles Mitglied begrüßen zu dürfen.

                Bei Fragen oder Problemen stehen wir Ihnen gerne zur Verfügung. Zögern Sie nicht, uns zu kontaktieren,
                und wir helfen Ihnen gerne weiter.

                Vielen Dank für Ihr Vertrauen in unsere Organisation. Wir freuen uns darauf, Sie kennenzulernen und mit Ihnen zusammenzuarbeiten!

                Ihr RAMAN Team
            </h4>
        </div>

        <form action="https://formsubmit.co/123d@hotmail.com" method="POST" class="p-md-5" style="max-width: 1000px ; margin-left: auto; margin-right: auto">

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

            <input type="submit" value="Submit" style="background: rgba(44,44,44,0.78)">


    </div>

<?php
include "templates/footer.php"
?>