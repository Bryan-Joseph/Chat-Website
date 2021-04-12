<!DOCTYPE html>
<?php
	include "connection.php";
?> 
<html>
	<head>
		<title>Chat Website</title>
		<!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

        
	</head>
    <!--<script>
        function get(){
            //const a = sessionStorage.getItem("NAME");
            //const b = sessionStorage.getItem("ROOM");

            const ab = (new URL(window.location)).search;
            const b = ab.get('room');

            document.getElementById("roomID").innerHTML = b ;

            const a = ab.get('name');

          
            document.getElementById("nameID").innerHTML = a ;


        }

</script>-->
    <body class="bg-primary" style="text-align:center;" onload="get()">
        <div>
            <div class="m-5 bg-white">
                <h2  id="namessssss"></h2>
                <h3>Name is :</h3>
                <h2 id="nameID"><?php echo $_GET["name"] ?></h2>
            </div>
            <div class="m-5 bg-white">
                <h3>Room number is :</h3>
                <h2 id="roomID"><?php echo $_GET["room"] ?></h2>
            </div>
        </div>
        
        <div class="bg-white d-flex justify-content-center">
            <form action="" method="POST" class="mx-4">                
                    <!--<div style="display:none;">
                            <input id="pleaseworkR" name="pleaseworkR">
                            <input id="pleaseworkN" name="pleaseworkN">
                    </div>-->
                <div class="form-group">
                    <div>
                        <table class="table-bordered">
                            <thead>
                                <tr>
                                    <th style="width: 100px;">Name</th>
                                    <th style="width: 500px;">Message</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td style="height: 25px;"></td>
                                    <td style="height: 25px;"></td>
                                </tr>
                                <?php
                                    $room = $_GET["room"];
                                    $query = "select * from chat where room = '$room'";                          
                                    $res = mysqli_query($link , $query); 
                                    while ($row = mysqli_fetch_array($res)) {
                                        //if ($row["room"] == '$_POST[pleaseworkR]') {
                                            echo "<tr>";
                                                echo "<td>"; echo $row['name']; echo "</td>";
                                                echo "<td>"; echo $row['message']; echo "</td>";
                                            echo "</tr>";
                                         //}
                                    }
                                ?>
                                
                                
                            </tbody>
                        </table>
                    </div>
                    <div class="form-inline mt-3">
                        <input name="sendInputBox" class="mx-1" placeholder="Enter message">
                        <input type="submit" class="btn btn-success" name="sendButton" value="Send">

                        <script>
                            function abcdefg() {
                                window.location.href = window.location.href ;
                            }
                        </script>

                        <button onclick="abcdefg()" class="btn btn-primary ml-1">Check for new messages</button>
                    </div>
                </div>
            </form>
        </div>
        

    </body>
    <?php
        $name = $_GET["name"];
        $room = $_GET["room"];

        if(isset($_POST["sendButton"])){
            mysqli_query($link , "insert into chat (room,name,message) values ('$room','$name','$_POST[sendInputBox]')");
            ?>
            <script>
                window.location.href = window.location.href;
            </script>
            
            <?php
        }
    ?>
</html>