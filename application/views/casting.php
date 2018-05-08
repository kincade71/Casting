
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
            <input type="text" class="form-control" name="keywords" value="Higher Way Suffolk, HWS, higher way ministries, Suffolk, Higher Way Ministries" placeholder="me,you,they,us"/>
          </div>

          <div class="form-group">
            <label for="exampleInputEmail1">Date</label>
            <input type="text" class="form-control" id="datepicker" name="Date" placeholder="The date recorded."/>
          </div>
          
          <div class="form-group">
            <label for="exampleInputEmail1">Season</label>
            <input type="text" class="form-control" name="season" value="<?= $season ?>" placeholder="<?= $season ?>"/>
            <span class="help-block">Must be updated manually when starting a new season.</span> 
          </div>
          
          <div class="form-group">
            <label for="exampleInputEmail1">Episode</label>
            <input type="text" class="form-control" name="episode" value="<?= $episode ?>" placeholder="<?= $episode ?>"/>
            <span class="help-block">Auto Increments Episode by 1 </span> 
          </div>
          
          <div class="form-group select">
            <label>
               Episode Type
            </label>
            <select type="select" name="episodeType" class="form-control" >
              <option value="full">full</option>
              <option value="trailer">trailer</option>
              <option value="bonus">bonus</option>
            </select>
          </div>

          <div class="form-group select">
            <label>
               Explicit
            </label>
            <select type="select" name="explicit" class="form-control">
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
            <input type="file" id="artwork" name="userfile" multiple="multiple" class="form-control">
          </div>

          <button type="submit" class="btn btn-default btn-lg pull-right">Submit</button>
        </form>
        <br/><br/><br/>
      </div>





    </div>
