<div class="sidebar-wrapper" data-simplebar="true">
    <div class="sidebar-header">
        <div>
            <img src="{{asset('admin/assets/images/logo-icon.png')}}" class="logo-icon " alt="logo icon">
        </div>
        <div>
            <h4 class="logo-text"> </h4>
        </div>
        <div class="toggle-icon ms-auto"><i class='bx bx-arrow-to-left'></i>
        </div>
    </div>
    <!--navigation-->
    <ul class="metismenu" id="menu">
        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class='bx bx-home-circle'></i>
                </div>
                <div class="menu-title">Tableau De Bord</div>
            </a>
            <ul>
                <li> <a href="{{route('admin.dashboard.jours')}}"><i class="bx bx-right-arrow-alt"></i>Statistiques quotidiennes</a>
                </li>
                <li> <a href="{{route('admin.dashboard.semain')}}"><i class="bx bx-right-arrow-alt"></i>Statistiques hebdomadaires</a>
                </li>
                <li> <a href="{{route('admin.dashboard.mois')}}"><i class="bx bx-right-arrow-alt"></i>Statistiques mensuelles</a>
                </li>
                <li> <a href="{{route('admin.dashboard.anneé')}}"><i class="bx bx-right-arrow-alt"></i>Statistiques annuelles</a>
                </li>
             
            </ul>
        </li>
 
        <li class="menu-label">Catégorie</li>

        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class='bx bx-category'></i>
                </div>
                <div class="menu-title">Catégorie</div>
            </a>
            <ul>
                <li> <a href="{{route('admin.catégories.Toutes.Cat')}}"><i class="bx bx-right-arrow-alt"></i>Toutes les catégories</a>
                </li>
                <li> <a href="{{route('catégories.Ajouter.Catégories')}}"><i class="bx bx-right-arrow-alt"></i>Ajouter une nouvelle catégories</a>
                </li>
              
            </ul>
        </li>

        <li class="menu-label">Produits</li>


        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class='bx bxl-product-hunt'></i>
                </div>
                <div class="menu-title">Produits</div>
            </a>
            <ul>
                <li> <a href="{{route('admin.produits.table.Prd')}}"><i class="bx bx-right-arrow-alt"></i>Produits</a>
                </li>
                <li> <a href="{{route('admin.produits.Ajouter.produits')}}"><i class="bx bx-right-arrow-alt"></i>Ajouter une nouvelle Produits</a>
                </li>
         
            </ul>
        </li>


        <li class="menu-label">Suivi des commandes</li>


        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class='bx bx-cart'></i>
                </div>
                <div class="menu-title">Les commandes</div>
            </a>
            <ul>
                <li> <a href="{{route('admin.Commandes')}}"><i class="bx bx-right-arrow-alt"></i>commandes</a>
                </li>
            
         
            </ul>
        </li>





        <li class="menu-label">Informations sur l'entreprise</li>


        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class='bx bx-info-circle
                    '></i>
                </div>
                <div class="menu-title"> Les Informations</div>
            </a>
            <ul>
                <li> <a href="{{route('admin.Information.view.Information')}}"><i class="bx bx-right-arrow-alt"></i>Informations</a>
                </li>
            
         
            </ul>
        </li>



  
    </ul>
    <!--end navigation-->
</div>
