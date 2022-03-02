<?php

 $dbhost='localhost';
 $dbname='form';
 $dbusername='root';
 $dbpass='';

 $mysqli=mysqli_connect($dbhost,$dbusername,$dbpass,$dbname);
?>

<!DOCTYPE html>
<html>
<head>
    <title>
        Contacts App
    </title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Open+Sans&family=Quicksand&display=swap');
        body {
            font-family: 'Quicksand', sans-serif;
        }
        .tablecontent{
            border-collapse: collapse;
            margin-left: auto;
            margin-right: auto;
            font-size: 0.9em;
            min-width: 400px;
            border-radius: 5px 5px 0 0;
            overflow: hidden;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
            font-family: 'Quicksand', sans-serif;

        }
        .tablecontent thead tr{
            background-color: #009879;
            color: #ffffff;
            text-align: center;
            font-weight: bold;
        }
        .tablecontent th, 
        .tablecontent td {
            padding: 12px 15px;
            text-align: center;
        }
        .tablecontent tbody tr {
            border-bottom: 1px solid #dddddd;
        }
        .tablecontent tbody tr:nth-of-type(even) {
            background-color:#f3f3f3;
        }
        .tablecontent tbody tr:last-of-type {
            border-bottom: 2px solid #009879;
        }
        .loginbox{
            width: 300px;
            height: 240px;
            margin-left: auto;
            margin-right: auto;
            box-sizing: border-box;
            padding: 20px 20px;
            font-family: 'Quicksand', sans-serif;
            border-radius: 5px 5px 0 0;
            background-color: #90ee90;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
            border-bottom: 3px solid black;
        }
        h1{
            margin: 0;
            padding: 0 0 10px;
            text-align: center;
            font-size: 22px;
        }
        .loginbox label{
            margin-left: 20px;
            padding: 0;
            font-weight: bold;

        }
        .loginbox input{
            width: 60%;
            margin-bottom: 15px;
            border: none;
            border-bottom: 2px solid #fff;
            background: transparent;

        }
        .loginbox input[type="submit"]{
            margin-left: 170px;
            height: 23px;
            width: 25%;
            background: linear-gradient(120deg,rgb(46, 34, 172),rgb(228, 75, 155));
            border-radius: 5px;
            color: #fff;
            border-style: hidden;
            font-size: 10px;
        }
        .link{
            text-align: center;
            height: 30px;
            min-width: 8%;
            color: #fff;
            border-radius: 5px;
            margin-top: 35px;
            border-style: hidden;
            background: linear-gradient(120deg,rgb(46, 34, 172),rgb(228, 75, 155));
        }
        .link:hover{
            cursor: pointer;
            background: black;
        }
        .loginbox input[type="submit"]:hover{
            cursor: pointer;
            background: black;
        }
    </style>
</head>
<body>
<h1>Contact Form and Contact List Page</h1>
<br>
<h4 style="text-align: center;">Add Contacts </h4>
<form class="loginbox" action="" method="POST">
    <label for="name">Name : </label>
    <input type="text" name="name" id="name"><br><br>
    <label for="phone">Phone : </label>
    <input type="number" name="phone" id="phone"><br><br>
    <label for="email">Email :&nbsp; </label>
    <input type="email" name="email" id="email"><br><br>
    <input type="submit" name="submit">
</form>
<?php
if(isset($_POST['submit']))
{

    $name=$_POST['name'];
    $phone=$_POST['phone'];
    $email=$_POST['email'];

    $result=mysqli_query($mysqli,"INSERT into contact values('$name','$phone','$email')");
    if($result)
    {
        
    }
    else{

        echo "Failed";
    }
}
?>
<br><br>
<h4 style="text-align: center;">My Contacts</h4>
<table class="tablecontent">
    <thead>
        <th>Name</th>
        <th>Ph No</th>
        <th>Email</th>
    </thead>
    <?php
$result=mysqli_query($mysqli,"SELECT * from contact");
while($res=mysqli_fetch_array($result)){

    echo '<tr>';
    echo '<td>'.$res['name'].'</td>';
    echo '<td>'.$res['phone'].'</td>';
    echo '<td>'.$res['email'].'</td>';
    echo'</tr>';
}
?>

</table>
<div style="text-align: center;">
<a href="logout.php"><button class="link">Log out</button></a>
</div>
</body>

</html>