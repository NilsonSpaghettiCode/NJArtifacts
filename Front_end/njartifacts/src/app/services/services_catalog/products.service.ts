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


  constructor(private httpclient: HttpClient, private configService: ConfigService) { }

  getProducts(): Observable<Product[]> {
    console.log("URL", (this.configService.URL_API + this.recurso));
    let list_products;
    list_products = this.httpclient.get<Product[]>((this.configService.URL_API + this.recurso));
    return list_products;
  }
  getProductsQuary(id_categoria:number): Observable<Product[]> {

    console.log("URL", (this.configService.URL_API + this.recurso));
    let params = {
      "id_categoria":id_categoria
    }


    let list_products;
    list_products = this.httpclient.get<Product[]>((this.configService.URL_API + this.recurso), {params});
    return list_products;
  }

  getProduct(idProduct: number): Observable<Product> {
    let list_products = this.httpclient.get<Product>(this.configService.URL_API + this.recurso + '/' + idProduct);
    console.log(list_products);
    return list_products;
  }


}
