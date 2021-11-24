<!DOCTYPE html>
<html>
<head>
<title>Agroculture.com/Database Management</title>
<meta name="viewport" content="width=device-width, initial-scale=1"> 
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" > 
<style type="text/css">
body{
background-color:pink;
font-family:sans-serif;
text-align:center;
}
a{
text-decoration:none;
}
#farm{
font-size:80px;
margin-left:-1035px;
margin-top:-10px;
}
#fcart{
font-size:80px;
margin-left:-620px;
margin-top:-215px;
}
#forder{
font-size:80px;
margin-left:-205px;
margin-top:-219px;
}
#ftransaction{
font-size:80px;
margin-left:210px;
margin-top:-219px;
}
#foporder{
font-size:80px;
margin-left:625px;
margin-top:-242px;
}
#foptransaction{
font-size:80px;
margin-left:1040px;
margin-top:-219px;
}
#buy{
font-size:80px;
margin-left:-1035px;
margin-top:-50px;
}
#bcart{
font-size:80px;
margin-left:-620px;
margin-top:-219px;
}
#border{
font-size:80px;
margin-left:-205px;
margin-top:-219px;
}
#btransaction{
font-size:80px;
margin-left:210px;
margin-top:-219px;
}
#boporder{
font-size:80px;
margin-left:625px;
margin-top:-243px;
}
#boptransaction{
font-size:80px;
margin-left:1040px;
margin-top:-219px;
}
#fbview{
font-size:100px;
margin-left:-820px;
margin-top:-50px;
}
#fproduct{
font-size:100px;
margin-left:820px;
margin-top:-238px;
}
figcaption{
font-size:20px;
}
h3{
color:#000000;
text-align:center;
font-size:30px;
}
#but{
margin-top:-140px;
margin-bottom:80px;
}
a.logout{
color: pink;
margin-bottom:100px;
padding: 10px 20px;
text-decoration: none;
font-size: 15px;
letter-spacing: 2px;
text-transform: uppercase;
background:  rgb(247, 0, 136);
border-radius: 6px;
}
a.logout:hover{
background: rgb(133, 0, 73);
border-radius: 6px;
}
.border{
border-style:solid;
border-color:#000000;
margin-top:-20px;
}
</style>
<body>
<h3>Welcome Admin To Manage Database Section</h3>
<div class="border">
<div id="farm">
<figure>
<a href="view.php"><i class="fa fa-user-secret"></i><i class="fa fa-database"></i></a>
<a href="view.php"><figcaption>Farmer <br>Database</figcaption></a>
</figure>
</div>
<div id="fcart">
<figure>
<a href="fcart_view.php"><i class="fa fa-user-secret"></i><i class="fa fa-database"></i></a>
<a href="fcart_view.php"><figcaption>Farmers <br>Cart</figcaption></a>
</figure>
</div>
<div id="forder">
<figure>
<a href="forders_view.php"><i class="fa fa-user-secret"></i><i class="fa fa-database"></i></a>
<a href="forders_view.php"><figcaption>Farmers <br>Orders(COD)</figcaption></a>
</figure>
</div>
<div id="ftransaction">
<figure>
<a href="ftransaction_view.php"><i class="fa fa-user-secret"></i><i class="fa fa-database"></i></a>
<a href="ftransaction_view.php"><figcaption>Farmers <br>Delivery <br>Details(COD)</figcaption></a>
</figure>
</div>
<div id="foporder">
<figure>
<a href="foporders_view.php"><i class="fa fa-user-secret"></i><i class="fa fa-database"></i></a>
<a href="foporders_view.php"><figcaption>Farmers <br>Orders(OP)</figcaption></a>
</figure>
</div>
<div id="foptransaction">
<figure>
<a href="foptransaction_view.php"><i class="fa fa-user-secret"></i><i class="fa fa-database"></i></a>
<a href="foptransaction_view.php"><figcaption>Farmers <br>Delivery <br>Details(OP)</figcaption></a>
</figure>
</div>
<div id="buy">
<figure>
<a href="buyer_view.php"><i class="fa fa-user-secret"></i><i class="fa fa-database"></i></a>
<a href="buyer_view.php"><figcaption>Buyer <br>Database</figcaption></a>
</figure>
</div>
<div id="bcart">
<figure>
<a href="bcart_view.php"><i class="fa fa-user-secret"></i><i class="fa fa-database"></i></a>
<a href="bcart_view.php"><figcaption>Buyers <br>Cart</figcaption></a>
</figure>
</div>
<div id="border">
<figure>
<a href="borders_view.php"><i class="fa fa-user-secret"></i><i class="fa fa-database"></i></a>
<a href="borders_view.php"><figcaption>Buyers <br>Orders(COD)</figcaption></a>
</figure>
</div>
<div id="btransaction">
<figure>
<a href="btransaction_view.php"><i class="fa fa-user-secret"></i><i class="fa fa-database"></i></a>
<a href="btransaction_view.php"><figcaption>Buyers <br>Delivery <br>Details(COD)</figcaption></a>
</figure>
</div>
<div id="boporder">
<figure>
<a href="boporders_view.php"><i class="fa fa-user-secret"></i><i class="fa fa-database"></i></a>
<a href="boporders_view.php"><figcaption>Buyers <br>Orders(OP)</figcaption></a>
</figure>
</div>
<div id="boptransaction">
<figure>
<a href="boptransaction_view.php"><i class="fa fa-user-secret"></i><i class="fa fa-database"></i></a>
<a href="boptransaction_view.php"><figcaption>Buyers <br>Delivery <br>Details(OP)</figcaption></a>
</figure>
</div>
<div id="fbview">
<figure>
<a href="fbview.php"><i class="fa fa-user-secret"></i><i class="fa fa-database"></i></a>
<a href="fbview.php"><figcaption>Feedback Messages</figcaption></a>
</figure>
</div>
<div id="fproduct">
<figure>
<a href="fproduct_view.php"><i class="fa fa-user-secret"></i><i class="fa fa-database"></i></a>
<a href="fproduct_view.php"><figcaption>Farmers Products</figcaption></a>
</figure>
</div>
<div id="but">
<a class="logout" href="logout.php">Logout</a>
</div> 
</div>
</body>
</html>