<?php
$page = basename($_SERVER['PHP_SELF'],'.php');
?>

<nav class=" navbar navbar-expand-md mynavcolor">
    <div class="container">

        <a href="/index.php"
           class="navbar-brand  ">
            <img
                class="d-block align-top"
                src ="/images/logo2.png "
                width="200px" height="100px"
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
                <li class="navbar-item   ">
                    <a href="/index.php" class="nav-link text-light
                    <?php echo ($page == 'index') ? 'active' :''?> ">
                        Home
                    </a>
                </li>
                <li class="navbar-item   ">
                    <a href="/studio.php" class="nav-link text-light
                    <?php echo ($page == 'studio') ? 'active' :''?>">
                        Studio
                    </a>
                </li>
                <li class="navbar-item dropdown
                <?php echo ($page == 'biography' || $page =='motivation' || $page =='study') ? 'active' :''?>">
                    <a href="#"
                       class="nav-link dropdown-toggle text-light"
                       id="navbarDropdown"
                       role="button"
                       data-bs-toggle="dropdown"
                       aria-expanded="false"
                    >
                        About Me
                    </a>
                    <ul class="dropdown-menu dropdowncolor" aria-labelledby="navbarDropdown "  >
                        <li><a class="dropdown-item text-light
                        <?php echo ($page == 'biography') ? 'active' :''?>" href="/biography.php">Biography</a></li>
                        <li><a class="dropdown-item text-light
                        <?php echo ($page == 'motivation') ? 'active' :''?>" href="/motivation.php">Motivation</a></li>
                        <li><a class="dropdown-item text-light
                        <?php echo ($page == 'study') ? 'active' :''?>" href="/study.php">Study</a></li>
                    </ul>
                </li>
                <li class="navbar-item  ">
                    <a href="/projects.php" class="nav-link text-light
                    <?php echo ($page == 'projects') ? 'active' :''?>">
                        Projects
                    </a>
                </li>
                <li class="navbar-item ">
                    <a href="/contact.php" class="nav-link text-light
                    <?php echo ($page == 'contact') ? 'active' :''?>">
                        Contact
                    </a>
                </li>
            </ul>

        </div>

    </div>
</nav>
