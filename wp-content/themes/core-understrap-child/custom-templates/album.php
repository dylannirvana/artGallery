<div id="gallery" class="scene">

  <div class="album py-5 bg-light">
    <div class="container">


      <!-- Modal -->
      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <!-- <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div> -->
        <div class="modal-body">
          <img class="modal-image" src="" id="photo_modal" name="photo">
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary">Purchase</button>
        </div>
      </div>
    </div>
  </div>

  <script type="text/javascript">

  jQuery(document).ready(function ($) { // this simply allows me to use $
    $('img').on('click', function() {
      var image = $(this).attr('src');
      // console.log(image);
      $('#photo_modal').attr('src', image); // attaches photo to Modal

      // TODO:  attach title and text

    })
  });

</script>

<div class="row">
  <div class="col-xl-3 col-md-4 col-sm-6">
    <div class="card mb-4 box-shadow" data-toggle="modal" data-target="#exampleModal">
      <img class="card-img-top" src="wp-content/themes/core-understrap-child/img/painter.jpg" alt="Card image cap">
      <div class="card-body">
        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
        <div class="d-flex justify-content-between align-items-center">
          <div class="btn-group">
            <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
          </div>
          <small class="text-muted">2011</small>
        </div>
      </div>
    </div>
  </div>
  <div class="col-xl-3 col-md-4 col-sm-6">
    <div class="card mb-4 box-shadow" data-toggle="modal" data-target="#exampleModal">
      <img class="card-img-top" src="wp-content/themes/core-understrap-child/img/painter.jpg" alt="Card image cap">
      <div class="card-body">
        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
        <div class="d-flex justify-content-between align-items-center">
          <div class="btn-group">
            <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
          </div>
          <small class="text-muted">2011</small>
        </div>
      </div>
    </div>
  </div>
  <div class="col-xl-3 col-md-4 col-sm-6">
    <div class="card mb-4 box-shadow" data-toggle="modal" data-target="#exampleModal">
      <img class="card-img-top" src="wp-content/themes/core-understrap-child/img/painter.jpg" alt="Card image cap">
      <div class="card-body">
        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
        <div class="d-flex justify-content-between align-items-center">
          <div class="btn-group">
            <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
          </div>
          <small class="text-muted">2011</small>
        </div>
      </div>
    </div>
  </div>

  <div class="col-xl-3 col-md-4 col-sm-6">
    <div class="card mb-4 box-shadow" data-toggle="modal" data-target="#exampleModal">
      <img class="card-img-top" src="wp-content/themes/core-understrap-child/img/painter.jpg" alt="Card image cap">
      <div class="card-body">
        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
        <div class="d-flex justify-content-between align-items-center">
          <div class="btn-group">
            <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
          </div>
          <small class="text-muted">2011</small>
        </div>
      </div>
    </div>
  </div>
  <div class="col-xl-3 col-md-4 col-sm-6">
    <div class="card mb-4 box-shadow" data-toggle="modal" data-target="#exampleModal">
      <img class="card-img-top" src="wp-content/themes/core-understrap-child/img/painter.jpg" alt="Card image cap">
      <div class="card-body">
        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
        <div class="d-flex justify-content-between align-items-center">
          <div class="btn-group">
            <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
          </div>
          <small class="text-muted">2011</small>
        </div>
      </div>
    </div>
  </div>
  <div class="col-xl-3 col-md-4 col-sm-6">
    <div class="card mb-4 box-shadow" data-toggle="modal" data-target="#exampleModal">
      <img class="card-img-top" src="wp-content/themes/core-understrap-child/img/painter.jpg" alt="Card image cap">
      <div class="card-body">
        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
        <div class="d-flex justify-content-between align-items-center">
          <div class="btn-group">
            <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
          </div>
          <small class="text-muted">2011</small>
        </div>
      </div>
    </div>
  </div>

  <div class="col-xl-3 col-md-4 col-sm-6">
    <div class="card mb-4 box-shadow" data-toggle="modal" data-target="#exampleModal">
      <img class="card-img-top" src="wp-content/themes/core-understrap-child/img/painter.jpg" alt="Card image cap">
      <div class="card-body">
        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
        <div class="d-flex justify-content-between align-items-center">
          <div class="btn-group">
            <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
          </div>
          <small class="text-muted">2011</small>
        </div>
      </div>
    </div>
  </div>
  <div class="col-xl-3 col-md-4 col-sm-6">
    <div class="card mb-4 box-shadow" data-toggle="modal" data-target="#exampleModal">
      <img class="card-img-top" src="wp-content/themes/core-understrap-child/img/painter.jpg" alt="Card image cap">
      <div class="card-body">
        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
        <div class="d-flex justify-content-between align-items-center">
          <div class="btn-group">
            <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
          </div>
          <small class="text-muted">2011</small>
        </div>
      </div>
    </div>
  </div>
  <div class="col-xl-3 col-md-4 col-sm-6">
    <div class="card mb-4 box-shadow" data-toggle="modal" data-target="#exampleModal">
      <img class="card-img-top" src="wp-content/themes/core-understrap-child/img/painter.jpg" alt="Card image cap">
      <div class="card-body">
        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
        <div class="d-flex justify-content-between align-items-center">
          <div class="btn-group">
            <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
          </div>
          <small class="text-muted">2011</small>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
</div>
</div>
