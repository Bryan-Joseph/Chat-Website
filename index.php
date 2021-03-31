<!DOCTYPE html>
<html>
    <head>
        <title>Login form</title>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

        <!--<script src="set.js"></script>-->
    </head>
    <!--<script>
        var names = document.getElementsByName("name").value
        var rooms = document.getElementsByName("room").value
    </script>-->

    <script>
        function subDeal(){
            const name = document.getElementById("name").value ;
            const room = document.getElementById("room").value ;    

            sessionStorage.setItem("NAME",name);
            sessionStorage.setItem("ROOM",room);
    }

    </script>
    <body>
        <form action="indexcopy.php" method="GET" style="text-align: center;margin-top: 50px;">
            <div class="form-group">
                <label for="name">Name :</label>
                <input id="name" name="name" placeholder="Enter your name">
            </div>
            <div class="form-group">
                <label for="room">Room :</label>
                <input id="room" name="room" placeholder="Enter room id">
            </div>
            <div class="form-group">
                
                <input type="submit" onclick="subDeal()" class="btn btn-success" name="enterButton" value="Enter room">
               
            </div>
            <hr>
            <hr>
        </form>
    </body>
    
</html>