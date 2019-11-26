@extends('layout/appLayout')

@section('content') 

<br>

  <div class="click-closed"></div>
  <!--/ Form Search Star /-->

  <section class="blog_area single-post-area section_gap">
    <div class="container" style="background-color:#bec3c665  ;">
        <div class="row">
            <div class="col-lg-6 posts-list">
                <div class="single-post row">

                   
                    
                    <div class="col-lg-12">
                       
                        <div class="quotes">
                          <br>
                          <br>

                            <img src="img/coeur de soleil.jpg" alt="" height="" width="550">
                         {{-- changer limage --}}
                      <br>
                      <br>

                      <a  href="#collapse1"  data-toggle="collapse" role="button" aria-expanded="false" aria-controls="collapse1">
                        <center> <h3 style="margin-left: 50px">C’EST QUOI UN COMITE DE SOUTIEN ?</h3></center> <br>
                    </a>
                    <div id="collapse1" class="collapse">
                      C’est un groupe de personnes qui se mettent ensemble au Cameroun ou bien à l’étranger, pour préparer
                       spirituellement… et soutenir financièrement la réussite de la cérémonie de consécration du Cameroun 
                       et des nations à l’Eternel prévue à Yaoundé, Cameroun en cette fin d’année 2019. <br>
                       <br>
                    </div>
                       
                    
                      
                        
                        <a  href="#collapse2"  data-toggle="collapse" role="button" aria-expanded="false" aria-controls="collapse2">
                       
                          <center> <h3 style="margin-left: 50px">C’EST QUOI UN COMITE DE SOUTIEN ?</h3></center> <br>
                      </a>
                      <div class="collapse" id="collapse2">
                        Ils viennent de toutes les
                        familles, ils représentent tous les serviteurs de Dieu, tous les leaders, tous les jeunes et toutes 
                        les femmes, qui ont entendu « l’appel » que l’Eternel leur a lancé dans son MESSAGE AUX NATIONS. 
                       Ils sont tous ceux et celles, qui veulent être « consacrés » par l’esprit de Dieu dès cette année 2019,
                        en vue d’être capables de bâtir la nation éthique1. <br>
                       Les membres des comités de soutien sont des personnes, qui se sont jointes ou inscrites dans un des
                        comités de leur choix existant physiquement au sein de leur ville, de leur lieu de résidence 
                        (ou en ont créé un, là où celui-ci n’existe pas). Ceci, afin de rencontrer d’autres personnes avec
                         lesquelles se préparer spirituellement, par la repentance et la purification à la cérémonie de 
                         consécration à l’Eternel et afin de mettre en commun leurs efforts, pour participer financièrement 
                         à l’organisation de l’événement.<br>
                      </div>
                        
                       
                          
                         

                        </div>
                        
                    </div>
                   
                   
                        
                </div>
              
            </div>


            <div class="col-lg-6">
                <div class="blog_right_sidebar">
                   <br>
                   <br>
                    <aside class="single_sidebar_widget popular_post_widget">

                        
                        <div class="title-2" style="margin-top:-15px;margin-left:80px">
                            <center><h2 class="title-single">Creation d'un comite de soutien</h2></center>  
                      </div>
                      @include('partials.error') 
                      
                      @if(Session::has('success'))
                      <form method="post" action="{{route('addId')}}">
                      @csrf
                      <label for="">Entrez a nouveau votre email et 
                      Cochez ici pour confirmer que vous voulez creer ce comite</label> <br>
                      <input type="email" name="email" class="form-control">
                      <input type="checkbox" name="confirmation" id="" class="form-control">
                      <button class="btn btn-outline-primary" type="submit">Confirmer</button>
                      </form>
                      @endif
                      
                      <form  style="margin-top:5%;margin-left:80px" method="post" action="{{route('creationComite')}}">
                      @csrf
                        <div class="form-row">
                          <div class="form-group col-md-6">
                            <label for="nom">Adresse email</label>
                            <input type="email" class="form-control" name="email" placeholder="votre adresse mail">
                          </div>
                          
                          <div class="form-group col-md-6">
                            <label for="comiteS">Nom du comite de soutien</label>
                            <input type="text" class="form-control" name="nameCS" placeholder=" Le nom de votre comite de soutien">
                          </div>
                          <div class="form-group col-md-6">
                            <label for="comiteS">Lieu</label>
                            <input type="text" class="form-control" name="lieu" placeholder=" Le lieu de rencontre">
                          </div>
                          <div class="form-group col-md-6">
                            <label for="heure">Heure de regroupement</label>
                            <input type="time" class="form-control" name="heure" placeholder=" L'heure ">
                          </div>
                          <div class="form-group col-md-6">
                            <label for="jourR">Jour de rencontre</label>
                            <select name="jour" class="form-control">
                                          <option selected value="Lundi"> Lundi</option>
                                          <option value="Mardi">Mardi </option>
                                          <option value="Mercredi">Mercredi </option>
                                          <option value="Jeudi">Jeudi </option>
                                          <option value="Vendredi">Vendredi </option>
                                          <option value="Samedi">Samedi </option>
                                          <option value="Dimanche">Dimanche </option>
                                        </select>
                            
                          </div>
                          <div class="form-group col-md-6">
                              <label for="heure">Date de debut des activitées</label>
                              <input type="date" class="form-control" name="debut" placeholder=" la date debut du comite ">
                            </div>
                        </div>
                       
                        <div class="form-row">
                                <div class="form-group col-md-4">
                                        <label for="inputState">categorie</label>
                                        <select name="categorie" class="form-control">
                                          <option selected> Physique</option>
                                          <option>Virtuel </option>
                                        </select>
                                      </div>
                          
                        </div>
                            <br>
                        <button type="submit" class="btn btn-primary btn-lg btn-block">Creer comité </button>
                      </form>
                      
                      <br>
                      
                      <a  href="#collapse3"  data-toggle="collapse" role="button" aria-expanded="false" aria-controls="collapse3">
                       
                        <h4>QUI PEUT CRÉER UN COMITE DE SOUTIEN ? </h4>
                    </a>
                    <div class="collapse" id="collapse3">
                      Toute personne qui a le désir de servir Dieu dans le cadre de la préparation, de l’organisation 
                          et de la tenue de cette cérémonie de consécration, ou qui désire être établi comme leader dans 
                          l’une des cinq catégories déjà citées, en lesquelles l’éternel a appelé ses enfants. <br>
                          Si elle s’est inscrite au préalable sur la page Facebook de l’événement, au sein de l’un des 
                          cinq groupes/ 5 catégories énumérées ci-dessus, il ne lui reste plus qu’à remplir le formulaire 
                          ci apres ou bien prendre contact avec la coordination de l’organisation, pour recevoir toutes 
                          les informations complémentaires utiles à son travail. <br>
      
                    </div>
                        
                      
                          
                          
                     
                      
                      <a  href="#collapse4"  data-toggle="collapse" role="button" aria-expanded="false" aria-controls="collapse4">
                       
                        <h4>OU PEUT-ON CRÉER UN COMITE DE SOUTIEN ?</h4> 
                    </a>
                    <div id="collapse4" class="collapse">

                    </div>
                        
                          
                           <strong>
                               Contacts Infos de la coordination :
                          </strong> <br>
                           237 691 433 761
                           Whatsapp : 682 374 500 /
                           237 695 178 659
                           <br>
                     
                </aside>
                    </aside>
                    
                    
                   
                </div>
            </div>

        </div>
    </div>
</section>
  
  @endsection 


  
                           
 