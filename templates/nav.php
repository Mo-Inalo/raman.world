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

       <span class="navbar-toggler-icon">
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
                    <?php echo ($page == 'mitgliedschaft') ? 'active' :''?>">
                        Mitgliedschaft
                    </a>
                </li>
                <!--
                <li class="navbar-item  ">
                    <a href="/.php" class="nav-link text-light
                    <?php echo ($page == 'aktivitaeten') ? 'active' :''?>">
                        Aktivitäten
                    </a>
                </li>

                <li class="navbar-item   ">
                    <a href="/.php" class="nav-link text-light
                    <?php echo ($page == 'gallerie') ? 'active' :''?>">
                        Gallerie
                    </a>
                </li>
                -->
                <li class="navbar-item dropdown
                <?php echo ($page == 'biography' || $page =='projects') ? 'active' :''?>">
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
                        <?php echo ($page == 'satzung') ? 'active' :''?>" href="/Satzung.php">Satzung</a></li>
                        <li><a class="dropdown-item text-light
                        <?php echo ($page == 'archive') ? 'active' :''?>" href="/Archive.php">Archive</a></li>

                    </ul>
                </li>

                <li class="navbar-item ">
                    <a href="/Kontakt.php" class="nav-link text-light
                    <?php echo ($page == 'contact') ? 'active' :''?>">
                        Kontakt
                    </a>
                </li>
            </ul>

        </div>

    </div>
</nav>