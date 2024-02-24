

<?php
$page = basename($_SERVER['PHP_SELF'],'.php');
?>
<nav class=" navbar navbar-expand-md mynavcolor">
    <div class="container">

        <a href="/index.php"
           class="navbar-brand">
            <img
                class="d-block align-top"
                src ="/images/ramanlogo.png "
                width="100px" height="100px"
                alt=""
            />

        </a>

        <button
            type="button  "
            class="navbar-toggler  "
            data-bs-toggle ="collapse"
            data-bs-target="#navbarNav"
            aria-controls="navbarNav"
            aria-expanded="true"
            aria-label="Toggle navigation"
        >

       <span class="navbar-toggler-icon" style="display: contents">
           <i class="fas fa-bars navbar-toggler-iconstyle" ></i>
        </span>



        </button>

        <div class="collapse navbar-collapse justify-content-center text-light "
             id="navbarNav">
            <ul class="navbar-nav text-light ">
                <li class="navbar-item " >
                    <a href="/index.php" class="nav-link text-light
                    <?php echo ($page == 'index') ? 'active' :''?> ">
                        Home
                    </a>
                </li>
                <li class="navbar-item  ">
                    <a href="/Mitgliedschaft.php" class="nav-link text-light
                    <?php echo ($page == 'Mitgliedschaft') ? 'active' :''?>">
                        Mitgliedschaft
                    </a>
                </li>

                <li class="navbar-item  ">
                    <a href="/Aktivitäten.php" class="nav-link text-light
                    <?php echo ($page == 'Aktivitäten') ? 'active' :''?>">
                        Aktivitäten
                    </a>
                </li>

                <li class="navbar-item   ">
                    <a href="/Galerie.php" class="nav-link text-light
                    <?php echo ($page == 'Galerie') ? 'active' :''?>">
                        Galerie
                    </a>
                </li>

                <li class="navbar-item dropdown
                <?php echo ($page == 'Satzung' || $page =='Archive') ? 'active' :''?>">
                    <a href="#"
                       class="nav-link dropdown-toggle text-light"
                       id="navbarDropdown"
                       role="button"
                       data-bs-toggle="dropdown"
                       aria-expanded="false"
                    >
                        Über RAMAN
                    </a>
                    <ul class="dropdown-menu dropdowncolor" aria-labelledby="navbarDropdown "  >
                        <li><a class="dropdown-item text-light
                        <?php echo ($page == 'Satzung') ? 'active' :''?>" href="/Satzung.php">Satzung</a></li>
                        <li><a class="dropdown-item text-light
                        <?php echo ($page == 'Archive') ? 'active' :''?>" href="/Archive.php">Archive</a></li>
                        <li><a class="dropdown-item text-light
                        <?php echo ($page == 'Impressum') ? 'active' :''?>" href="/Impressum.php">Impressum</a></li>

                    </ul>
                </li>

                <li class="navbar-item ">
                    <a href="/Kontakt.php" class="nav-link text-light
                    <?php echo ($page == 'Kontakt') ? 'active' :''?>">
                        Kontakt
                    </a>
                </li>
            </ul>

        </div>

    </div>
</nav>