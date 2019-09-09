import axios from 'axios'

const modelUrl = 'events';

export const getAll = () => axios.get(modelUrl);