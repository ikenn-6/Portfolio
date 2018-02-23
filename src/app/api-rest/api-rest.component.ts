import { Component, OnInit } from '@angular/core';
import { Http, Response, Headers } from '@angular/http';
import 'rxjs/add/operator/map'


@Component({
  selector: 'app-api-rest',
  templateUrl: './api-rest.component.html',
  styleUrls: ['./api-rest.component.css']
})
export class ApiRestComponent implements OnInit {


 data: any = null;

  constructor(private _http: Http) {
    this.getMyBlog();
  }
ngOnInit() {
      
  }
  private getMyBlog() {
    return this._http.get('https://public-api.wordpress.com/rest/v1.1/sites/oliverveits.wordpress.com/posts/3078')
                .map((res: Response) => res.json())
                 .subscribe(data => {
                        this.data = data;
                        console.log(this.data);
                });
  }}

