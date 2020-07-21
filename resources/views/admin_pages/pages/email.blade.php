@include('admin_pages/layouts/menu')
<br>
<div class="row">
    
        <!-- Column -->
        <div class="col-lg-4 col-xlg-3 col-md-5">
           
        </div>
        <!-- Column -->
        <!-- Column -->
        <div class="col-lg-8 col-xlg-9 col-md-7">
            <div class="card">
                <div class="card-block">
                        <form class="form-horizontal form-material" action="{{url('admin_pages/pages/email/send')}}" method="POST" enctype="multipart/form-data">
                            {{ csrf_field() }}

                        <div class="form-group">
                            <label class="col-md-12">Nom</label>
                            <div class="col-md-12">
                                <input type="text" placeholder="Entrer votre nom" name="nom" value={{ $etudiant->nom }} class="form-control form-control-line">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="example-email" class="col-md-12">E-mail</label>
                            <div class="col-md-12">
                                <input type="email" name="prenom" placeholder="Entrer l'adresse mail" value={{ $etudiant->email }} class="form-control form-control-line" name="example-email" id="example-email">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-12">Message</label>
                            <div class="col-md-12">
                                <input type="text" name="message" placeholder="Entrer votre message" class="form-control form-control-line">
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <div class="col-sm-12">
                                <button type="submit" class="btn btn-success">Envoyer</button>
                                <button type="reset" class="btn btn-warning">Annuler</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- Column -->
    </div>
    <!-- Row -->
    <!-- ============================================================== -->
    <!-- End PAge Content -->
    <!-- ============================================================== -->
</div>

        @include('admin_pages/layouts/js')
</body>

</html>
