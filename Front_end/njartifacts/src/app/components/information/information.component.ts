import { Component, OnInit } from '@angular/core';
import { FormControl } from '@angular/forms';
import { InformationService } from 'src/app/services/services_information/information.service';
@Component({
  selector: 'app-information',
  templateUrl: './information.component.html',
  styleUrls: ['./information.component.css']
})
export class InformationComponent implements OnInit {

  dirreccionUrl = "";
  form_nombre = new FormControl('');
  form_apellido = new FormControl('');
  form_correo = new FormControl('');
  form_mensaje = new FormControl('');
  response:string = "";
  constructor(private serviceInformation:InformationService) { }

  ngOnInit(): void {

  }

  sendContacto():void
  {
    //this.serviceInformation.
    let nombre = this.form_nombre.value;
    let apellido = this.form_apellido.value;
    let correo = this.form_correo.value;
    let mensaje = this.form_mensaje.value;
    this.response = this.serviceInformation.sentInformationContact(nombre,apellido,mensaje,correo);
  }

}
