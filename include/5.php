<?php
//begin
    checksession(); //check if we are called by a valid session
//routing
    $id2=$_GET['id2'];
//default route
    if ($id2=='') $id2=0;
//submenu
    ?>
    <table border="0" cellpadding="0" cellspacing="2">
    <tr><td>
        <input type="button" value="Preferences" onclick="location.href='?id=5&id2=4';">
    </td><td>
        <input type="button" value="Change password" onclick="location.href='?id=5&id2=2';">
    </td>
    <?php if (checkrights("Administrator")) { ?>
    <td>
        <input type="button" value="View Logs" onclick="location.href='?id=5&id2=1';">
    </td>
    <td>
        <input type="button" value="Edit links" onclick="location.href='?id=5&id2=6';">
    </td>
    <?php } ?>
    <?php if (checkrights("Administrator,EditHoursPerPoint")) { ?>
    <td>
        <input type="button" value="Edit hours-per-point" onclick="location.href='?id=5&id2=10';">
    </td>
    <?php } ?>
    </tr></table>
    <?php
//end submenu

//controller
    switch ($id2) {
            case 0:
		include("50.php");  //lista narzedzi
		break;
	    case 1:
		include("51.php");  //pokaz logi
		break;
	    case 2:
		include("52.php");  //zmiana hasla
		break;
	    case 3:
		include("53.php");  //zmiana hasla - zapis
		break;
	    case 4:
		include("54.php");  //zmiana preferencji
		break;
	    case 5:
		include("55.php");  //zmiana preferencji - zapis
		break;
            case 6:
		include("56.php");  //zmiana link�w
		break;
            case 7:
		include("57.php");  //zmiana link�w - zapis
		break;	
            case 8:
		include("58.php");  //reset one API feed
		break;
            case 9:
		include("59.php");  //reset poller (delete lock file)
		break;
            case 10:
		include("5a.php");  //list points per isk
		break;
            case 11:
		include("5b.php");  //edit points per isk for a specific activity
		break;
            case 12:
		include("5c.php");  //save points per isk
		break;
	    }
?>