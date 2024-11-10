<!DOCTYPE html>
<html lang="en">
<head>
    <title>Student Management</title>
    <link rel="stylesheet" href="/assets/tablestyle.css">
</head>

<body>
    <div style="display: flex; justify-content: space-between; margin-right: 20%;">
        <h2>Student Details</h2>
        <button
            onclick="window.location.href='<?php echo base_url('student/form'); ?>'"
            style="margin-bottom: 10px; 
                   padding: 5px 10px; 
                   background-color: blue; 
                   color: white; 
                   border: none; 
                   cursor: pointer;
                   border-radius: 5px;">
            Add Student
        </button>
    </div>
    
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Student Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Course</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($students as $student): ?>
                <tr>
                    <td><?= $student['id']; ?></td>
                    <td><?= $student['Name']; ?></td>
                    <td><?= $student['Email']; ?></td>
                    <td><?= $student['Phone']; ?></td>
                    <td><?= $student['Course']; ?></td>
                    <td>
                        <a
                        
                        style="margin: 10px; 
                               padding: 10px 20px; 
                               background-color: skyblue; 
                               text-decoration: none; 
                               color: #333; 
                               border-radius: 5px;"

                        
                        href="<?= base_url('student/view/'.$student['id']); ?>">View</a> | 
                        <a 

                        style="margin: 10px; 
                               padding: 10px 20px; 
                               background-color: green; 
                               text-decoration: none; 
                               color: #333; 
                               border-radius: 5px;"

                        
                        href="<?= base_url('student/edit/'.$student['id']); ?>">Edit</a> | 
                        <a

                        style="margin: 10px; 
                               padding: 10px 10px; 
                               background-color: red; 
                               text-decoration: none; 
                               color: #333; 
                               border-radius: 5px;"
                        
                        href="<?= base_url('student/delete/'.$student['id']); ?>" onclick="return confirm('Are you sure?');">Delete</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

</body>
</html>
