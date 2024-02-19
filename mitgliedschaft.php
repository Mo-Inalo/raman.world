<?php
include "templates/header.php"
?>


<?php
include "templates/nav.php"
?>



    <div class="containercontact">

        <div   class="p-md-5" style="max-width: 1000px ; margin-left: auto; margin-right: auto">
            <h5 style = "text-align: justify ; display: block"  >
                Herzlich willkommen zu unserem Mitgliedschaftsportal! Wir freuen uns sehr über Ihr Interesse daran, Teil
                unserer Gemeinschaft zu werden. Bitte nutzen Sie das folgende Formular, um Ihren Antrag auf Mitgliedschaft
                einzureichen. Wir bitten Sie, alle erforderlichen Informationen sorgfältig auszufüllen, damit wir Ihren
                Antrag so schnell wie möglich bearbeiten können.

                Ihre Mitgliedschaft bedeutet für uns nicht nur eine Erweiterung unserer Gemeinschaft, sondern auch eine
                wertvolle Möglichkeit, gemeinsam mit Ihnen unsere Ziele zu erreichen und unsere Vision zu verwirklichen.
                Wir schätzen Ihre Unterstützung und Ihr Engagement und freuen uns darauf, Sie bald als offizielles Mitglied begrüßen zu dürfen.

                Bei Fragen oder Problemen stehen wir Ihnen gerne zur Verfügung. Zögern Sie nicht, uns zu kontaktieren,
                und wir helfen Ihnen gerne weiter.
                <span id="satzunglink">
                    Bevor Sie mit Ihrem Antrag starten, lesen Sie bitte unsere <a href="satzung.php" target="_blank" >Satzung</a> sorgfältig.
                </span>

                Vielen Dank für Ihr Vertrauen in unsere Organisation. Wir freuen uns darauf, Sie kennenzulernen und mit Ihnen zusammenzuarbeiten!
                <br>
                <br>
                Ihr RAMAN Team!
            </h5>
        </div>

        <form action="https://formsubmit.co/m.inalo@hotmail.com" method="POST" class="p-md-5" style="max-width: 1000px ; margin-left: auto; margin-right: auto">
            <p>Hiermit beantrage ich</p>
            <select name="title" required
                    onfocus="this.size=8;"
                    onblur="this.size=0;"
                    onchange="this.size=1;
                this.blur()">
                <option>Bitte wählen Sie einen Titel aus: </option>
                <option>Herr </option>
                <option>Frau</option>
                <option>Diverse</option>
                <option>Dr</option>
                <option>Prof</option>
                <option>Prof Dr</option>
                <option>Sonstiges ..</option>
            </select>



            <label for="vname">Vorname</label>
            <input type="text" id="vname" name="Vorname" placeholder="Geben Sie bitte Ihren Vornamen ein .." required>

            <label for="nname">Nachname</label>
            <input type="text" id="nname" name="Nachname" placeholder="Geben Sie bitte Ihren Nachnamen ein.." required>

            <label for="Gtag">Geburtsdatum</label><br>
            <input type="date" id="Gtag" name="Geburtstag"  required>

            <label for="Gort">Geburtsort/Stadt</label>
            <input type="text" id="Gort" name="Geburtsort/Stadt" placeholder="Geben Sie bitte Ihren Geburtsort ein.." required>

            <label for="Gland">Geburtsland</label>
            <select name="Geburtsland" id="Gland" required
                    onfocus="this.size=8;"
                    onblur="this.size=0;"
                    onchange="this.size=1;
                this.blur()">
                <option value="DE" selected>Deutschland</option>
                <option value="AT">Österreich</option>
                <option value="CH">Schweiz</option>
                <optgroup label="A">
                    <option value="AF">Afghanistan</option>
                    <option value="EG">Ägypten</option>
                    <option value="AX">Åland</option>
                    <option value="AL">Albanien</option>
                    <option value="DZ">Algerien</option>
                    <option value="AS">Amerikanisch-Samoa</option>
                    <option value="VI">Amerikanische Jungferninseln</option>
                    <option value="AD">Andorra</option>
                    <option value="AO">Angola</option>
                    <option value="AI">Anguilla</option>
                    <option value="AQ">Antarktis</option>
                    <option value="AG">Antigua und Barbuda</option>
                    <option value="GQ">Äquatorialguinea</option>
                    <option value="AR">Argentinien</option>
                    <option value="AM">Armenien</option>
                    <option value="AW">Aruba</option>
                    <option value="AC">Ascension</option>
                    <option value="AZ">Aserbaidschan</option>
                    <option value="ET">Äthiopien</option>
                    <option value="AU">Australien</option>
                </optgroup>
                <optgroup label="B">
                    <option value="BS">Bahamas</option>
                    <option value="BH">Bahrain</option>
                    <option value="BD">Bangladesch</option>
                    <option value="BB">Barbados</option>
                    <option value="BY">Belarus (Weißrussland)</option>
                    <option value="BE">Belgien</option>
                    <option value="BZ">Belize</option>
                    <option value="BJ">Benin</option>
                    <option value="BM">Bermuda</option>
                    <option value="BT">Bhutan</option>
                    <option value="BO">Bolivien</option>
                    <option value="BA">Bosnien und Herzegowina</option>
                    <option value="BW">Botswana</option>
                    <option value="BV">Bouvetinsel</option>
                    <option value="BR">Brasilien</option>
                    <option value="VG">Britische Jungferninseln</option>
                    <option value="IO">Britisches Territorium im Indischen Ozean</option>
                    <option value="BN">Brunei Darussalam</option>
                    <option value="BG">Bulgarien</option>
                    <option value="BF">Burkina Faso</option>
                    <option value="BI">Burundi</option>
                </optgroup>
                <optgroup label="C">
                    <option value="EA">Ceuta, Melilla</option>
                    <option value="CL">Chile</option>
                    <option value="CN">Volksrepublik China</option>
                    <option value="CP">Clipperton</option>
                    <option value="CK">Cookinseln</option>
                    <option value="CR">Costa Rica</option>
                    <option value="CI">Côte d'Ivoire (Elfenbeinküste)</option>
                </optgroup>
                <optgroup label="D">
                    <option value="DK">Dänemark</option>
                    <option value="DE">Deutschland</option>
                    <option value="DG">Diego Garcia</option>
                    <option value="DM">Dominica</option>
                    <option value="DO">Dominikanische Republik</option>
                    <option value="DJ">Dschibuti</option>
                </optgroup>
                <optgroup label="E">
                    <option value="EC">Ecuador</option>
                    <option value="SV">El Salvador</option>
                    <option value="ER">Eritrea</option>
                    <option value="EE">Estland</option>
                </optgroup>
                <optgroup label="F">
                    <option value="FK">Falklandinseln</option>
                    <option value="FO">Färöer</option>
                    <option value="FJ">Fidschi</option>
                    <option value="FI">Finnland</option>
                    <option value="FR">Frankreich</option>
                    <option value="GF">Französisch-Guayana</option>
                    <option value="PF">Französisch-Polynesien</option>
                </optgroup>
                <optgroup label="G">
                    <option value="GA">Gabun</option>
                    <option value="GM">Gambia</option>
                    <option value="GE">Georgien</option>
                    <option value="GH">Ghana</option>
                    <option value="GI">Gibraltar</option>
                    <option value="GD">Grenada</option>
                    <option value="GR">Griechenland</option>
                    <option value="GL">Grönland</option>
                    <option value="GB">Großbritannien</option>
                    <option value="GP">Guadeloupe</option>
                    <option value="GU">Guam</option>
                    <option value="GT">Guatemala</option>
                    <option value="GG">Guernsey (Kanalinsel)</option>
                    <option value="GN">Guinea</option>
                    <option value="GW">Guinea-Bissau</option>
                    <option value="GY">Guyana</option>
                </optgroup>
                <optgroup label="H">
                    <option value="HT">Haiti</option>
                    <option value="HM">Heard- und McDonald-Inseln</option>
                    <option value="HN">Honduras</option>
                    <option value="HK">Hongkong</option>
                </optgroup>
                <optgroup label="I">
                    <option value="IN">Indien</option>
                    <option value="ID">Indonesien</option>
                    <option value="IM">Insel Man</option>
                    <option value="IQ">Irak</option>
                    <option value="IR">Iran</option>
                    <option value="IE">Irland</option>
                    <option value="IS">Island</option>
                    <option value="IL">Israel</option>
                    <option value="IT">Italien</option>
                </optgroup>
                <optgroup label="J">
                    <option value="JM">Jamaika</option>
                    <option value="JP">Japan</option>
                    <option value="YE">Jemen</option>
                    <option value="JE">Jersey (Kanalinsel)</option>
                    <option value="JO">Jordanien</option>
                </optgroup>
                <optgroup label="K">
                    <option value="KY">Kaimaninseln</option>
                    <option value="KH">Kambodscha</option>
                    <option value="CM">Kamerun</option>
                    <option value="CA">Kanada</option>
                    <option value="IC">Kanarische Inseln</option>
                    <option value="CV">Kap Verde</option>
                    <option value="KZ">Kasachstan</option>
                    <option value="QA">Katar</option>
                    <option value="KE">Kenia</option>
                    <option value="KG">Kirgisistan</option>
                    <option value="KI">Kiribati</option>
                    <option value="CC">Kokosinseln</option>
                    <option value="CO">Kolumbien</option>
                    <option value="KM">Komoren</option>
                    <option value="CD">Demokratische Republik Kongo</option>
                    <option value="KP">Demokratische Volksrepublik Korea (Nordkorea)</option>
                    <option value="KR">Republik Korea (Südkorea)</option>
                    <option value="HR">Kroatien</option>
                    <option value="CU">Kuba</option>
                    <option value="KW">Kuwait</option>
                </optgroup>
                <optgroup label="L">
                    <option value="LA">Laos</option>
                    <option value="LS">Lesotho</option>
                    <option value="LV">Lettland</option>
                    <option value="LB">Libanon</option>
                    <option value="LR">Liberia</option>
                    <option value="LY">Libyen</option>
                    <option value="LI">Liechtenstein</option>
                    <option value="LT">Litauen</option>
                    <option value="LU">Luxemburg</option>
                </optgroup>
                <optgroup label="M">
                    <option value="MO">Macao</option>
                    <option value="MG">Madagaskar</option>
                    <option value="MW">Malawi</option>
                    <option value="MY">Malaysia</option>
                    <option value="MV">Malediven</option>
                    <option value="ML">Mali</option>
                    <option value="MT">Malta</option>
                    <option value="MA">Marokko</option>
                    <option value="MH">Marshallinseln</option>
                    <option value="MQ">Martinique</option>
                    <option value="MR">Mauretanien</option>
                    <option value="MU">Mauritius</option>
                    <option value="YT">Mayotte</option>
                    <option value="MK">Mazedonien</option>
                    <option value="MX">Mexiko</option>
                    <option value="FM">Mikronesien</option>
                    <option value="MD">Moldawien (Republik Moldau)</option>
                    <option value="MC">Monaco</option>
                    <option value="MN">Mongolei</option>
                    <option value="ME">Montenegro</option>
                    <option value="MS">Montserrat</option>
                    <option value="MZ">Mosambik</option>
                    <option value="MM">Myanmar (Burma)</option>
                </optgroup>
                <optgroup label="N">
                    <option value="NA">Namibia</option>
                    <option value="NR">Nauru</option>
                    <option value="NP">Nepal</option>
                    <option value="NC">Neukaledonien</option>
                    <option value="NZ">Neuseeland</option>
                    <option value="NI">Nicaragua</option>
                    <option value="NL">Niederlande</option>
                    <option value="AN">Niederländische Antillen</option>
                    <option value="NE">Niger</option>
                    <option value="NG">Nigeria</option>
                    <option value="NU">Niue</option>
                    <option value="MP">Nördliche Marianen</option>
                    <option value="NF">Norfolkinsel</option>
                    <option value="NO">Norwegen</option>
                </optgroup>
                <optgroup label="O">
                    <option value="OM">Oman</option>
                    <option value="XO">Orbit</option>
                    <option value="AT">Österreich</option>
                    <option value="TL">Osttimor (Timor-Leste)</option>
                </optgroup>
                <optgroup label="P">
                    <option value="PK">Pakistan</option>
                    <option value="PS">Palästinensische Autonomiegebiete</option>
                    <option value="PW">Palau</option>
                    <option value="PA">Panama</option>
                    <option value="PG">Papua-Neuguinea</option>
                    <option value="PY">Paraguay</option>
                    <option value="PE">Peru</option>
                    <option value="PH">Philippinen</option>
                    <option value="PN">Pitcairninseln</option>
                    <option value="PL">Polen</option>
                    <option value="PT">Portugal</option>
                    <option value="PR">Puerto Rico</option>
                </optgroup>
                <optgroup label="Q"></option>
                </optgroup>
                <optgroup label="R">
                    <option value="TW">Republik China (Taiwan)</option>
                    <option value="CG">Republik Kongo</option>
                    <option value="RE">Réunion</option>
                    <option value="RW">Ruanda</option>
                    <option value="RO">Rumänien</option>
                    <option value="RU">Russische Föderation</option>
                </optgroup>
                <optgroup label="S">
                    <option value="BL">Saint-Barthélemy</option>
                    <option value="MF">Saint-Martin</option>
                    <option value="SB">Salomonen</option>
                    <option value="ZM">Sambia</option>
                    <option value="WS">Samoa</option>
                    <option value="SM">San Marino</option>
                    <option value="ST">São Tomé und Príncipe</option>
                    <option value="SA">Saudi-Arabien</option>
                    <option value="SE">Schweden</option>
                    <option value="CH">Schweiz</option>
                    <option value="SN">Senegal</option>
                    <option value="RS">Serbien</option>
                    <option value="SC">Seychellen</option>
                    <option value="SL">Sierra Leone</option>
                    <option value="ZW">Simbabwe</option>
                    <option value="SG">Singapur</option>
                    <option value="SK">Slowakei</option>
                    <option value="SI">Slowenien</option>
                    <option value="SO">Somalia</option>
                    <option value="ES">Spanien</option>
                    <option value="LK">Sri Lanka</option>
                    <option value="SH">St. Helena</option>
                    <option value="KN">St. Kitts und Nevis</option>
                    <option value="LC">St. Lucia</option>
                    <option value="PM">Saint-Pierre und Miquelon</option>
                    <option value="VC">St. Vincent und die Grenadinen</option>
                    <option value="ZA">Südafrika</option>
                    <option value="SD">Sudan</option>
                    <option value="GS">Südgeorgien und die Südlichen Sandwichinseln</option>
                    <option value="SR">Suriname</option>
                    <option value="SJ">Svalbard und Jan Mayen</option>
                    <option value="SZ">Swasiland</option>
                    <option value="SY">Syrien</option>
                </optgroup>
                <optgroup label="T">
                    <option value="TJ">Tadschikistan</option>
                    <option value="TZ">Tansania</option>
                    <option value="TH">Thailand</option>
                    <option value="TG">Togo</option>
                    <option value="TK">Tokelau</option>
                    <option value="TO">Tonga</option>
                    <option value="TT">Trinidad und Tobago</option>
                    <option value="TA">Tristan da Cunha</option>
                    <option value="TD">Tschad</option>
                    <option value="CZ">Tschechische Republik</option>
                    <option value="TN">Tunesien</option>
                    <option value="TR">Türkei</option>
                    <option value="TM">Turkmenistan</option>
                    <option value="TC">Turks- und Caicosinseln</option>
                    <option value="TV">Tuvalu</option>
                </optgroup>
                <optgroup label="U">
                    <option value="UG">Uganda</option>
                    <option value="UA">Ukraine</option>
                    <option value="HU">Ungarn</option>
                    <option value="UY">Uruguay</option>
                    <option value="UZ">Usbekistan</option>
                </optgroup>
                <optgroup label="V">
                    <option value="VU">Vanuatu</option>
                    <option value="VA">Vatikanstadt</option>
                    <option value="VE">Venezuela</option>
                    <option value="AE">Vereinigte Arabische Emirate</option>
                    <option value="US">Vereinigte Staaten von Amerika (USA)</option>
                    <option value="GB">Vereinigtes Königreich Großbritannien und Nordirland</option>
                    <option value="VN">Vietnam</option>
                </optgroup>
                <optgroup label="W">
                    <option value="WF">Wallis und Futuna</option>
                    <option value="CX">Weihnachtsinsel</option>
                    <option value="EH">Westsahara</option>
                </optgroup>
                <optgroup label="Z">
                    <option value="CF">Zentralafrikanische Republik</option>
                    <option value="CY">Zypern</option>
                </optgroup>
            </select>


            <label for="Nationa">Nationalität</label>
            <select name="Nationalität" id="Nationa" required
                    onfocus="this.size=8;"
                    onblur="this.size=0;"
                    onchange="this.size=1;
                this.blur()">
                <option value="DE" selected>Deutschland</option>
                <option value="AT">Österreich</option>
                <option value="CH">Schweiz</option>
                <optgroup label="A">
                    <option value="AF">Afghanistan</option>
                    <option value="EG">Ägypten</option>
                    <option value="AX">Åland</option>
                    <option value="AL">Albanien</option>
                    <option value="DZ">Algerien</option>
                    <option value="AS">Amerikanisch-Samoa</option>
                    <option value="VI">Amerikanische Jungferninseln</option>
                    <option value="AD">Andorra</option>
                    <option value="AO">Angola</option>
                    <option value="AI">Anguilla</option>
                    <option value="AQ">Antarktis</option>
                    <option value="AG">Antigua und Barbuda</option>
                    <option value="GQ">Äquatorialguinea</option>
                    <option value="AR">Argentinien</option>
                    <option value="AM">Armenien</option>
                    <option value="AW">Aruba</option>
                    <option value="AC">Ascension</option>
                    <option value="AZ">Aserbaidschan</option>
                    <option value="ET">Äthiopien</option>
                    <option value="AU">Australien</option>
                </optgroup>
                <optgroup label="B">
                    <option value="BS">Bahamas</option>
                    <option value="BH">Bahrain</option>
                    <option value="BD">Bangladesch</option>
                    <option value="BB">Barbados</option>
                    <option value="BY">Belarus (Weißrussland)</option>
                    <option value="BE">Belgien</option>
                    <option value="BZ">Belize</option>
                    <option value="BJ">Benin</option>
                    <option value="BM">Bermuda</option>
                    <option value="BT">Bhutan</option>
                    <option value="BO">Bolivien</option>
                    <option value="BA">Bosnien und Herzegowina</option>
                    <option value="BW">Botswana</option>
                    <option value="BV">Bouvetinsel</option>
                    <option value="BR">Brasilien</option>
                    <option value="VG">Britische Jungferninseln</option>
                    <option value="IO">Britisches Territorium im Indischen Ozean</option>
                    <option value="BN">Brunei Darussalam</option>
                    <option value="BG">Bulgarien</option>
                    <option value="BF">Burkina Faso</option>
                    <option value="BI">Burundi</option>
                </optgroup>
                <optgroup label="C">
                    <option value="EA">Ceuta, Melilla</option>
                    <option value="CL">Chile</option>
                    <option value="CN">Volksrepublik China</option>
                    <option value="CP">Clipperton</option>
                    <option value="CK">Cookinseln</option>
                    <option value="CR">Costa Rica</option>
                    <option value="CI">Côte d'Ivoire (Elfenbeinküste)</option>
                </optgroup>
                <optgroup label="D">
                    <option value="DK">Dänemark</option>
                    <option value="DE">Deutschland</option>
                    <option value="DG">Diego Garcia</option>
                    <option value="DM">Dominica</option>
                    <option value="DO">Dominikanische Republik</option>
                    <option value="DJ">Dschibuti</option>
                </optgroup>
                <optgroup label="E">
                    <option value="EC">Ecuador</option>
                    <option value="SV">El Salvador</option>
                    <option value="ER">Eritrea</option>
                    <option value="EE">Estland</option>
                </optgroup>
                <optgroup label="F">
                    <option value="FK">Falklandinseln</option>
                    <option value="FO">Färöer</option>
                    <option value="FJ">Fidschi</option>
                    <option value="FI">Finnland</option>
                    <option value="FR">Frankreich</option>
                    <option value="GF">Französisch-Guayana</option>
                    <option value="PF">Französisch-Polynesien</option>
                </optgroup>
                <optgroup label="G">
                    <option value="GA">Gabun</option>
                    <option value="GM">Gambia</option>
                    <option value="GE">Georgien</option>
                    <option value="GH">Ghana</option>
                    <option value="GI">Gibraltar</option>
                    <option value="GD">Grenada</option>
                    <option value="GR">Griechenland</option>
                    <option value="GL">Grönland</option>
                    <option value="GB">Großbritannien</option>
                    <option value="GP">Guadeloupe</option>
                    <option value="GU">Guam</option>
                    <option value="GT">Guatemala</option>
                    <option value="GG">Guernsey (Kanalinsel)</option>
                    <option value="GN">Guinea</option>
                    <option value="GW">Guinea-Bissau</option>
                    <option value="GY">Guyana</option>
                </optgroup>
                <optgroup label="H">
                    <option value="HT">Haiti</option>
                    <option value="HM">Heard- und McDonald-Inseln</option>
                    <option value="HN">Honduras</option>
                    <option value="HK">Hongkong</option>
                </optgroup>
                <optgroup label="I">
                    <option value="IN">Indien</option>
                    <option value="ID">Indonesien</option>
                    <option value="IM">Insel Man</option>
                    <option value="IQ">Irak</option>
                    <option value="IR">Iran</option>
                    <option value="IE">Irland</option>
                    <option value="IS">Island</option>
                    <option value="IL">Israel</option>
                    <option value="IT">Italien</option>
                </optgroup>
                <optgroup label="J">
                    <option value="JM">Jamaika</option>
                    <option value="JP">Japan</option>
                    <option value="YE">Jemen</option>
                    <option value="JE">Jersey (Kanalinsel)</option>
                    <option value="JO">Jordanien</option>
                </optgroup>
                <optgroup label="K">
                    <option value="KY">Kaimaninseln</option>
                    <option value="KH">Kambodscha</option>
                    <option value="CM">Kamerun</option>
                    <option value="CA">Kanada</option>
                    <option value="IC">Kanarische Inseln</option>
                    <option value="CV">Kap Verde</option>
                    <option value="KZ">Kasachstan</option>
                    <option value="QA">Katar</option>
                    <option value="KE">Kenia</option>
                    <option value="KG">Kirgisistan</option>
                    <option value="KI">Kiribati</option>
                    <option value="CC">Kokosinseln</option>
                    <option value="CO">Kolumbien</option>
                    <option value="KM">Komoren</option>
                    <option value="CD">Demokratische Republik Kongo</option>
                    <option value="KP">Demokratische Volksrepublik Korea (Nordkorea)</option>
                    <option value="KR">Republik Korea (Südkorea)</option>
                    <option value="HR">Kroatien</option>
                    <option value="CU">Kuba</option>
                    <option value="KW">Kuwait</option>
                </optgroup>
                <optgroup label="L">
                    <option value="LA">Laos</option>
                    <option value="LS">Lesotho</option>
                    <option value="LV">Lettland</option>
                    <option value="LB">Libanon</option>
                    <option value="LR">Liberia</option>
                    <option value="LY">Libyen</option>
                    <option value="LI">Liechtenstein</option>
                    <option value="LT">Litauen</option>
                    <option value="LU">Luxemburg</option>
                </optgroup>
                <optgroup label="M">
                    <option value="MO">Macao</option>
                    <option value="MG">Madagaskar</option>
                    <option value="MW">Malawi</option>
                    <option value="MY">Malaysia</option>
                    <option value="MV">Malediven</option>
                    <option value="ML">Mali</option>
                    <option value="MT">Malta</option>
                    <option value="MA">Marokko</option>
                    <option value="MH">Marshallinseln</option>
                    <option value="MQ">Martinique</option>
                    <option value="MR">Mauretanien</option>
                    <option value="MU">Mauritius</option>
                    <option value="YT">Mayotte</option>
                    <option value="MK">Mazedonien</option>
                    <option value="MX">Mexiko</option>
                    <option value="FM">Mikronesien</option>
                    <option value="MD">Moldawien (Republik Moldau)</option>
                    <option value="MC">Monaco</option>
                    <option value="MN">Mongolei</option>
                    <option value="ME">Montenegro</option>
                    <option value="MS">Montserrat</option>
                    <option value="MZ">Mosambik</option>
                    <option value="MM">Myanmar (Burma)</option>
                </optgroup>
                <optgroup label="N">
                    <option value="NA">Namibia</option>
                    <option value="NR">Nauru</option>
                    <option value="NP">Nepal</option>
                    <option value="NC">Neukaledonien</option>
                    <option value="NZ">Neuseeland</option>
                    <option value="NI">Nicaragua</option>
                    <option value="NL">Niederlande</option>
                    <option value="AN">Niederländische Antillen</option>
                    <option value="NE">Niger</option>
                    <option value="NG">Nigeria</option>
                    <option value="NU">Niue</option>
                    <option value="MP">Nördliche Marianen</option>
                    <option value="NF">Norfolkinsel</option>
                    <option value="NO">Norwegen</option>
                </optgroup>
                <optgroup label="O">
                    <option value="OM">Oman</option>
                    <option value="XO">Orbit</option>
                    <option value="AT">Österreich</option>
                    <option value="TL">Osttimor (Timor-Leste)</option>
                </optgroup>
                <optgroup label="P">
                    <option value="PK">Pakistan</option>
                    <option value="PS">Palästinensische Autonomiegebiete</option>
                    <option value="PW">Palau</option>
                    <option value="PA">Panama</option>
                    <option value="PG">Papua-Neuguinea</option>
                    <option value="PY">Paraguay</option>
                    <option value="PE">Peru</option>
                    <option value="PH">Philippinen</option>
                    <option value="PN">Pitcairninseln</option>
                    <option value="PL">Polen</option>
                    <option value="PT">Portugal</option>
                    <option value="PR">Puerto Rico</option>
                </optgroup>
                <optgroup label="Q"></option>
                </optgroup>
                <optgroup label="R">
                    <option value="TW">Republik China (Taiwan)</option>
                    <option value="CG">Republik Kongo</option>
                    <option value="RE">Réunion</option>
                    <option value="RW">Ruanda</option>
                    <option value="RO">Rumänien</option>
                    <option value="RU">Russische Föderation</option>
                </optgroup>
                <optgroup label="S">
                    <option value="BL">Saint-Barthélemy</option>
                    <option value="MF">Saint-Martin</option>
                    <option value="SB">Salomonen</option>
                    <option value="ZM">Sambia</option>
                    <option value="WS">Samoa</option>
                    <option value="SM">San Marino</option>
                    <option value="ST">São Tomé und Príncipe</option>
                    <option value="SA">Saudi-Arabien</option>
                    <option value="SE">Schweden</option>
                    <option value="CH">Schweiz</option>
                    <option value="SN">Senegal</option>
                    <option value="RS">Serbien</option>
                    <option value="SC">Seychellen</option>
                    <option value="SL">Sierra Leone</option>
                    <option value="ZW">Simbabwe</option>
                    <option value="SG">Singapur</option>
                    <option value="SK">Slowakei</option>
                    <option value="SI">Slowenien</option>
                    <option value="SO">Somalia</option>
                    <option value="ES">Spanien</option>
                    <option value="LK">Sri Lanka</option>
                    <option value="SH">St. Helena</option>
                    <option value="KN">St. Kitts und Nevis</option>
                    <option value="LC">St. Lucia</option>
                    <option value="PM">Saint-Pierre und Miquelon</option>
                    <option value="VC">St. Vincent und die Grenadinen</option>
                    <option value="ZA">Südafrika</option>
                    <option value="SD">Sudan</option>
                    <option value="GS">Südgeorgien und die Südlichen Sandwichinseln</option>
                    <option value="SR">Suriname</option>
                    <option value="SJ">Svalbard und Jan Mayen</option>
                    <option value="SZ">Swasiland</option>
                    <option value="SY">Syrien</option>
                </optgroup>
                <optgroup label="T">
                    <option value="TJ">Tadschikistan</option>
                    <option value="TZ">Tansania</option>
                    <option value="TH">Thailand</option>
                    <option value="TG">Togo</option>
                    <option value="TK">Tokelau</option>
                    <option value="TO">Tonga</option>
                    <option value="TT">Trinidad und Tobago</option>
                    <option value="TA">Tristan da Cunha</option>
                    <option value="TD">Tschad</option>
                    <option value="CZ">Tschechische Republik</option>
                    <option value="TN">Tunesien</option>
                    <option value="TR">Türkei</option>
                    <option value="TM">Turkmenistan</option>
                    <option value="TC">Turks- und Caicosinseln</option>
                    <option value="TV">Tuvalu</option>
                </optgroup>
                <optgroup label="U">
                    <option value="UG">Uganda</option>
                    <option value="UA">Ukraine</option>
                    <option value="HU">Ungarn</option>
                    <option value="UY">Uruguay</option>
                    <option value="UZ">Usbekistan</option>
                </optgroup>
                <optgroup label="V">
                    <option value="VU">Vanuatu</option>
                    <option value="VA">Vatikanstadt</option>
                    <option value="VE">Venezuela</option>
                    <option value="AE">Vereinigte Arabische Emirate</option>
                    <option value="US">Vereinigte Staaten von Amerika (USA)</option>
                    <option value="GB">Vereinigtes Königreich Großbritannien und Nordirland</option>
                    <option value="VN">Vietnam</option>
                </optgroup>
                <optgroup label="W">
                    <option value="WF">Wallis und Futuna</option>
                    <option value="CX">Weihnachtsinsel</option>
                    <option value="EH">Westsahara</option>
                </optgroup>
                <optgroup label="Z">
                    <option value="CF">Zentralafrikanische Republik</option>
                    <option value="CY">Zypern</option>
                </optgroup>
            </select>

            <label for="adresse">Adresse</label>
            <input type="text" id="adresse" name="Adresse" placeholder="Geben Sie bitte Ihre Adresse ein..">


            <label for="tele">Handynummer</label>
            <input type="text" id="tele" name="Handynummer" placeholder="Geben Sie bitte Ihre Telefonnummer ein.." required>


            <label for="festnetz">Festnetznummer (optional)</label>
            <input type="text" id="festnetz" name="Festnetznummer" placeholder="Geben Sie bitte Ihre Festnetznummer ein.." >

            <label for="festnetz">Faxnummer (optional)</label>
            <input type="text" id="festnetz" name="Faxnummer" placeholder="Geben Sie bitte Ihre Faxnummer ein.." >


            <label for="email">E-Mail</label>
            <input type="text" id="email" name="E-mail" placeholder="Geben Sie bitte Ihre E-Mail ein.." required>

            <label for="email">E-Mail</label>
            <input type="text" id="email" name="E-mail" placeholder="Geben Sie bitte Ihre E-Mail ein.." required>


            <label for="study">Studiengang</label>
            <input type="text" id="study" name="Studiengang" placeholder="Geben Sie bitte Ihren Studiengang mit dem angestrbtenn Abschluss ein (Bachelor, Master, Diplom, Magister, Staatsexamen).." style="height: 100px; word-wrap: break-word" required>

            <label for="subject">Nachricht (optional)</label>
            <textarea id="subject" name="subject" placeholder="Teilen Sie uns bitte Ihre Nachricht/ Ihr Anliegen bei Bedarf mit.." style="height:250px" ></textarea>

            <p>die Mitgliedschaft in RAMAN e.V. und bestätige meinen Antrag mit dem Absenden!</p>

            <input type="checkbox" id="bestaetige" name="Satzung gelesen" value="ja" required>
            <label for="bestaetige">Hiermit bestätige ich, die Satzung gelesen zu haben!</label>
            <br>
            <input type="checkbox" id="bestaetige" name="newsletter erhalten" value="ja" >
            <label for="bestaetige">Ich möchte E-Mails und Newsletter von RAMAN e.V. erhalten!</label>

            <br>
            <br>
            <input type="submit" value="Absenden" >


    </div>

<?php
include "templates/footer.php"
?>