import { Component, OnInit } from '@angular/core';

@Component({
  selector: 'app-card',
  templateUrl: './card.component.html',
  styleUrls: ['./card.component.css']
})
export class CardComponent implements OnInit {
  name_product:string = "Asus ASROCK";
  image_src:string = "../../assets/images/TRX40 Creator.png";
  description:string = "This a fucking description";
  category:string = "Motherboard";
  quantity:number = 10;
  price:number =  12.5;
  constructor() { }

  ngOnInit(): void {
  }

}
