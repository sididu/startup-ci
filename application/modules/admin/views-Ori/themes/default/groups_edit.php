<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h2>
                User groups
                <a  href="<?= base_url('admin/brands') ?>" class="btn btn-warning">Go back to groups listing</a>
            </h2>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Update group
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-6">
                            <form role="form" method="POST" action="<?=base_url('admin/user-groups/edit/'.$group->id)?>">
                                <div class="form-group">
                                    <label>Group Id</label>
                                    <input class="form-control" value="<?=$group->id?>" placeholder="Auto generated" disabled="1">
                                </div>
                                <div class="form-group">
                                    <label>Name</label>
                                    <input class="form-control" value="<?=$group->name?>" placeholder="Enter group description" id="name" name="name">
                                </div>
                                <div class="form-group">
                                    <label>Description</label>
                                    <input class="form-control" value="<?=$group->description?>" placeholder="Enter group description" id="description" name="description">
                                </div>

                                <button type="submit" class="btn btn-primary">Submit Button</button>
                            </form>
                        </div>


                    </div>
                    <!-- /.row (nested) -->
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
</div>
<!-- /#page-wrapper -->
