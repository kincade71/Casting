
<br/><br/><br/>
<?php if(isset($status) && $status){ ?>
  <div class="container">
    <div class="row">
      <div class="alert alert-success pull-right" id="successAlert" role="alert">Well done! You successfully added a new episode.</div>
    </div>
  </div>
<?}?>
    <div class="container theme-showcase" role="main">

      <!-- Main jumbotron for a primary marketing message or call to action -->
      <div class="well well-small">
        <h1 class="pull-right">Add Episode</h1><br/><br/><br/>
        <form action="<?= base_url()?>addtrack" method="POST" accept-charset="utf-8" enctype="multipart/form-data">
          <?= (isset($errors))?$errors:null ?>

          <div class="form-group">
            <label for="exampleInputEmail1">Subtitle</label>
            <input type="text" class="form-control" name="subtitle" placeholder="Add Subtitle here." />
          </div>

          <div class="form-group">
            <label for="exampleInputEmail1">Duration</label>
            <input type="text" class="form-control" name="duration" placeholder="hour:mins:seconds"/>
          </div>

          <div class="form-group">
            <label for="exampleInputEmail1">Keywords</label>
            <input type="text" class="form-control" name="keywords" placeholder="me,you,they,us"/>
          </div>

          <div class="form-group">
            <label for="exampleInputEmail1">Date</label>
            <input type="text" class="form-control" id="datepicker" name="Date" placeholder="The date recorded."/>
          </div>

          <div class="select">
            <label>
               Explicit
            </label>
            <select type="select" name="explicit" >
              <option value="no">no</option>
              <option value="yes">yes</option>
            </select>
          </div>

          <div class="form-group">
            <label for="exampleInputEmail1">Summary</label>
            <textarea class="form-control" name="summary" rows="3"></textarea>
          </div>

          <div class="form-group">
            <label for="exampleInputFile">Upload New podcast episode here.</label>
            <input type="file" id="artwork" name="userfile" multiple="multiple" class="">
          </div>

          <button type="submit" class="btn btn-default pull-right">Submit</button>
        </form>
        <br/><br/><br/>
      </div>





    </div>
