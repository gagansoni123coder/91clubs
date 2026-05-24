<?php

// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login");
    exit;
}

                        require_once "config.php";
                        $query1 = "SELECT * FROM `record` WHERE username='".$_SESSION['username']."' ";


$result1 = mysqli_query($conn, $query1);

$dataRow = "";

 $query0 =  "SELECT  account,ifsc,upi FROM users  WHERE username='$row2[1]'";
$result3 =$conn->query($query0);
$row3 = mysqli_fetch_assoc($result3);
$bank=$row3['account'];
$ifsc=$row3['ifsc'];
$upi=$row3['upi'];


//retrieve the selected results from database   
$query = "SELECT * FROM `record` WHERE username='".$_SESSION['username']."' ORDER BY id DESC ";  
$result = mysqli_query($conn, $query);  
  
//display the retrieved result on the webpage  
while ($row2 = mysqli_fetch_array($result)) { 
    $amount=round((($row2[2])*200/193),2);
    $dataRow = $dataRow." 
<div style='display: -webkit-box;
    display: -webkit-flex;
    display: flex;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -webkit-flex-direction: column;
    flex-direction: column;
    gap: 0.21333rem;
    padding: 0.32rem 0.13333rem;
    border-radius: 0.13333rem;
    background-color: #fff;
    box-shadow: 0 0.05333rem 0.21333rem #d0d0ed5c;' class='row mr-0 mt-3 pt-2 pb-2 xtl rolst tf-13 tfcb' style='border: 1px solid teal;'>
	<div class='col-12 pb-2 bd-b dflsb'><span class='tfw-6 text-teal' style='min-width: 2rem;
    margin-left: 0.13333rem;
    color: #fff;
    background: #fe6868;
    border-radius: 0.13333rem;
    font-size: .37333rem;
    line-height: .66667rem;
    height: 0.66667rem;
    text-align: center;'>Withdraw</span><span class='rcscpv tfs-w bg$colour 'style='color:#26A17B;'>$row2[3] ➲</span></div>
	<div class='col-12 pt-2 dflsb'><span style='color: #888;
    font-size: .34667rem;font-weight:500;'>Balance</span><span style='color: #e78a09;
    font-size: .34667rem;font-weight:600;'>₹$row2[2].00</span></div>
    <div class='col-12 pt-2 dflsb'><span style='color: #888;
    font-size: .34667rem;font-weight:500;'>Type</span><span style='color: #888;
    font-size: .34667rem;font-weight:500;'>BANK CARD</span></div>
    <div class='col-12 pt-2 dflsb'><span style='color: #888;
    font-size: .34667rem;font-weight:500;'>Time</span><span style='color: #888;
    font-size: .34667rem;font-weight:500;'>$row2[4]</span></div>
    <div class='col-12 pt-2 dflsb'><span style='color: #888;
    font-size: .34667rem;font-weight:500;'>Order number</span><span style='color: #888;
    font-size: .34667rem;font-weight:500;'>WD202310032548690$row2[0]263</span></div>
	<div class='col-12 pt-2 dflsb'><span style='color: #888;
    font-size: .34667rem;font-weight:500;'>Option</span><span onclick='myFunction()' class='compbtn' >Complaint &gt;</span></div>
</div>
 

";
    
}



?> 
<html lang="en" translate="no" data-dpr="1" style="font-size: 38.32px;"><head>
<meta charset="UTF-8">
<link rel="icon" href="./ico.png">
<meta name="google" content="notranslate">
<meta name="robots" content="noindex,nofollow">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

<link rel="manifest">
<title>双赢游戏</title>
<link rel="stylesheet" href="https://primeclub.app/includes/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="https://primeclub.app/includes/assets/css/light.css?23.7.12">
<link rel="stylesheet" href="https://primeclub.app/includes/dropzone/css/dropzone.css?23.7.12">
<style>@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap');</style></head>
<body>
<section class="container-fluid">
	<div class="row mcas">
		<div class="col-md-6 col-lg-4 main">
			<div class="row" id="warea"><div class="col-12 m-record" id="moreRcd"><div style="background: linear-gradient(180deg,#fe6868 0%,#ff8e8a 100%);" class="row nav-top"><div class="col-12"><div class="row"><div class="col-2 xtl"><span class="nav-back wt" id="backF" onclick="window.location.href='./main#';"></span></div><div class="col-10 pl-0 xtl"><span class="tf-18 tfs-w" id="MoreRCT">Withdraw Record</span></div></div></div></div><div class="row"><div class="col-12 pt-0" id="dtaod">
<?php echo $dataRow;?>
</div></div></div></div>
			<div class="row" id="odrea"></div>
			<div class="row" id="footer"></div>
			<div class="row" id="opffp"></div>
			<div class="row" id="anof"></div>
			<div class="row" id="dta_ref"></div>
		</div>
	</div><style>.pt-2, .py-2 {
    padding-top: 0.5rem!important;
}.pt-0, .py-0 {background-color: #f7f8ff;}</style><style>
G {
    color: #fff;
    font-size:14px;
    background-color: #0093ff;
    height: 38px;
    line-height: 30px;
    border-radius: 6px;
    border: 2px solid #0093ff;
    transition: 1.3s;
    text-align: center;
    white-space: nowrap;
}
.upi.lar {
    height: 50px;
    min-width: 59px;
}
.upi {
    background: url(https://jimart.co.in/wp-content/uploads/2020/09/800px-UPI-Logo-vector.svg-1.png) no-repeat center;
    background-size: contain;
    height: 18px;
    min-width: 28px;
    display: inline-flex;
    vertical-align: text-top;
}
 .bggry {
    background: #598ff9;
}
  .bggr {
    background: rgb(106, 190, 87);
}
  .bgrd {
    background: #f95959;
}
  .back, .nav-back {
    background: url(/includes/icons/back.png) no-repeat center;
    background-size: contain;
    height: 45px;
    min-width: 25px;
    display: inline-flex;
    vertical-align: text-top;
    cursor: pointer;
}
  </style><script>
function myFunction() {
  alert("We've received your complaint. We are currently working on a resolution to your issue, for more info you can contact our official customer care team via telegram for fastest support : @AlinaEnro");
}
</script>
</body></html>
   