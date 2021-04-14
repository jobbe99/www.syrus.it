<!DOCTYPE HTML>
<html lang="it">
<head>
   <title>Syrus</title>
   <meta charset="utf-8"/>
   <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no"/>
   <meta name="description" content=""/>
   <meta name="keywords" content=""/>
   <link rel="stylesheet" href="assets/css/main.css"/>
</head>
<body class="is-preload">
<div id="wrapper">
   <section class="intro">
      <header>
         <div>
            <img src="images/logo.png" class="" style="width:
							250px; margin-bottom: 30px"
               alt=""/></div>
         <h1>Syrus Industry</h1>
         <p style="margin-bottom:0">I nostri prodotti</p>
         <p><a href="#first">VPN</a> /
            <a href="#second">Click Fraud</a> /
            <a href="#third">Corso Seo</a></p>
         <ul class="actions">
            <li><a href="#first" class="arrow scrolly"><span class="label">Next</span></a></li>
         </ul>
      </header>
      <div class="content">
         <span class="image fill" data-position="center"><img src="images/server.png" alt=""/></span>
      </div>
   </section>
   <section id="first">
      <header>
         <h2>VPN <br>Virtual Private Network</h2>
         <ul class="actions">
            <li><a href="#second" class="arrow scrolly"><span class="label">Next</span></a></li>
         </ul>
      </header>
      <div class="content">
		  <p><strong>Con una <a href="https://www.syrusindustry.com/vpn/home">VPN</a></strong> puoi navigare in sicurezza ed in anonimato proteggendo le tue
            connessioni da hacker e da enti che si appropriano dei tuoi dati, sia in entrata che in uscita .
            Utilizzando
			  la <a href="https://www.syrusindustry.com/vpn/home">VPN</a> i tuoi dati in rete vengono completamente crittografati in modo tale da non permettere a nessuno di
            vedere cosa stai facendo e dove stai navigando!</p>
         <span class="image main"><img src="images/07.png" style="width: 310px; margin: 0 auto;" alt=""/></span>
      </div>
   </section>
   <section id="second">
      <header>
         <h2 class="uppercase">Click Fraud</h2>
         <p><a href="https://www.syrusindustry.com/click-fraud-su-google-ads-come-difendersi">Clickfraud</a> è il programma di tracciamento, blocco e monitoraggio degli indirizzi IP.</p>
         <ul class="actions">
            <li><a href="#third" class="arrow scrolly"><span class="label">Next</span></a></li>
         </ul>
      </header>
      <div class="content">
         <p><strong>Clickfraud</strong> è il programma di tracciamento, blocco e monitoraggio degli
            indirizzi IP che cliccano disonestamente sugli annunci pubblicati dalle tue campagne pubblicitarie su
            Google
            Ads. <a href="https://www.syrusindustry.com/click-fraud-su-google-ads-come-difendersi">Clickfraud</a> accede all’archivio condiviso degli indirizzi IP già riconosciuti come fraudolenti e
            protegge le tue campagne pubblicitarie dalle aggressioni da parte di questi indirizzi IP.</p>
         <span class="image main"><img src="images/click.jpeg" alt=""/></span>
      </div>
   </section>
   <section id="third">
      <header>
         <h2 class="uppercase">Corso SEO</h2>
         <p>Il corso offre una panoramica a 360° sul mondo della SEO.</p>
         <ul class="actions">
            <li><a href="#contatti" class="arrow scrolly"><span class="label">Next</span></a></li>
         </ul>
      </header>
      <div class="content">
		  <p><strong>Il <a href="https://www.syrusindustry.com/corso-seo">corso SEO</a></strong> offre una panoramica a 360° sul mondo della SEO, acronimo che sta
            per Search Engine Optimization, quel settore cioè che studia e mette in pratica le regole di
            ottimizzazione
            dei siti web per il posizionamento sul motore di ricerca. ¬</p>
         <span class="image main"><img src="images/seo.png" alt=""/></span>
      </div>
   </section>
   <section id="contatti">
      <header>
         <h2 class="uppercase">Contatti</h2>
      </header>
      <div class="content">
         <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d47590.77588773758!2d12.607205299222942!3d41.79763662050847!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xd7210f95e333953f!2sSyrus%20Industry%20-%20Web%20Agency%20Roma!5e0!3m2!1sit!2sit!4v1571736059801!5m2!1sit!2sit"
            width="100%"
            height="600"
            frameborder="0"
            style="border:0;"
            allowfullscreen=""></iframe>
      </div>
      <footer>
         <ul class="items">
            <li>
               <h3>Email</h3>
               <a href="mailto:info@syrusindustry.com">info@syrusindustry.com</a>
            </li>
            <li>
               <h3>Telefono</h3>
               <a href="tel:06452214565">06 4522 14565</a>
            </li>
            <li>
               <h3>Indirizzo</h3>
               <span>Via del Fontanile Anagnino 173<br>00118,<br> Roma (RM)</span>
            </li>
         </ul>
      </footer>
   </section>
   <div class="copyright">&copy;<a href="https://www.syrusindustry.com"> Syrus</a>. All rights reserved. <a href="https://syrus.blog">Syrus.blog</a></div>
</div>
<a onclick="topFunction()" id="myBtn" title="Go to top">Top</a>
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/jquery.scrolly.min.js"></script>
<script src="assets/js/browser.min.js"></script>
<script src="assets/js/breakpoints.min.js"></script>
<script src="assets/js/util.js"></script>
<script src="assets/js/main.js"></script>
<script>
    $(document).ready(function () {
        // Add smooth scrolling to all links
        $("a").on('click', function (event) {

            // Make sure this.hash has a value before overriding default behavior
            if (this.hash !== "") {
                // Prevent default anchor click behavior
                event.preventDefault();

                // Store hash
                var hash = this.hash;

                // Using jQuery's animate() method to add smooth page scroll
                // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
                $('html, body').animate({
                    scrollTop: $(hash).offset().top
                }, 800, function () {

                    // Add hash (#) to URL when done scrolling (default click behavior)
                    window.location.hash = hash;
                });
            } // End if
        });
    });
</script>
<script>
    //Get the button
    var mybutton = document.getElementById("myBtn");

    // When the user scrolls down 20px from the top of the document, show the button
    window.onscroll = function () {
        scrollFunction()
    };

    function scrollFunction() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            mybutton.style.display = "block";
        } else {
            mybutton.style.display = "none";
        }
    }

    // When the user clicks on the button, scroll to the top of the document
    function topFunction() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
    }
</script>
</body>
</html>