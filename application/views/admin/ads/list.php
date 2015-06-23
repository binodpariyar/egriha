<a href="<?php echo admin_url('advertisement/add') ?>" class="btn btn-primary">Add An Advertisement</a>

<div class="panel panel-default"> 
    <div class="panel-heading">
        <h6 class="panel-title"><i class="icon-user"></i>Advertisements</h6>
        <h6 class="panel-title pull-right">
            <a href="<?php echo admin_url('advertisement/add') ?>">
                <i class="icon-plus"></i>				
            </a>									 
        </h6>
    </div> 
    <div class="table-responsive"> 
        <table class="table table-striped table-bordered"> 
            <thead> 
                <tr> 
                    <th>ID</th> 
                    <th>Title</th> 
                    <th>Image</th> 
                    <th>Address</th>
                    <th>Action</th>
                </tr> 
            </thead> 
            <tbody class="sortable">
                <?php if (count($ads) != 0) {
                    foreach ($ads as $s) { ?>
                        <tr id="item_<?= $s->id ?>"> 

                            <td><?php echo $s->id; ?></td> 					 
                            <td><?php echo $s->title ;?></td> 					 				 
                            <td><?php echo $s->link ;?></td>                                                                     
                            <td>
                                <img width="100px" src="<?php echo base_url('uploads/advertisement_image/'.$s->image) ;?>">
                            </td> 					 				 				 				 
                            <td> 
                                <a data-original-title="Edit Photo" href="<?php echo admin_url('advertisement/edit/' . $s->id); ?>" class="btn btn-success btn-icon tip" title="">
                                    Edit <i class="glyphicon glyphicon-pencil"></i>
                                </a> 
                                <a onclick="return confirm('Are you sure you want to Delete Slide ?')" data-original-title="Delete Photo" href="<?php echo admin_url('advertisement/delete/' . $s->id); ?>" class="btn btn-danger btn-icon tip" title="">
                                    Delete <i class="glyphicon glyphicon-remove"></i>
                                </a> 

                            </td> 
                        </tr>
                        <?php
                    }
                } else {
                    echo '<tr><td colspan="5"> No Result Found.</td> </tr>';
                }
                ?>

            </tbody> 
        </table> 
    </div> 
</div>

<script>
    $(document).ready(function(){
        var admin_url = '<?= admin_url() ?>';
        $('.sortable').sortable({
            containerSelector: 'table',
            itemPath: 'tbody',
            itemSelector: 'tr',
            placeholder: '<tr class="placeholder"/>',
            activeClass: "table_active",
            hoverClass: "table_hover",
            drop: function (event, ui) {
                 
                $(this).removeClass(".alt-row");
                $(this).addClass('dropped');
            },
            stop: function (event, ui) {
                var data = $(this).sortable('serialize');
                console.log(data);
                // POST to server using $.post or $.ajax
                $.ajax({
                    data: data,
                    type: 'POST',
                    url: admin_url+'/advertisement/manage_order',
                    success:function(){
//                        window.location.reload();
                    }
                });
            }
        });
        
        $( ".sortable" ).disableSelection();
        
        
    });
    
    



</script>

<style>

    .paginate strong{
        background-color: #32434D;
        color: #FFFFFF;
        outline: 0 none;
        font-size: 12px;
        font-weight: 600;
        margin-left: 1px;
        padding: 5px 10px;
        border-radius: 2px;
    }

    .paginate a{
        color: #505050;
        outline: 0 none;
        font-size: 12px;
        font-weight: 600;
        margin-left: 1px;
        padding: 5px 10px;
        border-radius: 2px;
    }
    .paginate a:hover{
        background-color: #65B688;
        color: #ffffff;
        outline: 0 none;
        font-size: 12px;
        font-weight: 600;
        margin-left: 1px;
        padding: 5px 10px;
        border-radius: 2px;
    }
</style>