import { Component, OnInit } from '@angular/core';

@Component({
  selector: 'app-server',
  templateUrl: './server.component.html',
  styleUrls: ['./server.component.css']
})
export class ServerComponent implements OnInit {

  ServerName:string = 'MERCURY';
  ServerStatus:string = 'OFFLINE';
  ServerStatFlag:boolean = false;
  ButtonState = true;

  constructor() {
    setTimeout(() => {
      this.ButtonState = false;
    }, 2500)


  }

  ngOnInit() {
  }

  toggleServerStatus () {
    this.ServerStatFlag = !this.ServerStatFlag;

    if(this.ServerStatFlag === true) {
      this.ServerStatus = 'ONLINE';
    } else {
      this.ServerStatus = 'OFFLINE';      
    }

    return this.ServerStatus;
  }



}
