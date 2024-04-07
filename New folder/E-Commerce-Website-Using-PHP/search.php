<?php
include 'connection.php';
if (isset($_POST['search'])) {
    $search = $_POST['search'];

    $query = "SELECT * FROM `tbl_product` WHERE productName  Like '%$search%'  ";

    $sql_search = mysqli_query($con, $query);

    if (mysqli_num_rows($sql_search) > 1) {
        echo "Please provide the name of the product for further reference.";
        ?>
        <script>
            alert("Please provide the name of the product for further reference.")
        </script>
        <a href="index.php">Go to Home</a>
        <?php
    } else {
        while ($ans = mysqli_fetch_assoc($sql_search)) {
            header("location: details.php?proId=$ans[productId]");
        }
    }


}

?>