import { Injectable } from '@angular/core';
import { Product } from 'src/app/interfaces/product';
import { ProductFilter } from 'src/app/interfaces/product-filter';
import { Observable, } from 'rxjs';
import { HttpClient, HttpHeaders } from '@angular/common/http';
import { ConfigService } from '../config.service';
@Injectable({
  providedIn: 'root'
})
export class ProductsService {

  recurso = 'productos';
  url_product = "http://localhost:3000/products/";

  url_product_new = "http://localhost:3000/products-new?_embed=products";
  url_product_featured = "http://localhost:3000/products-featured?_embed=products";

  res: any;

  constructor(private httpclient: HttpClient, private configService: ConfigService) { }

  getProducts(): Observable<Product[]> {
    console.log("URL", (this.configService.URL_API + this.recurso));
    let list_products;
    list_products = this.httpclient.get<Product[]>((this.configService.URL_API + this.recurso));
    return list_products;
  }
  getProductsQuary(id_categoria:number): Observable<Product[]> {
    console.log("URL", (this.configService.URL_API + this.recurso));
    let list_products;
    list_products = this.httpclient.get<Product[]>((this.configService.URL_API + this.recurso));
    return list_products;
  }

  getProduct(idProduct: number): Observable<Product> {
    let list_products = this.httpclient.get<Product>(this.configService.URL_API + this.recurso + '/' + idProduct);
    console.log(list_products);
    return list_products;
  }

  getProductNew(): Observable<ProductFilter> {
    let list_products_new = this.httpclient.get<ProductFilter>(this.url_product_new);
    //console.log("Tabla #1");
    //console.table(list_products_new);
    return list_products_new;
  }


  getProductFeatured(): Observable<ProductFilter> {
    let list_products_featured = this.httpclient.get<ProductFilter>(this.url_product_featured);
    //console.log("Tabla #2");
    //console.table(list_products_featured);
    return list_products_featured;
  }

  getProductX() {
    let response = this.httpclient.get(this.configService.URL_API, { responseType: "json" });
    this.res = response;
    //localStorage.setItem('a',stringify(response));

    return response;
  }


}
