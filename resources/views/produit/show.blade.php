@extends('racine')

@section('title')
{{$produit->libelle}} | {{$produit->reference}}
@endsection



@section('content')
<div class="page-breadcrumb">
    <div class="row align-items-center">
        <div class="col-12">
        <h4 class="page-title">Gestion du produit {{$produit->reference}}</h4>
            <div class="d-flex align-items-center">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/">Quickoo</a></li>
                        <li class="breadcrumb-item" aria-current="page"><a href="/produit">Stock</a></li>
                        <li class="breadcrumb-item active" aria-current="page">{{$produit->libelle}}</li>

                    </ol>
                </nav>
            </div>
            <div class="row float-right" id="navbar-example3">
              <a onclick="productedit()" href="#from_product_edit" class="btn btn-warning text-white m-r-5">Modifier <i class="fas fa-edit"></i></a>
        
            </div>
        </div>
        
      </div>
    
</div>
<!-- ============================================================== -->
<!-- End Bread crumb and right sidebar toggle -->
<!-- ============================================================== -->


<!-- Container fluid  -->
<!-- ============================================================== -->
<div class="container-fluid">
    <!-- ============================================================== -->
    <div class="row">
           
        @if (session()->has('produit'))
        <div class="alert alert-dismissible alert-success col-12">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
        <strong>Succés !</strong> Ce produit à été bien Modifié </a>.
          </div>
        @endif
    </div>    <!-- ============================================================== -->
    <!-- Row -->
    <div class="row">
        
        <!-- Column -->
        <div class="col-lg-4 col-xlg-3 col-md-5">
            <div class="card">
                <div class="card-body">
                <center class="m-t-30">
                    <div class="box">
                        <div class="js--image-preview">
                           <img class="photo_produit" src="/uploads/produit/{{$produit->photo}}" alt="" width="250" height="250">
                            </div>
                       
                      </div>
                    
                        <h4 class="card-title m-t-10">{{$produit->libelle}}</h4>
                        <h6 class="card-subtitle">{{$produit->description}}</h6>
                        <div class="row text-center justify-content-md-center">
                        <div class="col-4"><a href="{{route('produit.index')}}" class="link"><i class="icon-people"></i> <font class="font-medium">{{$stock->qte}} <br>En Stock</font></a></div>
                        <div class="col-4"><a href="{{route('produit.index')}}" class="link"><i class="icon-picture"></i> <font class="font-medium">{{$stock->cmd}} <br>En commande</font></a></div>
                        </div>
                    </center>
                </div>
                <div>
                    <hr> </div>
                {{-- <div class="card-body"> 
                    <h3>Mouvement du stock</h3>
                    <small class="text-muted">Addresse email </small>
                    <h6>test test</h6> <small class="text-muted p-t-30 db">Téléphone</small>
                    <h6>test test</h6> <small class="text-muted p-t-30 db">Addresse</small>
                    <h6>test test</h6>
                    </div> --}}
            </div>
        </div>
        <!-- Column -->
        <!-- Column -->
        <div class="col-lg-8 col-xlg-9 col-md-7" data-spy="scroll" data-target="#edit_product" data-offset="0">
            <div class="card" id="from_product_edit">
                <div class="card-body">
                    <form class="form-horizontal form-material" method="POST" action="{{route('produit.update',$produit)}}" enctype="multipart/form-data">
                        @csrf
                        @method("PUT")
                        <fieldset id="fieldset_edit" disabled>
                        <div class="form-group">
                            <label for="libelle" class="col-md-12">Libelle: </label>

                        <div class="col-md-12">
                            <input id="libelle" type="text" class="form-control @error('libelle') is-invalid @enderror" name="libelle" value="{{ $produit->libelle }}" required  autofocus>

                            @error('libelle')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        </div>
                        
                        <div class="form-group">
                            <label class="col-md-12">Prix de produit</label>
                            <div class="col-md-12">
                            <input name="prix" type="text" value="{{$produit->prix}}" class="form-control form-control-line">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-12">Description</label>
                            <div class="col-md-12">
                            <textarea name="description" rows="5" class="form-control form-control-line">{{$produit->description}}</textarea>
                            </div>
                        </div>
                     
                        <div class="form-group">
                            <label class="col-sm-12">Catégorie :</label>
                            <div class="col-sm-12">
                                <select name="categorie" value="{{$produit->categorie}}" class="form-control form-control-line" >
                                    <option checked>{{$produit->categorie}}</option>
                                    <option >Vêtements</option>
                                    <option >Chaussures</option>
                                    <option >Bijoux et accessoires</option>
                                    <option >Produits Cosmétiques</option>
                                    <option >Produits High Tech</option>
                                    <option >Librairie</option>
                                    <option >Maroquinerie</option>
                                    <option >Végétaux</option>
                                    <option >Autres</option>
                                </select>
                            </div>
                        </div>
                        <div class="input-group mb-3">
                          <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
                          </div>
                          <div class="custom-file">
                            <input type="file" name="photo" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
                            <label class="custom-file-label" for="inputGroupFile01">choisir une photo</label>
                          </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-12">
                                <button type="submit" class="btn btn-success">Modifier</button>
                            </div>
                        </div>
                      </fieldset>
                    </form>
                </div>
            </div>
        </div>
        <!-- Column -->
    </div>

</div>
@endsection

@section('javascript')
    
  <script>
    function productedit() {
  document.getElementById("fieldset_edit").disabled = !document.getElementById("fieldset_edit").disabled;
}
  </script>

@endsection

