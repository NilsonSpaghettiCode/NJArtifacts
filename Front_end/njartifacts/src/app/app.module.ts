import { APP_INITIALIZER, NgModule } from '@angular/core';
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
import { CarouselComponent } from './components/carousel/carousel.component';
import { ShoppingCartComponent } from './components/shopping-cart/shopping-cart.component';
import { HomecardComponent } from './components/homecard/homecard.component';

import {HttpClient, HttpClientModule} from '@angular/common/http';
import { ImagePreviewComponent } from './components/image-preview/image-preview.component';
import { ReactiveFormsModule } from '@angular/forms';
import { ConfigService } from './services/config.service';
import { ConfigAPI } from './interfaces/config-rest';

export function inicializador(configAPI:ConfigService)
{
  return ()=>
  {
    return configAPI.loadConfigREST();
  };

}

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
    ShoppingCartComponent,
    ImagePreviewComponent,
    HomecardComponent,
  ],
  imports: [
    BrowserModule,
    AppRoutingModule,
    HttpClientModule,
    ReactiveFormsModule
  ],
  providers: [
    {
      provide: ConfigAPI,
      deps:[HttpClient],
      useExisting: ConfigService
    },
    {
      provide: APP_INITIALIZER,
      multi: true,
      deps:[ConfigService],
      useFactory: inicializador,
    }
  ],
  bootstrap: [AppComponent]
})
export class AppModule { }
