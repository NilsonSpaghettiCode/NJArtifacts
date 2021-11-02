import { Component, OnInit } from '@angular/core';
import { ActivatedRoute, Router } from '@angular/router';

@Component({
  selector: 'app-catalog',
  templateUrl: './catalog.component.html',
  styleUrls: ['./catalog.component.css']
})
export class CatalogComponent implements OnInit {
  
  categoryId:number = 0;
  
  constructor(private routeInput: ActivatedRoute ,private route: Router) {
    
   }

  ngOnInit(): void {
    const routeParameters = this.routeInput.snapshot.paramMap;
    this.categoryId = Number(routeParameters.get('categoryId'));
    this.route.routeReuseStrategy.shouldReuseRoute = () =>
    {
      return false;
    };
  }

}
