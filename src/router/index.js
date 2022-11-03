import { createRouter, createWebHistory } from "vue-router";
import routes from './routes.js';
const admin ={
  layout: {
      fullPage: () => import( "../views/layouts/admin.vue"),
  },
  auth: {
    login: () => import('../views/auth/login.vue'),
  },
  dashboard: {
      index: () => import('../views/dashboard/index.vue'),
      planner: () => import('../views/planner/index.vue'),
  },
  bookings: {
    index: () => import('../views/bookings/index.vue'),
  }
}
const router = createRouter({
  history: createWebHistory(import.meta.env.BASE_URL),
   routes : [
    {
      path: '/',
      components: {
        default: admin.layout.fullPage,
      },
      children: [
        {
          path: 'admin/auth/login',
          name:'admin.auth.login',
          component: admin.auth.login,
        },
        {
          path: 'admin/dashboard',
          name:'admin.dashboard',
          component: admin.dashboard.index,
        },
        {
            path: 'admin/planner/index',
            name:'admin.dashboard.planner',
            component: admin.dashboard.planner,
        },
        {
          path: 'admin/bookings/index',
          name:'admin.bookings.index',
          component: admin.bookings.index,
        }
      ],
    },
  ]
});

export default router;
