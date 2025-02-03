
<?php include ('header.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin dashboard</title>
    <!-- Add Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
    
<!-- now will fetch the key stored aratcileList data from admin controller using unique key which is the article first value passed into the vew argument with path -->
 <!-- <?php print_r($articles) ;?> -->
<!--container is the bootstrap class which basically help to give left rigth margin space -->
<div class ="container" style="margin-top:50px;">
    <h1>Welcome Admin!</h1>
    <!-- create the table class name in div before creating table  -->
    <div class ="table">
  <table>
    <!-- before keeping in tr we can use thead which is the good practce to crarte table  and give headings as bold as compare to normal table  -->
     <thead>
    <!-- now crrate one row using tr -->
     <tr>
        <!-- now fill that first row with data using td cfreate td depending on how many columns data we want to show on page  -->
         <!-- but as we can see that we are putting our dtaa into thead so will use now th in replace of td -->
         <th>Id</th>
         <th>Article Title</th>
         <th>Edit</th>
         <th>Delete</th>
     </tr>
     </thead>
     <!-- now will cfrate table body using tbody-->
      <tbody> 
        <!-- apply the count condtion in if blk for checking the count of total artciles using count fun  and pass thekey  variable -->

            <?php if(count($articles)): ?> 

        <!-- dynamic part starts from here-->
         <?php foreach ($articles as $art):?>

        <tr>
            <!-- now write some ststaiC DUMMY DTAA -->
             <td>1</td>
             <!-- dynamic display of data and passed the article_title columkn from the article  -->
             <!-- <td> <?php echo $art->article_title; ?> </td> -->
             <!-- we can use iot only eqaul to also by replacing the php -->
             <td> <?=  $art->article_title; ?> </td>


             <!-- now will create buttons but more better will be using anacer tag so if we want to send dataa from one page to anther with the helpo of query string we can send easily -->
              <!-- as in href will provide the path as we dont have to move from on e page to nakother so will simply write the # and apply bootsrap class butns -->
            <td> <a href="#" class="btn btn-primary">Edit</a></td>
            <!--danger class will show red mark   -->
            <td> <a href="#" class="btn btn-danger">Delete</a></td>
        </tr>
        <!-- dyamic part end from here and count fun curyly braces also -->
          <!-- for reducing the curly braces we replace it with clon and end with endforech -->
          <?php endforeach; ?>
          <!-- here apply else condin of count if blk -->
          <?php else: ?>
            <tr>
                <td colspan="3">No Data available</td>
            </tr>
         <!-- now same we can do for if block of count  -->
          <?php endif; ?>
          
         
      </tbody>
  </table>
    </div>
</div>
    
</body>
</html>
<?php include ('footer.php'); ?>
