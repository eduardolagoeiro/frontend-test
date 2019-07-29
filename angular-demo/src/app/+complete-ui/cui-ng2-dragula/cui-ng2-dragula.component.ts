import { Component, ViewEncapsulation, OnDestroy } from '@angular/core';
import { DragulaService } from 'ng2-dragula';

@Component({
  selector: 'cui-ng2-dragula', // tslint:disable-line
  templateUrl: './cui-ng2-dragula.component.html',
  styleUrls: [
    '../../../vendor/libs/ng2-dragula/ng2-dragula.scss',
    './cui-ng2-dragula.scss'
  ],
  encapsulation: ViewEncapsulation.None
})
export class CuiNg2DragulaComponent implements OnDestroy {
  constructor(private dragulaService: DragulaService) {
    dragulaService.createGroup('second-bag', {
      copy: true
    });

    dragulaService.createGroup('third-bag', {
      moves: (el: any, container: any, handle: any) => {
        return handle.classList.contains('handle');
      }
    });
  }

  ngOnDestroy() {
    this. dragulaService.destroy('first-bag');
    this. dragulaService.destroy('second-bag');
    this. dragulaService.destroy('third-bag');
  }
}
