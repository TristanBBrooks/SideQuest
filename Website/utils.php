<?php
    function progressBar(){
        Print " <div class='progress'>
                    <div class='progress-bar progress-bar-striped active' role='progressbar' aria-valuenow='0' aria-valuemin='0' aria-valuemax='100' style='width:70%'>
                        70%
                    </div>
                </div>";
    
    }//end of function
    
    function pageFooter()
    {
        Print " <div class = 'footer'>
                    <b>SideQuest <small></b> by Tristan Brooks </small>
                </div>
            </html>";
    }//end of the function
    
    function pageHeader()
    {
        Print"  <!DOCTYPE html>
                    <html lang='en'>
                        <head>
                            <meta charset='utf-8'>
                            <meta http-equiv='X-UA-Compatible' content='IE=edge'>
                            <meta name='viewport' content='width=device-width, initial-scale=1'>
                            <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css'>
                            <link rel='stylesheet' type='text/css' href='MiniCraft.css'>
                            <script src='https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js'></script>
                            <script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js'></script>
                            <title>SideQuest</title>
                        </head>
                        <nav class='navbar navbar-inverse'>
                            <div class='container-fluid'>
                                <div class='navbar-header'>
                                    <a class='navbar-brand' href='/SideQuest/index.php'>SideQuest</a>
                                </div>
                                <ul class='nav navbar-nav'>
                                    <li class='active'>
                                        <a href='index.php'>Home</a>
                                    </li>
                                    <li>
                                        <a href='./about.php'>Servers</a>
                                    </li>
                                    <li class='dropdown'>
                                            <a class='dropdown-toggle' data-toggle='dropdown' href='./craftsmen.php'>Craftsmen's Hall
                                                <span class='caret'></span>
                                            </a>
                                            <ul class='dropdown-menu'>
                                                <li><a href='./craftsmen.php'>Blacksmithing</a></li>
                                                <li><a href='./craftsmen.php'>Leatherworking</a></li>
                                                <li><a href='./craftsmen.php'>Tailoring</a></li>
                                                <li><a href='#'>Enchanting</a></li>
                                                <li><a href='#'>Alchemy</a></li>
                                                <li><a href='#'>Engineering</a></li>
                                                <li><a href='#'>Herbalism</a></li>
                                                <li><a href='#'>Mining</a></li>
                                                <li><a href='#'>Skinning</a></li>
                                                <li><a href='#'>Fishing</a></li>
                                                <li><a href='#'>First Aid</a></li>
                                                <li><a href='#'>Cooking</a></li>
                                                <li><a href='#'>Lockpicking</a></li>
                                            </ul>
                                    </li>
                                    <li><a href='./acheivement.php'>Achievements</a></li>
                                </ul>
                            </div>
                        </nav>";
    }//end of function
?>
