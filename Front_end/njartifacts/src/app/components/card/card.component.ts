import { Component, OnInit, Input } from '@angular/core';
import { Product } from 'src/app/interfaces/product';
import { ShoppingCartService } from 'src/app/services/shopping-cart/shopping-cart.service';

@Component({
  selector: 'app-card',
  templateUrl: './card.component.html',
  styleUrls: ['./card.component.css']
})
export class CardComponent implements OnInit {
  @Input() name_product:string = "Asus ASROCK";
  @Input() image_src:string = "../../assets/images/placeholder-large.jpg";
  @Input() description:string = "This a fucking description";
  category:string = "Motherboard";
  @Input() quantity:number = 10;
  @Input() value_product:number =  12.5;
  @Input() id_product:number = 0;
  @Input() product?:Product = <Product>{id_producto:1,nombre:"",descripcion:"",cantidad:0,create_at:"",updated_at:"",valor:0};
  //productX:Product = product;
  constructor(private cartService:ShoppingCartService) {
    
   }

  ngOnInit(): void {
  }

  addProduct():void
  {
    console.table(this.product);
    this.cartService.addProduct(<Product>this.product);
    console.table(this.cartService.getCartProducts());
  }

}
