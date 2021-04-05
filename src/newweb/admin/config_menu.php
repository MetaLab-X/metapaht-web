 <div class="navbar-header" style="background-color:#364150; width:100%; position:fixed; z-index:9999; margin-top:-1px; margin-left:-1px;" align="left">
         <div align="left" class="logomobile" style="padding-left:10px;"> <img src="images/admin_panel.png" height="22"  style="margin-left:0px; z-index:99999; margin-top:12px;"/></div>
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false" style="background-color:#2b3643; margin-top:-28px;">
            <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar" style="width:25px;"></span>
                    <span class="icon-bar" style="width:25px;"></span>
                   <span class="icon-bar" style="width:25px;"></span>
          </button>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1" style=" position:fixed; z-index:9999; width:100%; margin-top:46px;">
          <ul class="nav navbar-nav navbar-right">
                     
<li> <a href="index.php?content=About">
    <div <?php if($page=="About"){echo "class='MENU_Active'";} else {echo "class='MENU'";}?> >
         <span class="glyphicon glyphicon-education" aria-hidden="true" style="padding:5px; font-size:13px;"></span>ABOUT
	</div>
</a></li>

<li> <a href="index.php?content=Mission">
    <div <?php if($page=="Mission"){echo "class='MENU_Active'";} else {echo "class='MENU'";}?> >
         <span class="glyphicon glyphicon-flag" aria-hidden="true" style="padding:5px; font-size:13px;"></span>MISSION & VISION
	</div>
</a></li>
          
      <li class="dropdown">
                   <a class="dropdown-toggle" data-toggle="dropdown" href="index.php?content=Course">
           <div <?php if($page=="Course"){echo "class='MENU_Active'";} else {echo "class='MENU'";}?> >
            	<span class="glyphicon glyphicon-bookmark" aria-hidden="true" style="padding:5px; font-size:13px;"></span>COURSE
			</div>
			</a>
            <ul class="dropdown-menu">
             <li><a href="index.php?content=Course&subPage=1">
            <div class="MENU">
            	<span class="glyphicon glyphicon-triangle-right" aria-hidden="true" style="padding:5px; font-size:13px;"></span>COURSE Right
			</div>
          </a></li>
          
           <li><a href="index.php?content=Course&subPage=2">
            <div class="MENU">
            	<span class="glyphicon glyphicon-triangle-right" aria-hidden="true" style="padding:5px; font-size:13px;"></span>COURSE Left
			</div>
          </a></li>
            </ul>
            </li>
          
          
          <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="index.php?content=Course">
        <div <?php if($page=="Facilities"){echo "class='MENU_Active'";} else {echo "class='MENU'";}?> >
            	<span class="glyphicon glyphicon-bookmark" aria-hidden="true" style="padding:5px; font-size:13px;"></span>Facilities
			</div>
			</a>
            <ul class="dropdown-menu">
             <li><a href="index.php?content=Facilities&subPage=1">
            <div class="MENU">
            	<span class="glyphicon glyphicon-triangle-right" aria-hidden="true" style="padding:5px; font-size:13px;"></span>FACILITIES Right
			</div>
          </a></li>
          
           <li><a href="index.php?content=Facilities&subPage=2">
            <div class="MENU">
            	<span class="glyphicon glyphicon-triangle-right" aria-hidden="true" style="padding:5px; font-size:13px;"></span>FACILITIES Left
			</div>
          </a></li>
            </ul>
            </li>
     

<li> <a href="index.php?content=Contact">
    <div <?php if($page=="Contact"){echo "class='MENU_Active'";} else {echo "class='MENU'";}?> >
         <span class="glyphicon glyphicon-envelope" aria-hidden="true" style="padding:5px; font-size:13px;"></span>CONTACT
	</div>
</a></li>

<!-- <li class="dropdown">
                   <a class="dropdown-toggle" data-toggle="dropdown" href="Admin_Panel.php?content=Article">
           <div <?php if($page=="Blog"){echo "class='MENU_Active'";} else {echo "class='MENU'";}?> >
            	<span class="glyphicon glyphicon-edit" aria-hidden="true" style="padding:5px; font-size:13px;"></span>BLOG
			</div>
			</a>
            <ul class="dropdown-menu">
             <li><a href="index.php?content=Blog&view=1">
            <div class="MENU">
            	<span class="glyphicon glyphicon-triangle-right" aria-hidden="true" style="padding:5px; font-size:13px;"></span>BLOG CATEGORY
			</div>
          </a></li>
          
           <li><a href="index.php?content=Blog&view=2">
            <div class="MENU">
            	<span class="glyphicon glyphicon-triangle-right" aria-hidden="true" style="padding:5px; font-size:13px;"></span>BLOG LIST
			</div>
          </a></li>
            </ul>
            </li>
          
            
       
            
            <!--
                         <li class="dropdown">
                   <a class="dropdown-toggle" data-toggle="dropdown" href="Admin_Panel.php?content=Article">
           <div <?php if($page=="Article"){echo "class='MENU_Active'";} else {echo "class='MENU'";}?> >
            	<span class="glyphicon glyphicon-file" aria-hidden="true" style="padding:5px; font-size:13px;"></span>NEWS
			</div>
			</a>
            <ul class="dropdown-menu">
             <li><a href="Admin_Panel.php?content=Article&view=1">
            <div class="MENU">
            	<span class="glyphicon glyphicon-triangle-right" aria-hidden="true" style="padding:5px; font-size:13px;"></span>NEWS CATEGORY
			</div>
          </a></li>
          
           <li><a href="Admin_Panel.php?content=Article&view=2">
            <div class="MENU">
            	<span class="glyphicon glyphicon-triangle-right" aria-hidden="true" style="padding:5px; font-size:13px;"></span>NEWS LIST
			</div>
          </a></li>
            </ul>
            </li>
           
           <li><a href="Admin_Panel.php?content=Gallery">
           <div <?php if($page=="Gallery"){echo "class='MENU_Active'";} else {echo "class='MENU'";}?> >
            	<span class="glyphicon glyphicon-picture" aria-hidden="true" style="padding:5px; font-size:13px;"></span>GALLERY
			</div>
			</a></li> -->

             <!--
                <li><a href="index.php?content=Keyword">
           <div <?php if($page=="Keyword"){echo "class='MENU_Active'";} else {echo "class='MENU'";}?> >
            	<span class="glyphicon glyphicon-globe" aria-hidden="true" style="padding:5px; font-size:13px;"></span>KEYWORD
			</div>
			</a></li> -->
            
                                 <li><a href="user_logout.php" title="log out"  target="iframePath"> 
            <div class="MENU" style="color:#F00;">
            	<span class="glyphicon glyphicon-off" aria-hidden="true" style="padding:5px; font-size:13px;"></span>Logout
			</div>
			</a></li>
           
          </ul>
        </div><!-- /.navbar-collapse -->