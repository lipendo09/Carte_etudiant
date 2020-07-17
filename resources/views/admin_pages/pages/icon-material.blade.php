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
                        <h3 class="text-themecolor m-b-0 m-t-0">Material Icon</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                            <li class="breadcrumb-item active">Carte</li>
                        </ol>
                    </div>
                    
                </div>
                <!-- ============================================================== -->
                <!-- End Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
              
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
{{--                 
                                            <tr>
                                                <td>{{$etudiant->numMatricule}}</td>
                                                <td>{{$etudiant->nom}}</td>
                                                <td>{{$etudiant->prenom}}</td>
                                                <td>{{$etudiant->email}}</td>
                                            {{-- <td>{{$etudiant->etudiant_cycle}}</td> --}}
                                                
{{--                                           
                <div class="card rounded text-center mb-5 font-weight-bolder shadow ">
                    
                     <a href="{{url('/customers/pdf')}}" class="ml-auto p-2 bd-highlight bg-success btn btn-secondary ml-2">Convert into PDF</a>
                     <h1 class="card-header">Liste des cartes d'etudiants</h1>   
                </div>
            
                <div class="col row-cols-1 row-cols-md-1 pr-5 pl-5 mb-5">
                    @foreach($data as $etudiant)
                   <div class="col mb-4">
                            <div class="card-body bg-white" style="border: 3px solid black; border-radius: 15px; box-shadow: 6px 6px 3px red">
                                <div class="text-center font-weight-bolder">
                                    <h3 class="card-title"><strong>{{$etudiant->numMtricule}}</strong></h3>
                                </div>
                                <div class="card-title text-center">
                                    <p class="card-text text-dark font-italic">{{$etudiant->nom}}</p>
                                </div>
                                <div class="text-center">
                                    <h5 class="card-text">{{$etudiant->prenom}}</h5>
                                </div>
                                <div class="card-body text-center">
                                    <p class="card-text justify-text text-dark">{{$etudiant->dateDeNaissance}}</p>
                                </div>
                                <div class="card-body text-center">
                                    <p class="card-text justify-text text-dark">{{$etudiant->adresse}}</p>
                                </div>
                                <div class="card-body text-center">
                                    <p class="card-text justify-text text-dark">{{$etudiant->email}}</p>
                                </div>
                                <div class="card-body text-center">
                                    <p class="card-text justify-text text-dark">{{$etudiant->idcycle}}</p>
                                </div>
                                <div class="card-body text-center">
                                    <p class="card-text justify-text text-dark">{{$etudiant->idannee}}</p>
                                </div><div class="card-body text-center">
                                    <p class="card-text justify-text text-dark">{{$etudiant->idfiliere}}</p>
                                </div>
                                {{-- <div class="text-center">
                                    <p class="card-text text-dark font-italic">{{$etudiant->duree}}</p>
                                </div> --}}
                            {{-- </div>
                        </div>
                    @endforeach
                </div>
            </div> --}}  
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
