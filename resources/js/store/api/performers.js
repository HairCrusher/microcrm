import axios from 'axios'

const modelUrl = 'performers';

export const getAll = () => axios.get(modelUrl);
export const store = (data) => axios.post(modelUrl, data);
export const update = (data) => axios.put(`${modelUrl}/${data.id}`, data);
export const provideAccess = (data) => axios.post(`${modelUrl}/${data.perfId}/provide_access`, data.data);
export const getUsers = (id) => axios.get(`${modelUrl}/${id}/users`);