<!DOCTYPE html>
<html lang="en">


<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>@yield('title')</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{ url('/vendors/iconfonts/font-awesome/css/all.min.css') }}">
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
    {{-- ********************************** modal Add New Book***************************************** --}}
    <div class="modal fade" id="exampleModal-4" tabindex="-1" role="dialog" aria-labelledby="ModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg " role="document" style="width: 50%;">
            <div class="modal-content">
                <form class="cmxform" id="commentForm" method="POST" action="{{ route('book.store') }}"
                    enctype="multipart/form-data">
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
                                    <input id="cname" class="form-control" name="name" minlength="2" type="text"
                                        required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-6">
                                    <label for="category">Categorie (*)</label>
                                    <select id="category" name="category" class="js-example-basic-single w-100"
                                        style="width: 100%" required>
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
                                    <select id="format" name="format" class="js-example-basic-single w-100"
                                        style="width: 100%" required>
                                        <option>17x24</option>
                                        <option>14x20</option>
                                        <option>8x12</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-6">
                                    <label for="type">Type (*)</label>
                                    <select id="type" name="type" class="js-example-basic-single w-100"
                                        style="width: 100%" required>
                                        <option>Couverture</option>
                                        <option>Papier</option>
                                        <option>Cellophane</option>
                                    </select>
                                </div>
                                <div class="form-group col-6">
                                    <label for="paper">Papier (*)</label>
                                    <select id="paper" name="paper" class="js-example-basic-single w-100"
                                        style="width: 100%" required>
                                        <option value="jaune">Jaune</option>
                                        <option value="blanc">Blanc</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-12">
                                    <label for="image">Image (*)</label>
                                    <input id="image" name="image" type="file" class="dropify form-control"
                                        data-height="50" accept="image/png, image/jpeg" required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-12">
                                    <label for="abstract">Résumé</label>
                                    <textarea name="abstract" id="abstract" class="form-control" maxlength="100"
                                        rows="2" placeholder="Un résumé de 100 caractères au maximum."></textarea>
                                </div>
                            </div>

                        </fieldset>
                    </div>
                    <div class="modal-footer">
                        <input type="submit" value="Ajouter" class="btn btn-success">
                        <button class="btn btn-light" data-dismiss="modal">Close</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    {{-- ***************************END modal Add New Book --******************************* --}}
    <div class="container-scroller">
        <!-- partial:partials/_navbar.html -->
        <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row default-layout-navbar">
            @include('partiels._navbar')
        </nav>
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">

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
                        <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2021.
                            All rights reserved.</span>
                        <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made
                            with <i class="far fa-heart text-danger"></i> by <a href="https://idesignbusiness.ma//"
                                target="_blank">iDesign Business</a></span>
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
    <script src="{{ url('js/off-canvas.js') }}"></script>
    <script src="{{ url('js/hoverable-collapse.js') }}"></script>
    <script src="{{ url('js/misc.js') }}"></script>
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
