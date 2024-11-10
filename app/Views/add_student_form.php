<link rel="stylesheet" href="/assets/tablestyle.css">

<form action="/student/add" method="post">
    <h1>Add Student</h1>

    <?= csrf_field(); ?>

    <label for="name">Name:</label>
    <input 
        type="text" 
        name="name" 
        id="name"
        placeholder="Name" 
        required
        minlength="3" 
        maxlength="100"
        title="Name must be between 3 and 100 characters long."
    >

    <label for="email">Email:</label>
    <input 
        type="email" 
        name="email" 
        id="email"
        placeholder="Email" 
        required
        title="Please enter a valid email address."
    >

    <label for="phone">Phone:</label>
    <input 
        type="tel" 
        name="phone" 
        id="phone"
        placeholder="Phone"
        required
        pattern="^\d{10}$" // 10 digits only
        title="Phone number must be 10 digits."
    >

    <label for="course">Course:</label>
    <input 
        type="text" 
        name="course" 
        id="course"
        placeholder="Course" 
        required
        minlength="3"
        title="Course name should be at least 3 characters long."
    >

    <button type="submit">Save Student</button>
</form>
