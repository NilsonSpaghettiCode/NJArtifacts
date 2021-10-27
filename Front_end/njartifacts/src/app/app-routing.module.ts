import { Component, NgModule } from '@angular/core';
import { RouterModule, Routes } from '@angular/router';

//Importando componentes para asociarles una ruta
import { InformationComponent } from './components/information/information.component';
import { HomeComponent } from './components/home/home.component';
import { CardComponent } from './components/card/card.component';
import { CatalogComponent } from './components/catalog/catalog.component';

import { PageNotFoundComponent } from './components/page-not-found/page-not-found.component';

//En la constante rroutes se definen las rutas 
//Contiene objetos de tipo Routes -> {atributos}
//->{path:'asd', component: namecomponent}

const routes: Routes = [
  {path: '', component: HomeComponent},
  {path:'information', component: InformationComponent},
  {path:'home', component: HomeComponent},
  {path:'test', component: CardComponent},
  {path: 'catalog', component: CatalogComponent},
  { path: '**', component: PageNotFoundComponent }
];

@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule]
})
export class AppRoutingModule { }
