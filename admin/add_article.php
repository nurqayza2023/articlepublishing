<?php
session_start();
require_once './config/config.php';
require_once './includes/auth_validate.php';

$servername='localhost';
$username='id20849321_root';
$password='md5Encryption!';
$dbname = "id20849321_articlepublishingsystem";
$link=mysqli_connect($servername,$username,$password,"$dbname");
if(!$link){
   die('Could not Connect My Sql:' .mysql_error());
}
if(isset($_POST['save']))
{    
    $Image = $_POST['Image'];
    $Title = $_POST['Title'];
    $Date = $_POST['Date'];
    $Content = $_POST['Content'];
    $sql = "INSERT INTO article (Image,Title,Date,Content)
    VALUES ('$Image','$Title','$Date','$Content')";
    if (mysqli_query($link, $sql)) {
      echo "New Article created successfully !";
    } else {
      echo "Error: " . $sql . "
" . mysqli_error($link);
    }
    mysqli_close($link);
}

//We are using same form for adding and editing. This is a create form so declare $edit = false.
$edit = false;

require_once 'includes/header.php'; 
?>
<div id="page-wrapper">
<div class="row">
     <div class="col-lg-12">
            <h2 class="page-header">Add Article</h2>
        </div>
        
</div>
    <form class="form" action="" method="post"  id="article_form" enctype="multipart/form-data">
      <fieldset>
    <div class="form-group">
        <label for="Title">Title *</label>
          <input type="text" name="Title" value="<?php echo htmlspecialchars($edit ? $article['Title'] : '', ENT_QUOTES, 'UTF-8'); ?>" placeholder="Title" class="form-control" required="required" id = "Title" >
    </div> 

    <div class="form-group">
        <label for="Image">Image *</label>
        <input type="Text" name="Image" value="<?php echo htmlspecialchars($edit ? $article['Image'] : '', ENT_QUOTES, 'UTF-8'); ?>" placeholder="Image" class="form-control" required="required" id="Image">
    </div> 

    <div class="form-group">
        <label for="Content">Content</label>
          <textarea name="Content" placeholder="Content" class="form-control" id="Content"><?php echo htmlspecialchars(($edit) ? $article['Content'] : '', ENT_QUOTES, 'UTF-8'); ?></textarea>
    </div> 

    <div class="form-group">
        <label>Date</label>
        <input name="Date" value="<?php echo htmlspecialchars($edit ? $article['Date'] : '', ENT_QUOTES, 'UTF-8'); ?>"  placeholder="Date" class="form-control"  type="date">
    </div>

    <div class="form-group text-center">
        <label></label>
        <button type="submit" class="btn btn-warning" >Save <span class="glyphicon glyphicon-send"></span></button>
    </div>            
</fieldset>

    </form>
</div>


<script type="text/javascript">
$(document).ready(function(){
   $("#customer_form").validate({
       rules: {
            f_name: {
                required: true,
                minlength: 3
            },
            l_name: {
                required: true,
                minlength: 3
            },   
        }
    });
});
</script>

<?php include_once 'includes/footer.php'; ?>