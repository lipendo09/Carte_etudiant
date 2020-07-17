@include('admin_pages/layouts/menu')
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <div class="row page-titles">
                    <div class="col-md-5 col-8 align-self-center">
                        <h3 class="text-themecolor m-b-0 m-t-0">Table</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                            <li class="breadcrumb-item active">Liste</li>
                        </ol>
                    </div>
                  
                </div>
                <!-- ============================================================== -->
                <!-- End Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row">
                    <!-- column -->
                    <div class="col-lg-12">
                        <div class="text-center m-t-30">
                                
    <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
    Enregistrer un etudiant
  </button>
  
  <!-- Modal -->
  <div class="modal fade" id="exampleModal"  tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content" >
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Enregistrement</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            
            <form class="form-horizontal form-material" action="{{route('table-basic.store')}}" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="form-row">
                            <div class="col">
                              <input type="text" class="form-control" placeholder="nom" name="nom" required>
                            </div>
                            <div class="col">
                              <input type="text" class="form-control" placeholder="prenom" name="prenom" required>
                            </div>
                    </div>
                    <div class="form-row">
                            <div class="col">
                              <input type="date" class="form-control" name="dateDeNaissance" placeholder="date de naissance" required>
                            </div>
                            <div class="col">
                              <input type="text" class="form-control" name="adresse" placeholder="adresse" required>
                            </div>
                    </div>

                    <div class="form-row">
                            <div class="col">
                              <input type="email" class="form-control" placeholder="Adresse mail" name="email" required>
                            </div>
                            <div class="col">
                              <input type="file" class="form-control-file" placeholder="photo" name="photo" required>
                            </div>
                    </div>
                    <div class="form-row">
                            <div class="col">
                                    <select class="custom-select custom-select-sm col" name="idfiliere">
                                            <option selected>Filiere</option>
                                            <option value="1">Maintenance</option>
                                            <option value="2">Developpement Web</option>
                                            <option value="3">Securite Informatique</option>
                                          </select>                           
                            </div>
                            <div class="col">
                                    
                                            <select class="col custom-select custom-select-sm col" name="idcycle" >
                                                    <option selected>Cycle</option>
                                                    <option value="1">Licence</option>
                                                    <option value="2"> Master</option>
                                                    <option value="3">Doctorat</option>
                                                  </select>                           
                                    
                            </div>
                    </div>
                    <div class="form-row">
                            <div class="col">
                                    
                                            <select class="custom-select custom-select-sm col" name="idannee">
                                                    <option selected>Annee academique</option>
                                                    <option value="1">2017-2018</option>
                                                    <option value="2">2018-2019</option>
                                                    <option value="3">2019-2020</option>
                                                  </select>                           
                                    
                            </div>
                            <div class="col">
                                   
                                    <select class="custom-select custom-select-sm col" name="idniveau">
                                            <option selected>Niveau</option>
                                            <option value="1">1ere annee</option>
                                            <option value="2">2eme annee</option>
                                            <option value="3">3eme annee</option>
                                          </select>                           
                           
                            </div>
                    </div>
                    {{-- <div class="form-row">
                            <div class="col">
                              <input type="text" class="form-control" placeholder="First name">
                            </div>
                            <div class="col">
                              <input type="text" class="form-control" placeholder="Last name">
                            </div>
                    </div> --}}
            
                <div class="form-group">
                    <div class="col-sm-12">
                        <button type="submit" class="btn btn-success">Enregistrer</button>
                        <button type="reset" class="btn btn-danger">Annuler</button>
                    </div>
                </div>
            </form>
        </div>
        
      </div>
    </div>
  </div>
                            
                        </div>
                        <div class="card">
                            <div class="card-block">
                                <h4 class="card-title">Liste des etudiants</h4>
                                
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>Matricule</th>
                                                <th>Nom</th>
                                                <th>Prenom</th>
                                                <th>E-mail</th>
                                                {{-- <th>Cycle</th> --}}
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($etudiants as $etudiant)
                                            <tr>
                                                <td>{{$etudiant->numMatricule}}</td>
                                                <td>{{$etudiant->nom}}</td>
                                                <td>{{$etudiant->prenom}}</td>
                                                <td>{{$etudiant->email}}</td>
                                            {{-- <td>{{$etudiant->etudiant_cycle}}</td> --}}
                                                <td style="display:inline-flex; flex-direction:row; justify-content:space-around;">
                                                    <a href="{{ route('edit.edit', $etudiant->numMatricule)}}"><button class="btn btn-warning" style="margin-right:5%;">Modifier</button></a>
                                                    <form action="{{ route('table-basic.destroy', $etudiant->numMatricule)}}" method="post">
                                                        {{ csrf_field() }}
                                                        @method('DELETE')
                                                        <button class="btn btn-danger" style="margin-left:5%;">Supprimer</button>
                                                      </form>
                                                    
                                                    <button class="btn btn-success" style="margin-left:5%;">Imprimer</button>
                                                </td>
                                            </tr>
                                            
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer"> © 2020 Simplon Burkina Admin by Groupe 4 </footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    @include('admin_pages/layouts/js')
</body>

</html>
