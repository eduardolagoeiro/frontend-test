import { Component } from '@angular/core';

@Component({
  selector: 'cui-toasts', // tslint:disable-line
  templateUrl: './cui-toasts.component.html',
})
export class CuiToastsComponent {
  public bs4Toasts: any = [];
  public translucentBs4Toasts: any = [];

  constructor() {
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

  public closeBs4Toast(toast: any) {
    const index: number = this.bs4Toasts.indexOf(toast);
    this.bs4Toasts.splice(index, 1);
  }

  public closeTranslucentBs4Toast(toast: any) {
    const index: number = this.translucentBs4Toasts.indexOf(toast);
    this.translucentBs4Toasts.splice(index, 1);
  }
}
