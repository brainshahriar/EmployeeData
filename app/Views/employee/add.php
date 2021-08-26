
<h2 >Add Employee</h2>
<h3 style="float:right"><a href="<?= base_url('employee') ?>">Back</a></h3>


<br><br>








<form action="<?= base_url('employee-store') ?>" method="POST">
  <label >First Name</label><br>
  <input type="text" name="first name" required><br>
  <label >Last Name</label><br>
  <input type="text"  name="last name" required><br>
  <label >Phone</label><br>
  <input type="number"  name="phone" required><br>
  <label >Email</label><br>
  <input type="text"  name="email" required><br>
  <label >Designation</label><br>
  <input type="text"  name="designation" required><br><br>
  <input type="submit" value="submit">
</form>

