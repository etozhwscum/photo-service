import { createWebHistory, createRouter } from 'vue-router';

import Signup from '../views/Signup';
import Login from '../views/Login';
import Home from '../views/Home';
import AddPhoto from '../views/AddPhoto';
import Photo from '../views/Photo';
import User from '../views/User';

const routes = [
  {
    path: '/',
    name: 'Home',
    component: Home
  },
  {
    path: '/signup',
    name: 'Signup',
    component: Signup
  },
  {
    path: '/login',
    name: 'Login',
    component: Login
  },
  {
    path: '/add_photo',
    name: 'AddPhoto',
    component: AddPhoto
  },
  {
    path: '/photo',
    name: 'Photo',
    component: Photo
  },
  {
    path: '/user',
    name: 'User',
    component: User
  }
];

const router = createRouter({
  history: createWebHistory(),
  routes
});

export default router;
