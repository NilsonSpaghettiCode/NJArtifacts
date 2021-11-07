import { HttpClient } from '@angular/common/http';
//import { stringify } from '@angular/compiler/src/util';
import { Injectable } from '@angular/core';

@Injectable({
  providedIn: 'root'
})
export class InformationService {

  constructor(private httpRequest:HttpClient) { }
  url_post_contact = "http://localhost:8000/api/contactos";

  sentInformationContact(nombre:string,apellido:string,mensaje:string, correo:string):any
  {
    let responseX:any;
    let dataForm = {
      "nombre":nombre,
      "apellido":apellido,
      "correo_electronico":correo,
      "mensaje":mensaje
    }
    this.httpRequest.post(this.url_post_contact,dataForm).toPromise().then(response =>
      {
        responseX = response
        console.log(response)
      });

      return responseX;
  }
}
