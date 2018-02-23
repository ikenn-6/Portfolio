import { BrowserModule } from '@angular/platform-browser';
import { NgModule } from '@angular/core';
import { FormsModule }from '@angular/forms';
import { HttpModule }from '@angular/http';
import { RouterModule } from '@angular/router';    
import { HttpClientModule } from '@angular/common/http';

import { AppComponent } from './app.component';
import { AcceuilComponent } from './acceuil/acceuil.component';


import { CvComponent } from './cv/cv.component';
import { ProjetsComponent } from './projets/projets.component';
import { ApiRestComponent } from './api-rest/api-rest.component';


@NgModule({
  declarations: [
    
    AcceuilComponent,
    AppComponent,
    CvComponent,
    ProjetsComponent,
    ApiRestComponent
  ],
  imports: [
    BrowserModule,
    FormsModule,
    HttpModule,
    HttpClientModule,
    RouterModule.forRoot([
    
    
     {
            path: "acceuil",
            component: AcceuilComponent
        },
        {
            path: "cv",
            component: CvComponent
        },
         {
            path: "projets",
            component: ProjetsComponent
        },
        {
            path: "ApiRest",
            component: ApiRestComponent
        },
         {
            path: "acceuil",
            component: AcceuilComponent
        }
      ]   
    )
  ],
  providers: [],
  bootstrap: [AppComponent]
})
export class AppModule { }
