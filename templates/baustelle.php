<style>
    /* Default height for small devices */
    #intro {
        height: 600px;
        /* Margin to fix overlapping fixed navbar */
        margin-top: 58px;
    }
    @media (max-width: 991px) {
        #intro {
            /* Margin to fix overlapping fixed navbar */
            margin-top: 45px;
        }
    }
</style>

<!-- Navbar -->
<div id="intro" class="p-5 text-center bg-image shadow-1-strong"
     style="background-image: url('https://mdbootstrap.com/img/new/slides/205.jpg');">
    <div class="mask" style="background-color: rgba(0, 0, 0, 0.7);">
        <div class="d-flex justify-content-center align-items-center h-100">
            <div class="text-white px-4" data-mdb-theme="dark">
                <h1 class="mb-3">Coming Soon!</h1>

                <!-- Time Counter -->
                <h3 id="time-counter" class="border border-light my-4 p-4"></h3>

                <p>We're working hard to finish the development of this site.</p>

                <p>Until then have a look at our Free Bootstrap 5 tutorials</p>

                <a class="btn btn-outline-light btn-lg m-2" href="https://www.youtube.com/watch?v=c9B4TPnak1A" role="button" data-mdb-ripple-init
                   rel="nofollow" target="_blank">Start tutorial</a>
                <a class="btn btn-outline-light btn-lg m-2" href="https://mdbootstrap.com/docs/standard/" target="_blank" data-mdb-ripple-init
                   role="button">Download MDB UI KIT</a>
            </div>
        </div>
    </div>
</div>