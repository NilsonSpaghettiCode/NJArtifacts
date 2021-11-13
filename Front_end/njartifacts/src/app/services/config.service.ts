import { Injectable } from '@angular/core';
import { ConfigAPI } from '../interfaces/config-rest';
import { HttpClient } from '@angular/common/http';
@Injectable({
  providedIn: 'root'
})
export class ConfigService extends ConfigAPI {
  

  constructor(private httpRequest: HttpClient) { 
    super();
  }
  
  loadConfigREST()
  {

    const file_config = `../../assets/config/service_config_d.json`;
    
    return this.httpRequest.get<ConfigAPI>(file_config)
    .toPromise()
    .then(response => {
      this.NAME_CONFIG = response.NAME_CONFIG;
      this.URL_API = response.URL_API;

    }).catch(
      ()=>
      {
        console.error("Not is possible load config APIREST from");
      } 
    );

  }
}
