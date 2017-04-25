
<br/><br/><br/>
<?php if(count($feed) > 0){?>
    <div class="container" >
      <div class="row">
        <div class="well well-small col-md-5">
          <h1 class="pull-right">Episode List</h1><br/><br/><br/>
          <ul>
          <?php
          foreach($feed as $item){?>
            <li><a href="<?= base_url()?>feed/<?= $item['castid']; ?>"><h4><?= $item['title']; ?></h4></a></li>
         <?php }?>
         </ul>
        </div>
        <div class="col-md-2"></div>
      <!-- Main jumbotron for a primary marketing message or call to action -->
      <div class="well well-small col-md-5 ">
        <h1 class="pull-right">Edit Episode</h1><br/><br/><br/>
        <form action="<?= base_url()?>feed/updatetrack" method="post" accept-charset="utf-8" enctype="multipart/form-data">
          <?= (isset($errors))?$errors:null ?>

          <div class="form-group">
            <label for="exampleInputEmail1">Subtitle</label>
            <input type="text" class="form-control" name="subtitle" placeholder="Add Subtitle here." value="<?= $edit[0]['subtitle'] ?>" />
          </div>

          <div class="form-group">
            <label for="exampleInputEmail1">Duration</label>
            <input type="text" class="form-control" name="duration" placeholder="hour:mins:seconds" value="<?= $edit[0]['duration'] ?>"/>
          </div>

          <div class="form-group">
            <label for="exampleInputEmail1">Keywords</label>
            <input type="text" class="form-control" name="keywords" placeholder="me,you,they,us" value="<?= $edit[0]['keywords'] ?>"/>
          </div>

          <div class="form-group">
            <label for="exampleInputEmail1">Date</label>
            <input type="text" class="form-control" id="datepicker" name="Date" placeholder="The date recorded." value="<?= $edit[0]['Date'] ?>"/>
          </div>

          <div class="select">
            <label>
               Explicit
            </label>
            <select type="select" name="explicit" >
              <option <?= ($edit[0]['explicit'] === 'no')?'selected':null;?> value="no">no</option>
              <option <?= ($edit[0]['explicit'] === 'yes')?'selected':null;?> value="yes">yes</option>
            </select>
          </div>

          <div class="form-group">
            <label for="exampleInputEmail1">Summary</label>
            <textarea class="form-control" name="summary" rows="3"><?= $edit[0]['summary'] ?></textarea>
          </div>

            <input type="hidden" class="form-control" name="castid" value="<?= $edit[0]['castid'] ?>"/>

          <button type="submit" class="btn btn-default pull-right">Submit</button>
        </form>
        <br/><br/><br/>
      </div>
    </div>
<?php } else {?>
  <div class="container" >
    <div class="row">
      <div class="well well-small col-md-12 "><h1>Please <a href="<?= base_url()?>/cast">add</a> an Episode.</h1></div>
    </div>
  </div>
<?php } ?>
    </div>
