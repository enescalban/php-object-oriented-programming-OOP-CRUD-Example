<?php require_once 'header.php'; ?>

<br>
    <div class="container">
        <h3>PHP OOP CRUD</h3>
        <hr>
        <a href="add_user.php"><button class="btn btn-success btn-sm">Add User</button></a>
<!--USER TABLE-->
<br> <br> <br>
<table id="example" class="table table-striped" style="width:100%">
    <thead>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>

        <?php
        foreach ($data as $row) { ?>

            <tr>
                <td><?php echo $row['name']; ?></td>
                <td><?php echo $row['email']; ?></td>
                <td><a href="header.php?userdelete_id=<?php echo $row['user_id']; ?>"><button class="btn btn-danger btn-sm">Delete</button></a>&nbsp;<a href="update_user.php?userupdate_id=<?php echo $row['user_id']; ?>"><button class="btn btn-primary btn-sm">Edit</button></a></td>
            </tr>

        <?php }
        ?>

    </tbody>
</table>

</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>
<script>
    $(document).ready(function() {
        $('#example').DataTable({
            "language": {
                "url": "//cdn.datatables.net/plug-ins/1.10.25/i18n/Turkish.json"
            }
        });
    });
</script>
</body>

</html>
