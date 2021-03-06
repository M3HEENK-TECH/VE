
@extends('admin.include.layout_admin')
@section('content')

	<!-- begin #page-loader -->
	<div id="page-loader" class="fade show"><span class="spinner"></span></div>
	<!-- end #page-loader -->
	
	<!-- begin #page-container -->
	<div id="page-container" class="fade in page-sidebar-fixed page-header-fixed">

 

			<!-- begin breadcrumb -->
			<ol class="breadcrumb float-xl-right">
				<li class="breadcrumb-item"><a href="javascript:;">Comités</a></li>
			</ol>
			<!-- end breadcrumb -->
			<!-- begin page-header -->
			<h2 class="page-header">Liste des comités de soutien</h2>
			<!-- end page-header -->
			<!-- begin row -->
			<div class="row">
				<!-- begin col-10 -->
				<div class="col-xl-12">
					<!-- begin panel -->
					<div class="panel panel-inverse">
						<!-- begin panel-heading -->
						<div class="panel-heading">
							<h4 class="panel-title">Liste de tous les comités de soutiens</h4>
							<div class="panel-heading-btn">
								<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
								<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-redo"></i></a>
								<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
								<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
							</div>
						</div>
						<!-- end panel-heading -->
						<!-- begin alert -->

						<!-- end alert -->
						<!-- begin panel-body -->
						<div class="panel-body">
							<table id="data-table-buttons" class="table table-striped table-bordered table-td-valign-middle">

								<thead>
									<tr>
										<th width="1%"></th>
										<th class="text-nowrap">Nom comite</th>
										<th class="text-nowrap">Date création</th>
                                        <th class="text-nowrap">Catégorie</th>
                                        <th class="text-nowrap">Lieu</th>
                                        <th class="text-nowrap">Heure</th>
                                        <th class="text-nowrap">Jour rencontre</th>
                                        <th class="text-nowrap">Date début</th>
                                        <th class="text-nowrap">Code</th>
                                        <th class="text-nowrap">Administrateur</th>
										<th class="text-nowrap"></th>

									</tr>
								</thead>


								<tbody>

								@foreach ($listeCS as $key => $comite)


									<tr class="gradeA">
										<td width="1%" class="f-s-600 text-inverse">{{$key+1}}</td>
										<td>{{$comite->nom_comite}}</td>
										<td>{{$comite->created_at}}</td>
										<td>{{$comite->categorie}}</td>
										<td>{{$comite->lieu}}</td>
										<td>{{$comite->heure}}</td>
                                        <td>{{$comite->rencontre}}</td>
										<td>{{$comite->date_debut}}</td>
										<td>{{$comite->code_comite}}</td>
										<td>{{$comite->chef_groupe}}</td>
                                        <td>
											<a href="#modal-alert" class="btn btn-sm btn-danger" data-toggle="modal"><i class="fa fa-trash"></i></a>
										</td>

										<div class="modal fade" id="modal-alert">
											<div class="modal-dialog">
												<div class="modal-content">
													<div class="modal-header">
														<h4 class="modal-title">Alert </h4>
														<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
													</div>
													<div class="modal-body" style="text-align:center;">
														<div class="alert alert-danger m-b-0">
															<i class="fa fa-exclamation-circle fa-7x"></i>
															<h3>Etes-vous sûr?</h3>
															<h5>Vous allez supprimer cet élément!</h5>
														</div>
													</div>
													<div class="modal-footer">
														<a href="javascript:;" class="btn btn-white" data-dismiss="modal">NON</a>
														<button type="submit" class="btn btn-danger" data-dismiss="modal">OK</button>
													</div>
												</div>
											</div>
										</div>
									</tr>

								@endforeach


								</tbody>
							</table>
                            <div class="panel panel-inverse">
                                <!-- begin panel-heading -->
                                <div class="panel-heading">
                                    <h4 class="panel-title">Liste Des Contributions des Comites</h4>
                                    <div class="panel-heading-btn">
                                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-redo"></i></a>
                                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
                                    </div>
                                </div>
                            <div class="panel-body">
                                <table id="data-table-buttons" class="table table-striped table-bordered table-td-valign-middle">
                                <thead class="bg-dark text-white">
                                <tr>
                                    <th width="1%"></th>
                                    <th class="text-nowrap">Nom comite</th>
                                    <th class="text-nowrap">Contribution</th>
                                </tr>
                                </thead>
                                <tbody>
                               @foreach($montants as $key => $montant)
                                <tr class="gradeA">
                                    <td width="1%" class="f-s-600 text-inverse">{{$key+1}}</td>
                                    <td>{{ $montant->nom_comite  }}</td>
                                    <td> {{ $montant->sum }}</td>

                                </tr>
                                   @endforeach
                                </tbody>
                            </table>
                            </div>
                            </div>
						</div>
						<!-- end panel-body -->
					</div>
					<!-- end panel -->
				</div>
				<!-- end col-10 -->
			</div>
			<!-- end row -->
		</div>
		<!-- end #content -->

		<!-- begin scroll to top btn -->
		<a href="javascript:;" class="btn btn-icon btn-circle btn-success btn-scroll-to-top fade" data-click="scroll-top"><i class="fa fa-angle-up"></i></a>
		<!-- end scroll to top btn -->
	<!-- end page container -->

	
	
@endsection
