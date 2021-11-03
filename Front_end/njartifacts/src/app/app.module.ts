import { NgModule } from '@angular/core';
import { BrowserModule } from '@angular/platform-browser';

import { AppRoutingModule } from './app-routing.module';
import { AppComponent } from './app.component';
import { InformationComponent } from './components/information/information.component';
import { CardComponent } from './components/card/card.component';
import { NavComponent } from './components/nav/nav.component';
import { HomeComponent } from './components/home/home.component';
import { ProductDetailComponent } from './components/product-detail/product-detail.component';
import { FooterComponent } from './components/footer/footer.component';
import { PageNotFoundComponent } from './components/page-not-found/page-not-found.component';
import { ProductsComponent } from './components/products/products.component';
import { CatalogComponent } from './components/catalog/catalog.component';
import { CarouselComponent } from './carousel/carousel.component';
import { FeatureComponent } from './feature/feature.component';
import { NewComponent } from './new/new.component';
import { ShoppingCartComponent } from './components/shopping-cart/shopping-cart.component';
import {HttpClientModule} from '@angular/common/http';
import { ImagePreviewComponent } from './components/image-preview/image-preview.component';
import { HomecardComponent } from './homecard/homecard.component';
@NgModule({
  declarations: [
    AppComponent,
    InformationComponent,
    CardComponent,
    NavComponent,
    HomeComponent,
    ProductDetailComponent,
    FooterComponent,
    PageNotFoundComponent,
    ProductsComponent,
    CatalogComponent,
    CarouselComponent,
    FeatureComponent,
    NewComponent,
    ShoppingCartComponent,
    ImagePreviewComponent,
    HomecardComponent,
  ],
  imports: [
    BrowserModule,
    AppRoutingModule,
    HttpClientModule
  ],
  providers: [],
  bootstrap: [AppComponent]
})
export class AppModule { }
