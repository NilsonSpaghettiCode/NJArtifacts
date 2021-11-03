import { Injectable } from '@angular/core';
import { Product } from 'src/app/interfaces/product';
import { Observable, observable, of } from 'rxjs';
import { HttpClient, HttpHeaders } from '@angular/common/http';
@Injectable({
  providedIn: 'root'
})
export class ProductsService {

  url_products="http://localhost:3000/products?categoryId=";
  url_product= "http://localhost:3000/products/";
  constructor(private httpclient:HttpClient) { }

  getProducts(idCategory:number): Observable<Product[]>
  {
    console.log("URL",this.url_products);
    let list_products = this.httpclient.get<Product[]>(this.url_products+idCategory);
    return list_products;
  }

  getProduct(idProduct:number): Observable<Product>
  {
    let list_products = this.httpclient.get<Product>(this.url_product+idProduct);
    console.log(list_products);
    return list_products;
  }


}
