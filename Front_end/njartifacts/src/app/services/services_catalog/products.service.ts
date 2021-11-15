import { Injectable } from '@angular/core';
import { Product } from 'src/app/interfaces/product';
import { Observable, } from 'rxjs';
import { HttpClient, HttpHeaders } from '@angular/common/http';
import { ConfigService } from '../config.service';
@Injectable({
  providedIn: 'root'
})
export class ProductsService {

  recurso = 'productos';
  recurso_orden = 'ordenes';

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

  registrarOrden(nombre:string, correo_electronico:string, productos:number[]): void
  {
    let responseX:any;
    let dataForm = {
      "nombre":nombre,
      "correo_electronico":correo_electronico,
      "productos":productos
    }
    this.httpclient.post((this.configService.URL_API+this.recurso_orden), dataForm).toPromise().then(response =>
      {
        responseX = response
        console.log(response)
      });
    return responseX;
  }


}
