<!DOCTYPE html>
<html lang="en">


<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>@yield('title')</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="{{ url('/vendors/iconfonts/font-awesome/css/all.min.css') }}" >
  <link rel="stylesheet" href="{{ url('/vendors/css/vendor.bundle.base.css') }}">
  <link rel="stylesheet" href="{{ url('/vendors/css/vendor.bundle.addons.css') }}">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="{{ url('css/style.css') }}">
  <!-- endinject -->
  <link rel="shortcut icon" href="{{ url('/images/logo.png') }}" />
</head>
<body>
      {{--********************************** modal Add New Book***************************************** --}}
  <div class="modal fade" id="exampleModal-4" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg " role="document" style="width: 50%;">
      <div class="modal-content">
        <form class="cmxform" id="commentForm"  method="POST" action="{{ route('book.store') }}"   enctype="multipart/form-data">
            @csrf
            <div class="modal-header">
            <h5 class="modal-title" id="ModalLabel">Ajouter un nouveau livre</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <div class="modal-body">
                <fieldset>
                <div class="row">
                    <div class="form-group col-12">
                        <label for="cname">Nom du livre (*)</label>
                        <input id="cname" class="form-control" name="name" minlength="2" type="text" required>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-6">
                        <label for="category">Categorie (*)</label>
                        <select id="category" name="category" class="js-example-basic-single w-100" style="width: 100%" required>
                            <option value="Enfant">Enfant</option>
                            <option value="Scolaire">Scolaire</option>
                            <option value="Religieux">Religieux</option>
                          </select>
                    </div>
                    <div class="form-group col-6">
                        <label for="edition">Edition (*)</label>
                        <input id="edition" class="form-control" type="text" name="edition" required>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-6">
                        <label for="theme">Thème (*)</label>
                        <input id="theme" class="form-control" type="text" name="theme" required>
                    </div>
                    <div class="form-group col-6">
                        <label for="format">Format (*)</label>
                        <select id="format" name="format" class="js-example-basic-single w-100" style="width: 100%" required>
                            <option>17x24</option>
                            <option>14x20</option>
                            <option>8x12</option>
                          </select>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-6">
                        <label for="type">Type (*)</label>
                        <select id="type" name="type" class="js-example-basic-single w-100" style="width: 100%" required>
                            <option>Couverture</option>
                            <option>Papier</option>
                            <option>Cellophane</option>
                          </select>
                    </div>
                    <div class="form-group col-6">
                        <label for="paper">Papier (*)</label>
                        <select id="paper" name="paper" class="js-example-basic-single w-100" style="width: 100%" required>
                            <option value="jaune">Jaune</option>
                            <option value="blanc">Blanc</option>
                          </select>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-12">
                        <label for="image">Image (*)</label>
                        <input id="image" name="image" type="file" class="dropify form-control" data-height="50" required>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-12">
                        <label for="abstract">Résumé</label>
                        <textarea name="abstract" id="abstract" class="form-control" maxlength="100" rows="2" placeholder="Un résumé de 100 caractères au maximum."></textarea>
                    </div>
                </div>

                </fieldset>
            </div>
            <div class="modal-footer">
            <input type="submit" value="Ajouter" class="btn btn-success">
            <button  class="btn btn-light" data-dismiss="modal">Close</button>
            </div>
        </form>
      </div>
    </div>
  </div>
   {{--***************************END modal Add New Book --******************************* --}}
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row default-layout-navbar">
        @include('partiels._navbar')
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_settings-panel.html -->
      <div class="theme-setting-wrapper">
        <div id="settings-trigger"><i class="fas fa-fill-drip"></i></div>
        <div id="theme-settings" class="settings-panel">
          <i class="settings-close fa fa-times"></i>
          <p class="settings-heading">SIDEBAR SKINS</p>
          <div class="sidebar-bg-options selected" id="sidebar-light-theme"><div class="img-ss rounded-circle bg-light border mr-3"></div>Light</div>
          <div class="sidebar-bg-options" id="sidebar-dark-theme"><div class="img-ss rounded-circle bg-dark border mr-3"></div>Dark</div>
          <p class="settings-heading mt-2">HEADER SKINS</p>
          <div class="color-tiles mx-0 px-4">
            <div class="tiles primary"></div>
            <div class="tiles success"></div>
            <div class="tiles warning"></div>
            <div class="tiles danger"></div>
            <div class="tiles info"></div>
            <div class="tiles dark"></div>
            <div class="tiles default"></div>
          </div>
        </div>
      </div>
      <div id="right-sidebar" class="settings-panel">
        <i class="settings-close fa fa-times"></i>
        <ul class="nav nav-tabs" id="setting-panel" role="tablist">
          <li class="nav-item">
            <a class="nav-link active" id="todo-tab" data-toggle="tab" href="#todo-section" role="tab" aria-controls="todo-section" aria-expanded="true">TO DO LIST</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="chats-tab" data-toggle="tab" href="#chats-section" role="tab" aria-controls="chats-section">CHATS</a>
          </li>
        </ul>
        <div class="tab-content" id="setting-content">
          <div class="tab-pane fade show active scroll-wrapper" id="todo-section" role="tabpanel" aria-labelledby="todo-section">
            <div class="add-items d-flex px-3 mb-0">
              <form class="form w-100">
                <div class="form-group d-flex">
                  <input type="text" class="form-control todo-list-input" placeholder="Add To-do">
                  <button type="submit" class="add btn btn-primary todo-list-add-btn" id="add-task-todo">Add</button>
                </div>
              </form>
            </div>
            <div class="list-wrapper px-3">
              <ul class="d-flex flex-column-reverse todo-list">
                <li>
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="checkbox" type="checkbox">
                      Team review meeting at 3.00 PM
                    </label>
                  </div>
                  <i class="remove fa fa-times-circle"></i>
                </li>
                <li>
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="checkbox" type="checkbox">
                      Prepare for presentation
                    </label>
                  </div>
                  <i class="remove fa fa-times-circle"></i>
                </li>
                <li>
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="checkbox" type="checkbox">
                      Resolve all the low priority tickets due today
                    </label>
                  </div>
                  <i class="remove fa fa-times-circle"></i>
                </li>
                <li class="completed">
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="checkbox" type="checkbox" checked>
                      Schedule meeting for next week
                    </label>
                  </div>
                  <i class="remove fa fa-times-circle"></i>
                </li>
                <li class="completed">
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="checkbox" type="checkbox" checked>
                      Project review
                    </label>
                  </div>
                  <i class="remove fa fa-times-circle"></i>
                </li>
              </ul>
            </div>
            <div class="events py-4 border-bottom px-3">
              <div class="wrapper d-flex mb-2">
                <i class="fa fa-times-circle text-primary mr-2"></i>
                <span>Feb 11 2018</span>
              </div>
              <p class="mb-0 font-weight-thin text-gray">Creating component page</p>
              <p class="text-gray mb-0">build a js based app</p>
            </div>
            <div class="events pt-4 px-3">
              <div class="wrapper d-flex mb-2">
                <i class="fa fa-times-circle text-primary mr-2"></i>
                <span>Feb 7 2018</span>
              </div>
              <p class="mb-0 font-weight-thin text-gray">Meeting with Alisa</p>
              <p class="text-gray mb-0 ">Call Sarah Graves</p>
            </div>
          </div>
          <!-- To do section tab ends -->
          <div class="tab-pane fade" id="chats-section" role="tabpanel" aria-labelledby="chats-section">
            <div class="d-flex align-items-center justify-content-between border-bottom">
              <p class="settings-heading border-top-0 mb-3 pl-3 pt-0 border-bottom-0 pb-0">Friends</p>
              <small class="settings-heading border-top-0 mb-3 pt-0 border-bottom-0 pb-0 pr-3 font-weight-normal">See All</small>
            </div>
            <ul class="chat-list">
              <li class="list active">
                <div class="profile"><img src="images/faces/face1.jpg" alt="image"><span class="online"></span></div>
                <div class="info">
                  <p>Thomas Douglas</p>
                  <p>Available</p>
                </div>
                <small class="text-muted my-auto">19 min</small>
              </li>
              <li class="list">
                <div class="profile"><img src="images/faces/face2.jpg" alt="image"><span class="offline"></span></div>
                <div class="info">
                  <div class="wrapper d-flex">
                    <p>Catherine</p>
                  </div>
                  <p>Away</p>
                </div>
                <div class="badge badge-success badge-pill my-auto mx-2">4</div>
                <small class="text-muted my-auto">23 min</small>
              </li>
              <li class="list">
                <div class="profile"><img src="images/faces/face3.jpg" alt="image"><span class="online"></span></div>
                <div class="info">
                  <p>Daniel Russell</p>
                  <p>Available</p>
                </div>
                <small class="text-muted my-auto">14 min</small>
              </li>
              <li class="list">
                <div class="profile"><img src="images/faces/face4.jpg" alt="image"><span class="offline"></span></div>
                <div class="info">
                  <p>James Richardson</p>
                  <p>Away</p>
                </div>
                <small class="text-muted my-auto">2 min</small>
              </li>
              <li class="list">
                <div class="profile"><img src="images/faces/face5.jpg" alt="image"><span class="online"></span></div>
                <div class="info">
                  <p>Madeline Kennedy</p>
                  <p>Available</p>
                </div>
                <small class="text-muted my-auto">5 min</small>
              </li>
              <li class="list">
                <div class="profile"><img src="images/faces/face6.jpg" alt="image"><span class="online"></span></div>
                <div class="info">
                  <p>Sarah Graves</p>
                  <p>Available</p>
                </div>
                <small class="text-muted my-auto">47 min</small>
              </li>
            </ul>
          </div>
          <!-- chat tab ends -->
        </div>
      </div>
      <!-- partial -->
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        @include('partiels._sidebar')
      </nav>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
            @yield('content')
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <footer class="footer">
          <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2021. All rights reserved.</span>
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i class="far fa-heart text-danger"></i> by <a href="https://idesignbusiness.ma//" target="_blank">iDesign Business</a></span>
          </div>
        </footer>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- plugins:js -->
  <script src="{{ url('vendors/js/vendor.bundle.base.js') }}"></script>
  <script src="{{ url('vendors/js/vendor.bundle.addons.js') }}"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script  src="{{ url('js/off-canvas.js') }}"></script>
  <script src="{{ url('js/hoverable-collapse.js') }}"></script>
  <script src="{{ url('js/misc.js') }}"></script>
  <script src="{{ url('js/settings.js') }}"></script>
  <script src="{{ url('js/todolist.js') }}"></script>
  <script src="{{ url('/js/dropify.js') }}"></script>
  <script src="{{ url('/js/select2.js') }}"></script>
  <script src="{{ url('/js/typeahead.js') }}"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="{{ url('js/dashboard.js') }}"></script>
  <script src="{{ url('js/form-validation.js') }}"></script>
  <script src="{{ url('js/bt-maxLength.js') }}"></script>
  <script src="{{ url('js/data-table.js') }}"></script>
  <!-- End custom js for this page-->
</body>


</html>
