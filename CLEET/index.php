<?php
$show = (isset($_GET['subpage']) && $_GET['subpage'] != '') ? $_GET['subpage'] : '';
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>My page</title>
        <link rel="stylesheet" type="text/css"
              href="index.css"/>
    </head>
    <body>
        <div id="wrapper">
        <div id="logo-menu">
            <div id ="logo">
                <a href="index.php">
                <img src="Linux_logo.png"
                     title="logo" alt="logo"/></a>
            </div>
            <div id="menu">
                <ul>
                    <li><a href="index.php?subpage=2">Learning Task 2</a></li>
                    <li><a href="index.php?subpage=3">Learning task 3</a></li>
                    <li><a href="index.php?subpage=CLE">CLE Midterm</a></li>
                    <li><a href="index.php?subpage=4">Learning Task 4</a></li>
                    <li><a href="index.php?subpage=5">Learning Task 5</a></li>
                </ul>
            </div>
            
                      
        </div>
            <div id="contents">
                <?php
                switch($show ){
                    case '2':
                    include_once 'Homepage.html';
                        break;
                    case '3':
                    include_once 'Learning task 3.1.html';
                        break;
                    case 'CLE':
                    include_once 'Website.html';
                        break;
                    case '4':
                    include_once 'Learning4.html';
                        break;
                    case '5':
                    include_once 'L5.html';
                        break;
                    default:
                    include_once 'main.php';
                }
                ?>
                
            </div>
        </div>
    </body>
</html>