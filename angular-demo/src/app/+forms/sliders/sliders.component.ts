import { Component } from '@angular/core';
import { AppService } from '../../app.service';

@Component({
  selector: 'forms-sliders', // tslint:disable-line
  templateUrl: './sliders.component.html',
  styleUrls: [
    '../../../vendor/libs/ng2-nouislider/ng2-nouislider.scss',
    './sliders.scss'
  ]
})
export class SlidersComponent {

  // Bootstrap 4 slider

  bs4SliderValue = 35;

  // Single value slider

  singleValue1: number[] = [80];
  singleValue2: number[] = [80];
  singleConfig = {
    direction: 'ltr'
  };
  verticalSingleConfig = {
    orientation: 'vertical',
    direction: 'rtl'
  };

  // Range slider

  rangeValue1 = [ 2050, 3000 ];
  rangeValue2 = [ 2050, 3000 ];
  rangeValue3 = [ 2050, 3000 ];
  rangeValue4 = [ 2050, 3000 ];
  rangeValue5 = [ 2050, 3000 ];
  rangeValue6 = [ 2050, 3000 ];
  rangeValue7 = [ 2050, 3000 ];
  rangeValue8 = [ 2050, 3000 ];
  rangeConfig = {
    connect: true,
    step: 150,
    range: {
      'min': 1000,
      'max': 3750
    },
    direction: 'ltr'
  };

  // Full example

  fullValue1 = [ 1450, 2050, 2350, 3000 ];
  fullValue2 = [ 1450, 2050, 2350, 3000 ];
  fullConfig = {
    connect: true,
    behaviour: 'tap-drag',
    step: 150,
    tooltips: true,
    range: {
      'min': 1000,
      'max': 3750
    },
    pips: {
      mode: 'steps',
      stepped: true,
      density: 4
    },
    direction: 'ltr'
  };
  verticalFullConfig = {
    connect: true,
    behaviour: 'tap-drag',
    step: 150,
    tooltips: true,
    orientation: 'vertical',
    range: {
      'min': 1000,
      'max': 3750
    },
    pips: {
      mode: 'steps',
      stepped: true,
      density: 4
    },
    direction: 'rtl'
  };

  constructor(private appService: AppService) {
    this.appService.pageTitle = 'Sliders - Forms';

    if (appService.isRTL) {
      this.singleConfig.direction = 'rtl';
      this.rangeConfig.direction = 'rtl';
      this.fullConfig.direction = 'rtl';
    }
  }
}
