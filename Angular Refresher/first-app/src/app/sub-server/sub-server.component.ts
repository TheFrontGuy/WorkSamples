import { Component, OnInit } from '@angular/core';

@Component({
  selector: 'app-sub-server',
  templateUrl: './sub-server.component.html',
  styleUrls: ['./sub-server.component.css']
})
export class SubServerComponent implements OnInit {

  SubServerName:string = 'Alpha';
  SubServerPID:number = 44;
  SubServerStatus:string = 'OFFLINE';
  SubServerStatFlag:boolean = false;
  ButtonState:boolean = true;

  constructor() {
    setTimeout(() => {
      this.ButtonState = false;
    }, 2500)


  }

  ngOnInit() {
  }

  toggleServerStatus () {
    this.SubServerStatFlag = !this.SubServerStatFlag;

    if(this.SubServerStatFlag === true) {
      this.SubServerStatus = 'ONLINE';
    } else {
      this.SubServerStatus = 'OFFLINE';
    }

    return this.SubServerStatus;
  }

}
