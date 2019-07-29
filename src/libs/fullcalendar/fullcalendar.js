import { Calendar } from '../../node_modules/@fullcalendar/core/main.js';
import bootstrapPlugin from '../../node_modules/@fullcalendar/bootstrap/main.js';
import dayGridPlugin from '../../node_modules/@fullcalendar/daygrid/main.js';
import interactionPlugin from '../../node_modules/@fullcalendar/interaction/main.js';
import listPlugin from '../../node_modules/@fullcalendar/list/main.js';
import timegridPlugin from '../../node_modules/@fullcalendar/timegrid/main.js';
import timelinePlugin from '../../node_modules/@fullcalendar/timeline/main.js';

const calendarPlugins = {
  bootstrap: bootstrapPlugin,
  dayGrid: dayGridPlugin,
  interaction: interactionPlugin,
  list: listPlugin,
  timeGrid: timegridPlugin,
  timeline: timelinePlugin
}

export { Calendar, calendarPlugins };
