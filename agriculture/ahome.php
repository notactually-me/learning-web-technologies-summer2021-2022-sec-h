<?php
    session_start();
    if(isset($_COOKIE['astatus']) && isset($_SESSION['id']) && isset($_SESSION['pass']))
    {
        //$username = $_REQUEST['name'];
    
?>
<html>
    <table>
    <tr>
        <td><a href="profile.php"> View Profile</a></td>
        <td><a href='passchange.php'>Change Password </a></td>
        <td><a href="logout.php">Logout</a></td>
        <!-- <td><a href="profile.php"> View Profile</a>&nbsp;</td> -->
</tr>
    </table>
    <h1>Welcome, <?php echo $_SESSION['name']; ?></h1><br>
    <table>
        
        <tr style="text-align: center">            
            <td><a href="farmer.php">View Farmers</a></td>
            <td><a href="sales_manager.php">View Sales Managers</a></td>
            <td><a href="customers.php">View Customers</a></td>
        </tr>
        <tr style="text-align: center">
            <td><a href="transaction.php">Transaction List</a></td>
            <td><a href="inventory.php">Inventory</a></td>
            <td><a href="accounts.php">Accounts</a></td>
        </tr>
        
    </table>
</html>
<?php
    }
    else
    {
        echo "Invalid request";
        echo "<br><a href='login.php'>Login</a>";
    }
?>