import axios from 'axios'

const modelUrl = 'groups';

export const getAll = () => axios.get(modelUrl);
export const addGroup = (id) => axios.post(modelUrl, {id: id});