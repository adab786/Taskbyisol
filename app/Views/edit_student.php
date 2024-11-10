<link rel="stylesheet" href="/assets/tablestyle.css">

<form action="/student/update/<?= $student['id']; ?>" method="post">
    <?= csrf_field(); ?> <!-- CSRF Token Field -->
    <input type="text" name="Name" value="<?= old('Name', $student['Name']); ?>" required>
    <input type="email" name="Email" value="<?= old('Email', $student['Email']); ?>" required>
    <input type="text" name="Phone" value="<?= old('Phone', $student['Phone']); ?>" required>
    <input type="text" name="Course" value="<?= old('Course', $student['Course']); ?>" required>
    <button type="submit">Update Student</button>
</form>
