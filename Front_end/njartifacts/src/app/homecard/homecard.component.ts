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

  products_new: ProductFilter = {};

  products_featured: ProductFilter = {};

  constructor(private serviceProducts: ProductsService) { }

  ngOnInit(): void {
    this.loadProductsFeatured();
    this.loadProductsNew();
    //console.log(this.products_new)
    //console.table(this.products_new.productId);
    console.log("XXXXXXXXX");
    this.serviceProducts.getProductX().subscribe(res => {
      console.log("Respuesta", res);
    });

  }

  loadProductsNew(): void {
    this.serviceProducts.getProductNew().subscribe(products => this.products_new = products);
  }

  loadProductsFeatured(): void {
    this.serviceProducts.getProductFeatured().subscribe(products => this.products_featured = products);

  }
}
