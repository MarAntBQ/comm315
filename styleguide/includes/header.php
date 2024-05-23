<nav>
    <a href="#" class="logo"><span class="fresh-eaters">MARBUST</span><span class="nexa-light">&reg;</span></a>
    <ul id="ul">
        <li><a href="#voice" class="OPLINK"><i class="fas fa-file-invoice"></i> Voice Statement</a></li>
        <li><a href="#audiences" class="OPLINK"><i class="fas fa-users"></i> Audiences</a></li>
        <li><a href="#logo" class="OPLINK"><i class="fas fa-portrait"></i> Logo</a></li>
        <li><a href="#" class="OPLINK"><i class="fas fa-palette"></i> Colors</a></li>
        <li><a href="#" class="OPLINK"><i class="fas fa-font"></i> Typography</a></li>
        <li><a href="#" class="OPLINK"><i class="fas fa-camera-retro"></i> Photography</a></li>
        <li><a href="#" class="OPLINK"><i class="fas fa-eye"></i> Design Elements</a></li>
    </ul>
    <i class="fas menu-btn fa-bars" onclick="menudisplayer()"></i>
</nav>
<script>
    $('.OPLINK').click(function() {
            menudisplayer();
    })
    $(document).ready(function() {
        $('ul li').click(function() {
            $(this).siblings().removeClass('sub-menu-active');
            $(this).toggleClass('sub-menu-active');
        })
    })
    $(window).on("scroll", function() {
        if ($(window).scrollTop() > 10) {
            $("header").addClass("header-down");
        } else {
            //remove the background property so it comes transparent again (defined in your css)
            $("header").removeClass("header-down");
        }
    });
    var urlString, urlArray, pageHREF, menu, i, currentURL;
    urlString = document.location.href;
    urlArray = urlString.split('/');
    pageHREF = urlArray[urlArray.length - 1];

    if (pageHREF !== "") {
        menu = document.querySelectorAll('#ul li a');
        for (i = 0; i < menu.length; i++) {
            currentURL = (menu[i].getAttribute('href'));
            menu[i].className = '';
            if (currentURL === pageHREF) {
                menu[i].className = 'link-active';
            }
        }
    }

</script>
