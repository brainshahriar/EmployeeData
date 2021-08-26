  
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>
<body>

<div>
    <?php
    if(session()->getFlashdata('status'))
{
    echo "<h2>".session()->getFlashdata('status')."<h2>"; 
}
?>
</div>







<h1>Employee Data
    <a style="float:right" href="<?= base_url('employee-add'); ?>">Add Employee</a>
</h1>
<h3><a style="float:right" href="<?= base_url('employee'); ?>">Back</a></h3>



<table>
<thread>
  <tr>
     <th>Id</th>
           <th>First Name</th> 
          <th>Last Name</th>
        <th>Phone</th>
       <th>Email</th>
         <th>Deignation</th>
         <th>Action</th>
  </tr>
  <thread>

  <tbody>
        <?php foreach($employee as $row): ?>
            <tr>
                <td><?= $row['Id'] ?></td>
                <td><?= $row['first name'] ?></td>
                <td><?= $row['last name'] ?></td>
                <td><?= $row['phone'] ?></td>
                <td><?= $row['email'] ?></td>
                <td><?= $row['designation'] ?></td>
                <td>
                    <a href="">Edit</a>
                    <a href="">Delete</a>
                </td>
            </tr> 
            <?php endforeach ?>
 
      </tbody>
  
</table>
