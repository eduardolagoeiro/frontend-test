/* tslint:disable:member-ordering */
import { Component, ViewEncapsulation, OnDestroy } from '@angular/core';
import { AppService } from '../../app.service';
import { DragulaService } from 'ng2-dragula';

@Component({
  selector: 'ui-drag-and-drop', // tslint:disable-line
  templateUrl: './drag-and-drop.component.html',
  styleUrls: [
    '../../../vendor/libs/ng2-dragula/ng2-dragula.scss',
    './drag-and-drop.scss'
  ],
  encapsulation: ViewEncapsulation.None
})
export class DragAndDropComponent implements OnDestroy {
  constructor(private appService: AppService, private dragulaService: DragulaService) {
    this.appService.pageTitle = 'Drag&Drop - UI elements';

    //
    // ng2-dragula
    //

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
    this.dragulaService.destroy('first-bag');
    this.dragulaService.destroy('second-bag');
    this.dragulaService.destroy('third-bag');
  }

  //
  // angular-sortablejs
  //

  items = ['Item 1', 'Item 2', 'Item 3', 'Item 4', 'Item 5'];
  images = [
    'assets/img/avatars/1.png',
    'assets/img/avatars/2.png',
    'assets/img/avatars/3.png',
    'assets/img/avatars/4.png'
  ];
}
