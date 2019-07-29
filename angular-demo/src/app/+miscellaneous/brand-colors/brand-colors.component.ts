import { Component } from '@angular/core';
import { AppService } from '../../app.service';

@Component({
  selector: 'miscellaneous-brand-colors', // tslint:disable-line
  templateUrl: './brand-colors.component.html'
})
export class BrandColorsComponent {
  constructor(private appService: AppService) {
    this.appService.pageTitle = 'Brand colors - Miscellaneous';
  }
}
