import { Component, OnInit } from '@angular/core';

@Component({
  selector: 'app-registar',
  templateUrl: './registar.component.html',
  styleUrls: ['./registar.component.css']
})
export class RegistarComponent implements OnInit {

  fName:string = null;
  btnState:boolean = false;

  constructor() { }

  ngOnInit() {
  }

  checkName() {
    if(this.fName === null) {
      this.btnState = true;
      return this.btnState;
    }
  }

  clearInput() {
    this.fName = '';
  }

}
