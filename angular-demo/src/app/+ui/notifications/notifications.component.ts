import { Component, ViewEncapsulation } from '@angular/core';
import { AppService } from '../../app.service';
import { ToastrService } from 'ngx-toastr';

@Component({
  selector: 'ui-notifications', // tslint:disable-line
  templateUrl: './notifications.component.html',
  styleUrls: ['../../../vendor/libs/ngx-toastr/ngx-toastr.scss'],
  encapsulation: ViewEncapsulation.None
})
export class NotificationsComponent {
  //
  // Alerts
  //

  public alerts: Array<IAlert> = [];
  public darkAlerts: Array<IAlert> = [];
  public bs4Toasts: any = [];
  public translucentBs4Toasts: any = [];

  //
  // ngx-toastr
  //

  title = '';
  message = '';
  type = 'success';
  tapToDismiss = true;
  closeButton = false;
  progressBar = false;
  preventDuplicates = false;
  newestOnTop = false;
  progressAnimation = 'decreasing';
  positionClass = 'toast-top-right';

  curMsgIndex = -1;

  constructor(private appService: AppService, public toastrService: ToastrService) {
    this.appService.pageTitle = 'Notifications - UI elements';

    //
    // Alerts
    //

    this.alerts.push({
      id: 1,
      type: 'primary',
      message: 'This is a primary alert — check it out!'
    }, {
      id: 2,
      type: 'secondary',
      message: 'This is a secondary alert — check it out!'
    }, {
      id: 3,
      type: 'success',
      message: 'This is a success alert — check it out!'
    }, {
      id: 4,
      type: 'danger',
      message: 'This is a danger alert — check it out!'
    }, {
      id: 5,
      type: 'warning',
      message: 'This is a warning alert — check it out!'
    }, {
      id: 6,
      type: 'info',
      message: 'This is an info alert — check it out!'
    }, {
      id: 7,
      type: 'dark',
      message: 'This is a dark alert — check it out!'
    });

    this.darkAlerts.push({
      id: 1,
      type: 'dark-primary',
      message: 'This is a primary alert — check it out!'
    }, {
      id: 2,
      type: 'dark-secondary',
      message: 'This is a secondary alert — check it out!'
    }, {
      id: 3,
      type: 'dark-success',
      message: 'This is a success alert — check it out!'
    }, {
      id: 4,
      type: 'dark-danger',
      message: 'This is a danger alert — check it out!'
    }, {
      id: 5,
      type: 'dark-warning',
      message: 'This is a warning alert — check it out!'
    }, {
      id: 6,
      type: 'dark-info',
      message: 'This is an info alert — check it out!'
    }, {
      id: 7,
      type: 'dark-dark',
      message: 'This is a dark alert — check it out!'
    });

    //
    // Toasts
    //

    this.bs4Toasts.push({
      variant: null,
      avatar: 'assets/img/avatars/1.png',
      title: 'Default',
      time: '11 mins ago',
      message: 'Hello, world! This is a toast message.'
    }, {
      variant: 'bg-primary',
      avatar: 'assets/img/avatars/1.png',
      title: 'Primary',
      time: '11 mins ago',
      message: 'Hello, world! This is a toast message.'
    }, {
      variant: 'bg-secondary',
      avatar: 'assets/img/avatars/1.png',
      title: 'Secondary',
      time: '11 mins ago',
      message: 'Hello, world! This is a toast message.'
    }, {
      variant: 'bg-success',
      avatar: 'assets/img/avatars/1.png',
      title: 'Success',
      time: '11 mins ago',
      message: 'Hello, world! This is a toast message.'
    }, {
      variant: 'bg-warning',
      avatar: 'assets/img/avatars/1.png',
      title: 'Warning',
      time: '11 mins ago',
      message: 'Hello, world! This is a toast message.'
    }, {
      variant: 'bg-info',
      avatar: 'assets/img/avatars/1.png',
      title: 'Info',
      time: '11 mins ago',
      message: 'Hello, world! This is a toast message.'
    }, {
      variant: 'bg-danger',
      avatar: 'assets/img/avatars/1.png',
      title: 'Danger',
      time: '11 mins ago',
      message: 'Hello, world! This is a toast message.'
    }, {
      variant: 'bg-dark',
      avatar: 'assets/img/avatars/1.png',
      title: 'Dark',
      time: '11 mins ago',
      message: 'Hello, world! This is a toast message.'
    });

    this.translucentBs4Toasts.push({
      variant: null,
      avatar: 'assets/img/avatars/1.png',
      title: 'Default',
      time: '11 mins ago',
      message: 'Hello, world! This is a toast message.'
    }, {
      variant: 'bg-primary',
      avatar: 'assets/img/avatars/1.png',
      title: 'Primary',
      time: '11 mins ago',
      message: 'Hello, world! This is a toast message.'
    }, {
      variant: 'bg-secondary',
      avatar: 'assets/img/avatars/1.png',
      title: 'Secondary',
      time: '11 mins ago',
      message: 'Hello, world! This is a toast message.'
    }, {
      variant: 'bg-success',
      avatar: 'assets/img/avatars/1.png',
      title: 'Success',
      time: '11 mins ago',
      message: 'Hello, world! This is a toast message.'
    }, {
      variant: 'bg-warning',
      avatar: 'assets/img/avatars/1.png',
      title: 'Warning',
      time: '11 mins ago',
      message: 'Hello, world! This is a toast message.'
    }, {
      variant: 'bg-info',
      avatar: 'assets/img/avatars/1.png',
      title: 'Info',
      time: '11 mins ago',
      message: 'Hello, world! This is a toast message.'
    }, {
      variant: 'bg-danger',
      avatar: 'assets/img/avatars/1.png',
      title: 'Danger',
      time: '11 mins ago',
      message: 'Hello, world! This is a toast message.'
    }, {
      variant: 'bg-dark',
      avatar: 'assets/img/avatars/1.png',
      title: 'Dark',
      time: '11 mins ago',
      message: 'Hello, world! This is a toast message.'
    });

  }

