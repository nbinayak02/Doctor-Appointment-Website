<?php   
    include("connection.php");
    $name = $edu = $uni = $wsd = $afee = "";
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $name = htmlspecialchars($_POST["doc-name"]);
        $edu = htmlspecialchars($_POST["doc-edu"]);
        $uni = htmlspecialchars($_POST["doc-uni"]);
        $wsd = htmlspecialchars($_POST["doc-workstart"]);
        $afee = htmlspecialchars($_POST["doc-appfee"]);

        $statement = $connection->prepare("Insert into doctor (name, education, university,workstart, fee) values (?,?,?,?,?);");
        $statement->bind_param("sssss",$name,$edu,$uni,$wsd,$afee);

        if($statement->execute()){
            header("Location: ../Admin/add.php?msg=success");
        } else{
            echo "Failed";
        }
    } else{
        echo "Invalid Request";
    }
?>