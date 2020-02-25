import { BrowserModule } from '@angular/platform-browser';
import { NgModule } from '@angular/core';
import { FormsModule } from '@angular/forms'

import { AppComponent } from './app.component';
import { ServerComponent } from './server/server.component';
import { SubServerComponent } from './sub-server/sub-server.component';
import { RedComponent } from './colors/red/red.component';
import { GreenComponent } from './colors/green/green.component';
import { YellowComponent } from './colors/yellow/yellow.component';
import { RegistarComponent } from './registar/registar.component';
import { FlagsComponent } from './flags/flags.component';

@NgModule({
  declarations: [
    AppComponent,
    ServerComponent,
    SubServerComponent,
    RedComponent,
    GreenComponent,
    YellowComponent,
    RegistarComponent,
    FlagsComponent
  ],
  imports: [
    BrowserModule,
    FormsModule
  ],
  providers: [],
  bootstrap: [AppComponent]
})
export class AppModule { }
