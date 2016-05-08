
<?php
include('config.php');


//Fetching Values from URL  
$in=$_POST['in'];
$out=$_POST['out'];
$semLength = $_POST['semLength'];
$TotalMonthlyIncome = $_POST['TotalMonthlyIncome'];
$overUn=$_POST['overUn'];
$TotalMonthlyExpenses=$_POST['TotalMonthlyExpenses'];
$totalMonthlyCost=$_POST['totalMonthlyCost'];
$job=$_POST['job'];
$aid=$_POST['aid'];
$momDad=$_POST['momDad'];
$other=$_POST['other'];
$totalEachMonth = $_POST['totalEachMonth'];
$tuition = $_POST['tuition'];
$lab = $_POST['lab'];
$book = $_POST['book'];
$oFee = $_POST['oFee'];
$totalNeed = $_POST['totalNeed'];
$rent = $_POST['rent'];
$utilities = $_POST['utilities'];
$cellPhone = $_POST['cellPhone'];
$groceries = $_POST['groceries'];
$carPayment = $_POST['carPayment'];
$carInsurance = $_POST['carInsurance'];
$gas = $_POST['gas'];
$loans = $_POST['loans'];
$creditCard = $_POST['creditCard'];
$pCare = $_POST['pCare'];
$entertainment = $_POST['entertainment'];
$misc = $_POST['misc'];
$emergency = $_POST['emergency'];



//Insert query 
$query = "INSERT INTO calculation VALUES('$in','$out','$semLength','$TotalMonthlyIncome','$overUn','$TotalMonthlyExpenses','$totalMonthlyCost','$job','$aid','$momDad','$other','$totalEachMonth','$tuition','$lab','$book','$oFee','$totalNeed','$rent','$utilities','$cellPhone,'$groceries','$carPayment','$carInsurance','$gas','$loans','$creditCard','$pCare','$entertainment','$misc','$emergency')";

if(mysql_query($query))
{
    echo "<script language='Javascript'> alert('Data successfully submitted'); 
location.href='calculator.html';</script>";
	
}
else 
{
	echo "<script language='Javascript'> alert('Something is wrong somewhere (@@)'); 
location.href='logout.php';</script>";
}

?>
