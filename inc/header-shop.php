<html>
<head>
    <title><?php echo $pageTitle; ?></title>
    <link rel="stylesheet" href="../css/style-shop.css" type="text/css" media="screen">
    <link rel="stylesheet" href="../css/animation.css">
    <link href='http://fonts.googleapis.com/css?family=Nunito' rel='stylesheet' type='text/css'>
    <link type="text/css" rel="stylesheet" media="screen" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.9.2/themes/base/jquery-ui.css" />
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.14/jquery-ui.min.js"></script>
    <link type="text/css" rel="stylesheet" href="http://gregfranko.com/jquery.selectBoxIt.js/css/jquery.selectBoxIt.css" />
    <script type="text/javascript" src="../js/jquery.js"></script>
    <script type="text/javascript" src="../js/validEmail.js"></script>
    <script type="text/javascript" src="../js/styleForm.js"></script>
    <script type="text/javascript" src="../js/jquery-ui-1.10.4.custom/js/jquery-ui-1.10.4.custom.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.9.2/jquery-ui.min.js"></script>
    <script src="http://gregfranko.com/jquery.selectBoxIt.js/js/jquery.selectBoxIt.min.js"></script>
    <script type="text/javascript" src=../js/jquery.selectBoxIt.js-master/src/javascripts/jquery.selectBoxIt.js></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.1/jquery.js"></script>
    <script type="text/javascript" src="../js/sound.js"></script>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.14/jquery-ui.min.js"></script>
    <script type="text/javascript" src="https://github.com/alpixel/jMenu.git"></script>
    <script type="text/javascript" src="../js/jMenu-master/js/jMenu.jquery.min.js"></script>
    <link rel="stylesheet" href="../js/jMenu-master/css/jmenu.css" media="screen">
</head>
<body>
    
    <div class="header">
        
        <div class="wrapper">
            
            <h1 class="branding-title"><a href="../index.php">UFBH</a></h1>
    
            <ul id="nav" class="nav">
                <li class="home <?php if ($section == "home") { echo "on"; } ?>"><a href="../index.php">Home</a></li>
                <li class="adopt <?php if ($section == "adopt") { echo "on"; } ?>"><a href="../adopt.php">Adopt</a>
                    <ul>
                        <li class="adoptable-hounds <?php if ($section == "adoptable-hounds") { echo "on"; } ?>"><a href="../adoptable-hounds.php">Adoptable Bassets</a>
                        </li>
                        <li class="adoption-app <?php if ($section == "adoption-app") { echo "on"; } ?>"><a href="../adoption-app.php">Adoption Application</a>
                        </li>
                    </ul>
                </li>
                <li class="foster <?php if ($section == "foster") { echo "on"; } ?>"><a href="../foster.php">Foster</a>
                    <ul>
                        <li class="foster-app <?php if ($section == "foster-app") { echo "on"; } ?>"><a href="../foster-app.php">Foster Application</a>
                        </li>
                    </ul>
                </li>
                <li class="support <?php if ($section == "support") { echo "on"; } ?>"><a href="../support.php">Support</a>
                    <ul>
                        <li class="donate <?php if ($section == "donate") { echo "on"; } ?>"><a href="../donate.php">Donate</a>
                        </li>
                        <li class="volunteer <?php if ($section == "volunteer") { echo "on"; } ?>"><a href="../volunteer.php">Volunteer</a>
                        </li>
                    </ul>
                </li>
                <li class="success <?php if ($section == "success") { echo "on"; } ?>"><a href="../success.php">Success</a></li>
                <li class="about <?php if ($section == "about") { echo "on"; } ?>"><a href="../about.php">About</a></li>
                <li class="contact <?php if ($section =="contact"){ echo "on"; } ?>"><a href="../contact.php">Contact</a></li>
                <li class="store <?php if ($section == "store") { echo "on"; } ?>"><a href="../shop.php">UFBH Store</a></li>
            </ul>

<script type="text/javascript">
    $(document).ready(function(){
    // simple jMenu plugin called
    $("#nav").jMenu();
 
    // more complex jMenu plugin called
    $("#nav").jMenu({
      ulWidth : 'auto',
      effects : {
        effectSpeedOpen : 300,
        effectTypeClose : 'slide'
      },
      animatedText : false
    });
  });
</script>
            
        </div>
        
    </div>
    
    <div id="content">