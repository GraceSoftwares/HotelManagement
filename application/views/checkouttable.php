<?php
echo '<table border="1" cellspacing="2" cellpadding="2" width= "100%" margin= "20px auto" table-layout= "auto"> 
<tr> 
    <td> <font face="Arial">Booking ID</font> </td> 
    <td> <font face="Arial">Checkout date</font> </td> 
    <td> <font face="Arial">Total Nights</font> </td> 
    <td> <font face="Arial">Total Price</font> </td> 
    <td> <font face="Arial">Booked By</font> </td> 
</tr>';

foreach($results as $data) {
$field1name = $data->id;
$field2name = $data->checkoutdate;
$field3name = $data->totalnights;
$field4name = $data->totalprice;
$field5name = $data->bookedby; 

echo '<tr> 
          <td>'.$field1name.'</td> 
          <td>'.$field2name.'</td> 
          <td>'.$field3name.'</td> 
          <td>'.$field4name.'</td> 
          <td>'.$field5name.'</td> 
      </tr>';
//echo $data->id . " - " . $data->phone . "<br>";
}
?>
   <p><?php echo $links; ?></p>