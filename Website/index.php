<?php
require "API.php";
require "utils.php";

pageHeader();

Print " <body>
            <div class = 'container-fluid'>
                <div id='myCarousel' class='carousel slide' data-ride='carousel'>
                    <!-- Indicators -->
                    <ol class='carousel-indicators'>
                        <li data-target='#myCarousel' data-slide-to='0' class='active'></li>
                        <li data-target='#myCarousel' data-slide-to='1'></li>
                        <li data-target='#myCarousel' data-slide-to='2'></li>
                    </ol>
        
                    <!-- Wrapper for slides -->
                    <div class='carousel-inner' align = 'center'>
                        <div class='item active'>
                            <img src='images/Human.png' alt='Human'>
                        </div>
                
                        <div class='item'>
                            <img src='images/Kelthuzad.jpg' alt='Kelthuzad'>
                        </div>
                
                        <div class='item'>
                            <img src='images/Orc.jpg' alt='Orc'>
                        </div>
                    </div>
                
                    <!-- Left and right controls -->
                    <a class='left carousel-control' href='#myCarousel' data-slide='prev'>
                        <span class='glyphicon glyphicon-chevron-left'></span>
                        <span class='sr-only'>Previous</span>
                    </a>
                    <a class='right carousel-control' href='#myCarousel' data-slide='next'>
                        <span class='glyphicon glyphicon-chevron-right'></span>
                        <span class='sr-only'>Next</span>
                    </a>
                </div>
                <div class='well well-sm' align='center'>
                    <h1><b>SideQuest</b></h1>
                </div>
            </div>
        </body>";
        
pageFooter();
?>