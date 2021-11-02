import { Component, OnInit, Input } from '@angular/core';

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
  constructor() {
    
   }

  ngOnInit(): void {
  }

}
