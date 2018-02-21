<?php

    if (isset($_GET["action"])) {
        $action = $_GET["action"];
        if ($action = "takeKills") {
            takeKills();
        }
    }
    
    // The purpose of dbConnect is to connect to the database 
    function dbConnect() { 
        $servername = "localhost";  
        $username = "tbrooksc_admin";  
        $password = "sabiryu3000";  
        $dbname = "tbrooksc_sideQuest"; 
        $conn = new mysqli($servername, $username, $password, $dbname);
        if ($conn->connect_error)  
        {     
            die("Connection failed: " . $conn->connect_error); 
        }  
        return $conn; 
    } //end of function 
    
    
    // Get realm
    function getRealm($ID) {
        $conn = dbConnect();
        $sql = "SELECT ID, name, description FROM  realm WHERE ID = $ID";
        $result = $conn->query($sql);
        if ($result->num_rows > 0)
        {
            while($row = $result->fetch_assoc())
            {
                //echo "<b>Realm</b><br>"
                //.$row['name']
                //."<br> "
                //.$row['description']
                //."<br>";
                
                $realm = array(
                    id => $row['ID'], 
                    name => $row['name'], 
                    description => $row['description']
                    );
                return $realm;
            }
        }
        else
        {
            echo "0 results";
        }
    }
    
    // Get profile 
    function getProfile($ID) {
        $conn = dbConnect();
        $sql = "SELECT ID, name, description, rating, realmID FROM profile WHERE ID = $ID";
    }
    
    // Get guild
    function getGuild($ID) {
        $conn = dbConnect();
        $sql = "SELECT ID, name, description, realmID FROM guild WHERE ID = $ID";
    }
    
    // Get thread
    function getThread($ID) {
        $conn = dbConnect();
        $sql = "SELECT ID, name, description, creationDate, updatedDate, guildID FROM thread WHERE ID = $ID";
    }
    
    // Get post
    function getPost($ID) {
        $conn = dbConnect();
        $sql = "SELECT ID, description, date, profileID, threadID FROM post WHERE ID = $ID";
    }
    
    // Get workOrder 
    function getWorkOrder($ID) {
        $conn = dbConnect();
        $sql = "SELECT ID, name, description, buyerID, sellerID, status FROM workOrder WHERE ID = $ID";
    }
    
    // Get mob
    function getMob($ID) {
        $conn = dbConnect();
        $sql = "SELECT ID, name, killCount, description, topKillerID FROM mob WHERE ID = $ID";
    }
    
    // Get guildProfile
    function getGuildProfile($profileID, $guildID) {
        $conn = dbConnect();
        $sql = "SELECT profileID, guildID, title FROM guildProfile WHERE profileID = $profileID and guildID = $guildID";
    }
    
    // Get profileMob
    function getProfileMob($profileID, $mobID) {
        $conn = dbConnect();
        $sql = "SELECT profileID, mobID, count FROM profileMob WHERE profileID = $profileID and mobID = $mobID";
    }
    
    function takeKills() {
        
        print "hey";
    }
?>