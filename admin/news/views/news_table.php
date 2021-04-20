<div class="table-responsive" style="font-family: ui monospace;">
  <table class="table table-bordered" id="table_news" width="100%" cellspacing="0" style="font-size: 15px;">
    <thead>
      <tr>
        <th>IMAGE</th>
        <th>TITLE</th>
        <th>AUTHOR</th>
        <th>DESCRIPTION</th>
        <th>DATE</th>
        <th>STATUS</th>
        <th width="7%"><center>Action</center></th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($news as $key => $article): ?> 
       <tr>
        <td>
          <center>
            <img id="td_image<?php echo $article['id'];?>" data-data0="<?php echo $article["image"];?>" src="<?php echo $article["image"];?>" style="height:50px;width:50px;" class="img-rounded"> 
          </center>
        </td>
        <td>
          <div id="td_author<?php echo $article['id'];?>" data-data1="<?php echo $article['author']; ?>">
            <?php echo $article['author']; ?>
          </div>
        </td>
        <td>
          <div id="td_title<?php echo $article['id'];?>" data-data1="<?php echo $article['title']; ?>">
            <?php echo $article['title']; ?>
          </div>
        </td>
        <td>
          <div id="td_description<?php echo $article['id'];?>" data-data1="">

            <?php echo $article['description']; ?>
          </div>
        </td>
        <td>
          <div id="td_dateuploaded<?php echo $article['id'];?>" data-data1="<?php echo $article['dateuploaded']; ?>">
            <?php echo $article['dateuploaded']; ?>
          </div>
        </td>
        <td>
          <div id="td_status<?php echo $article['id'];?>" data-data1="<?php echo $article['status']; ?>">
            <?php echo $article['status']; ?>
          </div>
        </td>
        <td>
          <center>
            <div class="cell-button-alignment">
              <div class="cell-button btn-group">
                <button type="button" id="td_btn_edit" data-id_edit="<?php echo $article['id'];?>" data-toggle= "modal" data-target="#modalUpdateProduct" class="btn btn-md btn-primary">
                  <span class="fas fa-edit"></span>
                </button>
                
                <button type="button" id="td_btn_delete" data-id_delete="<?php echo $article['id'];?>" class="btn btn-md btn-danger">
                  <span class="fa fa-trash"></span>
                </button>
              </div>
            </div>
          </center>
        </td>

      </tr>
    <?php endforeach ?>    
  </tbody>
</table>
</div>