  //
  // Alerts
  //

  public closeAlert(alert: IAlert) {
    const index: number = this.alerts.indexOf(alert);
    this.alerts.splice(index, 1);
  }

  public closeDarkAlert(darkAlert: IAlert) {
    const index: number = this.darkAlerts.indexOf(darkAlert);
    this.darkAlerts.splice(index, 1);
  }

  //
  // Toasts
  //

  public closeBs4Toast(toast: any) {
    const index: number = this.bs4Toasts.indexOf(toast);
    this.bs4Toasts.splice(index, 1);
  }

  public closeTranslucentBs4Toast(toast: any) {
    const index: number = this.translucentBs4Toasts.indexOf(toast);
    this.translucentBs4Toasts.splice(index, 1);
  }

  //
  // ngx-toastr
  //

  getMessage() {
    const msgs = [
      'My name is Inigo Montoya. You killed my father. Prepare to die!',
      'Are you the six fingered man?',
      'Inconceivable!',
      'I do not think that means what you think it means.',
      'Have fun storming the castle!',
    ];

    this.curMsgIndex++;

    if (this.curMsgIndex === msgs.length) { this.curMsgIndex = 0; }

    return msgs[this.curMsgIndex];
  }

  showToast() {
    const options = {
      tapToDismiss: this.tapToDismiss,
      closeButton: this.closeButton,
      progressBar: this.progressBar,
      progressAnimation: this.progressAnimation,
      positionClass: this.positionClass,
      rtl: this.appService.isRTL
    };

    // `newestOnTop` and `preventDuplicates` options must be set on global config
    this.toastrService.toastrConfig.newestOnTop = this.newestOnTop;
    this.toastrService.toastrConfig.preventDuplicates = this.preventDuplicates;

    this.toastrService[this.type](this.message || this.getMessage(), this.title, options);
  }

  clearToasts() {
    this.toastrService.clear();
  }
}

export interface IAlert {
  id: number;
  type: string;
  message: string;
}
