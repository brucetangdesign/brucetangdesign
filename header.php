<?php 
$root = "";
if($page != "home"){
    $root = "/";
}
?>
<!-- HEADER -->
<section id="header">
    <section id="logo">
        <?php
            echo "<a id='logo-link' href='".$root."#intro' title='intro'>";
        ?>
            <div id="logo-main-text">BRUCE <span class="secondary-text-color">TANG</span></div>
            <div id="logo-tagline">design & development</div>
        </a>
    </section>

    <nav class="nav">
        <ul>
            <?php
                echo "<li><a href='".$root."#intro'>HOME</a></li>";
                if($page == "home"){
                    echo "<li><a href='".$root."#work'>WORK</a></li>";
                }
                else if($page=="work"){
                    echo "<li><a href='work.php'>WORK</a></li>";
                }
                echo "<li><a href='".$root."#about'>ABOUT</a></li>";
                echo "<li><a href='".$root."#contact'>CONTACT</a></li>";
            ?>
        </ul>
    </nav>

    <div id="mobile-nav-icon">
        <div id="hamburger-icon">
            <svg height="15" width="20">
                <g stroke="white" stroke-width="3">
                    <line id="ham-l1" x1="0" y1="1.5" x2="20.5" y2="1.5"/>
                    <line id="ham-l2" x1="0" y1="7.5" x2="20.5" y2="7.5"/>
                    <line id="ham-l3" x1="0" y1="13.5" x2="20.5" y2="13.5"/>
                </g>
            </svg>
        </div>

        <div id="close-icon">
            <svg id="close-svg" height="20" width="20">
                <g stroke="white" stroke-width="2">
                    <line id="close-l1" x1="0" y1="0" x2="20" y2="20"/>
                    <line id="close-l2" x1="0" y1="20" x2="20" y2="0"/>
                </g>
            </svg>
        </div>
    </div>
</section>
<!-- END HEADER -->

<!-- MOBILE NAV -->
<nav class="nav-mobile">
    <ul>
        <?php
            echo "<li><a href='".$root."#intro'>HOME</a></li>";
            if($page == "home"){
                echo "<li><a href='".$root."#work'>WORK</a></li>";
            }
            else if($page=="work"){
                echo "<li><a href='work.php'>WORK</a></li>";
            }
            echo "<li><a href='".$root."#about'>ABOUT</a></li>";
            echo "<li><a href='".$root."#contact'>CONTACT</a></li>";
        ?>
    </ul>
</nav>
<!-- END MOBILE NAV -->