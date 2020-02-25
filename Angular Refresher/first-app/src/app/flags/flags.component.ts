import { Component, OnInit } from '@angular/core';

@Component({
  selector: 'app-flags',
  templateUrl: './flags.component.html',
  styleUrls: ['./flags.component.css']
})
export class FlagsComponent implements OnInit {

  flag:boolean = true;
  listONames = ['Justin', 'Sunday', 'Thor']
  currentName:string = '';

  toggleFlag() {
    this.flag = !this.flag;
    return this.flag;
  }

  getColor() {
    if(this.flag === true){
      return 'green';
    } else {
      return 'red';
    }
  }

  add() {
    this.listONames.push(this.currentName);
  }



  constructor() { }

  ngOnInit() {
  }

}
