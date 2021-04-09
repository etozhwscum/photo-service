import { createApp } from 'vue';
import { createStore } from 'vuex';

import { postData } from '../pureFunctions';

const URL = 'http://u104386.test-handyhost.ru/api';

export const store = createStore({
  data() {
    return {};
  },
  state() {
    return {
      token: ''
    };
  },
  getters: {
    username(state) {
      return state.username;
    }
  },
  mutations: {
    saveUsername(state, payload) {
      state.username = payload.usernameText;
      state.result.username = state.username;
      return true;
    }
  },
  actions: {
    async signup(store, payload) {
      console.log('Sign Up', payload);
      postData(`${URL}/signup`, payload).then(data => {
        console.log(data);
      });
    },
    async login(store, payload) {
      console.log('Login', payload);
      postData(`${URL}/login`, payload).then(data => {
        console.log(data.token);
        store.state.token = data.token;
      });
    },
    async logout(store) {
      console.log(store.state.token);
      postData(`${URL}/logout`, {
        token: store.state.token
      }).then(data => {
        console.log(data);
      });
    },
    async addPhoto(store, payload) {
      console.log(payload);
      postData(`${URL}/photo`, {
        ...payload,
        token: store.state.token,
        contentType: 'FormData'
      }).then(data => {
        console.log(data);
      });
    },
  }
});
