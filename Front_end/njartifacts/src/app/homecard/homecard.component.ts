import { Component, OnInit } from '@angular/core';
import { Product } from '../interfaces/product';
import { ProductFilter } from '../interfaces/product-filter';
import { ProductsService } from '../services/services_catalog/products.service';

@Component({
  selector: 'app-homecard',
  templateUrl: './homecard.component.html',
  styleUrls: ['./homecard.component.css']
})
export class HomecardComponent implements OnInit {

 

  constructor(private serviceProducts: ProductsService) {

   }

  ngOnInit(): void {

  }

  cargarProductos():void
  {


  }

}
