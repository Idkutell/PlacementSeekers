<!--
    Created on : Oct 7, 2020, 11:46:08 AM
    Author     : Manish Kushwaha
-->
<!-- To create a navigation bar which will be fixed at top of every page -->
<div class="navbar navbar-fixed-top">
    <!-- This class will give margin along all the sides    -->
    <div class="container"> 
        <!-- navbar-header will provide some extra CSS Properties to the Elements  -->
        <div class="navbar navbar-header"> 
            <!-- Now we are creating toggle button -->
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mynav">
                <!-- These span tags will give lines present inside toggle button.-->
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <!-- Here is our logo.-->
            <a href="Home.php" class="navbar-brand"><img src="images/logo1.jpg"></a>
        </div>
        <div class="collapse navbar-collapse menu-bar" id="mynav">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#"><span class="glyphicon glyphicon-home"></span>Home</a></li>
                <li><a href="#"><span class="glyphicon glyphicon-education"></span>Colleges</a></li>
                <li><a href="#"><span class="glyphicon glyphicon-menu-down"></span>Preparation</a>
                    <div class="sub-menu1">
                        <ul >
                            <li><a href="#">C Programming <i class="glyphicon glyphicon-menu-right"></i></a>
                                <div class="sub-menu2">
                                    <ul> 
                                        <li><a href="#">C Imp Questions</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li><a href="#">C++ Programming</a></li>
                            <li><a href="#">JAVA Programming</a></li>
                            <li><a href="#">Python Programming</a></li>
                            <li><a href="#">Data Structures</a></li>
                            <li><a href="#">Algorithms</a></li>
                        </ul>
                    </div>
                </li>
                <li><a href="#"><span class="glyphicon glyphicon-menu-down"></span>Quiz</a></li>
                <li><a href="#"><span class="glyphicon glyphicon-usd"></span>FreeCoupons</a></li>
                <li><a href="#"><span class="glyphicon glyphicon-user"></span>AboutUs</a></li>
                
            </ul>
        </div>
    </div>
</div>
