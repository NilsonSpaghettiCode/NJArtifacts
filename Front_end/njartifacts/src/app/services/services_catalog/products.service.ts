import { Injectable } from '@angular/core';
import { Product } from 'src/app/interfaces/product';
import { Observable, observable, of } from 'rxjs';
import { HttpClient, HttpHeaders } from '@angular/common/http';
@Injectable({
  providedIn: 'root'
})
export class ProductsService {

  url="http://localhost:3000/products?categoryId=";
  constructor(private httpclient:HttpClient) { }

  getProducts(idCategory:number): Observable<Product[]>
  {

    console.log("URL",this.url);
    let list_products = this.httpclient.get<Product[]>(this.url+idCategory);
    return list_products;
  }


}
