<?php $this->layout("layouts/default", ["title" => APPNAME]) ?>

<?php $this->start("page") ?>
<img src="/images/blog-image-3-940x460.jpg" alt="" style="width: 100%; height: 90px; object-fit: cover;">
<div class="container">
    <section id="inner" class="inner-section section">
        <div class="container">

            <!-- SECTION HEADING -->
            <h2 class="section-heading text-center wow fadeIn" data-wow-duration="1s">Add Book</h2>
            <div class="inner-wrapper row">
                <div class="col-md">
                </div>
                <div class="col-md-6">
                    <!-- <p class="wow fadeIn" data-wow-duration="2s">Add your books here.</p> -->
                    <form name="frm" id="frm" action="/books/create" method="post" class="col-md col-md-offset">
                        <!-- Name -->
                        <div class="form-group<?=isset($errors['name']) ? ' has-error' : '' ?>">
                            <label for="name">Name</label>
                            <input type="text" name="name" class="form-control" maxlen="255" id="name" placeholder="Enter Name" 
                                value="<?=isset($old['name']) ? $this->e($old['name']) : '' ?>" />

                            <?php if (isset($errors['name'])): ?>
                                <span class="help-block">
                                    <strong><?=$this->e($errors['name'])?></strong>
                                </span>
                            <?php endif ?>                                 
                        </div>
                        <!-- Author -->
                        <div class="form-group<?=isset($errors['author']) ? ' has-error' : '' ?>">
                            <label for="author">Author</label>
                            <input type="text" name="author" class="form-control" maxlen="255" id="author" placeholder="Enter Author" 
                                value="<?=isset($old['author']) ? $this->e($old['author']) : '' ?>" />

                            <?php if (isset($errors['author'])): ?>
                                <span class="help-block">
                                    <strong><?=$this->e($errors['author'])?></strong>
                                </span>
                            <?php endif ?>                                 
                        </div>
                        
                        <!-- Category -->
                        <div class="form-group<?=isset($errors['category']) ? ' has-error' : '' ?>">
                            <label for="category">Category</label>
                            <select name="category" id="category" class="form-control">
                                <?php foreach($categories as $category): ?>
                                    <option value="<?=$this->e($category->id)?>"><?=$this->e($category->name)?></option>
                                <?php endforeach ?>
                            </select>

                            <?php if (isset($errors['category'])): ?>
                                <span class="help-block">
                                    <strong><?=$this->e($errors['category'])?></strong>
                                </span>
                            <?php endif ?>                                   
                        </div>

                        <!-- Abstract -->
                        <div class="form-group<?=isset($errors['abstract']) ? ' has-error' : '' ?>">
                            <label for="abstract">Abstract</label>
                            <textarea name="abstract" id="abstract" class="form-control" 
                                placeholder="Enter abstract (maximum character limit: 255)"><?=isset($old['abstract']) ? $this->e($old['abstract']) : '' ?></textarea>

                            <?php if (isset($errors['abstract'])): ?>
                                <span class="help-block">
                                    <strong><?=$this->e($errors['abstract'])?></strong>
                                </span>
                            <?php endif ?>                                 
                        </div>

                        <!-- Submit -->
                        <button type="submit" name="submit" id="submit" class="btn btn-primary form-group">Add Book</button>
                    </form>

                </div>
                <div class="col-md">
                </div>
            </div>

        </div>
    </section>
</div>
<?php $this->stop() ?>

<?php $this->start("page_specific_js") ?>
    <script>
        $(document).ready(function(){
            new WOW().init();
        });
    </script>
<?php $this->stop() ?>
