import { Component, NgModule } from '@angular/core';
import { RouterModule, Routes } from '@angular/router';

//Importando componentes para asociarles una ruta
import { InformationComponent } from './components/information/information.component';
import { HomeComponent } from './components/home/home.component';
import { CardComponent } from './components/card/card.component';
import { CatalogComponent } from './components/catalog/catalog.component';
import { ShoppingCartComponent } from './components/shopping-cart/shopping-cart.component';

import { PageNotFoundComponent } from './components/page-not-found/page-not-found.component';
import { ProductDetailComponent } from './components/product-detail/product-detail.component';


//En la constante rroutes se definen las rutas 
//Contiene objetos de tipo Routes -> {atributos}
//->{path:'asd', component: namecomponent}

const routes: Routes = [
  {path: '', component: HomeComponent},
  {path:'information', component: InformationComponent},
  {path:'home', component: HomeComponent},
  {path:'shopping-card', component: ShoppingCartComponent},
  {path:'test', component: CardComponent},
  {path: 'catalog/:categoryId', component: CatalogComponent}, //Esta ruta necesita de un parametro como filtro
  {path:'product-detail/:productId',component:ProductDetailComponent},
  { path: '**', component: PageNotFoundComponent }
];

@NgModule({
  imports: [RouterModule.forRoot(routes ,{onSameUrlNavigation:'reload'})],
  exports: [RouterModule]
})
export class AppRoutingModule { }
