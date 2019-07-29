import Util from'../node_modules/bootstrap/js/src/util.js';
import Alert from'../node_modules/bootstrap/js/src/alert.js';
import Button from'../node_modules/bootstrap/js/src/button.js';
import Carousel from'../node_modules/bootstrap/js/src/carousel.js';
import Collapse from'../node_modules/bootstrap/js/src/collapse.js';
import Dropdown from'../node_modules/bootstrap/js/src/dropdown.js';
import Modal from'../node_modules/bootstrap/js/src/modal.js';
import Scrollspy from'../node_modules/bootstrap/js/src/scrollspy.js';
import Tab from'../node_modules/bootstrap/js/src/tab.js';
import Toast from'../node_modules/bootstrap/js/src/toast.js';
import Tooltip from'../node_modules/bootstrap/js/src/tooltip.js';
import Popover from'../node_modules/bootstrap/js/src/popover.js';

// Tooltip extension
//

const bsTooltipSetContent = Tooltip.prototype.setContent;

// Set tooltip state
Tooltip.prototype.setContent = function() {
  const state = this.element.getAttribute('data-state');

  if (state) {
    $(this.getTipElement()).addClass(`tooltip-${state.replace(/[^a-z0-9_-]/ig, '')}`);
  }

  bsTooltipSetContent.call(this);
};

// Popover extension
//

const bsPopoverSetContent = Popover.prototype.setContent;

// Set popover state
Popover.prototype.setContent = function() {
  const state = this.element.getAttribute('data-state');

  if (state) {
    $(this.getTipElement()).addClass(`popover-${state.replace(/[^a-z0-9_-]/ig, '')}`);
  }

  bsPopoverSetContent.call(this);
};

export {
  Util,
  Alert,
  Button,
  Carousel,
  Collapse,
  Dropdown,
  Modal,
  Scrollspy,
  Tab,
  Toast,
  Tooltip,
  Popover
};
