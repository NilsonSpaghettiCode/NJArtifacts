import { Injectable } from '@angular/core';
import { Product } from 'src/app/interfaces/product';

@Injectable({
  providedIn: 'root'
})
export class ProductsService {

  constructor() { }

  getProducts(idCategory:number): Product[]
  {
    let list_products: Product[] =[];
    return list_products;
  }
}
