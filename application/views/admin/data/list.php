
<?php $this->load->view('admin/header');?>
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h2 class="h2"> User Profile</h2>
      </div>
      <?php $success=$this->session->userdata('success'); ?>
<?php if(!empty($success)) {?>
<div class="alert alert-success" role="alert">
<?php echo $success;?>
</div><?php }?>
   <div class="table-responsive"><table class="table table-striped" >
   <tr>
  <th>ID</th>
  <th>First Name</th>
  <th>Last Name</th>
  <th>Email</th>
  <th>Phone</th>
  <th>Address</th>
  <th>City</th>
  <th>Country</th>
  <th>Zip</th>
  <th>State</th>


  
   </tr>
   <?php  

   if(!empty($detail)){ 
      
       ?>
<tr>
<td><?php echo $detail->id;  ?></td>
<td><?php echo  $detail->first_name;?></td>
<td><?php echo $detail->last_name;?></td>
<td><?php  echo $detail->email;?></td>
<td><?php  echo $detail->phone;?></td>
<td><?php  echo $detail->address;?></td>
<td><?php  echo $detail->city;?></td>
<td><?php  echo $detail->country;?></td>
<td><?php  echo $detail->zip;?></td>
<td><?php  echo $detail->state;?></td>


</tr>
<?php     
}
?>

   
   </table></div>
      </div>
    
    </main>
    <?php $this->load->view('admin/footer');?>
