import axios from 'axios'

const modelUrl = 'users';

export const get = (id) => axios.get(`${modelUrl}/${id}`);