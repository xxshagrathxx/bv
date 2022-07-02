<?php include "connection.php"; ?>
<?php include "inc/header.php"; ?>

<?php
    $sql = "SELECT * FROM `offers`";
    $result = $conn->query($sql);
?>
<div class="container-fluid" style="text-align: center; margin-top: 100px">
    <table class="table table-striped" dir="ltr">
        <thead>
        <tr>
            <th>Id</th>
            <th>Title</th>
            <th>Description</th>
        </tr>
        </thead>
        <tbody>
            <?php
                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        echo "<tr><td>" . $row['id'] . "</td>
                                <td>" . $row['title'] . "</td>
                                <td>" . $row['description'] . "</td></tr>";
                    }
                }
            ?>
        </tbody>
    </table>
    <br>
    <a href="index.php" class="btn btn-info"> Back To The Main Page </a>
</div>

<?php include "inc/footer.php"; ?>