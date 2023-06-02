<fieldset>
    <div class="form-group">
        <label for="Title">Title *</label>
          <input type="text" name="Title" value="<?php echo htmlspecialchars($edit ? $article['Title'] : '', ENT_QUOTES, 'UTF-8'); ?>" placeholder="Title" class="form-control" required="required" id = "Title" >
    </div> 

    <div class="form-group">
        <label for="Image">Image *</label>
        <input type="text" name="Image" value="<?php echo htmlspecialchars($edit ? $article['Image'] : '', ENT_QUOTES, 'UTF-8'); ?>" placeholder="Image" class="form-control" required="required" id="Image">
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
