@include('admin_pages/layouts/menu')
<!-- Modal -->
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
                      <h3 class="text-themecolor">Dashboard</h3>
                      <ol class="breadcrumb">
                          <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                          <li class="breadcrumb-item active">Modifier</li>
                      </ol>
                  </div>
      
              </div>
              <!-- ============================================================== -->
              <!-- End Bread crumb and right sidebar toggle -->
              <!-- ============================================================== -->
              <!-- ============================================================== -->
              <!-- Start Page Content -->
              <!-- ============================================================== -->
              <!-- Row -->
              <form  class="form-horizontal form-material"  method="post" action="{{ route('edit.update',$etudiant->numMatricule) }}" enctype="multipart/form-data">
                @method('PATCH') 
                @csrf
                    <div class="form-row">
                            <div class="col" >
                              <input type="text" class="form-control" placeholder="nom" name="nom" value={{ $etudiant->nom }} required>
                            </div>
                            <div class="col">
                              <input type="text" class="form-control" placeholder="prenom" name="prenom" value={{ $etudiant->prenom }} required>
                            </div>
                    </div>
                    <div class="form-row">
                            <div class="col">
                              <input type="date" class="form-control" name="dateDeNaissance" placeholder="date de naissance" value={{ $etudiant->dateDeNaissance }} required>
                            </div>
                            <div class="col">
                              <input type="text" class="form-control" name="adresse" placeholder="adresse" value={{ $etudiant->adresse }} required>
                            </div>
                    </div>

                    <div class="form-row">
                            <div class="col">
                              <input type="email" class="form-control" placeholder="Adresse mail" name="email" value={{ $etudiant->email }} required>
                            </div>
                            <div class="col">
                              <input type="file" class="form-control-file" placeholder="photo" name="photo"  value={{ $etudiant->photo }} required>
                            </div>
                    </div>
                    <div class="form-row">
                            <div class="col">
                                    <select class="custom-select custom-select-sm col" name="idfiliere" value={{ $etudiant->idfiliere }}>
                                            <option selected>Filiere</option>
                                            <option value="1">Maintenance</option>
                                            <option value="2">Developpement Web</option>
                                            <option value="3">Securite Informatique</option>
                                          </select>                           
                            </div>
                            <div class="col">
                                    
                                            <select class="col custom-select custom-select-sm col" name="idcycle" value={{ $etudiant->idcycle }}>
                                                    <option selected>Cycle</option>
                                                    <option value="1">Licence</option>
                                                    <option value="2"> Master</option>
                                                    <option value="3">Doctorat</option>
                                                  </select>                           
                                    
                            </div>
                    </div>
                    <div class="form-row">
                            <div class="col">
                                    
                                            <select class="custom-select custom-select-sm col" name="idannee" value={{ $etudiant->idannee }}>
                                                    <option selected>Annee academique</option>
                                                    <option value="1">2017-2018</option>
                                                    <option value="2">2018-2019</option>
                                                    <option value="3">2019-2020</option>
                                                  </select>                           
                                    
                            </div>
                            <div class="col">
                                   
                                    <select class="custom-select custom-select-sm col" name="idniveau" value={{ $etudiant->idniveau }}>
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
                        <button type="submit" class="btn btn-success">Mettre a jour</button>
                        <button type="reset" class="btn btn-danger">Annuler</button>
                    </div>
                </div>
            </form>
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