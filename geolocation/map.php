
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Title</title>
        <link rel="stylesheet" href="../gemeenteStyle.css">
        <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
              integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY="
              crossorigin=""/>
        <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
                integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo="
                crossorigin=""></script>
    </head>
    <body>
        <div class="navigatie">

            <nav>
                <ul>
                    <img src="../image/logo_rotterdam.svg" id=logo alt="logo van Gemeente Rotterdam" />
                    <a href="../login/login.php">Login</a>
                    <a href="../index.php">Home</a>
                </ul>
            </nav>
        </div>
    <!--shows the map-->
    <div id="map">
        <script src="map.js"></script>
    </div>
    <!----------------------------------------------->

    </body>
    <footer>
        <div class="footer_rotterdam">
            Gemeente <br> Rotterdam
        </div>
        <div class="contact">
            <a href="../files_andere/contact.html">Contact</a>
        </div>
    </footer>
    </html>