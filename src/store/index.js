import { createApp } from 'vue';
import { createStore } from 'vuex';

import {
  postData,
  postPhoto,
  getData,
  inLocalStorage,
  outLocalStorage,
  changePhoto,
  getDetailData,
  deleteDetailData,
  searchData,
} from '../pureFunctions';

const URL = 'http://u104386.test-handyhost.ru/api';

export const store = createStore({
  state() {
    return {
      token: inLocalStorage('username') || '',
      photos: [],
    };
  },
  getters: {
    username(state) {
      return state.username;
    },
    photos(state) {
      return state.photos;
    },
  },
  mutations: {
    saveUsername(state, payload) {
      state.username = payload.usernameText;
      state.result.username = state.username;
      return true;
    },
    saveToken(state, payload) {
      state.token = payload.token;
      inLocalStorage('username', payload.token);
    },
    deleteToken(state) {
      state.token = '';
      outLocalStorage('username');
    },
    savePhotos(state, payload) {
      state.photos.push(payload);
    },
    savePhoto(state, payload) {
      state.photo = payload;
    },
  },
  actions: {
    async signup(store, payload) {
      console.log('Sign Up', payload);
      postData(
        `${URL}/signup`,
        { 'Content-type': 'application/json' },
        { payload }
      ).then((data) => {
        console.log(data);
      });
    },
    async login(store, payload) {
      console.log('Login', payload);
      postData(
        `${URL}/login`,
        { 'Content-type': 'application/json' },
        { payload }
      ).then((data) => {
        console.log(data.token);
        store.commit('saveToken', data);
      });
    },
    async logout(store) {
      console.log(store.state.token);
      postData(`${URL}/logout`, {
        Authorization: 'Bearer ' + store.state.token,
      }).then((data) => {
        console.log(data);
        store.commit('deleteToken');
      });
    },
    async addPhoto(store, payload) {
      console.log(payload);
      postPhoto(`${URL}/photo`, store.state.token, {
        payload,
      }).then((data) => {
        console.log(data);
      });
    },
    async changePhoto(store, payload) {
      console.log(payload);
      changePhoto(`${URL}/photo/${payload.id}`, store.state.token, {
        payload,
      }).then((data) => {
        console.log(data);
      });
    },
    async getPhoto(store) {
      let photos = [];
      await getData(`${URL}/photo`, store.state.token).then((data) => {
        console.log(data);
        photos.push(data);
      });
      return photos;
    },
    async getDetailPhoto(store, { id }) {
      console.log(id);
      let detailPhoto = null;
      await getDetailData(`${URL}/photo/${id}`, store.state.token, {
        id,
      }).then((data) => {
        detailPhoto = data;
      });
      return detailPhoto;
    },
    async deleteDetailPhoto(store, { id }) {
      console.log(id);
      await deleteDetailData(`${URL}/photo/${id}`, store.state.token, {
        id,
      }).then((data) => {
        console.log(data);
      });
    },
    async searchUser(store, { text }) {
      console.log(text);
      const newUrl = new URL(`${URL}/user`);
      await searchData(newUrl, store.state.token, {
        text,
      });
    },
    async shareDetailPhoto(store, { ids }) {
      // await shareDetailData(``);
      console.log(ids);
    },
  },
});
