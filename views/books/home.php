<?php $this->layout("layouts/default", ["title" => APPNAME]) ?>

<?php $this->start("page_specific_css") ?>
    <link href="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/css/bootstrap.min.css" rel="stylesheet">
    <link href="//cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css" rel="stylesheet">
    <style>
        #books_wrapper {
            margin-bottom: 30px;
        }
    </style>
    
<?php $this->stop() ?>

<?php $this->start("page") ?>
<img src="/images/blog-image-3-940x460.jpg" alt="" style="width: 100%; height: 90px; object-fit: cover;">
<div class="container">
    <section id="inner" class="inner-section section">
            <!-- SECTION HEADING -->
            <h2 class="section-heading text-center wow fadeIn" data-wow-duration="1s"><b>List of books</b></h2>
            <div class="inner-wrapper row">
                <div class="col-md-12">
                
                    <!-- FLASH MESSAGES HERE -->

                    <a href="/books/add" class="btn btn-primary" style="margin-bottom: 30px;">
                        <i class="fa fa-plus"></i> New Book</a>

                    <!-- Table Starts Here -->
                    <table id="books" class="table table-bordered table-responsive table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Author</th>
                                <th>Category</th>
                                <th>Abstract</th>
                                <th>Date Created</th>
                                <th>Date Updated</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php foreach($books as $book): ?>
                            <tr>
                                <td><?=$this->e($book->id)?></td>
                                <td><?=$this->e($book->name)?></td>
                                <td><?=$this->e($book->author)?></td>
                                <td><?=$this->e($book->category->name)?></td>
                                <td><?=$this->e($book->abstract)?></td>
                                <td><?=$this->e(date("d-m-Y H:i", strtotime($book->created_at)))?></td>
                                <td><?=$this->e(date("d-m-Y H:i", strtotime($book->updated_at)))?></td>
                                
                                <td>
                                    <a href="/books/edit/<?=$book->id?>"
                                        class="btn btn-xs btn-warning">
                                        <i alt="Edit" class="fa fa-pencil"> Edit</i></a>
                                    <form class="delete" action="/books/delete/<?=$book->id?>"
                                        method="POST" style="display: inline;">
                                        <button type="submit" class="btn btn-xs btn-danger"
                                            name="delete-book">
                                            <i alt="Delete" class="fa fa-trash"> Delete</i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        <?php endforeach ?>
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Author</th>
                                <th>Category</th>
                                <th>Abstract</th>
                                <th>Date Created</th>
                                <th>Date Updated</th>
                                <th>Actions</th>
                            </tr>
                        </tfoot>
                    </table>
                    <!-- Table Ends Here -->
                </div>
            </div>
    </section>
</div>

<div id="delete-confirm" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <h6 class="modal-title"><b> Confirmation &nbsp;</b></h6>
                <button type="button" class="close"
                    data-dismiss="modal">&times;</button>
                
            </div>
            <div class="modal-body">Do you want to delete this book?</div>
            <div class="modal-footer">
                <button type="button" data-dismiss="modal"
                    class="btn btn-danger" id="delete">Delete</button>
                <button type="button" data-dismiss="modal"
                    class="btn btn-default">Cancel</button>
            </div>
        </div>
    </div>
</div>

<?php $this->stop() ?>

<?php $this->start("page_specific_js") ?>
    <script src="//cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script src="//cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>  
    <script>
        $(document).ready(function(){
            new WOW().init();
            
            $('#books').DataTable();  
            
            $('button[name="delete-book"]').on('click', function(e){
                const $form = $(this).closest('form');
                e.preventDefault();
                $('#delete-confirm').modal({ backdrop: 'static', keyboard: false })
                    .one('click', '#delete', function() {
                        $form.trigger('submit');
                });
            });
        });
    </script>
<?php $this->stop() ?>
