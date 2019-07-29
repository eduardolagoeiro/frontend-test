import { Component } from '@angular/core';
import { AppService } from '../../app.service';

@Component({
  selector: 'ui-spinners', // tslint:disable-line
  templateUrl: './spinners.component.html'
})
export class SpinnersComponent {
  constructor(private appService: AppService) {
    this.appService.pageTitle = 'Spinners - UI elements';
  }
}
